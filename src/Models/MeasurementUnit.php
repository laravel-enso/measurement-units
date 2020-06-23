<?php

namespace LaravelEnso\MeasurementUnits\Models;

use Illuminate\Database\Eloquent\Model;
use LaravelEnso\Helpers\Traits\AvoidsDeletionConflicts;
use LaravelEnso\Rememberable\Traits\Rememberable;
use LaravelEnso\Tables\Traits\TableCache;

class MeasurementUnit extends Model
{
    use AvoidsDeletionConflicts, Rememberable, TableCache;

    protected $guarded = ['id'];
}
