/**
 * Script to extract article content from psikologibanyuwangi.com
 * Parses the WordPress HTML and extracts structured article data
 */

const https = require('https');
const http = require('http');

const ARTICLE_URLS = [
    'https://psikologibanyuwangi.com/ratusan-abk-di-assessment-psikolog-dan-dokter/',
    'https://psikologibanyuwangi.com/dalam-rangka-hari-kesehatan-nasional-ke-58/',
    'https://psikologibanyuwangi.com/yayasan-an-moerty-banyuwangi-siap-menjalani-tahun-2023/',
    'https://psikologibanyuwangi.com/assessment-psikologi-kelas-xii-di-sman-1-glagah-banyuwangi/',
    'https://psikologibanyuwangi.com/bimtek-pendidikan-inklusif-di-aula-smpn-1-giri-dan-aula-sdn-4-penganjuran/',
    'https://psikologibanyuwangi.com/membentuk-karakter-dan-bakat-anak-banyuwangi-melalui-assessment-psikologi-dan-parenting/',
    'https://psikologibanyuwangi.com/panduan-parenting-untuk-anak-berkebutuhan-khusus-di-sekolah-taman-agung-cluring/',
    'https://psikologibanyuwangi.com/membangun-parenting-berkualitas-bersama-wali-murid-smpn-3-banyuwangi-untuk-anak-berkebutuhan-khusus/',
    'https://psikologibanyuwangi.com/assessment-psikologi-di-akademi-penerbang-indonesia-banyuwangi/',
    'https://psikologibanyuwangi.com/psikologi-self-esteem-anak-tips-membangun-kepercayaan-diri-di-lingkungan-sekolah-banyuwangi/',
    'https://psikologibanyuwangi.com/mengenal-new-year-new-mental-issues-tekanan-emosional-di-awal-tahun-dari-tinjauan-psikologis/',
    'https://psikologibanyuwangi.com/cara-efektif-menggunakan-jeda-untuk-meningkatkan-kreativitas-dan-fokus/',
    'https://psikologibanyuwangi.com/tekanan-akademik-dan-stres-akademik-strategi-psikologis-untuk-mahasiswa/',
    'https://psikologibanyuwangi.com/psikologi-resolusi-mengapa-resolusi-tahun-baru-sering-gagal-dan-cara-memperbaikinya/',
    'https://psikologibanyuwangi.com/psikologi-membangun-komunitas-tips-menjadi-individu-berkontribusi-positif/',
    'https://psikologibanyuwangi.com/panduan-lengkap-digital-detox-mengistirahatkan-otak-dari-overload-informasi/',
    'https://psikologibanyuwangi.com/refleksi-akhir-tahun-cara-berdamai-dengan-kegagalan-di-tahun-2025/',
    'https://psikologibanyuwangi.com/anak-kecanduan-gadget-saat-libur-sekolah-ini-cara-membatasinya/',
    'https://psikologibanyuwangi.com/tanda-tanda-anda-butuh-konsultasi-ke-psikolog-jangan-tunggu-parah/',
    'https://psikologibanyuwangi.com/menghadapi-quarter-life-crisis-di-usia-20-an-bingung-arah-hidup/',
    'https://psikologibanyuwangi.com/self-love-vs-egois-memahami-perbedaannya-di-bulan-kasih-sayang/',
    'https://psikologibanyuwangi.com/mengajarkan-konsep-puasa-pada-anak-usia-dini-tanpa-paksaan-dengan-cara-efektif/',
    'https://psikologibanyuwangi.com/cara-menjawab-pertanyaan-kapan-nikah-punya-anak-tanpa-baper-dengan-bijak/',
    'https://psikologibanyuwangi.com/peran-orang-tua-mendampingi-anak-ujian-jangan-menambah-tekanan/',
    'https://psikologibanyuwangi.com/an-moerty-solusi-psikologi-konseling-terpercaya-untuk-mengatasi-hambatan-dan-optimasi-belajar-siswa/',
];

