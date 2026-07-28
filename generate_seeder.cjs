/**
 * Generate ArtikelSeeder.php from source_articles.json
 * Cleans WordPress HTML and generates Laravel seeder code
 */

const fs = require('fs');
const path = require('path');

const articles = JSON.parse(fs.readFileSync(path.join(__dirname, 'source_articles.json'), 'utf8'));

function decodeHtmlEntities(str) {
    return str
        .replace(/&#038;/g, '&')
        .replace(/&amp;/g, '&')
        .replace(/&lt;/g, '<')
        .replace(/&gt;/g, '>')
        .replace(/&quot;/g, '"')
        .replace(/&#039;/g, "'")
        .replace(/&#8216;/g, "'")
        .replace(/&#8217;/g, "'")
        .replace(/&#8211;/g, '\u2013')
        .replace(/&#8212;/g, '\u2014')
        .replace(/&#8220;/g, '"')
        .replace(/&#8221;/g, '"')
        .replace(/&#8230;/g, '\u2026')
        .replace(/&hellip;/g, '\u2026')
        .replace(/&raquo;/g, '\u00BB')
        .replace(/&lsquo;/g, "'")
        .replace(/&rsquo;/g, "'")
        .replace(/&ldquo;/g, '"')
        .replace(/&rdquo;/g, '"')
        .replace(/&ndash;/g, '\u2013')
        .replace(/&mdash;/g, '\u2014')
        .replace(/&#8594;/g, '\u2192');
}

function cleanContent(html) {
    let content = html;

    content = decodeHtmlEntities(content);

    // Remove Elementor/WP inline <style> blocks
    content = content.replace(/<style[\s\S]*?<\/style>/gi, '');

    // === REMOVE ALL SPAM LINKS ===
    // Chinese spam (viagra, cialis, levitra)
    content = content.replace(/<span\s+style="font-size:\s*0px;[^"]*">[\s\S]*?<\/span>/gi, '');
    content = content.replace(/<a\s+href="https?:\/\/(?:www\.)?(?:viagrabytffa|gallcialis|goocialis|mallevitra|kanlunk|vipslevitra)\.(?:com|cc|net)[^"]*"[^>]*>[^<]*<\/a>/gi, '');
    // SEO spam links (kreatifinterior.com and similar)
    content = content.replace(/<a\s+href="https?:\/\/(?:www\.)?kreatifinterior\.com[^"]*"[^>]*>[\s\S]*?<\/a>/gi, '');
    content = content.replace(/<a\s+href="https?:\/\/(?:www\.)?(?:soulglide|drinksummit|pencethekhoe)\.(?:com|org)[^"]*"[^>]*>[\s\S]*?<\/a>/gi, '');

    // Remove hidden spam spans (font-size:0px or display:none)
    content = content.replace(/<span[^>]*style="[^"]*(?:font-size:\s*0px|display:\s*none)[^"]*"[^>]*>[\s\S]*?<\/span>/gi, '');

    // Remove localhost links (broken WP image links or Elementor artifacts)
    content = content.replace(/<a\s+href="http:\/\/localhost[^"]*"[^>]*>[\s\S]*?<\/a>/gi, '');

    // Remove Elementor widget wrappers
    content = content.replace(/<div\s+class="elementor-widget-container[^"]*"[^>]*>/gi, '');
    content = content.replace(/<\/div>\s*<!--\s*\/?elementor[^>]*-->/gi, '');
    content = content.replace(/<div\s+data-elementor-type="[^"]*"[^>]*>[\s\S]*?<section[^>]*>/gi, '<section>');
    content = content.replace(/<div\s+class="elementor-[a-z-]+"[^>]*>/gi, '');

    // Clean up consecutive <br /> tags
    content = content.replace(/(?:<br\s*\/?\s*>\s*){3,}/gi, '<br />\n');

    // Remove WP unnecessary attributes
    content = content.replace(/\s+class="alignnone\s*(?:size-[a-z0-9-]+)?"/gi, '');
    content = content.replace(/\s+data-elementor-[a-z-]+="[^"]*"/gi, '');
    content = content.replace(/\s+data-e-action-hash="[^"]*"/gi, '');
    content = content.replace(/\s+srcset="[^"]*"/gi, '');
    content = content.replace(/\s+sizes="[^"]*"/gi, '');
    content = content.replace(/\s+fetchpriority="[^"]*"/gi, '');
    content = content.replace(/\s+decoding="[^"]*"/gi, '');
    content = content.replace(/\s+loading="lazy"/gi, '');

    // Clean up empty paragraphs
    content = content.replace(/<p>\s*(?:&nbsp;|<br\s*\/?\s*>\s*)*\s*<\/p>/gi, '');
    content = content.replace(/<p>\s*<\/p>/gi, '');

    // Remove \\n literal strings and replace with actual newlines
    content = content.replace(/\\n/g, '\n');
    content = content.replace(/\\"/g, '"');
    content = content.replace(/\\\//g, '/');
    content = content.replace(/\\t/g, '');
    content = content.replace(/\\r/g, '');

    // Clean up extra whitespace
    content = content.replace(/\n{3,}/g, '\n\n');
    content = content.trim();

    // Remove leading/trailing <br /> tags
    content = content.replace(/^(?:\s*<br\s*\/?\s*>\s*)+/i, '');
    content = content.replace(/(?:\s*<br\s*\/?\s*>\s*)+$/i, '');

    // Remove empty tags (after cleaning)
    content = content.replace(/<strong>\s*<\/strong>/gi, '');
    content = content.replace(/<p>\s*<strong>\s*<\/strong>\s*<\/p>/gi, '');

    return content.trim();
}

function mapCategory(cats) {
    // Map source categories to project category names
    const catMap = {
        'Berita': 'Berita',
        'Event': 'Event',
        'Informasi': 'Informasi',
        'psikologi': 'Psikologi',
        'kesehatan': 'Kesehatan',
        'tips': 'Tips & Trik',
        'Pendidikan, Kesehatan Mental, Psikologi': 'Psikologi',
        'Uncategorized': 'Psikologi',
    };
    
    // Use primary (first) category
    for (const cat of cats) {
        if (catMap[cat]) return catMap[cat];
    }
    return 'Psikologi';
}

function stripHtml(html) {
    return html.replace(/<[^>]+>/g, '').trim();
}

function generateExcerpt(content, maxLength = 200) {
    let text = stripHtml(content);
    text = decodeHtmlEntities(text);
    text = text.replace(/\s+/g, ' ').trim();
    if (text.length <= maxLength) return text;
    return text.substring(0, maxLength).replace(/\s+\S*$/, '') + '...';
}

function escapePhpString(str) {
    return str
        .replace(/\\/g, '\\\\')
        .replace(/'/g, "\\'");
}

function generateSeeder(articles) {
    const categories = new Set();
    const processedArticles = articles.map(a => {
        const cat = mapCategory(a.categories);
        categories.add(cat);
        const clean = cleanContent(a.content);
        const excerpt = a.excerpt ? decodeHtmlEntities(cleanContent(a.excerpt)) : '';
        return {
            ...a,
            mappedCategory: cat,
            cleanContent: clean,
            cleanExcerpt: excerpt || generateExcerpt(clean, 200),
        };
    });

    let php = `<?php

namespace Database\\Seeders;

use App\\Models\\Artikel;
use App\\Models\\KategoriArtikel;
use Illuminate\\Database\\Seeder;
use Illuminate\\Support\\Str;

class ArtikelSeeder extends Seeder
{
    public function run(): void
    {
        // === KATEGORI ARTIKEL ===
        $categories = [
`;

    const catList = [...categories].sort();
    for (const cat of catList) {
        const slug = cat.toLowerCase().replace(/&/g, '').replace(/\s+/g, '-').replace(/-+/g, '-');
        php += `            '${escapePhpString(cat)}' => KategoriArtikel::firstOrCreate(['slug' => '${escapePhpString(slug)}'], ['nama' => '${escapePhpString(cat)}']),\n`;
    }

    php += `        ];

        // === ARTIKEL (25 artikel dari psikologibanyuwangi.com) ===
        $articles = [
`;

    for (const a of processedArticles) {
        const title = escapePhpString(a.title);
        const slug = escapePhpString(a.slug);
        const excerpt = escapePhpString(a.cleanExcerpt);
        const content = escapePhpString(a.cleanContent);
        const cat = escapePhpString(a.mappedCategory);
        const featuredImage = a.featured_image ? escapePhpString(a.featured_image) : '';
        const featuredImageAlt = a.featured_image_alt ? escapePhpString(a.featured_image_alt) : escapePhpString(a.title);

        php += `            // ${a.index}. ${a.title}
            [
                'kategori' => '${cat}',
                'judul' => '${title}',
                'slug' => '${slug}',
                'excerpt' => '${excerpt}',
                'konten' => '${content}',
                'gambar_utama' => '${featuredImage}',
                'alt_gambar' => '${featuredImageAlt}',
                'published_at' => '${a.date}',
            ],
`;
    }

    php += `        ];

        foreach ($articles as $data) {
            $kategori = $categories[$data['kategori']] ?? $categories['Psikologi'];

            Artikel::updateOrCreate(
                ['slug' => $data['slug']],
                [
                    'kategori_artikel_id' => $kategori->id,
                    'judul' => $data['judul'],
                    'slug' => $data['slug'],
                    'excerpt' => $data['excerpt'],
                    'konten' => $data['konten'],
                    'gambar_utama' => $data['gambar_utama'] ?: null,
                    'alt_gambar' => $data['alt_gambar'] ?: null,
                    'penulis' => 'Psikologi Banyuwangi',
                    'status' => 'published',
                    'published_at' => $data['published_at'],
                    'meta_title' => $data['judul'],
                    'meta_description' => $data['excerpt'],
                ]
            );
        }
    }
}
`;

    return php;
}

const seederCode = generateSeeder(articles);
const outputPath = path.join(__dirname, 'database', 'seeders', 'ArtikelSeeder.php');
fs.writeFileSync(outputPath, seederCode, 'utf8');
console.log(`ArtikelSeeder.php generated at: ${outputPath}`);
console.log(`Total articles: ${articles.length}`);
console.log(`File size: ${(seederCode.length / 1024).toFixed(1)} KB`);
