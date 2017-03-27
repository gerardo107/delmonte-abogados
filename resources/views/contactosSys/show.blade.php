@extends('layouts.main_layout')

@section('titulo')
  Mensajes
@stop
@section('body')
<a href="{{route('index')}}"><img id="logo3" src="{{asset('imagenes/logo2.png')}}" /></a>
</br></br></br></br></br></br></br></br></br></br>
<div id="menu">
        <!-- ENDS menu-holder -->
        <div id="menu-holder">
            <!-- wrapper-menu -->
            <div class="wrapper">
                <!-- Navigation -->
                <ul id="nav" class="sf-menu">
                    <li ><a href="{{url('/clientesSys')}}">Clientes</a></li>
                    <li ><a href="{{url('/juntasSys')}}">Juntas</a></li>
                   <li class="current-menu-item"><a href="{{url('/contactosSys')}}">Mensajes</a></li>
                    <li><a href="{{url('/logout')}}" >Logout</a></li>
                    
                </ul>
                <!-- Navigation -->
            </div>
            <!-- wrapper-menu -->
        </div>
        <!-- ENDS menu-holder -->
    </div>
    <!-- wrapper-header -->
    <!-- ENDS Menu -->
		
	{!!Form::open(
	[
	
		'method'=> 'delete',
		'route'=> ['contactosSys.destroy', $contacto->id]
	])!!}
	<div class ="container">
		<div class="row">
        	<div class="col s12 m6 offset-m3">
        		<div class="card blue-grey darken-1">
            		<div class="card-content white-text">
            	  		<span class="card-title">Nombre: {{$contacto->nombre}}</span>
						<p>Correo: {{$contacto->correo}}</p>
						<p>Empresa: {{$contacto->empresa}}</p>
						<p> Comentario: {{$contacto->comentario}}</p>
					</div>	
					{!!Form::close()!!}
					<div class="card-action">
					{!!Form::submit('Borrar')!!}
	  				</div>
          		</div>
        	</div>
      	</div>	
	</div>
@stop