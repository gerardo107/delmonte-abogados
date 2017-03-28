<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
/*
|--------------------------------------------------------------------------
|Model Junta
|--------------------------------------------------------------------------
|
| Este model  cuenta con todos los campos necesarios para registar una Junta
| 
*/

class Junta extends Model
{
	public $timestamps = false;
	protected $fillable = array('nombre','fecha','hora','asunto');
    //
}