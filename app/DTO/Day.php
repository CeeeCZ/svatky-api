<?php

declare(strict_types=1);

namespace App\DTO;

class Day
{
    public function __construct(
        public string $date,
        public string $dayNumber,
        public string $dayInWeek,
        public string $monthNumber,
        public MonthName $month,
        public string $year,
        public string $name,
        public bool $isHoliday,
        public ?string $holidayName
    ) {}
}