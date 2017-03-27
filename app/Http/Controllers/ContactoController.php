<?php

namespace App\Http\Controllers;



use redirect;
use App\Http\Requests;
use App\Http\Requests\ContactoFormRequest;
use Illuminate\Http\Request;
use App\Contacto;


class ContactoController extends Controller
{
	
	

    public function index()
	{
		$contactos = Contacto:: all();
		
		

		return view('contactosSys.index')
			->with('contactos',$contactos);
			
		
	}
	public function create()
	{
	
        
        return view('pages.contacto');
	}
	public function store(ContactoFormRequest $request)
	{    
		$inputs = $request-> all();
        $contacto = Contacto::create($inputs);
		
			return redirect()
	  		->route('contacto');
	}
	public function show($id){
		$contacto= Contacto::find($id);
		
        return view('contactosSys.show')
        	->with('contacto', $contacto);
	}
	public function destroy($id)
	{
		$contacto= Contacto::find($id)->delete();;
	  	return redirect()
	  		->route('contactosSys.index');
	}
}
