import AboutList from '../components/admin/about/AboutList';

let AboutRoutes = [
    {
        path: '/',
        name: 'about.list',
        component: AboutList,
        meta: {
            middleware: {
                type: 'auth'
            }
        }
    },
];

export default AboutRoutes;