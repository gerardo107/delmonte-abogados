<?php
namespace App\Http\Requests;
use App\Http\Requests\Request;
class ContactoFormRequest extends Request
{
   
    public function authorize()
    {
        return true;
    }
   
    public function rules()
    {
        return [
            'correo' => 'required|email',
        ];
    }
    public function messages()
    {
    return [
        'correo.email' => 'Se requiere un correo valido',
        'correo.required' => 'es necesario proporcionar un correo',
    ];
    }
}