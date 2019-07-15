<?php

namespace App\Enums;

use BenSampo\Enum\Enum;
use BenSampo\Enum\Contracts\LocalizedEnum;

final class SociStatusType extends Enum
{
    const Single = 0;
    const Married = 1;
    const Widowed = 2;
    const Divorcee = 3;
}
