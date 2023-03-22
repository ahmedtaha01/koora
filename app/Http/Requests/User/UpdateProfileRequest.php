<?php

namespace App\Http\Requests\User;

use Faker\Guesser\Name;
use Illuminate\Foundation\Http\FormRequest;

class UpdateProfileRequest extends FormRequest
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
            'name'      => ['required'],
            'phone'     => ['required','unique:users,phone,'.auth()->user()->id],
            'email'     => ['required','unique:users,email,'.auth()->user()->id],
            'dob'       => ['required'],
            'image'     => ['required','mimes:png,jpg,jpeg'],
        ];
    }
}
