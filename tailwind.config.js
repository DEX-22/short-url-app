/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",],
  theme: {
    extend: {},
  },
  daisyui: {
    themes:[
      "forest",
      /* {
        mytheme: {        
          "primary": "#d4b3f2",
          "secondary": "#7cefba",
          "accent": "#f74cd2",
          "neutral": "#382c3a",
          "base-100": "#223749",
          "info": "#a6bae7",
          "success": "#60ebbb",
          "warning": "#fa9919",
          "error": "#fa2e05",
        },
      }, */
    ]
  },
  plugins: [require("daisyui")],
}

