<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CompanyInfoRegisterRequest extends Request
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
            'name'        => 'required',
            'tel'         => 'required',
            'shortName'   => 'required|min:1',
            'web'         => 'required|url',
            'city'        => 'required',
            'trade'       => 'required',
            'scale'       => 'required',
            'stage'       => 'required',
            'oneDesc'     => 'required|min:10'
        ];
    }

    public function messages(){
        return [

        ];
    }
}
