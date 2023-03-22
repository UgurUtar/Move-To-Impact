<?php
namespace App\Services;

use Carbon\Carbon;
use App\Models\Availability;

class AppointmentService
{
    public function getAppointmentsByDate($date)
    {
        $availabilities = Availability::with('consultant')
            ->where('date', $date)
            ->orderBy('consultant_id')
            ->get();

        $groupedTimeSlots = collect($availabilities)
            ->groupBy('consultant_id')
            ->map(function ($consultantAvailabilities) {
                return [
                    'id' => $consultantAvailabilities->first()->consultant_id,
                    'name' => $consultantAvailabilities->first()->consultant->name,
                    'avatar' => $consultantAvailabilities->first()->consultant->avatar,
                    'date' => $consultantAvailabilities->first()->date,
                    'timeSlots' => $this->getAvailableTimeSlots($consultantAvailabilities),
                ];
            })
            ->values()
            ->toArray();

        return $groupedTimeSlots;
    }

    private function getAvailableTimeSlots($availabilities): array
    {
        $timeSlots = collect($availabilities)
            ->flatMap(function ($availability) {
                $startTime = Carbon::parse($availability->date . ' ' . $availability->start);
                $endTime = Carbon::parse($availability->date . ' ' . $availability->end);

                $timeSlots = [];

                while ($startTime < $endTime) {
                    $timeSlots[] = $startTime->toTimeString() . ' - ' . $startTime->addMinutes(30)->toTimeString();
                }

                return $timeSlots;
            })
            ->values()
            ->toArray();

        return $timeSlots;
    }
}
