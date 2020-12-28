/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');


/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('nav-bar', require('./components/NavBar.vue').default);
Vue.component('homepage-component-section-1', require('./components/HomepageComponentSection1.vue').default);
Vue.component('homepage-component-section-2', require('./components/HomepageComponentSection2.vue').default);
Vue.component('homepage-component-section-3', require('./components/HomepageComponentSection3.vue').default);
Vue.component('footer-component', require('./components/FooterComponent.vue').default);
Vue.component('educator-profile-page', require('./components/UserProfilePage.vue').default);
Vue.component('classroom-component', require('./components/Classrooms/ClassroomComponent.vue').default);




/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});