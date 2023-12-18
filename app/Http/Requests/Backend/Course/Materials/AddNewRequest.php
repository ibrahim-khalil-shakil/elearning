<?php

namespace App\Http\Requests\Backend\Course\Materials;

use Illuminate\Foundation\Http\FormRequest;

class AddNewRequest extends FormRequest
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
            'materialTitle' => 'required|max:255',
            'materialType' => 'required|max:255',
            'lessonId' => 'required|max:3',
        ];
    }
}
