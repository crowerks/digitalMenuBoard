
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
require('jquery-ui');
require('./bootstrap');


window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */


Vue.component('subscriber-widget', require('./components/subscriber-widget.vue'));
Vue.component('admin-widget', require('./components/admin-widget.vue'));

const app = new Vue({
    el: '#app',
});

$("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
});

if ($(window).width() < "1024") {
    $("#wrapper").removeClass("toggled");
}
