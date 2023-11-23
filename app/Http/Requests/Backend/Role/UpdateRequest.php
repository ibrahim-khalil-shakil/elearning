<?php

namespace App\Http\Requests\Backend\Role;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class UpdateRequest extends FormRequest
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
    public function rules(Request $r): array
    {
        $id=encryptor('decrypt',$r->uptoken);
        return [
            'Identity'=>'required|max:30|alpha:ascii|unique:roles,identity,'.$id,
            'Name'=>'required|max:30|unique:roles,name,'.$id
        ];
    }
}
 