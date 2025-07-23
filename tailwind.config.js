import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
export default {
  darkMode: 'class',
  content: [
    // glavni HTML entrypoint
    './index.html',
    // svi HTML/JS asseti u docs/  
    './docs/**/*.{html,js}',
  ],
  theme: {
    extend: {
      fontFamily: {
        sans: ['Figtree', ...defaultTheme.fontFamily.sans],
      },
      colors: {
        primary: '#2c3e50',     // tamno-plava
        secondary: '#2980b9',   // svijetlo-plava
        accent: '#d35400',      // narančasta
        'sidebar-bg': '#ffffff',// pozadina sidebara
        'card-bg': '#f8f9fa',   // pozadina kartica
      },
    },
  },
  plugins: [
    forms,
    typography,
  ],
};
