import './bootstrap';
import Vue from 'vue/dist/vue'
window.Vue = require('vue')

import App from './App.vue'
import VueRouter from 'vue-router'
import VueAxios from 'vue-axios'
import axios from 'axios'
import { routes } from './routes';

Vue.useAttrs(VueRouter)
Vue.useAttrs(VueAxios, axios)

const router = new VueRouter({
    mode: 'history',
    routes: routes
})

const app = new Vue({
    el: '#app',
    router: router,
    render: h => h(App),
})