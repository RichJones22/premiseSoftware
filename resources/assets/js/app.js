
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

// window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// Vue.component('example', require('./components/Example.vue'));
//
// const app = new Vue({
//     el: '#app'
// });


$(document).ready(function(){
    let navigationFn = {
        goToSection: function(id) {
            $('html, body').animate({
                scrollTop: $(id).offset().top
            }, 0);
        }
    };

    // $('#portGrid01').click(function(){
    //     $('#portGrid01').removeClass('mix');
    // });

    $('.modal-dismiss').click(function(){
        // $('#portfolio').click();
        // window.location.href = '#portfolio';
        location.reload();
        // navigationFn.goToSection('#portfolio');
        // $.scrollTo($("#portfolio"), { duration: 0});
    });
});