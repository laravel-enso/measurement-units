<?php

namespace LaravelEnso\MeasurementUnits\Forms\Builders;

use LaravelEnso\Forms\Services\Form;
use LaravelEnso\MeasurementUnits\Models\MeasurementUnit;

class MeasurementUnitForm
{
    protected const TemplatePath = __DIR__.'/../Templates/measurementUnit.json';

    protected Form $form;

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
