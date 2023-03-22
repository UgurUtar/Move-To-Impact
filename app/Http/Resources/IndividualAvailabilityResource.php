<?php

namespace App\Http\Resources;

use App\Models\Availability;
use Illuminate\Http\Resources\Json\JsonResource;

class IndividualAvailabilityResource extends JsonResource
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

    public static function show($id)
    {
        $availabilities = Availability::with('consultant:id,name')->where('consultant_id', $id)->get();
        return AvailabilityResource::collection($availabilities);
    }
}
