/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    // Look for HTML files in the root directory (e.g., index.html)
    './*.html',
    // Look for HTML/JS/TS files in a 'src' directory (if you use one)
    './src/**/*.{html,js,jsx,ts,tsx}',
    // Laravel Blade files
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.jsx',
    './resources/**/*.vue',
    './resources/js/components/SkillsSlider.jsx',
  ],
  theme: {
    extend: {
      fontFamily: {
        'alphazet': ['Alphazet', 'sans-serif'],
         'persona5': ['persona5', 'sans-serif'],
        'persona5v2': ['persona5v2', 'sans-serif'],
      },
    },
  },
  plugins: [
    require('tw-animate-css'),
  ],
};