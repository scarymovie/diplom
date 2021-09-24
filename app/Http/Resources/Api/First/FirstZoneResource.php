<?php

namespace App\Http\Resources\Api\First;

use Illuminate\Http\Resources\Json\JsonResource;

class FirstZoneResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'Republic' => $this->Republic,
            'district' => $this->district,
            'region' => $this->region,
            'quarter' => $this->quarter,
            'renter' => $this->renter
        ];
    }
}
