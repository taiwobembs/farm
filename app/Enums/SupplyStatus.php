<?php

namespace App\Enums;

enum SupplyStatus: string
{
    case INUSE = 'INUSE';
    case UNUSED = 'UNUSED';
    case EMPTY = 'EMPTY';
}