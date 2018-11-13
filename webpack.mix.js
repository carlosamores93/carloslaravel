const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */


mix.js('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css');



/*
// Run all Mix tasks...
npm run dev

// Run all Mix tasks and minify output...
npm run production
*/


mix.styles([
		'resources/assets/plugins/bootstrap/bootstrap.min.css',
		'resources/assets/plugins/ionicons/ionicons.min.css',
		'resources/assets/plugins/animate-css/animate.css',
		'resources/assets/plugins/slider/slider.css',
		'resources/assets/plugins/owl-carousel/owl.carousel.css',
		'resources/assets/plugins/owl-carousel/owl.theme.css',
		'resources/assets/plugins/facncybox/jquery.fancybox.css',
		'resources/assets/css/style.css'
	], 'public/css/all.css');

