module.exports = {
  theme: {
    screens: {
      'xs': '100px',
      'sm': '576px',
      'md': '768px',
      'lg': '992px',
      'xl': '1200px',
    },
    extend: {
      colors: {
        gray: {
          100: '#f9f9f9',
          200: '#ecf0f3',
          300: '#e2e8f0',
          400: '#e2e8ee',
          500: '#a0aec0',
          600: '#718096',
          700: '#4a5568',
          800: '#3e4852',
          900: '#1f2e41',
        },
        blue: {
          100: '#ebf8ff',
          200: '#bee3f8',
          300: '#90cdf4',
          400: '#63b3ed',
          500: '#4299e1',
          600: '#0174d4',
          700: '#2b6cb0',
          800: '#1a4d8c',
          900: '#24548f',
        },
        navy: {
          500: '#120066',
        },
        'sea-green': {
          100: '#E7F4F3',
          200: '#C2E3E1',
          300: '#9DD2CF',
          400: '#54B0AC',
          500: '#0B8E88',
          600: '#0A807A',
          700: '#075552',
          800: '#05403D',
          900: '#032B29',
        },
        'violet': {
          100: '#FDE6EF',
          200: '#FABFD6',
          300: '#F799BD',
          400: '#F04D8C',
          500: '#EA005A',
          600: '#D30051',
          700: '#8C0036',
          800: '#690029',
          900: '#46001B',
        },
      },
      fontFamily: {
        sans: [
          "Nunito Sans",
          '-apple-system',
          'BlinkMacSystemFont',
          '"Segoe UI"',
          'Roboto',
          '"Helvetica Neue"',
          'Arial',
          '"Noto Sans"',
          'sans-serif',
          '"Apple Color Emoji"',
          '"Segoe UI Emoji"',
          '"Segoe UI Symbol"',
          '"Noto Color Emoji"',
        ]
      },
      height: {
        '9': '2.2rem',
      },
      leading: {
        'normal': 1.6,
        'loose': 1.75,
      },
      margin: {
        '7': '1.75rem',
        '9': '2.25rem',
      },
      maxHeight: {
          '80': '80vh'
      },
      maxWidth: {
        '7xl': '80rem',
        '8xl': '90rem',
        'none': 'none',
      },
      padding: {
        '7': '1.75rem'
      },
      shadows: {
        'lg': '0 -1px 27px 0 rgba(0, 0, 0, 0.04), 0 4px 15px 0 rgba(0, 0, 0, 0.08)',
      },
      fontSize: {
        'xs': '.8rem',
        'sm': '.925rem',
        '3xl': '1.75rem',
        '4xl': '2.125rem',
        '5xl': '2.625rem',
        '6xl': '10rem',
      },
    },
  },
  variants: {
    borderRadius: ['responsive', 'focus'],
    borderWidths: ['responsive', 'active', 'focus'],
    width: ['responsive', 'focus'],
  },
  plugins: [
    function({ addUtilities }) {
      const newUtilities = {
        '.transition-fast': {
          transition: 'all .2s ease-out',
        },
        '.transition': {
          transition: 'all .5s ease-out',
        },
      };

      addUtilities(newUtilities)
    }
  ],
};
