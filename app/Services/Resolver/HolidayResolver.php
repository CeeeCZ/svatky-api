<?php

declare(strict_types=1);

namespace App\Services\Resolver;

use App\DTO\Holiday;
use DateTime;
use DateInterval;

class HolidayResolver
{
    public function getHoliday(string $month, string $day, string $year): Holiday
    {
        $holidays = [
            '1' => [
                '1' => 'Nový rok / Den obnovy samostatného českého státu'
            ],
            '5' => [
                '8' => 'Den vítězství'
            ],
            '7' => [
                '5' => 'Den slovanských věrozvěstů Cyrila a Metoděje',
                '6' => 'Den upálení mistra Jana Husa'
            ],
            '9' => [
                '28' => 'Den české státnosti',
            ],
            '10' => [
                '28' => 'Den vzniku samostatného československého státu',
            ],
            '11' => [
                '17' => 'Den boje za svobodu a demokracii',
            ],
            '12' => [
                '24' => 'Štědrý den',
                '25' => '1. svátek vánoční',
                '26' => '2. svátek vánoční',
            ],
        ];

        $easterDateTimeStamp = easter_date((int) $year);
        $easterDateBase = new DateTime(date('Y-m-d', $easterDateTimeStamp));
        $easterDateBase2 = new DateTime(date('Y-m-d', $easterDateTimeStamp));
        $easterMondayDate = $easterDateBase->add(new DateInterval('P2D'));
        $easterFridayDate = $easterDateBase2->sub(new DateInterval('P1D'));


        if ($month === $easterDateBase->format('n') && $day === $easterMondayDate->format('j')) {
            return new Holiday(true, 'Velikonoční pondělí');
        }

        if ($month === $easterDateBase2->format('n') && $day === $easterFridayDate->format('j')) {
            return new Holiday(true, 'Velký pátek');
        }

        if (isset($holidays[$month]) && isset($holidays[$month][$day])) {
            return new Holiday(true, $holidays[$month][$day]);
        }

        return new Holiday(false, null);
    }
}