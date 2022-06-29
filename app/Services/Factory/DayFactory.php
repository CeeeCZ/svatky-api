<?php

declare(strict_types=1);

namespace App\Services\Factory;

use App\DTO\Day;
use App\Services\Resolver\DayOfWeekResolver;
use App\Services\Resolver\HolidayResolver;
use App\Services\Resolver\MonthNameResolver;
use App\Services\Resolver\NameResolver;
use DateInterval;
use DatePeriod;
use DateTime;
use Exception;

class DayFactory
{
    public function __construct(
        public DayOfWeekResolver $dayOfWeekResolver,
        public MonthNameResolver $monthNameResolver,
        public NameResolver $nameResolver,
        public HolidayResolver $holidayResolver
    ) {}

    public function createDay(DateTime $date): Day
    {
        $dayInWeekNum = $date->format('N');
        $monthNumber = $date->format('n');
        $dayNumber = $date->format('j');
        $year = $date->format('Y');
        $holiday = $this->holidayResolver->getHoliday($monthNumber,$dayNumber, $year);

        return new Day(
            $date->format('Y-m-d'),
            $dayNumber,
            $this->dayOfWeekResolver->getDayOfWeekName($dayInWeekNum),
            $monthNumber,
            $this->monthNameResolver->getMonthName($monthNumber),
            $year,
            $this->nameResolver->resolveName((int) $monthNumber, (int) $dayNumber),
            $holiday->isHoliday(),
            $holiday->getHolidayName()
        );
    }

    /**
     * @param DateTime $inputDate
     * @param string $interval
     * @return Day[]|Day
     * @throws Exception
     */
    public function createMoreDays(DateTime $inputDate, string $interval): array|Day
    {
        if ((int) $interval <= 0) {
            throw new Exception('Interval must be positive, non zero number');
        }

        if ($interval === '1') {
            return $this->createDay($inputDate);
        }

        $startDate = new DateTime($inputDate->format('Y-m-d'));
        $endDate = $inputDate->add(new DateInterval('P' . $interval . 'D'));
        $dates = new DatePeriod($startDate, new DateInterval('P1D'), $endDate);
        $days = [];

        foreach ($dates as $date) {
            $days[] = $this->createDay($date);
        }

        return $days;
    }
}