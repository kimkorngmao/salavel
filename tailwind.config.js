/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      minheight: {
        'container-screen': 'calc(100vh - 112px - 24px)',
      },
    },
  },
  plugins: [],
}

