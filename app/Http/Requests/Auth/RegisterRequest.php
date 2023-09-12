<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'name'              => ['required','string','max:255'],
            'email'             => ['required','email'],
            'phone'             => ['required','string','max:12'],
            'password'          => ['required','max:255'],
            'confirm_password'  => ['required','max:255','same:password']
        ];
    }

    public function messages(){
        return [
            'name.required'             => 'حقل الاسم مطلوب',
            'name.string'               => 'حقل الاسم يجب ان يكون حروف فقط',
            'name.max'                  => 'حقل الاسم يجب ان لا يزيد عن :max حرف',
            'email.required'            => 'حقل البريد الإلكتروني مطلوب',
            'email.email'               => 'يجب أن يكون البريد الإلكتروني عنوان بريد إلكتروني صالحًا',
            'phone.required'            => 'حقل الهاتف مطلوب',
            'phone.string'              => 'حقل الهاتف يجب ان يكون حروف فقط',
            'phone.max'                 => 'حقل الهاتف يجب ان لا يزيد عن :max رقم',
            'password.required'         => 'حقل كلمة المرور مطلوب',
            'password.max'              => 'حقل كلمه المرور يجب ان لا يزيد عن :max حرف',
            'confirm_password.required' => 'حقل تأكيد كلمه المرور مطلوب',
            'confirm_password.max'      => 'حقل تأكيد كلمه المرور يجب ان لا يزيد عن :max حرف',
            'confirm_password.same'     => 'يجب أن يتطابق تأكيد كلمة المرور وكلمة المرور',
        ];
    }
}
