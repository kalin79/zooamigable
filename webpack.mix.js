const mix = require('laravel-mix');
/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.webpackConfig(webpack => {
    return {
        plugins: [
            new webpack.ProvidePlugin({
                $: 'jquery',
                jQuery: 'jquery',
                'window.jQuery': 'jquery'
            })
        ]
    };
});

mix.js('resources/js/app.js', 'public/js')
    .vue()
    .sass('resources/sass/frontend/main.sass', 'public/frontend/css')
    .options({
		terser: {
			terserOptions: {
				keep_fnames: true,
			},
		},
	})
    .postCss('resources/css/fonts.css', 'public/css', [
        //
    ]);
