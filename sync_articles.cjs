/**
 * Script to extract ALL article content from psikologibanyuwangi.com via WP REST API
 * and generate a Laravel seeder for synchronization
 */

const https = require('https');
const fs = require('fs');
const path = require('path');

function fetchUrl(url) {
    return new Promise((resolve, reject) => {
        https.get(url, { headers: { 'User-Agent': 'Mozilla/5.0' } }, (res) => {
            let data = '';
            res.on('data', chunk => data += chunk);
            res.on('end', () => resolve(data));
            res.on('error', reject);
        }).on('error', reject);
    });
}

function decodeHtmlEntities(str) {
    return str
        .replace(/&#038;/g, '&')
        .replace(/&amp;/g, '&')
        .replace(/&lt;/g, '<')
        .replace(/&gt;/g, '>')
        .replace(/&quot;/g, '"')
        .replace(/&#039;/g, "'")
        .replace(/&#8217;/g, "\u2019")
        .replace(/&#8220;/g, "\u201C")
        .replace(/&#8221;/g, "\u201D")
        .replace(/&#8211;/g, "\u2013")
        .replace(/&#8230;/g, "\u2026")
        .replace(/&hellip;/g, '\u2026')
        .replace(/&raquo;/g, '\u00BB')
        .replace(/&rsquo;/g, "\u2019")
        .replace(/&lsquo;/g, "\u2018")
        .replace(/&rdquo;/g, "\u201D")
        .replace(/&ldquo;/g, "\u201C")
        .replace(/&ndash;/g, '\u2013')
        .replace(/&mdash;/g, '\u2014');
}

function cleanContentForLaravel(rendered) {
    // The WP REST API returns rendered HTML with escaped forward slashes 
    let content = rendered;
    // Unescape forward slashes
    content = content.replace(/\\\//g, '/');
    // Remove trailing \n
    content = content.replace(/\\n/g, '\n');
    // Clean up whitespace
    content = content.trim();
    return content;
}

async function fetchAllPosts() {
    let allPosts = [];
    let page = 1;
    const perPage = 10;
    
    while (true) {
        const url = `https://psikologibanyuwangi.com/wp-json/wp/v2/posts?per_page=${perPage}&page=${page}&_fields=id,title,slug,content,date,categories,tags,featured_media,excerpt&orderby=date&order=asc`;
        console.log(`Fetching page ${page}...`);
        
        try {
            const data = await fetchUrl(url);
            const posts = JSON.parse(data);
            
            if (!Array.isArray(posts) || posts.length === 0) break;
            
            allPosts.push(...posts);
            console.log(`  Got ${posts.length} posts (total: ${allPosts.length})`);
            
            if (posts.length < perPage) break;
            page++;
        } catch (err) {
            console.error(`Error fetching page ${page}:`, err.message);
            break;
        }
    }
    
    return allPosts;
}

async function fetchCategories() {
    const url = 'https://psikologibanyuwangi.com/wp-json/wp/v2/categories?per_page=100&_fields=id,name,slug';
    const data = await fetchUrl(url);
    return JSON.parse(data);
}

async function fetchMediaUrl(mediaId) {
    if (!mediaId) return null;
    try {
        const url = `https://psikologibanyuwangi.com/wp-json/wp/v2/media/${mediaId}?_fields=source_url,alt_text`;
        const data = await fetchUrl(url);
        const media = JSON.parse(data);
        return { url: media.source_url, alt: media.alt_text || '' };
    } catch {
        return null;
    }
}

async function main() {
    console.log('=== Fetching articles from psikologibanyuwangi.com via WP REST API ===\n');
    
    // Fetch categories
    console.log('Fetching categories...');
    const categories = await fetchCategories();
    const catMap = {};
    categories.forEach(c => { catMap[c.id] = c; });
    console.log(`Found ${categories.length} categories\n`);
    
    // Fetch all posts
    const posts = await fetchAllPosts();
    console.log(`\nTotal posts fetched: ${posts.length}\n`);
    
    // Fetch featured media for each post
    console.log('Fetching featured media...');
    for (const post of posts) {
        if (post.featured_media) {
            post._media = await fetchMediaUrl(post.featured_media);
        }
    }
    
    // Build structured data
    const articles = posts.map((post, idx) => {
        const title = decodeHtmlEntities(post.title.rendered);
        const content = cleanContentForLaravel(post.content.rendered);
        const excerpt = post.excerpt.rendered
            ? cleanContentForLaravel(post.excerpt.rendered).replace(/<[^>]+>/g, '').trim()
            : '';
        const postCats = (post.categories || []).map(cid => catMap[cid]?.name || 'Uncategorized');
        const ogImage = post._media?.url || null;
        const ogImageAlt = post._media?.alt || '';
        
        return {
            index: idx + 1,
            wp_id: post.id,
            title,
            slug: post.slug,
            content,
            excerpt: excerpt.substring(0, 200),
            date: post.date,
            categories: postCats,
            primary_category: postCats[0] || 'Psikologi',
            featured_image: ogImage,
            featured_image_alt: ogImageAlt,
        };
    });
    
    // Print summary
    console.log('\n=== ARTICLE SUMMARY ===\n');
    for (const a of articles) {
        console.log(`${a.index}. "${a.title}"`);
        console.log(`   Slug: ${a.slug}`);
        console.log(`   Category: ${a.categories.join(', ')}`);
        console.log(`   Date: ${a.date}`);
        console.log(`   Content length: ${a.content.length} chars`);
        console.log(`   Image: ${a.featured_image || 'none'}`);
        console.log('');
    }
    
    // Save full data
    const outputPath = path.join(__dirname, 'source_articles.json');
    fs.writeFileSync(outputPath, JSON.stringify(articles, null, 2), 'utf8');
    console.log(`Full article data saved to: ${outputPath}`);
    
    // Save categories list
    const catPath = path.join(__dirname, 'source_categories.json');
    fs.writeFileSync(catPath, JSON.stringify(categories, null, 2), 'utf8');
    console.log(`Categories saved to: ${catPath}`);
}

main().catch(console.error);
