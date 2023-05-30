
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

// updated to v4.4.1
require('./bootstrap');

window.Vue = require('vue').default;
window.Popper = require('popper.js').default;

// additional NPM components
var VueTyperPlugin = require('vue-typer').default;
Vue.use(VueTyperPlugin);

var BootstrapVue = require('bootstrap-vue').default;
Vue.use(BootstrapVue);

var VueScrollTo = require('vue-scrollto');
Vue.use(VueScrollTo);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

import Animated from './components/Animated.vue';
Vue.component('animated-component', Animated);

Vue.component("typer-component", () => import("./components/Typer.vue"));
Vue.component("carousel-component", () => import("./components/Carousel.vue"));
Vue.component("timeline-component", () => import("./components/Timeline.vue"));

// start the vue app
const app = new Vue({
    el: '#app',
    methods: {
        // no global methods yet
    }
});