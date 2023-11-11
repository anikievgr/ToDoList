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

mix.styles(['resources/css/appMain.css'], 'public/css/appMain.css');
mix.styles(['resources/css/stages/stages.css'], 'public/css/stages/stages.css');
// компоненты (кнопки, ссылки и тд)
mix.styles(

    ['resources/css/components/add.css'], 
    
'public/css/components.css');

//все для форм
mix.styles(

    [
        'resources/css/form/input.css',
        'resources/css/form/form.css',
        'resources/css/form/footer.css',
        'resources/css/form/errors.css',
    ],
    
    
'public/css/form.css');