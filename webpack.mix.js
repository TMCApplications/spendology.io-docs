let mix = require('laravel-mix');
let build = require('./tasks/build.js');
let tailwindcss = require('tailwindcss');
let argv = require('yargs').argv;
let env = argv.env || 'unknown';

require('laravel-mix-purgecss');

mix.disableSuccessNotifications();
mix.setPublicPath('source/assets/build/');
mix.webpackConfig({
    plugins: [
        build.jigsaw,
        build.browserSync(),
        build.watch([
            'config.php',
            'source/**/*.md',
            'source/**/*.php',
            'source/**/*.scss',
        ]),
    ],
});

mix.js('source/_assets/js/main.js', 'js')
    .sourceMaps()
    .sass('source/_assets/sass/main.scss', 'css/main.css')
    .options({
        processCssUrls: false,
        postCss: [tailwindcss('./tailwind.config.js')],
    })
    .purgeCss({
        enabled: ['production', 'staging'].indexOf(env) !== -1,
        extensions: ['html', 'md', 'js', 'php', 'vue'],
        folders: ['source', `build_${env}`],
        whitelistPatterns: [/language/, /hljs/, /algolia/],
    })
    .version();
