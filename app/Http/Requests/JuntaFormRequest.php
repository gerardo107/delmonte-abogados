<?php

namespace App\Http\Requests;
use App\Http\Requests\Request;

class JuntaFormRequest extends Request
{
   
    public function authorize()
    {
        return true;
    }

     
    public function rules()
    {
        return [
            'fecha' => 'required',
            'asunto' => 'required',
        ];
    }
}
