<?php

declare(strict_types=1);

namespace App\DTO;

class MonthName
{
    public function __construct(
        public string $nominative,
        public string $genitive
    ) {}
}