// vite.config.js
import { defineConfig } from 'vite';

export default defineConfig({
  // Koristi relativne putanje, da build ispravno linka sve assete iz docs/
  base: './',
  build: {
    outDir: 'docs',       // gotovi site ide u docs/
    assetsDir: 'assets',  // CSS/JS i ostali asseti idu u docs/assets/
    emptyOutDir: true,    // prije svakog builda obriši docs/
    // uklonjeno: laravel plugin, rollupOptions.input
  }
});
