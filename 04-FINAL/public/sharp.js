
import sharp from 'sharp';
import path from 'path';
import fs from 'fs';

const inputFolder = 'src/img';
const outputFolder = 'build/img';
const width = 300; // Set thumbnail width

// Ensure output folder exists
if (!fs.existsSync(outputFolder)) {
    fs.mkdirSync(outputFolder, { recursive: true });
}

fs.readdir(inputFolder, (err, files) => {
    if (err) {
        console.error('Error reading input folder:', err);
        return;
    }

    files.forEach(file => {
        const inputFilePath = path.join(inputFolder, file);
        const outputFilePathWebp = path.join(outputFolder, path.parse(file).name + '.webp');
        const outputFilePathJpg = path.join(outputFolder, path.parse(file).name + '.jpg');
        const outputFilePathAvif = path.join(outputFolder, path.parse(file).name + '.avif');
        
        // Process only image files
        if (!file.match(/\.(jpg|jpeg|png|webp|avif)$/i)) {
            console.log(`Skipping non-image file: ${file}`);
            return;
        }

        sharp(inputFilePath)
            .resize({ width })
            .toFormat('webp')
            .toFile(outputFilePathAvif)
            .then(() => console.log(`Processed: ${file} -> ${outputFilePathAvif}`))
            .catch(err => console.error(`Error processing ${file}:`, err));
    });
});
