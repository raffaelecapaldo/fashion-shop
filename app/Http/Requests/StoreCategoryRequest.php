<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCategoryRequest extends FormRequest
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
            'name' => 'required|unique:brands|max:150|min:3',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Il nome della categoria è obbligatorio!',
            'name.unique:brands' => 'Questo nome della categoria esiste già!',
            'name.max' => 'Il nome della categoria deve essere lungo massimo :max caratteri!',
            'name.min' => 'Il nome della categoria deve essere lungo almeno :min caratteri!',
        ];
    }
}
