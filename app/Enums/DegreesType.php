<?php

namespace App\Enums;

use BenSampo\Enum\Enum;
use BenSampo\Enum\Contracts\LocalizedEnum;

final class DegreesType extends Enum
{
    const Diploma = 0;
    const Bachelor = 1;
    const Masters = 2;
    const Doctorate = 3;
}
