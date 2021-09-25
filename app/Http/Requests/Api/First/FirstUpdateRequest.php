<?php

namespace App\Http\Requests\Api\First;

use Illuminate\Foundation\Http\FormRequest;

class FirstUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'card_id' => 'unique:firsts',
            'Republic' => 'required',
            'district' => '',
            'region' => '',
            'quarter' => '',
            'area' => '',
            'earthCategory' => '',
            'protectionCategory' => '',
            'dominantBreed' => '',
            'bonitetClass' => '',
            'forestType' => '',
            'tlu' => '',
            'renter' => '',
            'fireDangeros' => '',
            'cutYear' => '',
            'allStump' => '',
            'pineStump' => '',
            'stumpDiameter' => '',
            'cutType' => '',
            'littering' => '',
            'liquid' => '',
            'deadwood' => '',
        ];
    }
}
