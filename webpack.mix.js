let mix = require('laravel-mix');

// for large files; movies right now.
if (process.env.NODE_ENV === 'movies') {
    mix
        .copy('./resources/assets/mov/dataConsistency.mp4','public/mov/dataConsistency.mp4')
    ;

    return;
}

mix
    // build app.js, which contains Node and Vue js code
    .js([
            'resources/assets/js/app.js'
        ], 'public/js/app.js')
    // combine app.js with all other none Node and none Vue js code.
    // note: .scripts will work as well.
    // note: - replace .combine with .babel if running 'npm run production' to minify; seems to work better
    // note: - spNS.js needs to be the first file to combine/babel
    .combine(
        [
            './resources/assets/vendor/premise-software/psNS.js',
            './resources/assets/vendor/premise-software/psUtils.js',
            'public/js/app.js',
        ], 'public/js/app.js')
    .sass('resources/assets/sass/app.scss', 'public/css')
    .combine([
        './resources/assets/vendor/premise-software/psCommon.css',
        'public/css/app.css'
    ],'public/css/app.css')
    .combine(
        [
            // *********************************************************************************************************
            // vendor specific js
            // *********************************************************************************************************
            './resources/assets/vendor/jquery/jquery.min.js',
            './resources/assets/vendor/tether/tether.min.js',
            './resources/assets/vendor/bootstrap/js/bootstrap.min.js',
            './resources/assets/vendor/jquery.easing/jquery.easing.min.js',
            './resources/assets/vendor/owl-carousel/owl.carousel.js',
            // './resources/assets/vendor/magnific-popup/jquery.magnific-popup.min.js', // not using
            './resources/assets/vendor/vide/jquery.vide.min.js',
            './resources/assets/vendor/mixitup/mixitup.min.js',
            './resources/assets/vendor/wowjs/wow.min.js',
            './resources/assets/vendor/js/contact_me.js',
            './resources/assets/vendor/js/jqBootstrapValidation.js',
            './resources/assets/vendor/js/vitality.js',
            './resources/assets/vendor/js/vitality-mixitup.js',
        ], 'public/js/vendor.js')
    .sass('./node_modules/sweetalert2/src/sweetalert2.scss', 'public/css/vendor.css')
    .combine(
        [
            // *********************************************************************************************************
            // vendor specific css
            // *********************************************************************************************************
            './resources/assets/vendor/bootstrap/css/bootstrap.min.css',
            './resources/assets/vendor/font-awesome/css/font-awesome.min.css',
            './resources/assets/vendor/owl-carousel/owl.carousel.css',
            './resources/assets/vendor/owl-carousel/owl.theme.css',
            './resources/assets/vendor/owl-carousel/owl.transitions.css',
            // './resources/assets/vendor/magnific-popup/mangnific-popup.css', not using
            './resources/assets/vendor/animated.css/animated.min.css',
            './resources/assets/vendor/bootstrap/css/bootstrap-grid.css',
            './resources/assets/vendor/bootstrap/css/bootstrap-reboot.css',
            // './resources/assets/vendor/device-mockups/device-mockups.min.css', not using
            // *********************************************************************************************************
            // vitality specific css
            // - Custom styles for this theme
            // - Uncomment the color scheme you want to use! Red is chosen by default!
            // *********************************************************************************************************
            // './resources/assets/vendor/vitality/css/vitality-aqua.css',
            './resources/assets/vendor/vitality/css/vitality-blue.css',
            // './resources/assets/vendor/vitality/css/vitality-green.css',
            // './resources/assets/vendor/vitality/css/vitality-orange.css',
            // './resources/assets/vendor/vitality/css/vitality-pink.css',
            // './resources/assets/vendor/vitality/css/vitality-purple.css',
            // './resources/assets/vendor/vitality/css/vitality-red.css',
            // './resources/assets/vendor/vitality/css/vitality-tan.css',
            // './resources/assets/vendor/vitality/css/vitality-turquoise.css',
            // './resources/assets/vendor/vitality/css/vitality-yellow.css',
            './resources/assets/vendor/video-js/video-js.css',
            './resources/assets/vendor/premise-software/velocity.css',
            'public/css/vendor.css'
        ], 'public/css/vendor.css')
;

// if we are in production babel compile our app.js and minify and version all .js and .css
if (process.env.NODE_ENV === 'production') {
    mix
        .babel('public/js/app.js', 'public/js/app.js')
        .minify('public/js/app.js')
        .minify('public/js/vendor.js')
        .minify('public/css/app.css')
        .minify('public/css/vendor.css')
        .version();
}

// for development only
if (process.env.NODE_ENV === 'development') {
    return;
}

// for all environments
mix
    .copy('./resources/assets/vendor/img/agency/backgrounds/bg-header.jpg','public/img/bg-header.jpg')
    .copy('./resources/assets/img/AustinSkyLine-small.png','public/img/AustinSkyLine-small.png')
    .copy('./resources/assets/img/ResumeImage-small.png','public/img/ResumeImage-small.png')
    .copy('./resources/assets/img/facebookPic-bigger.png','public/img/facebookPic-bigger.png')
    .copy('./resources/assets/img/poles-small.jpg','public/img/poles-small.jpg')
    .copy('./resources/assets/img/ezslot-small.png','public/img/ezslot-small.png')
    .copy('./resources/assets/img/time-trax-small.png','public/img/time-trax-small.png')
    .copy('./resources/assets/img/photo-gallery-small.png','public/img/photo-gallery-small.png')
    .copy('./resources/assets/img/bullcreekdata-small.png','public/img/bullcreekdata-small.png')
    .copy('./resources/assets/img/design-pattern-background-small.png','public/img/design-pattern-background-small.png')
;

