<?php

namespace App\Http\Requests\Backend\Role;

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
            'Identity'=>'required|max:30|alpha:ascii|unique:roles,identity',
            'Name'=>'required|max:30|unique:roles,name'
        ];
    }
}
 