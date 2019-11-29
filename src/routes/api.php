<?php
Route::middleware(['web', 'auth', 'core'])
    ->group(function () {
        Route::namespace('LaravelEnso\MeasurementUnits\app\Http\Controllers\Administration\MeasurementUnits')
            ->prefix('api/administration/measurementUnits')->as('administration.measurementUnits.')
            ->group(function () {
                Route::get('create', 'Create')->name('create');
                Route::post('', 'Store')->name('store');
                Route::get('{measurementUnit}/edit', 'Edit')->name('edit');

                Route::patch('{measurementUnit}', 'Update')->name('update');

                Route::delete('{measurementUnit}', 'Destroy')->name('destroy');

                Route::get('initTable', 'InitTable')->name('initTable');
                Route::get('tableData', 'TableData')->name('tableData');
                Route::get('exportExcel', 'ExportExcel')->name('exportExcel');

                Route::get('options', 'Options')->name('options');
            });
    });
