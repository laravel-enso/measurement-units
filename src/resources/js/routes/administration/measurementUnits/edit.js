const MeasurementUnitEdit = () => import('../../../pages/administration/measurementUnits/Edit.vue');

export default {
    name: 'administration.measurementUnits.edit',
    path: ':measurementUnit/edit',
    component: MeasurementUnitEdit,
    meta: {
        breadcrumb: 'edit',
        title: 'Edit Measurement Unit',
    },
};
