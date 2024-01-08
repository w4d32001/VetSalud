/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/layouts/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors:{
        'fondo': '#F5F7FA',
        'fondo-1': '#EFF2F6',
        'texto': '#818795',
        'fondo-2': '#C7EBFF',
        'bordes': '#CACEDA'
      }
    },
  },
  plugins: [],
}

