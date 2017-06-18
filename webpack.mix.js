let mix = require('laravel-mix');


mix
    .js('resources/assets/js/app.js', 'public/js')
    .sass('resources/assets/sass/app.scss', 'public/css')
    .combine([
        // *************************************************************************************************************
        // vendor specific js
        // *************************************************************************************************************
        './resources/assets/vendor/jquery/jquery.min.js',
        './resources/assets/vendor/tether/tether.min.js',
        './resources/assets/vendor/bootstrap/js/bootstrap.min.js',
        './resources/assets/vendor/jquery.easing/jquery.easing.min.js',
        './resources/assets/vendor/owl-carousel/owl.carousel.js',
        './resources/assets/vendor/magnific-popup/jquery.magnific-popup.min.js',
        './resources/assets/vendor/vide/jquery.vide.min.js',
        './resources/assets/vendor/mixitup/mixitup.min.js',
        './resources/assets/vendor/wowjs/wow.min.js',
        './resources/assets/vendor/js/contact_me.js',
        './resources/assets/vendor/js/jqBootstrapValidation.js',
        './resources/assets/vendor/js/vitality.js',
        './resources/assets/vendor/js/vitality-mixitup.js',
    ], 'public/js/vendor.js')
    .combine(
        [
            // *************************************************************************************************************
            // vendor specific css
            // *************************************************************************************************************
            './resources/assets/vendor/bootstrap/css/bootstrap.min.css',
            './resources/assets/vendor/font-awesome/css/font-awesome.min.css',
            './resources/assets/vendor/owl-carousel/owl.carousel.css',
            './resources/assets/vendor/owl-carousel/owl.theme.css',
            './resources/assets/vendor/owl-carousel/owl.transitions.css',
            './resources/assets/vendor/magnific-popup/mangnific-popup.css',
            './resources/assets/vendor/animated.css/animated.min.css',
            './resources/assets/vendor/bootstrap/css/bootstrap-grid.css',
            './resources/assets/vendor/bootstrap/css/bootstrap-reboot.css',
            './resources/assets/vendor/device-mockups/device-mockups.min.css',
            // *************************************************************************************************************
            // vitality specific css
            // - Custom styles for this theme
            // - Uncomment the color scheme you want to use! Red is chosen by default!
            // *************************************************************************************************************
            // './resources/assets/vendor/vitality/css/vitality-aqua.css',
            // './resources/assets/vendor/vitality/css/vitality-blue.css',
            // './resources/assets/vendor/vitality/css/vitality-green.css',
            // './resources/assets/vendor/vitality/css/vitality-orange.css',
            // './resources/assets/vendor/vitality/css/vitality-pink.css',
            // './resources/assets/vendor/vitality/css/vitality-purple.css',
            './resources/assets/vendor/vitality/css/vitality-red.css',
            // './resources/assets/vendor/vitality/css/vitality-tan.css',
            // './resources/assets/vendor/vitality/css/vitality-turquoise.css',
            // './resources/assets/vendor/vitality/css/vitality-yellow.css',
        ], 'public/css/vendor.css')
    .copy('./resources/assets/vendor/img/agency/logo.svg','public/img/logo.svg')
    .copy('./resources/assets/vendor/img/agency/backgrounds/bg-header.jpg','public/img/bg-header.jpg')
    .copy('./resources/assets/img/AustinSkyLine.png','public/img/AustinSkyLine.png')
    .copy('./resources/assets/img/ResumeImage-small.png','public/img/ResumeImage-small.png')
    .copy('./resources/assets/img/facebookPic-bigger.png','public/img/facebookPic-bigger.png')
    .copy('./resources/assets/img/poles-small.jpg','public/img/poles-small.jpg')
;
