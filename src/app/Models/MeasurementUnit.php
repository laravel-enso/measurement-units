<?php

namespace LaravelEnso\MeasurementUnits\app\Models;

use Illuminate\Database\Eloquent\Model;
use LaravelEnso\Tables\app\Traits\TableCache;

class MeasurementUnit extends Model
{
    use TableCache;

    protected $fillable = ['name', 'description'];
}
