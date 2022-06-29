<?php

declare(strict_types=1);

namespace App\Enums;

enum DaysOfWeekEnum: string
{
    case MONDAY = 'pondělí';
    case TUESDAY = 'úterý';
    case WEDNESDAY = 'středa';
    case THURSDAY = 'čtvrtek';
    case FRIDAY = 'pátek';
    case SATURDAY = 'sobota';
    case SUNDAY = 'neděle';
}