

require('./bootstrap');

window.Vue = require('vue');
window.moment = require('moment');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('nav-bar', require('./components/NavBar.vue').default);
Vue.component('homepage-component-section-1', require('./components/HomepageComponentSection1.vue').default);
Vue.component('homepage-component-section-2', require('./components/HomepageComponentSection2.vue').default);
Vue.component('homepage-component-section-3', require('./components/HomepageComponentSection3.vue').default);
Vue.component('footer-component', require('./components/FooterComponent.vue').default);
Vue.component('educator-profile-page', require('./components/UserProfilePage.vue').default);
Vue.component('classrooms-page', require('./components/Classrooms/ClassroomsPage.vue').default);
Vue.component('course-component', require('./components/Courses/CourseComponent.vue').default);
Vue.component('classrooms-page-list-item', require('./components/Classrooms/ClassroomsPageListItem.vue').default);
Vue.component('course-toggle', require('./components/Courses/CourseToggle.vue').default);
Vue.component('active-toggle-component', require('./components/Classrooms/ActiveToggleComponent.vue').default);
Vue.component('visible-toggle-component', require('./components/Classrooms/VisibleToggleComponent.vue').default);
Vue.component('courses-list', require('./components/Courses/CoursesList.vue').default);
Vue.component('courses-attach-component', require('./components/Classrooms/CoursesAttachComponent.vue').default);



Vue.mixin({
    methods: {
        /*__(key, replacements = []) {
            return lang.get(key, replacements);
        },*/

        route,
    }
})


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
