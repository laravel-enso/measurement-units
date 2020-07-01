<?php

use LaravelEnso\Migrator\Database\Migration;

class CreateStructureForMeasurementUnits extends Migration
{
    protected array $permissions = [
        ['name' => 'administration.measurementUnits.index', 'description' => 'Show index for measurement unit', 'is_default' => false],
        ['name' => 'administration.measurementUnits.create', 'description' => 'Create measurement unit', 'is_default' => false],
        ['name' => 'administration.measurementUnits.store', 'description' => 'Store a new measurement unit', 'is_default' => false],
        ['name' => 'administration.measurementUnits.edit', 'description' => 'Edit measurement unit', 'is_default' => false],
        ['name' => 'administration.measurementUnits.update', 'description' => 'Update measurement unit', 'is_default' => false],
        ['name' => 'administration.measurementUnits.destroy', 'description' => 'Delete measurement unit', 'is_default' => false],
        ['name' => 'administration.measurementUnits.initTable', 'description' => 'Init table for measurement unit', 'is_default' => false],
        ['name' => 'administration.measurementUnits.tableData', 'description' => 'Get table data for measurement unit', 'is_default' => false],
        ['name' => 'administration.measurementUnits.exportExcel', 'description' => 'Export excel for measurement unit', 'is_default' => false],
        ['name' => 'administration.measurementUnits.options', 'description' => 'Get measurement unit options for select', 'is_default' => false],
    ];

    protected array $menu = [
        'name' => 'Measurement Units', 'icon' => 'balance-scale', 'route' => 'administration.measurementUnits.index', 'order_index' => 450, 'has_children' => false,
    ];

    protected ?string $parentMenu = 'Administration';
}
