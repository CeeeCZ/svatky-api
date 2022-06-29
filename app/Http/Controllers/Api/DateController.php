<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\Factory\DayFactory;
use App\Services\Factory\WeekFactory;
use DateTime;
use Illuminate\Http\JsonResponse;

class DateController extends Controller
{
    public function __construct(
        public DayFactory $dayFactory,
        public WeekFactory $weekFactory
    ) {}

    public function getToday(): JsonResponse
    {
        return response()->json($this->dayFactory->createDay(new DateTime()));
    }

    public function getOneDay(string $inputDate): JsonResponse
    {
        return response()->json($this->dayFactory->createDay(new DateTime($inputDate)));
    }

    public function getOneWeek(string $inputDate): JsonResponse
    {
        return response()->json($this->weekFactory->createWeek(new DateTime($inputDate)));
    }

    public function getMoreDays(string $inputDate, string $interval): JsonResponse
    {
        return response()->json($this->dayFactory->createMoreDays(new DateTime($inputDate), $interval));
    }
}