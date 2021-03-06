
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// Vue.component('example', require('./components/Example.vue'));
Vue.component('contact-us-email', require('./components/app/email/contactUsEmail.vue').default);
Vue.component('ps-footer', require('./components/app/email/footer.vue').default);

new Vue({
    el: '#app'
});


// global scope javascript; will be part of app.js
$(document).ready(function(){
    psNS.ps.utils.reloadMainNavBar();
    psNS.ps.utils.timetraxVidModalClose();
    psNS.ps.googleAnalytics.init();
});