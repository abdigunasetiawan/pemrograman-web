/** @type {import('tailwindcss').Config} */
module.exports = {
  darkMode: "class",
  content: ["./sorter.html", "./latihan5/**/*.{html,php,js}"],
  theme: {
    extend: {
      fontFamily: {
        inter: ["Inter", "sans-serif"],
      },
    },
  },
  plugins: [],
};
