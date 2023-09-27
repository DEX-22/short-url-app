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
          "primary": "#f4b261",
          "secondary": "#0cc9c3",
          "accent": "#f26080",
          "neutral": "#1c1c26",
          "base-100": "#2d3162",
          "info": "#1f42e0",
          "success": "#22b978",
          "warning": "#f5bd4d",
 "error": "#e94949",
        },
      }, */
    ]
  },
  plugins: [require("daisyui")],
}

