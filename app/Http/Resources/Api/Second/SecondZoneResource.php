<?php

namespace App\Http\Resources\Api\Second;

use Illuminate\Http\Resources\Json\JsonResource;

class SecondZoneResource extends JsonResource
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
            'slug' => $this->slug
        ];
    }
}
