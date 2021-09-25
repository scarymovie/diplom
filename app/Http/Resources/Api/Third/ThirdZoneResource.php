<?php

namespace App\Http\Resources\Api\Third;

use Illuminate\Http\Resources\Json\JsonResource;

class ThirdZoneResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'thousands' => $this->thousands,
            'height' => $this->height,
            'age' => $this->age,
            'koefOne' => $this->koefOne,
            'podrostOne' => $this->podrostOne,
            'koefTwo' => $this->koefTwo,
            'podrostTwo' => $this->podrostTwo,
            'koefThree' => $this->koefThree,
            'podrostThree' => $this->podrostThree,
            'por' => $this->por,
            'Oc' => $this->Oc,
            'density' => $this->density,
            'podlesokOne' => $this->podlesokOne,
            'podlesokTwo' => $this->podlesokTwo,
            'podlesokThree' => $this->podlesokThree,
        ];
    }
}
