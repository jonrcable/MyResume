
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

var VueScrollTo = require('vue-scrollto');
Vue.use(VueScrollTo);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// Vue.component('example-component', require('./components/Example.vue'));
// homepage typer componet
Vue.component('typer-component', require('./components/Typer.vue'));
// homepage carosel component
Vue.component('carousel-component', require('./components/Carousel.vue'));
// add home cooked hack to hover text with animated.css
Vue.component('animated-component', require('./components/Animated.vue'));
// my own custom timeline component
Vue.component('timeline-component', require('./components/Timeline.vue'));
// my own custom timeline component
Vue.component('tooltip-component', require('./components/ToolTips.vue'));

// start the vue app
const app = new Vue({
    el: '#app',
    methods: {
        // no global methods yet
    }
});