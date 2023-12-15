/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    colors: {
      'primary': '#4F4E4B',
      'secondary': '#E0AC51',
      'secondary100' : "#ECCB92",
      'edit' : '#2d59b3',
    },
  },
  plugins: [
    require('flowbite/plugin')
  ],
}

