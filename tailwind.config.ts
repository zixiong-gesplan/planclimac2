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
    darkMode: 'false',
    theme: {
        extend: {
            fontFamily: {
                sans: ['Open Sans', 'Inter', ...defaultTheme.fontFamily.sans],
            },
            animation: {
                ["infinite-slider"]: "infiniteSlider 30s linear infinite",
            },
            keyframes: {
                infiniteSlider: {
                  "0%": { transform: "translateX(0)" },
                  "100%": {
                    transform: "translateX(calc(-300px * 6))",
                  },
                },
            },
        },
    },
    corePlugins: {
        aspectRatio: false,
    },
    plugins: [
        require('@tailwindcss/aspect-ratio'),
    ],
    safelist: [
        'list-decimal',
        'list-disc'
    ]
};
