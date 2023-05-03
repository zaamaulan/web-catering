/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['./src/pages/**/*.{html,js,php}'],
  theme: {
    extend: {
      fontFamily: {
        inter: 'inter',
        nunito: 'nunito',
      },
    },
  },
  plugins: [],
};
