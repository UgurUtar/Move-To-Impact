<?php

namespace App\Http\Resources;

use App\Models\Availability;
use Illuminate\Http\Resources\Json\JsonResource;

class AvailabilityResource extends JsonResource
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

    public static function show()
    {
        $availabilities = Availability::orderBy('id', 'DESC')->orderBy('start', 'DESC')->with('consultant:id,name')->get();
        return AvailabilityResource::collection($availabilities);
    }
}
