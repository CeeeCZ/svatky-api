<?php

declare(strict_types=1);

namespace App\Services\Factory;

use App\DTO\Day;
use App\DTO\Week;
use DateInterval;
use DatePeriod;
use DateTime;

class WeekFactory
{
    public function __construct(
        public DayFactory $dayFactory
    ) {}

    /**
     * @param DateTime $inputDate
     * @return Day[]
     * @throws \Exception
     */
    public function createWeek(DateTime $inputDate): array
    {
        $startDate = new DateTime($inputDate->format('Y-m-d'));
        $endDate = $inputDate->add(new DateInterval('P7D'));
        $dates = new DatePeriod($startDate, new DateInterval('P1D'), $endDate);
        $days = [];

        foreach ($dates as $date) {
            $days[] = $this->dayFactory->createDay($date);
        }

        return $days;
    }
}