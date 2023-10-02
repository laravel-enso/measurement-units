<?php

namespace LaravelEnso\MeasurementUnits\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MeasurementUnit extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
        ];
    }
}
