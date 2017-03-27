<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
	public $timestamps = false;
	protected $fillable = array('nombre', 'correo', 'empresa', 'comentario');
    //
}
