
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
const VueScrollTo = require('vue-scrollto');
import InstantSearch from 'vue-instantsearch';

Vue.use(VueScrollTo);
Vue.use(InstantSearch);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('searchfrontpage', require('./components/SearchFrontpage.vue'));
Vue.component('searchbrowsepage', require('./components/SearchBrowsepage.vue'));
Vue.component('aboutfrontpage', require('./components/AboutFrontpage.vue'));
Vue.component('cocreatecontact', require('./components/CoCreateContact.vue'));
Vue.component('navigationbar', require('./components/NavigationBar.vue'));
Vue.component('aboutpage', require('./components/AboutPage.vue'));

const app = new Vue({
    el: '#app',
});

export default {
  name: 'App',
}
