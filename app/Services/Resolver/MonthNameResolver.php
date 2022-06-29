<?php

declare(strict_types=1);

namespace App\Services\Resolver;


use App\DTO\MonthName;
use App\Enums\MonthNameEnum;
use Exception;

class MonthNameResolver
{
    public function getMonthName(string $monthNumber)
    {
        switch ($monthNumber) {
            case '1':
                return new MonthName(MonthNameEnum::NOM_JANUARY->value, MonthNameEnum::GEN_JANUARY->value);
            case '2':
                return new MonthName(MonthNameEnum::NOM_FEBRUARY->value, MonthNameEnum::GEN_FEBRUARY->value);
            case '3':
                return new MonthName(MonthNameEnum::NOM_MARCH->value, MonthNameEnum::GEN_MARCH->value);
            case '4':
                return new MonthName(MonthNameEnum::NOM_APRIL->value, MonthNameEnum::GEN_APRIL->value);
            case '5':
                return new MonthName(MonthNameEnum::NOM_MAY->value, MonthNameEnum::GEN_MAY->value);
            case '6':
                return new MonthName(MonthNameEnum::NOM_JUNE->value, MonthNameEnum::GEN_JUNE->value);
            case '7':
                return new MonthName(MonthNameEnum::NOM_JULY->value, MonthNameEnum::GEN_JULY->value);
            case '8':
                return new MonthName(MonthNameEnum::NOM_AUGUST->value, MonthNameEnum::GEN_AUGUST->value);
            case '9':
                return new MonthName(MonthNameEnum::NOM_SEPTEMBER->value, MonthNameEnum::NOM_SEPTEMBER->value);
            case '10':
                return new MonthName(MonthNameEnum::NOM_OCTOBER->value, MonthNameEnum::GEN_OCTOBER->value);
            case '11':
                return new MonthName(MonthNameEnum::NOM_NOVEMBER->value, MonthNameEnum::GEN_NOVEMBER->value);
            case '12':
                return new MonthName(MonthNameEnum::NOM_DECEMBER->value, MonthNameEnum::GEN_DECEMBER->value);
            default:
                throw new Exception('Month name cannot be resolved', 404);
        }
    }
}