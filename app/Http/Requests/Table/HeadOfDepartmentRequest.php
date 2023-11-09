<?php

namespace App\Http\Requests\Table;

use Illuminate\Foundation\Http\FormRequest;

class HeadOfDepartmentRequest extends FormRequest
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
            'surname' => 'required|string',
            'name' => 'required|string',
            'f_name' => 'required|string',
            'gender' => 'required|in:1,0',
            'date_of_birth' => 'required|date|date_format:Y-m-d',
            'date_of_start' => 'required|date|date_format:Y-m-d',
        ];

    }
}
