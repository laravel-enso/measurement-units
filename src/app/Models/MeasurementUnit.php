<?php

namespace LaravelEnso\MeasurementUnits\app\Models;

use Illuminate\Database\Eloquent\Model;
use LaravelEnso\Rememberable\app\Traits\Rememberable;
use LaravelEnso\Tables\app\Traits\TableCache;

class MeasurementUnit extends Model
{
    use Rememberable, TableCache;

    protected $fillable = ['name', 'description'];
}
