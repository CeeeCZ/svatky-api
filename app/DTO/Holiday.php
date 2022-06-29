<?php

declare(strict_types=1);

namespace App\DTO;

class Holiday
{
    public function __construct(
        public bool $isHoliday,
        public ?string $holidayName
    ) {}

    /**
     * @return bool
     */
    public function isHoliday(): bool
    {
        return $this->isHoliday;
    }

    /**
     * @return string|null
     */
    public function getHolidayName(): ?string
    {
        return $this->holidayName;
    }
}