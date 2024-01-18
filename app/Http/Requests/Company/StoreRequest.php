<?php

namespace App\Http\Requests\Company;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => [
                'required',
                'string'
            ],
            'city-company' => [
                'required',
                'string'
            ],
            'distinct-company' => [
                'required',
                'string'
            ],
            'email' => [
                'required',
                'string'
            ],
            'logo' => [
                'nullable',
                'file',
                'image'
            ],

        ];
    }
}
