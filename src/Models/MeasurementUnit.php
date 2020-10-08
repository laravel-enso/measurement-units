<?php

namespace LaravelEnso\MeasurementUnits\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use LaravelEnso\Helpers\Traits\AvoidsDeletionConflicts;
use LaravelEnso\Rememberable\Traits\Rememberable;
use LaravelEnso\Tables\Traits\TableCache;

class MeasurementUnit extends Model
{
    use AvoidsDeletionConflicts, HasFactory, Rememberable, TableCache;

    protected $guarded = ['id'];
}
