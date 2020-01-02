<?php

namespace LaravelEnso\MeasurementUnits\App\Models;

use Illuminate\Database\Eloquent\Model;
use LaravelEnso\Helpers\App\Traits\AvoidsDeletionConflicts;
use LaravelEnso\Rememberable\App\Traits\Rememberable;
use LaravelEnso\Tables\App\Traits\TableCache;

class MeasurementUnit extends Model
{
    use AvoidsDeletionConflicts, Rememberable, TableCache;

    protected $fillable = ['name', 'description'];
}
