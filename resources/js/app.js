/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
import VueRouter from 'vue-router';
import VueAxios from 'vue-axios';
import Axios from 'axios';

Vue.use(VueRouter, VueAxios, Axios);
import Home from './components/Home.vue';
import User from './components/user.vue';
import File from './components/NewFile.vue';
import Data from './components/DataResult.vue';
import Guide from './components/UserGuide.vue';

const routes = [{
        name: 'home',
        path: '/',
        component: Home,
        meta: {
            title: 'Home | Dashboard mineCare'
        }
    },
    {
        path: '/user-managements',
        component: User,
        meta: {
            title: 'User Managements | Dashboard mineCare'
        }
    },
    {
        path: '/new-file',
        component: File,
        meta: {
            title: 'New File | Dashboard mineCare'
        }
    },
    {
        path: '/data-results',
        component: Data,
        meta: {
            title: 'Data Results | Dashboard mineCare'
        }
    },
    {
        path: '/user-guides',
        component: Guide,
        meta: {
            title: 'User Guides | Dashboard mineCare'
        }
    }

]

const router = new VueRouter({
    mode: 'history',
    routes: routes,
    linkActiveClass: 'mm-active'
});
new Vue(Vue.util.extend({
    router
}, App)).$mount('#App');

// META TITLE
export default {
    router,
    watch: {
        $route: function (to) {
            document.title = to.meta.title;
        }
    },
}
