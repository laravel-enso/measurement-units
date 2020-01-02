<?php

use LaravelEnso\Migrator\App\Database\Migration;
use LaravelEnso\Permissions\App\Enums\Types;

class CreateStructureForMeasurementUnits extends Migration
{
    protected $permissions = [
        ['name' => 'administration.measurementUnits.index', 'description' => 'Show index for measurement unit', 'type' => Types::Read, 'is_default' => false],
        ['name' => 'administration.measurementUnits.create', 'description' => 'Create measurement unit', 'type' => Types::Write, 'is_default' => false],
        ['name' => 'administration.measurementUnits.store', 'description' => 'Store a new measurement unit', 'type' => Types::Write, 'is_default' => false],
        ['name' => 'administration.measurementUnits.edit', 'description' => 'Edit measurement unit', 'type' => Types::Write, 'is_default' => false],
        ['name' => 'administration.measurementUnits.update', 'description' => 'Update measurement unit', 'type' => Types::Write, 'is_default' => false],
        ['name' => 'administration.measurementUnits.destroy', 'description' => 'Delete measurement unit', 'type' => Types::Write, 'is_default' => false],
        ['name' => 'administration.measurementUnits.initTable', 'description' => 'Init table for measurement unit', 'type' => Types::Read, 'is_default' => false],
        ['name' => 'administration.measurementUnits.tableData', 'description' => 'Get table data for measurement unit', 'type' => Types::Read, 'is_default' => false],
        ['name' => 'administration.measurementUnits.exportExcel', 'description' => 'Export excel for measurement unit', 'type' => Types::Read, 'is_default' => false],
        ['name' => 'administration.measurementUnits.options', 'description' => 'Get measurement unit options for select', 'type' => Types::Read, 'is_default' => false],
    ];

    protected $menu = [
        'name' => 'Measurement Units', 'icon' => 'balance-scale', 'route' => 'administration.measurementUnits.index', 'order_index' => 450, 'has_children' => false
    ];

    protected $parentMenu = 'Administration';
}
