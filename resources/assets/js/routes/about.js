import AboutList from '../components/admin/about/AboutList';
import AboutForm from '../components/admin/about/AboutForm';

let AboutRoutes = [
    {
        path: '/',
        name: 'about.list',
        component: AboutList,
        meta: {
            middleware: {
                type: 'auth'
            }
        },
    },
    {
        path: 'edit/:update',
        name: 'about.edit',
        component: AboutForm,
        props: true,
        meta: {
            middleware: {
                type: 'auth'
            }
        },
    },
    {
        path: 'create',
        name: 'about.create',
        component: AboutForm,
        meta: {
            middleware: {
                type: 'auth'
            }
        },
    }
];

export default AboutRoutes;