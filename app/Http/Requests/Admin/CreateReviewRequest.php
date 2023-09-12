<?php

namespace App\Http\Requests\Admin;

use App\Models\Stadium;
use Illuminate\Auth\Access\Gate as AccessGate;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class CreateReviewRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */


    public function authorize()
    {
        return Gate::allows('add-review',Stadium::find($this->stadium_id));
        
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'review'    => ['required','string','min:1','max:100'],
            'rating'    => ['required','string','numeric','min:1','max:5']
        ];
    }
}
