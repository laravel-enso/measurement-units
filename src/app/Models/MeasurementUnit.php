<?php

namespace LaravelEnso\MeasurementUnits\app\Models;

use Illuminate\Database\Eloquent\Model;
use LaravelEnso\Helpers\app\Traits\AvoidsDeletionConflicts;
use LaravelEnso\Rememberable\app\Traits\Rememberable;
use LaravelEnso\Tables\app\Traits\TableCache;

class MeasurementUnit extends Model
{
    use AvoidsDeletionConflicts, Rememberable, TableCache;

    protected $fillable = ['name', 'description'];
}
