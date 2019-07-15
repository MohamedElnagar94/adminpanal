<?php

namespace App\Enums;

use BenSampo\Enum\Enum;
use BenSampo\Enum\Contracts\LocalizedEnum;

final class AppreciationType extends Enum
{
    const Excellent = 0;
    const VeryGood = 1;
    const Goood = 2;
    const Acceptable = 3;
}
