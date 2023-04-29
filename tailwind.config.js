/** @type {import('tailwindcss').Config} */
module.exports = {
  purge: ['./src/**/*.{html,js}'],
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
