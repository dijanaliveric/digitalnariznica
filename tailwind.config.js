import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
export default {
  darkMode: 'class',
  content: [
    // Laravel Blade templates
    './resources/views/**/*.blade.php',
    // Vue/React components (if any)
    './resources/js/**/*.js',
    // Tailwind CSS utilities in your CSS
    './resources/css/**/*.css',
    // Published package views (pagination, etc.)
    './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
    // Cached views
    './storage/framework/views/*.php',
  ],
  theme: {
    extend: {
      fontFamily: {
        sans: ['Figtree', ...defaultTheme.fontFamily.sans],
      },
      colors: {
        primary: '#2c3e50',   // tamno-plava
        secondary: '#2980b9', // svijetlo-plava
        accent: '#d35400',    // narančasta
        'sidebar-bg': '#ffffff', // pozadina sidebara
        'card-bg': '#f8f9fa',    // pozadina kartica
      },
    },
  },
  plugins: [
    forms,
    typography,
  ],
};
