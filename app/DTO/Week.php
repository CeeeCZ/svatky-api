<?php

declare(strict_types=1);

namespace App\DTO;

class Week
{
    /**
     * @param Day[] $days
     */
    public function __construct(
        Day ...$days
    ) {
        $this->week = $days;
    }
}