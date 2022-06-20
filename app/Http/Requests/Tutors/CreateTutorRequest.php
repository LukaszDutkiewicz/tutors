<?php

namespace App\Http\Requests\Tutors;

use Illuminate\Foundation\Http\FormRequest;

class CreateTutorRequest extends FormRequest
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
            'first_name' => 'required|string',
            'last_name' => 'required|string'
        ];
    }

    public function messages()
    {
        return [
            'first_name.required' => 'imie jest wymagane',
            'first_name.string' => 'imie musi być tekstem',
            'last_name.required' => 'nazwisko jest wymagane'
        ];
    }
}
