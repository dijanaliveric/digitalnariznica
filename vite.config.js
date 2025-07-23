// vite.config.js
import { defineConfig } from 'vite';

export default defineConfig({
  // kad builda, svi linkovi u index.html bit će relativni
  base: './',
  build: {
    outDir: 'docs',      // generiraj docs/ folder
    assetsDir: 'assets', // u njemu će biti CSS/JS
    emptyOutDir: true    // obriši docs/ prije svakog builda
  }
});
