require('./bootstrap');

window.Vue = require('vue');
axios.defaults.baseURL = 'http://localhost/projects/14.laravel_vue_crud/public';

Vue.component('my-thoughts-component', require('./components/MyThoughtsComponent.vue').default);
Vue.component('thought-component', require('./components/ThoughtComponent.vue').default);
Vue.component('form-component', require('./components/FormComponent.vue').default);

const app = new Vue({
    el: "#app"
});