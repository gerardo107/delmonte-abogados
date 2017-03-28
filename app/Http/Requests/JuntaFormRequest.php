<?php

namespace App\Http\Requests;
use App\Http\Requests\Request;
/*
|--------------------------------------------------------------------------
|form request junta
|--------------------------------------------------------------------------
|
| Este form request sirve para especificar que datos son requeridos y de que tipo 
| para la form de juntas.
| 
*/

class JuntaFormRequest extends Request
{
   
    public function authorize()
    {
        return true;
    }

    //funcion que especifica que campo es obligatorio y de que tipo es
    public function rules()
    {
        return [
            'fecha' => 'required',
            'asunto' => 'required',
        ];
    }
}
