const mix = require('laravel-mix');

mix.js('assets/src/js/app.js', 'assets/dist/js')
    .sass('assets/src/scss/app.scss', 'assets/dist/css', {}, [
        require('@tailwindcss/postcss'),
        require('autoprefixer'),
    ])
    .copy('assets/src/js/plugins', 'assets/dist/js/plugins')
    .copy('assets/src/fonts', 'assets/dist/fonts')
    .options({
        processCssUrls: false,
    });

mix.webpackConfig({
    watchOptions: {
        ignored: [
            '**/node_modules/**',
            '**/assets/dist/**',
            '**/mix-manifest.json',
            '**/*.css.map',
        ],
    },
});

