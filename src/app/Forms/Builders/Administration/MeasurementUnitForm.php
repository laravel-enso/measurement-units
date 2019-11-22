<?php

namespace LaravelEnso\MeasurementUnits\app\Forms\Builders\Administration;

use LaravelEnso\MeasurementUnits\app\Models\MeasurementUnit;
use LaravelEnso\Forms\app\Services\Form;

class MeasurementUnitForm
{
    protected const TemplatePath = __DIR__.'/../../Templates/Administration/measurementUnit.json';

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
