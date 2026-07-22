const fs = require('fs');
let content = fs.readFileSync('d:/psikolog/resources/views/welcome.blade.php', 'utf8');

// Undo the bad dropdown replacement:
content = content.replace(
    /<div class="dropdown-submenu">\s*<div class="nav-item"><a href="\/berita">Berita &amp; Artikel<\/a><\/div>\s*<\/div>/g,
    `<div class="dropdown-submenu">
                                <div class="dropdown-item"><a href="#">Psikotes</a></div>
                                <div class="dropdown-item"><a href="#">Interview</a></div>
                                <div class="dropdown-item"><a href="#">FGD (Focus Group Discussion)</a></div>
                            </div>`
);

// Fix the actual Berita link in the main navbar
content = content.replace(
    /<div class="nav-item"><a href="#berita">Berita &amp; Artikel<\/a><\/div>/g,
    `<div class="nav-item"><a href="/berita">Berita &amp; Artikel</a></div>`
);

fs.writeFileSync('d:/psikolog/resources/views/welcome.blade.php', content, 'utf8');
console.log('Fixed welcome.blade.php');
