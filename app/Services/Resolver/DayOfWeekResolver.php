<?php

declare(strict_types=1);

namespace App\Services\Resolver;

use App\Enums\DaysOfWeekEnum;
use Exception;

class DayOfWeekResolver
{
    public function getDayOfWeekName(string $dayOfWeek): string
    {
        switch ($dayOfWeek) {
            case '1':
                return DaysOfWeekEnum::MONDAY->value;
            case '2':
                return DaysOfWeekEnum::TUESDAY->value;
            case '3':
                return DaysOfWeekEnum::WEDNESDAY->value;
            case '4':
                return DaysOfWeekEnum::THURSDAY->value;
            case '5':
                return DaysOfWeekEnum::FRIDAY->value;
            case '6':
                return DaysOfWeekEnum::SATURDAY->value;
            case '7':
                return DaysOfWeekEnum::SUNDAY->value;
            default:
                throw new Exception('Day of week cannot be resolved', 404);
        }
    }
}