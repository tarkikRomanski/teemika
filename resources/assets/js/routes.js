import Vue from 'vue';
import VueRouter from 'vue-router';

// custom components
import Auth from './components/admin/auth/Auth';
import Dashboard from './components/admin/Dashboard';
import About from './components/admin/about/About';
//

// routes
import AuthRoutes from './routes/auth';
import AboutRoutes from './routes/about';
//

Vue.use(VueRouter);

const router = new VueRouter({
    routes: [
        {
            path: '/auth',
            name: 'authentication',
            component: Auth,
            children: AuthRoutes,
        },
        {
            path: '/',
            name: 'dashboard',
            component: Dashboard,
            meta: {
                middleware: {
                    type: 'auth'
                }
            }
        },
        {
            path: '/about',
            name: 'about',
            component: About,
            children: AboutRoutes
        }
    ],


});

export default router;