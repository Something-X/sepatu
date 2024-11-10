import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Poppins', 'sans-serif'],
            },

            letterSpacing: {
                '2px': '2px', 
              },
              
              animation: {
                  'show-content': 'showContent 0.5s ease-in-out forwards',
                  'positionitem2': 'positionitem2 1s ease-in-out forwards',
                  'positionitem3': 'positionitem3 0.7s ease-in-out forwards',
                  'positionitem4': 'positionitem4 0.9s ease-in-out forwards',
                  'positionitem5': 'positionitem5 1.1s ease-in-out forwards',
                },
                keyframes: {
                showContent: {
                  '0%': {
                    transform: 'translateY()',
                    filter: 'blur(30px)',
                    opacity: '0',
                  },
                  '100%': {
                    transform: 'translateY(0)',
                    filter: 'blur(0)',
                    opacity: '1',
                  },
                },
                positionitem2: {
                  '0%': { 
                    transform: 'translateY(10%)',
                    opacity: '0',
                  },
                  '100%': { 
                    transform: 'translateY()',
                    filter: '0',
                    opacity: '1', 
                  }, // Sesuaikan dengan posisi target
                },
                positionitem3: {
                  '0%': { 
                    transform: 'translateX(0) translate(0)',
                    filter: '0',
                    zIndex: '10',
                    opacity: '100', 
                  },
                  '100%': { 
                    transform: 'translateX(50%) translate(10%)',
                    filter: 'blur(10px)',
                    zIndex: '9',
                    opacity: '100', 
                  }, // Sesuaikan dengan posisi target
                },
                positionitem4: {
                  '0%': { 
                    transform: 'translateX(50%) translate(10%)',
                    filter: 'blur(10px)',
                    zIndex: '9',
                    opacity: '100', 
                  },
                  '100%': { 
                    transform: 'translateX(90%) translate(20%)',
                    filter: 'blur(30px)',
                    zIndex: '8',
                    opacity: '100', 
                  }, // Sesuaikan dengan posisi target
                },
                positionitem5: {
                  '0%': { 
                    transform: 'translateX(90%) translate(20%)',
                    filter: 'blur(30px)',
                    zIndex: '8',
                    opacity: '100', 
                  },
                  '100%': { 
                    transform: 'translateX(120%) translate(30%)',
                    filter: 'blur(40px)',
                    zIndex: '7',
                    opacity: '0', 
                  }, // Sesuaikan dengan posisi target
                },
              },  
        },
    },
    plugins: [],
};
