<?php

namespace App\Http\Controllers;



use redirect;
use App\Http\Requests;
use App\Http\Requests\ContactoFormRequest;
use Illuminate\Http\Request;
use App\Contacto;

/*
|--------------------------------------------------------------------------
|controller Contacto
|--------------------------------------------------------------------------
|
| Este controlador se encarga de ser el intermediario que procesa la informacion
| entre la view y el model de contactos.
| 
*/

class ContactoController extends Controller
{
	
	
	//funcion que regresa el index de contactos
    public function index()
	{
		$contactos = Contacto:: all();
		
		

		return view('contactosSys.index')
			->with('contactos',$contactos);
			
	//funcion para  crear un nuevo contacto	
	}
	public function create()
	{
	
        
        return view('pages.contacto');
	}
	//funcion para  almacenar un nuevo mensaje y hace return a la vista de 'contactos' 
	public function store(ContactoFormRequest $request)
	{    
		$inputs = $request-> all();
        $contacto = Contacto::create($inputs);
		
			return redirect()
	  		->route('contacto');
	}
	//funcion para  mostrar un mensaje.
	public function show($id){
		$contacto= Contacto::find($id);
		
        return view('contactosSys.show')
        	->with('contacto', $contacto);
	}
	//funcion para  eliminar un mensaje.
	public function destroy($id)
	{
		$contacto= Contacto::find($id)->delete();;
	  	return redirect()
	  		->route('contactosSys.index');
	}
}
