<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateBrandRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => [
                'required',
                Rule::unique('brands')->ignore($this->brand),
                'max:150',
                'min:3'
            ],
            'logo' => 'nullable|max:255',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Il nome del brand è obbligatorio!',
            'name.unique:brands' => 'Questo nome del brand esiste già!',
            'name.max' => 'Il nome del brand deve essere lungo massimo :max caratteri!',
            'name.min' => 'Il nome del brand deve essere lungo almeno :min caratteri!',
            'logo.max' => 'La URL del logo del brand deve essere lungo massimo :max caratteri!'
        ];
    }
}
