<?php

namespace LaravelEnso\MeasurementUnits\Enums;

use LaravelEnso\Enums\Traits\Enum;

enum MeasurementUnit: int
{
    use Enum;

    case Piece = 1;
}