function fetchUrl(url) {
    return new Promise((resolve, reject) => {
        const client = url.startsWith('https') ? https : http;
        client.get(url, { headers: { 'User-Agent': 'Mozilla/5.0' } }, (res) => {
            if (res.statusCode >= 300 && res.statusCode < 400 && res.headers.location) {
                return fetchUrl(res.headers.location).then(resolve).catch(reject);
            }
            let data = '';
            res.on('data', chunk => data += chunk);
            res.on('end', () => resolve(data));
            res.on('error', reject);
        }).on('error', reject);
    });
}

function extractTitle(html) {
    // Extract from og:title or <title> tag
    const ogMatch = html.match(/<meta\s+property="og:title"\s+content="([^"]+)"/i);
    if (ogMatch) {
        let title = ogMatch[1].replace(/\s*-\s*Psikologi Banyuwangi\s*$/, '');
        return decodeHtmlEntities(title);
    }
    const titleMatch = html.match(/<title>([^<]+)<\/title>/i);
    if (titleMatch) {
        let title = titleMatch[1].replace(/\s*-\s*Psikologi Banyuwangi\s*$/, '');
        return decodeHtmlEntities(title);
    }
    return '';
}

function decodeHtmlEntities(str) {
    return str
        .replace(/&amp;/g, '&')
        .replace(/&lt;/g, '<')
        .replace(/&gt;/g, '>')
        .replace(/&quot;/g, '"')
        .replace(/&#039;/g, "'")
        .replace(/&hellip;/g, '…')
        .replace(/&raquo;/g, '»')
        .replace(/&#8211;/g, '–')
        .replace(/&#8217;/g, "'")
        .replace(/&#8220;/g, '"')
        .replace(/&#8221;/g, '"')
        .replace(/&rsquo;/g, "'")
        .replace(/&lsquo;/g, "'")
        .replace(/&rdquo;/g, '"')
        .replace(/&ldquo;/g, '"')
        .replace(/&ndash;/g, '–')
        .replace(/&mdash;/g, '—')
        .replace(/&#8230;/g, '…');
}

function extractEntryContent(html) {
    // Try to find the entry-content div
    const patterns = [
        /<div\s+class="entry-content[^"]*"[^>]*>([\s\S]*?)<\/div>\s*<(?:footer|div\s+class="post-navigation|div\s+class="ast-post-navigation|nav\s+class|div\s+class="comments)/i,
        /<div\s+class="entry-content[^"]*"[^>]*>([\s\S]*?)<\/div>\s*<\/article>/i,
        /<div\s+class="entry-content[^"]*"[^>]*>([\s\S]*?)<section/i,
    ];

    for (const pattern of patterns) {
        const match = html.match(pattern);
        if (match) {
            return cleanContent(match[1]);
        }
    }
    
    // Fallback: try broader match
    const broadMatch = html.match(/<div\s+class="entry-content[^"]*"[^>]*>([\s\S]*)/i);
    if (broadMatch) {
        let content = broadMatch[1];
        // Find the closing div that balances
        let depth = 1;
        let i = 0;
        while (i < content.length && depth > 0) {
            if (content.substring(i).match(/^<div[\s>]/i)) {
                depth++;
            } else if (content.substring(i).match(/^<\/div>/i)) {
                depth--;
                if (depth === 0) {
                    content = content.substring(0, i);
                    break;
                }
            }
            i++;
        }
        return cleanContent(content);
    }
    
    return '';
}

function cleanContent(html) {
    // Remove script tags
    html = html.replace(/<script[\s\S]*?<\/script>/gi, '');
    // Remove style tags
    html = html.replace(/<style[\s\S]*?<\/style>/gi, '');
    // Remove comments
    html = html.replace(/<!--[\s\S]*?-->/g, '');
    // Remove noscript
    html = html.replace(/<noscript[\s\S]*?<\/noscript>/gi, '');
    // Remove share/social buttons often at end
    html = html.replace(/<div\s+class="[^"]*sharedaddy[^"]*"[\s\S]*?<\/div>/gi, '');
    html = html.replace(/<div\s+class="[^"]*sd-sharing[^"]*"[\s\S]*?<\/div>/gi, '');
    // Trim
    html = html.trim();
    return html;
}

function extractPublishDate(html) {
    const match = html.match(/<meta\s+property="article:published_time"\s+content="([^"]+)"/i);
    if (match) return match[1];
    return null;
}

function extractModifiedDate(html) {
    const match = html.match(/<meta\s+property="article:modified_time"\s+content="([^"]+)"/i);
    if (match) return match[1];
    return null;
}

