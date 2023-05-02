/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['./**/*.{html, php}'],
  darkMode: 'class',
  theme: {
    extend: {
      colors: {
        mainColor: '#050C2A',
        hoverColor: '#DE4A0B',
        textSecondary: '#969fa8'
      },
      padding: {
        big: '50px'
      },
      width: {
        whead: '1600px',
        wlg: '1028px',
        wmd: '768px',
        wsm: '480px',
        wbook: '165px'
      },
      height: {
        hbook: '250px'
      },
      fontFamily: {
        Raleway: ['Raleway']
      },
      container: {
       
      },
      screens: {
        sm: '480px',
        md: '768px',
        lg: '1028px',
        mm: '1400px',
        xl: '1600px',
        bg: '1920px'
      }
    },
  },
  plugins: [],
}
