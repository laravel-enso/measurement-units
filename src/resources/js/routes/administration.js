import routeImporter from '@core/modules/importers/routeImporter';

const routes = routeImporter(require.context('./administration', false, /.*\.js$/));
const RouterView = () => import('@core/bulma/pages/Router.vue');

export default {
    path: '/administration',
    component: RouterView,
    meta: {
        breadcrumb: 'administration',
    },
    children: routes,
};
