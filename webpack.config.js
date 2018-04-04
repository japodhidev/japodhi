var Encore = require('@symfony/webpack-encore');

Encore
    // the project directory where compiled assets will be stored
    .setOutputPath('public/build/')
    // the public path used by the web server to access the previous directory
    .setPublicPath('/build')

    // uncomment to create hashed filenames (e.g. app.abc123.css)
    // .enableVersioning(Encore.isProduction())

    // uncomment to define the assets of the project
    .addEntry('js/bootstrap', './assets/js/bootstrap.min.js')
    .addEntry('js/google_map', './assets/js/google_map.js')
    .addEntry('js/main', './assets/js/main.js')
    .addEntry('js/jquery.countTo', './assets/js/jquery.countTo')
    .addEntry('js/jquery.easing.1.3', './assets/js/jquery.easing.1.3')
    .addEntry('js/jquery', './assets/js/jquery.magnific-popup.min.js')
    .addEntry('js/jquery.min', './assets/js/jquery.min.js')
    .addEntry('js/jquery.stellar.min', './assets/js/jquery.stellar.min')
    .addEntry('js/jquery.style.switcher', './assets/js/jquery.style.switcher.js')
    .addEntry('js/jquery.waypoints.min', './assets/js/jquery.waypoints.min.js')
    .addEntry('js/magnific-popup-options', './assets/js/magnific-popup-options.js')
    .addEntry('js/modernizr-2.6.2.min', './assets/js/modernizr-2.6.2.min.js')
    .addEntry('js/respond.min', './assets/js/respond.min.js')

    .addStyleEntry('css/animate', './assets/css/animate.css')
    .addStyleEntry('css/icomoon', './assets/css/icomoon.css')
    .addStyleEntry('css/simple-line-icons', './assets/css/simple-line-icons.css')
    .addStyleEntry('css/magnific-popup', './assets/css/magnific-popup.css')
    .addStyleEntry('css/bootstrap', './assets/css/bootstrap.css')
    .addStyleEntry('css/pink', './assets/css/style3.css')


    // uncomment if you use Sass/SCSS files
    // allow sass/scss files to be processed
    .enableSassLoader()

    // uncomment for legacy applications that require $/jQuery as a global variable
    .autoProvidejQuery()

    .enableSourceMaps(!Encore.isProduction())

    .cleanupOutputBeforeBuild()

;

module.exports = Encore.getWebpackConfig();