function extractOgImage(html) {
    const match = html.match(/<meta\s+property="og:image"\s+content="([^"]+)"/i);
    if (match) return match[1];
    return null;
}

function extractOgDescription(html) {
    const match = html.match(/<meta\s+property="og:description"\s+content="([^"]+)"/i);
    if (match) return decodeHtmlEntities(match[1]);
    return null;
}

function extractCategories(html) {
    const cats = [];
    // Look for category links in the article
    const catMatches = html.matchAll(/<a[^>]+href="https:\/\/psikologibanyuwangi\.com\/category\/([^/"]+)\/"[^>]*rel="category tag"[^>]*>([^<]+)<\/a>/gi);
    for (const m of catMatches) {
        cats.push({ slug: m[1], name: decodeHtmlEntities(m[2]) });
    }
    
    // Also try from schema.org articleSection
    const schemaMatch = html.match(/"articleSection":\[([^\]]+)\]/);
    if (schemaMatch && cats.length === 0) {
        const sections = schemaMatch[1].match(/"([^"]+)"/g);
        if (sections) {
            for (const s of sections) {
                cats.push({ slug: '', name: s.replace(/"/g, '') });
            }
        }
    }
    
    return cats;
}

function extractSlug(url) {
    const match = url.match(/psikologibanyuwangi\.com\/([^/]+)\/?$/);
    return match ? match[1] : '';
}

async function processArticle(url, index) {
    try {
        const html = await fetchUrl(url);
        const title = extractTitle(html);
        const content = extractEntryContent(html);
        const publishDate = extractPublishDate(html);
        const modifiedDate = extractModifiedDate(html);
        const ogImage = extractOgImage(html);
        const ogDescription = extractOgDescription(html);
        const categories = extractCategories(html);
        const slug = extractSlug(url);
        
        return {
            index: index + 1,
            url,
            slug,
            title,
            content,
            publishDate,
            modifiedDate,
            ogImage,
            ogDescription,
            categories,
            contentLength: content.length
        };
    } catch (err) {
        return {
            index: index + 1,
            url,
            slug: extractSlug(url),
            error: err.message
        };
    }
}

async function main() {
    console.log(`Extracting ${ARTICLE_URLS.length} articles from psikologibanyuwangi.com...\n`);
    
    const results = [];
    
    // Process in batches of 3
    for (let i = 0; i < ARTICLE_URLS.length; i += 3) {
        const batch = ARTICLE_URLS.slice(i, i + 3);
        const batchResults = await Promise.all(
            batch.map((url, j) => processArticle(url, i + j))
        );
        results.push(...batchResults);
        console.log(`Processed ${Math.min(i + 3, ARTICLE_URLS.length)}/${ARTICLE_URLS.length} articles...`);
    }
    
    // Output summary
    console.log('\n=== ARTICLE SUMMARY ===\n');
    for (const r of results) {
        if (r.error) {
            console.log(`${r.index}. ERROR: ${r.url} - ${r.error}`);
        } else {
            console.log(`${r.index}. "${r.title}"`);
            console.log(`   Slug: ${r.slug}`);
            console.log(`   Categories: ${r.categories.map(c => c.name).join(', ') || 'none'}`);
            console.log(`   Published: ${r.publishDate || 'unknown'}`);
            console.log(`   OG Image: ${r.ogImage || 'none'}`);
            console.log(`   Content length: ${r.contentLength} chars`);
            console.log('');
        }
    }
    
    // Write full data as JSON
    const fs = require('fs');
    const outputPath = require('path').join(__dirname, 'extracted_articles.json');
    fs.writeFileSync(outputPath, JSON.stringify(results, null, 2), 'utf8');
    console.log(`\nFull data written to: ${outputPath}`);
}

main().catch(console.error);
