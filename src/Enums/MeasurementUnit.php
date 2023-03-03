<?php

namespace LaravelEnso\MeasurementUnits\Enums;

use LaravelEnso\Enums\Traits\Random;

enum MeasurementUnit: int
{
    use Random;

    case Piece = 1;
}
