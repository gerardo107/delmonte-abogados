<?php
namespace App\Http\Requests;
use App\Http\Requests\Request;
/*
|--------------------------------------------------------------------------
|form request Contacto
|--------------------------------------------------------------------------
|
| Este form request sirve para especificar que datos son requeridos y de que tipo 
| para la form de contacto (mensajes).
| 
*/
class ContactoFormRequest extends Request
{
   
    public function authorize()
    {
        return true;
    }
   //funcion que especifica que campo es obligatorio y de que tipo es
    public function rules()
    {
        return [
            'correo' => 'required|email',
        ];
    }
    //funcion con el mensaje exacto que quieres mostrar en caso de que el campo no se llene correctamente 
    public function messages()
    {
    return [
        'correo.email' => 'Se requiere un correo valido',
        'correo.required' => 'es necesario proporcionar un correo',
    ];
    }
}