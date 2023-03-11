<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;


class CreateStadiumRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
        // return $this->user()->can('create',Stadium::class);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'stadium_name'          => ['required'],
            'address'               => ['required'],
            'iframe'                => ['required'],
            'hour_price'            => ['required'],
            'stadium_size'          => ['required'],
            'main_image'            => ['required'],
            'google_link'           => ['required'],
        ];
    }
}
