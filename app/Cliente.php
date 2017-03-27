<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
	public $timestamps = false;
	protected $fillable = array('nombre','apellidoP','apellidoM' ,'correo', 'telefono','direccion', 'rfc');
    //
}