<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/*
|--------------------------------------------------------------------------
|Model Contacto
|--------------------------------------------------------------------------
|
| Este model  cuenta con todos los campos necesarios para mandar un mensaje
| desde la pagina hacia el sistema 
| 
*/

class Contacto extends Model
{
	public $timestamps = false;
	protected $fillable = array('nombre', 'correo', 'empresa', 'comentario');
    //
}
