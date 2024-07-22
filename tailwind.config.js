/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        "blue": "#164081"
      },
      fontSize: {
        "text-.5xl": "44px"
      },
      width: {
        '360': '360px',
        '468': '468px',
        '471': '471.14px',
        '500': '500.74px',
        '543': '543.26px',
        '598': '598px',
        '912': '912px',
        '1044': '1044px',
        '1519': '1519.2px'
      },
      height: {
        'section': '820px',
      },
      fontFamily: {
        "hanken-grotesk": ["Hanken Grotesk", "sans-serif"],
      }
    },
  },
  plugins: [],
}

