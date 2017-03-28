<?php

namespace App\Http\Controllers;

//use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;



/*
|--------------------------------------------------------------------------
| PagesController
|--------------------------------------------------------------------------
|
| Este controlador sirve para regrresar las vistas de todas las paginas
| estaticas del sitema.
| 
*/

class PagesController extends Controller
{
    public function getIndex(){
        $viewName="Index";
        $isUserRegistered = false;
        return view('pages.index')
            ->with("Page_title",$viewName)
            ->with("Registered",$isUserRegistered);
            
            
    }

     public function getNosotros(){
        $viewName="Nosotros";
        $isUserRegistered = false;
        return view('pages.nosotros')
            ->with("Page_title",$viewName)
            ->with("Registered",$isUserRegistered);
           
    }
     public function getContacto(){
        $viewName="Contacto";
        $isUserRegistered = false;      
        return view('pages.contacto')
            ->with("Page_title",$viewName)
            ->with("Registered",$isUserRegistered);
           
    }

    

    

    
}

?>