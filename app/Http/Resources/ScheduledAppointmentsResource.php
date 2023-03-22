<?php

namespace App\Http\Resources;

use App\Models\DemoAppointments;
use Illuminate\Http\Resources\Json\JsonResource;

class ScheduledAppointmentsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return parent::toArray($request);
    }

    public static function show() {
        $scheduledAppointments = DemoAppointments::with('consultant:id,name')->get();
        return ScheduledAppointmentsResource::collection($scheduledAppointments);
    }
}
