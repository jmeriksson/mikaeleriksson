let mix = require( 'laravel-mix' );

mix.js( 'src/js/main.js', 'dist/js' ).setPublicPath( 'dist' );
mix.sass( 'src/sass/style.scss', 'dist/css' );