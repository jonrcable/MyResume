
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

// updated to v4.4.1
require('./bootstrap');

window.Vue = require('vue');
window.Popper = require('popper.js').default;

// additional NPM components
var VueTyperPlugin = require('vue-typer').default;
Vue.use(VueTyperPlugin);

var BootstrapVue = require('bootstrap-vue').default;
Vue.use(BootstrapVue);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/Example.vue'));
Vue.component('typer-component', require('./components/Typer.vue'));
Vue.component('carousel-component', require('./components/Carousel.vue'));

const app = new Vue({
    el: '#app'
});
