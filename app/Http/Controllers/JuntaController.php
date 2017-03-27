<?php

namespace App\Http\Controllers;


use redirect;
use App\Http\Requests;
use App\Http\Requests\JuntaFormRequest;
use Illuminate\Http\Request;
use App\Junta;

class JuntaController extends Controller
{
	
	 public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

    	$juntas = Junta::all();

    	return view('juntasSys.index')
    		->with('juntas', $juntas);

    }

    public function create(){
    	return view('juntasSys.create');
    }

    public function store(JuntaFormRequest $request)
	{    
		$inputs = $request-> all();
        $junta = Junta::create($inputs);
		

	
		return redirect()->route('juntasSys.index'); 
			
	}

          public function show($id){

        $juntas = Junta::find($id);

        return view('juntasSys.show;')
            ->with('juntas', $juntas);

    }

     public function edit($id){

    	$junta = Junta::find($id);

    	return view('juntasSys.edit', compact('junta', $junta));

    }
     
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
