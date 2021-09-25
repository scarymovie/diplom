<?php

namespace App\Http\Requests\Api\First;

use Illuminate\Foundation\Http\FormRequest;

class FirstRequest extends FormRequest
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
            'card_id' => 'required|unique:firsts',
            'Republic' => 'required',
            'district' => 'required',
            'region' => 'required',
            'quarter' => 'required',
            'area' => 'required',
            'earthCategory' => 'required',
            'protectionCategory' => 'required',
            'dominantBreed' => 'required',
            'bonitetClass' => 'required',
            'forestType' => 'required',
            'tlu' => 'required',
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
