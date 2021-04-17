// webpack.mix.js

let mix = require( 'laravel-mix' );

mix.js( 'src/js/main.js', 'dist' ).setPublicPath( 'dist' );
mix.sass( 'src/sass/style.scss', 'dist' );