<?php

namespace App\Enums;

use BenSampo\Enum\Enum;
use BenSampo\Enum\Contracts\LocalizedEnum;

final class RelationType extends Enum implements LocalizedEnum
{
    const Father = 0;
    const Mother = 1;
    const Brother = 2;
    const Sister = 3;
    const Grandfather = 4;
    const Grandmother = 5;
    const Stepfather = 6;
    const HusbandAunt = 7;
    const Uncle = 8;
    const Aunt = 9;
    const Uncle_M = 10;
    const Aunt_M = 11;
    const Brother_in_law = 12;
    const Cousin = 13;
    const Husband = 14;

}
