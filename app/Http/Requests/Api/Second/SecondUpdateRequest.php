<?php

namespace App\Http\Requests\Api\Second;

use Illuminate\Foundation\Http\FormRequest;

class SecondUpdateRequest extends FormRequest
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
            'tier' => 'required',
            'coefComposition' => 'required',
            'speciesComposition' => 'required',
            'origin' => 'required',
            'age' => '',
            'height' => 'required',
            'diameter' => 'required',
            'class' => '',
            'density' => 'required',
            'g' => '',
            'stock' => '',
        ];
    }
}
