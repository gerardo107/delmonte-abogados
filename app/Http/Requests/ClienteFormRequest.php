<?php

namespace App\Http\Requests;
use App\Http\Requests\Request;

class ClienteFormRequest extends Request
{
   
    public function authorize()
    {
        return true;
    }

     
    public function rules()
    {
        return [
            'correo' => 'required|email',
            'nombre' => 'required',
        ];
    }
}
