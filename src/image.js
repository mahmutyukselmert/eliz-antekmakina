import sharp from 'sharp';
import { glob } from 'glob';
import path from 'path';
import fs from 'fs/promises';

const inputPattern = './src/images/*.{jpg,jpeg,png,webp}';
const outputDir = './public/assets/images';

try {
  await fs.mkdir(outputDir, { recursive: true });

  const files = await glob(inputPattern);

  for (const file of files) {
    const fileName = path.basename(file, path.extname(file));
    const outputPath = path.join(outputDir, `${fileName}.webp`);

    try {
      await sharp(file)
        .webp({ quality: 90 })
        .toFile(outputPath);

      await fs.unlink(file);

      console.log(`Webp'ye dönüştürüldü ve orjinal dosya silindi: ${file}`);
    } catch (err) {
      console.error(`Hata (${file}): ${err.message}`);
    }
  }
} catch (err) {
  console.error("Hata: ", err.message);
}