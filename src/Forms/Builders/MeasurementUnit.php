<?php

namespace LaravelEnso\MeasurementUnits\Forms\Builders;

use LaravelEnso\Forms\Services\Form;
use LaravelEnso\MeasurementUnits\Models\MeasurementUnit as Model;

class MeasurementUnit
{
    private const TemplatePath = __DIR__.'/../Templates/measurementUnit.json';

    protected Form $form;

    public function __construct()
    {
        $this->form = new Form($this->templatePath());
    }

    public function create()
    {
        return $this->form->create();
    }

    public function edit(Model $measurementUnit)
    {
        return $this->form->edit($measurementUnit);
    }

    protected function templatePath(): string
    {
        return self::TemplatePath;
    }
}
