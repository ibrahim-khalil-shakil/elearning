<?php

namespace App\Http\Requests\Backend\Course\Courses;

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
            'courseTitle_en'=> 'required|max:255',
            'categoryId'=> 'required|max:3',
            'instructorId'=> 'required|max:3',
        ];
    }
}
