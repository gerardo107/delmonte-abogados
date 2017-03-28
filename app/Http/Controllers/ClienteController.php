<?php

namespace App\Http\Controllers;


use redirect;
use App\Http\Requests;
use App\Http\Requests\ClienteFormRequest;
use Illuminate\Http\Request;
use App\Cliente;

/*
|--------------------------------------------------------------------------
|controller Cliente
|--------------------------------------------------------------------------
|
| Este controlador se encarga de ser el intermediario que procesa la informacion
| entre la view y el model de clientes.
| 
*/


class ClienteController extends Controller
{
	
	 public function __construct()
    {
        $this->middleware('auth');
    }
    //funcion que regresa el index de clientes
    public function index(){

    	$clientes = Cliente::all();

    	return view('clientesSys.index')
    		->with('clientes', $clientes);

    }

    //funcion para  crear un nuevo cliente
    public function create(){
    	return view('clientesSys.create');
    }

    //funcion para  almacenar un nuevo cliente y hace return a la vista de crear 
    public function store(ClienteFormRequest $request)
	{    
		$inputs = $request-> all();
        $cliente = Cliente::create($inputs);
		

	
		return redirect()->route('clientesSys.create'); 
			
	}

    //funcion para  mostrar un cliente.
    public function show($id)
    {

        $clientes = Cliente::find($id);

        return view('clientesSys.show;')
            ->with('clientes', $clientes);

    }

    //funcion para  editar un cliente.
     public function edit($id){

    	$cliente = Cliente::find($id);

    	return view('clientesSys.edit', compact('cliente', $cliente));

    }
    //funcion para  eliminar un cliente.
     public function destroy($id){

    	$clientes= Cliente::find($id)->delete();;
  

        
    	return redirect()->route('clientesSys.index');
    }

	 public function update(Request $request, $id){

    	$cliente= Cliente::find($id);

    	$cliente->nombre = $request->nombre;
    	$cliente->apellidoP = $request->apellidoP;
    	$cliente->apellidoM = $request->apellidoM;
    	$cliente->correo = $request->correo;
        $cliente->telefono = $request->telefono;
        $cliente->direccion = $request->direccion;
        $cliente->rfc = $request->rfc;
        $cliente->save();

    	return redirect()->route('clientesSys.index');
    }



   
    
}
