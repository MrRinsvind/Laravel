var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.sass('app.scss')


    .styles([
    	// 'bootstrap-theme.css',
    	// 'bootstrap-theme.min.css',
    	'bootstrap.css',
    	'bootstrap.min.css',
    	'sb-admin.css',
    	'font-awesome.css'

	], './public/css/boot.css')
   	.scripts([
   		// 'bootstrap.js',
    	'bootstrap.min.js',
    	'jquery-1.11.1.min.js',
    	'sb-admin.js',
    	'jquery.metisMenu.js'

   	],'./public/js/boot.js')
   mix.copy('node_modules/bootstrap-sass/assets/fonts/bootstrap/','public/fonts/bootstrap');
});
