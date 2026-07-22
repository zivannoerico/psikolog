const fs = require('fs');
const path = require('path');

const layananDir = 'd:/psikolog/resources/views/layanan';
const files = fs.readdirSync(layananDir);

const newFeatures = `
                    <li>
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                        <strong>Kecepatan & Ketepatan Psikogram:</strong> Hasil selesai cepat dengan interpretasi tepat.
                    </li>
                    <li>
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                        <strong>Cakupan Luas & Fleksibel:</strong> Dapat diakses dan dikerjakan dimana saja.
                    </li>
                    <li>
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                        <strong>Saran Psikolog Profesional:</strong> Rekomendasi akurat untuk perusahaan, organisasi & personal.
                    </li>
                    <li>
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                        <strong>Hasil Akurat & Valid:</strong> Melalui penilaian otomatis dan terverifikasi.
                    </li>
                    <li>
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                        <strong>Kerahasiaan Terjamin:</strong> Informasi klien dijaga ketat kerahasiaannya.
                    </li>
                    <li>
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                        <strong>Laporan Detail & Mudah Dipahami:</strong> Bebas dari istilah psikologis yang rumit.
                    </li>`;

files.forEach(file => {
    if (file.endsWith('.blade.php')) {
        let content = fs.readFileSync(path.join(layananDir, file), 'utf8');
        
        // Find the ul tag and replace everything inside it
        content = content.replace(/<ul class="service-features">[\s\S]*?<\/ul>/, `<ul class="service-features">\n${newFeatures}\n                </ul>`);
        
        // Also update the description text
        content = content.replace(/Kami memahami bahwa setiap individu dan perusahaan memiliki keunikan serta tantangan tersendiri\. Melalui layanan <strong>.*?<\/strong>, kami menggunakan metode psikologi terkini dan berbasis bukti ilmiah untuk memberikan hasil yang akurat\./, 
        `Melalui layanan ini, kami membantu proses identifikasi hambatan belajar, student profiling, study analysis, hingga pemecahan krisis karyawan. Berbasis metode yang terintegrasi, kami pastikan setiap sesi berlangsung profesional dan memuaskan seperti yang telah dirasakan oleh klien-klien besar kami (PT PLN, Bank Jatim, PT KAI, dsb).`);
        
        fs.writeFileSync(path.join(layananDir, file), content, 'utf8');
    }
});

console.log("Updated content of 7 layanan pages to match psikologibanyuwangi.com");
