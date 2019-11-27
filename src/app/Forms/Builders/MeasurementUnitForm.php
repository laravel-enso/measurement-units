<?php

namespace LaravelEnso\MeasurementUnits\app\Forms\Builders;

use LaravelEnso\Forms\app\Services\Form;
use LaravelEnso\MeasurementUnits\app\Models\MeasurementUnit;

class MeasurementUnitForm
{
    protected const TemplatePath = __DIR__.'/../Templates/measurementUnit.json';

    protected $form;

    public function __construct()
    {
        $this->form = new Form(static::TemplatePath);
    }

    public function create()
    {
        return $this->form->create();
    }

    public function edit(MeasurementUnit $measurementUnit)
    {
        return $this->form->edit($measurementUnit);
    }
}
