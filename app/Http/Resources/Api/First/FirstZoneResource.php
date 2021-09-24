<?php

namespace App\Http\Resources\Api\First;

use Illuminate\Http\Resources\Json\JsonResource;

class FirstZoneResource extends JsonResource
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
            'Republic' => $this->Republic,
            'district' => $this->district,
            'region' => $this->region,
            'quarter' => $this->quarter,
            'renter' => $this->renter,
            'number' => $this->number,
            'area' => $this->area,
            'earthCategory' => $this->earthCategory,
            'protectionCategory' => $this->protectionCategory,
            'cutWay' => $this->cutWay,
            'ОЗУ' => $this->ozu,
            'height' => $this->height,
            'exposition' => $this->exposition,
            'slope' => $this->slope,
            'erozionForm' => $this->erozionForm,
            'erozionDegree' => $this->erozionDegree,
            'firstEvent' => $this->firstEvent,
            'percent' => $this->percent,
            'firstPtk' => $this->firstPtk,
            'secondEvent' => $this->secondEvent,
            'secondPtk' => $this->secondPtk,
            'thirdEvent' => $this->thirdEvent,
            'thirdPtk' => $this->thirdPtk,
            'target' => $this->target,
            'dominantBreed' => $this->dominantBreed,
            'bonitetClass' => $this->bonitetClass,
            'forestType' => $this->forestType,
            'tlu' => $this->tlu,
            'fireDangeros' => $this->fireDangeros,
            'cutYear' => $this->cutYear,
            'allStump' => $this->allStump,
            'pineStump' => $this->pineStump,
            'stumpDiameter' => $this->stumpDiameter,
            'cutType' => $this->cutType,
            'littering' => $this->littering,
            'liquid' => $this->liquid,
            'deadwood' => $this->deadwood,
        ];
    }
}

