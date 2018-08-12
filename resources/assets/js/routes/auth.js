import Login from '../components/admin/auth/Login';
import Logout from '../components/admin/auth/Logout';
import Register from '../components/admin/auth/Register';

let AuthRoutes = [
    {
        path: '/',
        alias: '/login',
        name: 'login',
        component: Login,
        meta: {
            middleware: {
                type: 'visitor'
            }
        }
    },
    {
        path: '/register',
        name: 'registration',
        component: Register,
        meta: {
            middleware: {
                type: 'visitor'
            }
        }
    },
    {
        path: '/logout',
        name: 'logout',
        component: Logout,
        meta: {
            middleware: {
                type: 'auth'
            }
        }
    }
];

export default AuthRoutes;