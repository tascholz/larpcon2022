require('./bootstrap');

import router from "./routes"
import VueRouter from "vue-router";
import Vue from "vue";
import axios from "axios";

window.Vue = require('vue').default;


Vue.component('index', require('./main/Index.vue').default);

Vue.use(VueRouter);

const app = new Vue({
    el: '#app',
    router,
});
