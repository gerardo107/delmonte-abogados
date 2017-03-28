<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
/*
|--------------------------------------------------------------------------
|Model cliente
|--------------------------------------------------------------------------
|
| Este model  cuenta con todos los campos necesarios para registar un cliente
| 
*/

class Cliente extends Model
{
	public $timestamps = false;
	protected $fillable = array('nombre','apellidoP','apellidoM' ,'correo', 'telefono','direccion', 'rfc');
    //
}