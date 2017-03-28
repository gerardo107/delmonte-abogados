<?php

namespace App\Http\Controllers;


use redirect;
use App\Http\Requests;
use App\Http\Requests\JuntaFormRequest;
use Illuminate\Http\Request;
use App\Junta;

/*
|--------------------------------------------------------------------------
|controller Juntas
|--------------------------------------------------------------------------
|
| Este controlador se encarga de ser el intermediario que procesa la informacion
| entre la view y el model de juntas.
| 
*/

class JuntaController extends Controller
{
	
	 public function __construct()
    {
        $this->middleware('auth');
    }
    //funcion que regresa el index de juntas
    public function index(){

    	$juntas = Junta::all();

    	return view('juntasSys.index')
    		->with('juntas', $juntas);

    }
    //funcion para  crear una nueva junta
    public function create(){
    	return view('juntasSys.create');
    }

    //funcion para  almacenar una nueva junta y hace return a la vista de index. 
    public function store(JuntaFormRequest $request)
	{    
		$inputs = $request-> all();
        $junta = Junta::create($inputs);
		

	
		return redirect()->route('juntasSys.index'); 
			
	}

    //funcion para  mostrar una junta.
    public function show($id)
    {

        $juntas = Junta::find($id);

        return view('juntasSys.show;')
            ->with('juntas', $juntas);

    }
    //funcion para  editar una junta.
     public function edit($id){

    	$junta = Junta::find($id);

    	return view('juntasSys.edit', compact('junta', $junta));

    }
     //funcion para  eliminar una junta.
     public function destroy($id){

    	$juntas= Junta::find($id)->delete();;
  

        
    	return redirect()->route('juntasSys.index');
    }

	 public function update(Request $request, $id){

    	$junta= Junta::find($id);

    	$junta->nombre = $request->nombre;
    	$junta->fecha = $request->fecha;
        $junta->hora = $request->hora;
    	$junta->asunto = $request->asunto;
        $junta->save();

    	return redirect()->route('juntasSys.index');
    }



   
    
}
