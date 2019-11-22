const MeasurementUnitCreate = () => import('../../../pages/administration/measurementUnits/Create.vue');

export default {
    name: 'administration.measurementUnits.create',
    path: 'create',
    component: MeasurementUnitCreate,
    meta: {
        breadcrumb: 'create',
        title: 'Create Measurement Unit',
    },
};
