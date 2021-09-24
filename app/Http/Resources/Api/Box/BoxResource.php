<?php

namespace App\Http\Resources\Api\Box;

use App\Http\Resources\Api\Card\CardResource;
use Illuminate\Http\Resources\Json\JsonResource;

class BoxResource extends JsonResource
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
            'title' => $this->title,
            'cards' => CardResource::collection($this->prepareCard),
        ];
    }
}
