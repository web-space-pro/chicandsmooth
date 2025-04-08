const defaultTheme = require('tailwindcss/defaultTheme');
module.exports = {
  purge: {
    mode: 'layers',
    content: [
      'function.php',
      'index.php',
      'header.php',
      '404.php',
      'archive-product.php',
      'comments.php',
      'sidebar.php',
      'footer.php',
      'page.php',
      'front-page.php',
      'single-services.php',
      'single.php',
      'content-parts/content.php',

      'block-parts/tpl-slider.php',
      'block-parts/tpl-banner.php',
      'block-parts/tpl-promo-products.php',
    ],
  },
  darkMode: false,
  theme: {
    extend: {
      fontFamily: {
        'geologica': ['geologica','sans-serif'],
        'qanelas': ['qanelas','sans-serif'],
      },
      container: {
        center: true,
        padding: '1rem',
        screens: {
          'xs': '100%',
          'sm': '885px',
          'md': '992px',
          'lg': '1024px',
          'xl': '1140px',
          '2xl': '1240px'
        }
      },
      screens: {
        '2xs': '360px',
        'xs': '640px',
        'sm': '768px',
        'md': '992px',
        'lg': '1024px',
        'xl': '1280px',
        '2xl': '1366px',
        '3xl': '1600px',
        '4xl': '1920px',
      },
      colors: {
        accent: '#7fcabf',
        white: {
          10: '#ffffff',
          20: '#f7fafa',
          30: '#f1f2ea',
          40: '#f2f7f7',
          50: '#e6f0ee',
          60: '#d5e3e1',
          70: '#ecf7f5',
        },
        green:{
          10: '#53a69a',
          20: '#2b3332',
          30: '#677371',

        },
      },
      boxShadow: {
        'icon': '0 0 5px #cca670',
        'input': '0 0 10px #cca670',
        'popup': '0 0 8px 1px rgba(217,217,217,0.5)',
      },
      backgroundImage: {
        'gradient': "linear-gradient(180deg, rgba(245, 245, 245, 0) 0%, rgba(245, 245, 245, 0.75) 100%)",
        'gradient-black': 'linear-gradient(180deg, rgba(34, 34, 34, 0) 0%, rgba(34, 34, 34, 0.75) 100%)',
      },
      letterSpacing:{
        'tight': '-0.02em'
      }
    },
  },
  plugins: [],
}
