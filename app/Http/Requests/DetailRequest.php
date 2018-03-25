<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class DetailRequest extends Request
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
            'name' => 'required',
            'email' => 'required',
            'ic' => 'required',
            'image' => 'required',
            'phonenumber' => 'required',
            'officenumber' => 'required',
            'occupation' => 'required',
            'race' => 'required',
            'religion' => 'required',
            'address1' => 'required',
            'poscode' => 'required',
            'city' => 'required',
            'province' => 'required'
        ];
    }
}
