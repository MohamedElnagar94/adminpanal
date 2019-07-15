<?php

namespace App\Enums;

use BenSampo\Enum\Enum;
use BenSampo\Enum\Contracts\LocalizedEnum;

final class ReligionType extends Enum
{
    const Islam = 0;
    const Christianity = 1;
    const Judaism = 2;
    const Other = 3;
}
