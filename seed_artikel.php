<?php

use App\Models\Artikel;
use Illuminate\Support\Str;

$artikels = [
    [
        'kategori_id' => 1,
        'judul' => 'Mengenal Inner Child: Mengapa Pengalaman Masa Kecil Membentuk Kepribadian Anda',
        'konten' => '
            <h2>Apa Itu Inner Child?</h2>
            <p>Pernahkah Anda bereaksi secara berlebihan terhadap suatu masalah yang sebenarnya sepele? Atau mungkin Anda sering merasa takut untuk mencoba hal baru? Reaksi-reaksi emosional tersebut sering kali berkaitan dengan <strong>Inner Child</strong> Anda.</p>
            <p><em>Inner child</em> adalah sisi kekanakan dalam diri kita yang menyimpan berbagai memori, emosi, dan pengalaman masa kecil—baik yang membahagiakan maupun yang menyakitkan (trauma).</p>
            <h2>Mengapa Ini Penting?</h2>
            <p>Pengalaman di masa kecil sangat membentuk cara kita melihat dunia saat dewasa. Jika di masa kecil kebutuhan emosional kita tidak terpenuhi, kita mungkin akan tumbuh menjadi orang dewasa yang rentan terhadap stres, memiliki masalah kepercayaan (<em>trust issue</em>), atau sering mengkritik diri sendiri.</p>
            <ul>
                <li><strong>Hubungan Sosial:</strong> Inner child yang terluka sering kali memanifestasikan dirinya dalam hubungan romantis maupun pertemanan.</li>
                <li><strong>Regulasi Emosi:</strong> Kesulitan mengontrol amarah atau kesedihan yang mendalam.</li>
                <li><strong>Self-Esteem:</strong> Merasa tidak cukup baik atau selalu mencari validasi dari orang lain.</li>
            </ul>
            <h2>Cara Menyembuhkan Inner Child</h2>
            <p>Langkah pertama menuju penyembuhan adalah <strong>kesadaran</strong>. Mulailah dengan mengenali kapan inner child Anda mengambil alih kendali emosi. Cobalah untuk berdialog dengan diri Anda sendiri dengan penuh kasih sayang, seperti Anda menenangkan seorang anak kecil yang sedang menangis.</p>
            <p>Jika Anda merasa kesulitan, jangan ragu untuk mencari bantuan profesional. Konseling psikologi dapat menjadi ruang yang aman untuk menelusuri memori masa lalu dan menyembuhkan luka batin Anda.</p>
        ',
        'tags' => ['Inner Child', 'Kesehatan Mental', 'Trauma', 'Psikologi Diri'],
    ],
    [
        'kategori_id' => 4,
        'judul' => 'Cara Menghadapi Burnout di Tempat Kerja: Strategi Pulih dan Bangkit Kembali',
        'konten' => '
            <h2>Mengenal Burnout</h2>
            <p>Di era modern ini, bekerja keras sering kali diagungkan. Namun, batasan antara "bekerja keras" dan "bekerja terlalu keras" sering kali kabur, berujung pada kondisi yang disebut <strong>Burnout</strong>.</p>
            <p>Burnout bukanlah sekadar kelelahan biasa. Ini adalah kondisi stres kronis di mana pekerja merasa kelelahan secara fisik, mental, dan emosional. Ciri-cirinya meliputi perasaan sinis terhadap pekerjaan, motivasi yang menurun drastis, hingga produktivitas yang anjlok.</p>
            <h2>Tanda-tanda Anda Mengalami Burnout</h2>
            <ul>
                <li>Merasa lelah setiap kali bangun tidur membayangkan harus bekerja.</li>
                <li>Sering menunda-nunda pekerjaan yang biasanya bisa diselesaikan dengan cepat.</li>
                <li>Menarik diri dari rekan kerja dan mudah merasa jengkel.</li>
                <li>Mengalami keluhan fisik yang tak beralasan, seperti sakit kepala kronis atau gangguan pencernaan.</li>
            </ul>
            <h2>Strategi Pemulihan</h2>
            <p>Untuk pulih dari burnout, sekadar tidur seharian di akhir pekan tidaklah cukup. Anda perlu mengevaluasi kembali gaya hidup dan batasan (<em>boundaries</em>) Anda.</p>
            <p><strong>1. Tetapkan Batasan yang Jelas:</strong> Jangan periksa email kantor di luar jam kerja. Pisahkan ruang kerja dengan ruang istirahat (terutama bagi yang WFH).</p>
            <p><strong>2. Bicara dengan Atasan:</strong> Komunikasikan beban kerja Anda. Profesionalisme juga berarti mengetahui batas kapasitas diri.</p>
            <p><strong>3. Prioritaskan Perawatan Diri (Self-Care):</strong> Lakukan hobi yang sama sekali tidak berhubungan dengan pekerjaan Anda. Olahraga teratur dan pola makan sehat juga sangat membantu menstabilkan hormon stres.</p>
        ',
        'tags' => ['Burnout', 'Karir', 'Stres', 'Kesehatan Mental'],
    ],
    [
        'kategori_id' => 2,
        'judul' => 'Pentingnya Konseling Pranikah: Membangun Fondasi Kuat Sebelum Mengikat Janji',
        'konten' => '
            <h2>Mengapa Konseling Pranikah Diperlukan?</h2>
            <p>Pernikahan adalah salah satu komitmen terbesar dalam hidup. Sayangnya, banyak pasangan yang menghabiskan waktu berbulan-bulan merencanakan resepsi pernikahan yang megah, namun lupa merencanakan <strong>kehidupan pernikahan</strong> itu sendiri.</p>
            <p>Di sinilah konseling pranikah (<em>premarital counseling</em>) memainkan peran vital. Ini bukan berarti hubungan Anda bermasalah, melainkan langkah proaktif untuk menyelaraskan visi dan misi kehidupan berumah tangga.</p>
            <h2>Topik yang Biasanya Dibahas</h2>
            <p>Bersama psikolog atau konselor pernikahan, pasangan akan dibimbing untuk mendiskusikan topik-topik krusial yang terkadang canggung untuk dibicarakan sendiri:</p>
            <ul>
                <li><strong>Keuangan:</strong> Bagaimana pembagian tanggung jawab finansial? Apakah ada hutang sebelumnya?</li>
                <li><strong>Anak dan Gaya Asuh:</strong> Apakah keduanya ingin memiliki anak? Berapa banyak? Bagaimana gaya pengasuhan yang akan diterapkan?</li>
                <li><strong>Resolusi Konflik:</strong> Bagaimana masing-masing pihak biasanya menghadapi amarah dan konflik?</li>
                <li><strong>Batasan dengan Keluarga Besar:</strong> Sejauh mana campur tangan mertua yang dapat ditoleransi?</li>
            </ul>
            <h2>Membangun Komunikasi yang Lebih Sehat</h2>
            <p>Melalui sesi konseling, Anda tidak hanya belajar tentang pasangan, tetapi juga tentang diri Anda sendiri. Anda akan dibekali teknik komunikasi yang sehat, cara meredam konflik tanpa menyakiti, dan strategi menjaga keintiman (baik secara fisik maupun emosional).</p>
            <p>Mencegah lebih baik daripada mengobati. Konseling pranikah adalah investasi terbaik yang bisa Anda berikan untuk kebahagiaan masa depan bersama pasangan.</p>
        ',
        'tags' => ['Pernikahan', 'Konseling Pranikah', 'Relationship', 'Keluarga'],
    ],
    [
        'kategori_id' => 1,
        'judul' => '5 Tanda Anda Membutuhkan Bantuan Psikolog (Jangan Diabaikan!)',
        'konten' => '
            <h2>Kapan Saat yang Tepat untuk ke Psikolog?</h2>
            <p>Banyak orang menunda mencari bantuan profesional karena merasa masalah mereka "belum cukup parah" atau takut dihakimi. Kenyataannya, Anda tidak perlu menunggu sampai mengalami gangguan mental berat untuk berkonsultasi dengan psikolog.</p>
            <h2>Tanda-tanda Perlu Bantuan Profesional</h2>
            <p>Berikut adalah beberapa tanda bahwa inilah saatnya Anda mempertimbangkan untuk menemui psikolog:</p>
            <ol>
                <li><strong>Kesulitan Mengendalikan Emosi:</strong> Anda merasa marah, sedih, atau cemas secara ekstrem tanpa pemicu yang jelas, dan hal ini mengganggu aktivitas sehari-hari.</li>
                <li><strong>Kehilangan Minat (Anhedonia):</strong> Hal-hal yang dulu sangat Anda nikmati—seperti hobi, olahraga, atau bersosialisasi—kini terasa hambar dan tidak menarik sama sekali.</li>
                <li><strong>Gangguan Tidur dan Pola Makan:</strong> Tidur terlalu lama (hypersomnia) atau tidak bisa tidur (insomnia). Perubahan nafsu makan yang drastis juga bisa menjadi indikator adanya tekanan psikologis.</li>
                <li><strong>Trauma yang Belum Usai:</strong> Jika Anda pernah mengalami kejadian traumatis dan memori tersebut terus-menerus muncul (<em>flashback</em>), mimpi buruk, atau membuat Anda menghindari tempat/orang tertentu.</li>
                <li><strong>Hubungan Sosial yang Memburuk:</strong> Anda mulai mengisolasi diri dari orang-orang terdekat, atau sering terlibat konflik hebat tanpa alasan yang rasional.</li>
            </ol>
            <h2>Mencari Bantuan adalah Tanda Keberanian</h2>
            <p>Mendatangi psikolog bukanlah tanda kelemahan, melainkan bukti bahwa Anda cukup berani untuk mengambil kendali atas kesejahteraan mental Anda. Di biro psikologi seperti An Moerty, kami menyediakan ruang yang aman, tanpa penghakiman, dan 100% rahasia untuk membantu Anda kembali bangkit.</p>
        ',
        'tags' => ['Psikoterapi', 'Kesehatan Mental', 'Kesadaran Diri'],
    ],
    [
        'kategori_id' => 3,
        'judul' => 'Tips Jitu Meningkatkan Fokus Belajar pada Anak dengan Gaya Belajar Kinestetik',
        'konten' => '
            <h2>Memahami Gaya Belajar Kinestetik</h2>
            <p>Apakah anak Anda sulit duduk diam saat belajar? Selalu ingin bergerak, menyentuh barang-barang, atau berjalan-jalan saat menghafal? Jika ya, kemungkinan besar ia memiliki gaya belajar <strong>Kinestetik</strong>.</p>
            <p>Anak kinestetik belajar paling efektif melalui gerakan dan pengalaman fisik (<em>learning by doing</em>). Sistem pendidikan konvensional yang mengharuskan siswa duduk berjam-jam sering kali membuat mereka dicap "hiperaktif" atau "kurang fokus", padahal mereka hanya membutuhkan metode yang berbeda.</p>
            <h2>Tips Mendampingi Anak Kinestetik</h2>
            <p>Berikut adalah beberapa tips yang bisa diterapkan orang tua untuk membantu anak kinestetik belajar dengan optimal:</p>
            <ul>
                <li><strong>Gunakan Alat Peraga (Manipulatives):</strong> Biarkan anak menggunakan balok susun, sempoa, atau benda nyata saat belajar berhitung.</li>
                <li><strong>Izin untuk Bergerak:</strong> Jangan paksa mereka duduk tegak terus-menerus. Membaca sambil berjalan mondar-mandir atau menggunakan <em>stress ball</em> dapat membantu mereka menyerap informasi.</li>
                <li><strong>Bermain Peran (Role Play):</strong> Ubah materi sejarah atau sastra menjadi drama singkat. Biarkan anak memerankan tokoh-tokoh tersebut.</li>
                <li><strong>Beri Jeda Singkat (Brain Breaks):</strong> Anak kinestetik lebih mudah bosan. Terapkan metode belajar 20 menit, diselingi 5 menit istirahat fisik (seperti melakukan peregangan atau lompat-lompat kecil).</li>
            </ul>
            <h2>Student Profiling</h2>
            <p>Jika Anda masih kebingungan dengan pola belajar anak, layanan <strong>Student Profiling & Study Analysis</strong> dari psikolog profesional bisa sangat membantu. Melalui asesmen, kami dapat memetakan potensi kognitif dan merekomendasikan gaya belajar yang paling sesuai untuk kesuksesan akademis anak Anda.</p>
        ',
        'tags' => ['Parenting', 'Anak', 'Gaya Belajar', 'Edukasi'],
    ],
    [
        'kategori_id' => 4,
        'judul' => 'Mengatasi Imposter Syndrome: Berhenti Merasa Sebagai "Penipu" di Tempat Kerja',
        'konten' => '
            <h2>Apa Itu Imposter Syndrome?</h2>
            <p>Pernahkah Anda mendapatkan promosi atau pujian atas pencapaian Anda, tetapi alih-alih bangga, Anda malah merasa bahwa Anda hanya sedang "beruntung"? Anda merasa cemas bahwa suatu saat nanti orang-orang akan menyadari bahwa Anda sebenarnya tidak kompeten (sebagai "penipu").</p>
            <p>Fenomena psikologis ini dikenal sebagai <strong>Imposter Syndrome</strong> (Sindrom Penipu). Ironisnya, kondisi ini sering dialami oleh individu yang justru sangat berprestasi dan perfeksionis.</p>
            <h2>Mengapa Kita Merasakannya?</h2>
            <p>Banyak faktor yang memicu Imposter Syndrome, mulai dari ekspektasi keluarga yang terlalu tinggi di masa kecil, hingga lingkungan kerja yang terlalu kompetitif. Orang dengan sindrom ini cenderung mengabaikan bukti nyata dari kesuksesan mereka (seperti gelar, pujian, metrik keberhasilan) dan mengaitkannya dengan faktor eksternal.</p>
            <h2>Langkah-langkah Mengatasinya</h2>
            <ol>
                <li><strong>Kenali Pola Pikirnya:</strong> Sadari kapan pikiran-pikiran "saya tidak pantas" ini muncul. Kenali bahwa itu hanyalah pikiran, bukan fakta.</li>
                <li><strong>Dokumentasikan Keberhasilan Anda:</strong> Buatlah "Katalog Kesuksesan". Simpan email pujian, sertifikat, atau catatan pencapaian Anda. Bacalah ini saat Anda mulai merasa tidak kompeten.</li>
                <li><strong>Berhenti Menjadi Perfeksionis Ekstrem:</strong> Terimalah bahwa melakukan kesalahan adalah bagian dari proses belajar. Anda tidak harus tahu segalanya untuk menjadi kompeten.</li>
                <li><strong>Bagikan Perasaan Anda:</strong> Berbicara dengan mentor, rekan kerja yang dipercaya, atau psikolog dapat memberikan perspektif baru. Anda akan terkejut menyadari betapa banyaknya orang sukses yang juga merasakan hal yang sama.</li>
            </ol>
            <p>Keahlian dan posisi Anda saat ini bukanlah hasil kebetulan. Anda berada di sana karena Anda memang pantas mendapatkannya.</p>
        ',
        'tags' => ['Imposter Syndrome', 'Karir', 'Kesehatan Mental', 'Pengembangan Diri'],
    ],
    [
        'kategori_id' => 1,
        'judul' => 'Apa Itu Student Profiling dan Mengapa Sangat Penting untuk Masa Depan Anak?',
        'konten' => '
            <h2>Mengenal Potensi Unik Setiap Anak</h2>
            <p>Sering kali, orang tua bingung ketika anak mendapat nilai buruk di sekolah. Apakah anak malas? Atau apakah gurunya yang kurang pas? Terkadang, jawabannya jauh lebih mendalam dari itu.</p>
            <p>Setiap anak lahir dengan serangkaian potensi kognitif, minat, dan kepribadian yang unik. Di sinilah <strong>Student Profiling</strong> (Pemrofilan Siswa) berperan krusial.</p>
            <h2>Tujuan Student Profiling</h2>
            <p>Layanan asesmen psikologis ini dirancang untuk membedah profil psikologis siswa secara komprehensif. Melalui serangkaian tes terstandarisasi, psikolog akan mengukur:</p>
            <ul>
                <li><strong>Kapasitas Intelektual (IQ):</strong> Mengetahui tingkat kecerdasan dan kemampuan nalar anak.</li>
                <li><strong>Gaya Belajar (Learning Style):</strong> Visual, auditori, atau kinestetik.</li>
                <li><strong>Kecerdasan Majemuk (Multiple Intelligences):</strong> Apakah anak kuat di bidang linguistik, logika-matematika, spasial, musik, atau interpersonal.</li>
                <li><strong>Hambatan Belajar:</strong> Mengidentifikasi apakah ada masalah konsentrasi, disleksia, atau kecemasan akademis.</li>
            </ul>
            <h2>Manfaat Nyata</h2>
            <p>Dengan mengetahui profil ini, orang tua dan guru tidak lagi menggunakan metode <em>trial and error</em> dalam mendidik anak. Mereka dapat memberikan stimulasi yang tepat sasaran. Selain itu, anak juga merasa lebih percaya diri karena mereka belajar dengan cara yang paling nyaman bagi mereka.</p>
            <p>Bagi siswa remaja, hasil profiling ini sangat berguna untuk penjurusan akademik (IPA/IPS/Bahasa) dan pemilihan program studi di perguruan tinggi, sehingga mencegah mereka merasa "salah jurusan" di kemudian hari.</p>
        ',
        'tags' => ['Student Profiling', 'Psikologi Pendidikan', 'Asesmen'],
    ],
    [
        'kategori_id' => 3,
        'judul' => 'Digital Detox: Cara Sederhana Mengurangi Kecemasan Akibat Media Sosial',
        'konten' => '
            <h2>Jebakan Dopamin di Layar Anda</h2>
            <p>Pernahkah Anda berniat membuka Instagram hanya selama 5 menit, namun tiba-tiba satu jam telah berlalu? Algoritma media sosial dirancang khusus untuk memanipulasi pelepasan <em>dopamin</em> di otak kita, membuat kita terus-menerus <em>scrolling</em> tanpa henti.</p>
            <p>Paparan berlebihan ini sering kali berujung pada kecemasan (<em>anxiety</em>), <em>Fear of Missing Out</em> (FOMO), dan penurunan kualitas tidur. Di sinilah pentingnya melakukan <strong>Digital Detox</strong>.</p>
            <h2>Cara Memulai Digital Detox</h2>
            <p>Detox digital bukan berarti Anda harus membuang <em>smartphone</em> Anda dan hidup di hutan. Ini tentang membangun kembali hubungan yang sehat dengan teknologi.</p>
            <ol>
                <li><strong>Screen-Free Morning:</strong> Jangan sentuh HP Anda setidaknya 30 menit setelah bangun tidur. Gunakan waktu ini untuk peregangan, minum air putih, atau membuat jurnal.</li>
                <li><strong>Atur Batas Waktu Harian:</strong> Gunakan fitur <em>Digital Wellbeing</em> di HP Anda untuk membatasi penggunaan aplikasi media sosial maksimal 1 jam sehari.</li>
                <li><strong>Matikan Notifikasi Non-Esensial:</strong> Notifikasi yang terus berbunyi membuat otak kita selalu dalam mode waspada. Matikan notifikasi dari aplikasi yang tidak mendesak.</li>
                <li><strong>Pilih Satu Hari Tanpa Media Sosial:</strong> Misalnya, jadikan hari Minggu sebagai hari bebas media sosial (<em>Social Media Sabbath</em>). Fokuslah pada interaksi di dunia nyata dengan keluarga dan alam.</li>
            </ol>
            <p>Dengan mengurangi "kebisingan" digital, Anda akan menyadari betapa banyaknya waktu luang yang Anda miliki, dan pikiran Anda akan terasa jauh lebih jernih dan tenang.</p>
        ',
        'tags' => ['Digital Detox', 'Mental Health', 'Kecemasan', 'Media Sosial'],
    ]
];

$count = 0;
foreach ($artikels as $art) {
    Artikel::create([
        'kategori_artikel_id' => $art['kategori_id'],
        'judul' => $art['judul'],
        'konten' => $art['konten'],
        'excerpt' => Str::limit(strip_tags($art['konten']), 150),
        'penulis' => 'Tim Psikolog An Moerty',
        'status' => 'published',
        'published_at' => now()->subDays(rand(1, 30)),
        'tags' => $art['tags'],
        'meta_title' => $art['judul'],
        'meta_description' => Str::limit(strip_tags($art['konten']), 150),
        'views' => rand(50, 500)
    ]);
    $count++;
}

echo "Berhasil menambahkan {$count} artikel!";
