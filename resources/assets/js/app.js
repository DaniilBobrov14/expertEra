/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
import VueRouter from 'vue-router';

window.Vue.use(VueRouter);

import ExpertsIndex from './components/experts/ExpertsIndex.vue';
import ExpertsCreate from './components/experts/ExpertsCreate.vue';
import ExpertsEdit from './components/experts/ExpertsEdit.vue';

const routes = [
    {
        path: '/',
        components: {
            expertsIndex: ExpertsIndex
        }
    },
    {path: '/admin/experts/create', component: ExpertsCreate, name: 'createExpert'},
    {path: '/admin/experts/edit/:id', component: ExpertsEdit, name: 'editExpert'},
];

const router = new VueRouter({ routes });

const app = new Vue({ router }).$mount('#app');