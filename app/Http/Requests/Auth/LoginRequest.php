<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'email_or_phone'    => ['required'],
            'password'          => ['required','string']
        ];
    }

    public function messages()
    {
        return [
            'email_or_phone.required'   => 'حقل البريد الالكتروني او الهاتف مطلوب',
            'password.required'         => 'حقل كلمه المرور مطلوب',
            'password.string'           => 'حقل كلمه المرور يجب ان يتكون من احرف فقط',
        ];
    }
}
