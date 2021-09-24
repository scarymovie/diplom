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
            'tier' => $this->tier,
            'coefComposition' => $this->coefComposition,
            'speciesComposition' => $this->speciesComposition,
            'origin' => $this->origin,
            'age'  => $this->age,
            'height' => $this->height,
            'diameter' => $this->diameter,
            'class' => $this->class,
            'density' => $this->density,
            'g' => $this->g,
            'stock' => $this->stock,
        ];
    }
}

