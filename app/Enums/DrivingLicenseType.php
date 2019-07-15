<?php

namespace App\Enums;

use BenSampo\Enum\Enum;
use BenSampo\Enum\Contracts\LocalizedEnum;

final class DrivingLicenseType extends Enum
{
    const SpecialLicense = 0;
    const FirstClassLicense = 1;
    const secondClassLicense = 2;
    const thirdClassLicense = 3;
}
