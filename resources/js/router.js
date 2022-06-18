
import Vue from 'vue';
import VueRouter from 'vue-router';

import Home from './components/Home';
import Login from './components/Login';
import Register from './components/Register';
import UserDashboard from './components/UserDashboard';


Vue.use(VueRouter);

export default new VueRouter({

    routes: [
        
        {
            path: '/',
            component: Home
        },
        {
            path: '/login',
            component: Login
        },

        {
            path: '/register',
            component: Register
        },

        {
            path: '/user-dashboard',
            component: UserDashboard
        },
    
    ],
    mode: 'history'

});