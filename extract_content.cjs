const fs = require('fs');
const files = {
  psikotes: 'C:/Users/user/.gemini/antigravity-ide/brain/357840a5-fba4-4c64-b283-609889b62322/.system_generated/steps/1293/content.md',
  konseling: 'C:/Users/user/.gemini/antigravity-ide/brain/357840a5-fba4-4c64-b283-609889b62322/.system_generated/steps/1294/content.md',
  interview: 'C:/Users/user/.gemini/antigravity-ide/brain/357840a5-fba4-4c64-b283-609889b62322/.system_generated/steps/1297/content.md',
  fgd: 'C:/Users/user/.gemini/antigravity-ide/brain/357840a5-fba4-4c64-b283-609889b62322/.system_generated/steps/1327/content.md',
  training_indoor: 'C:/Users/user/.gemini/antigravity-ide/brain/357840a5-fba4-4c64-b283-609889b62322/.system_generated/steps/1321/content.md',
  training_outdoor: 'C:/Users/user/.gemini/antigravity-ide/brain/357840a5-fba4-4c64-b283-609889b62322/.system_generated/steps/1323/content.md',
  konseling_kerja: 'C:/Users/user/.gemini/antigravity-ide/brain/357840a5-fba4-4c64-b283-609889b62322/.system_generated/steps/1324/content.md',
  konseling_masalah: 'C:/Users/user/.gemini/antigravity-ide/brain/357840a5-fba4-4c64-b283-609889b62322/.system_generated/steps/1326/content.md',
};
for (const [key, path] of Object.entries(files)) {
  const c = fs.readFileSync(path, 'utf8');
  const headings = Array.from(c.matchAll(/<h([1-6])[^>]*>([^<]+)<\/h[1-6]>/g)).map(m => 'H'+m[1]+': '+m[2].trim()).slice(0,20);
  const waLinks = Array.from(c.matchAll(/href="(https:\/\/wa\.me[^"]+)"/g)).map(m => m[1]).slice(0,3);
  const imgs = Array.from(c.matchAll(/src="(https:\/\/psikologibanyuwangi\.com\/wp-content\/uploads[^"]+)"/g)).map(m => m[1]).slice(0,5);
  const paras = Array.from(c.matchAll(/<p[^>]*>([^<]{30,200})<\/p>/g)).map(m => m[1].trim()).slice(0,5);
  
  console.log('=== ' + key + ' ===');
  console.log('HEADINGS:', headings.join(' || '));
  console.log('WA_LINKS:', waLinks.join(' | '));
  console.log('IMAGES:', imgs.join(' | '));
  console.log('TEXT_SAMPLES:', paras.join(' || '));
  console.log('');
}
