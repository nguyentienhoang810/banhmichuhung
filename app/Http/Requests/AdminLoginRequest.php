<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminLoginRequest extends FormRequest
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
            'username'=>'required|email',
            'pass'=>'required|min:3'
        ];
    }

    public function messages() {
        return [
            'username.required'=>'Phải điền username',
            'username.email'=>'Không đúng định dạng email',
            'pass.required'=>'Phải điền email',
            'pass.min'=>'Password phải nhiều hơn 3 ký tự'
        ];
    }
}
