/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['./src/**/*.{html,js}'],
  theme: {
    extend: {
      colors: {
        green: {
          500: '#22A62E'
        },
        blue: {
          700: '#1A5B8D'
        },
        red: {
          700: '#D80032'
        },
      },
      fontFamily: {
        'comic': ['Comic Neue'],
        'goldman': ['Goldman']
      }
    },
  },
  plugins: [],
}

