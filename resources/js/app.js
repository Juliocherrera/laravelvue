/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue').default;

import ElementUI from 'element-ui';
import 'element-ui/lib/theme-chalk/index.css';

window.Vue.use(ElementUI);

import Swal from 'sweetalert2';
window.Swal = Swal;

export const EventBus = new Vue();
window.EventBus = EventBus;

Vue.component('apps', require('./components/Apps.vue').default);
Vue.component('Auth', require('./components/Auth.vue').default);

import router from './routes'

const app = new Vue({
    el: '#app',
    router
});
