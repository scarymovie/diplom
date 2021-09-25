<?php

namespace App\Http\Resources\Api\Card;

use App\Http\Resources\Api\First\FirstZoneResource;
use App\Http\Resources\Api\Second\SecondZoneResource;
use App\Http\Resources\Api\Third\ThirdZoneResource;
use Illuminate\Http\Resources\Json\JsonResource;

class CardIndexResource extends JsonResource
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
            'id' => $this->id,
            'first' => new FirstZoneResource($this->first),
            'second' => SecondZoneResource::collection($this->second),
            'third' => new ThirdZoneResource($this->third),
        ];
    }
}
