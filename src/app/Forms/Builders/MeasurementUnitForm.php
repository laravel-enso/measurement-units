<?php

namespace LaravelEnso\MeasurementUnits\App\Forms\Builders;

use LaravelEnso\Forms\App\Services\Form;
use LaravelEnso\MeasurementUnits\App\Models\MeasurementUnit;

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
