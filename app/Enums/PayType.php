<?php

namespace App\Enums;

use BenSampo\Enum\Contracts\LocalizedEnum;
use BenSampo\Enum\Enum;

final class PayType extends Enum implements LocalizedEnum
{
    const Bank = 0;
    const Check = 1;
    const Cache = 2;
}
