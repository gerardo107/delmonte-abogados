@extends('layouts.main_layout')

@section('titulo')
	Cliente
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
                    <li class="current-menu-item"><a href="{{url('/clientesSys')}}">Clientes</a></li>
                    <li ><a href="{{url('/juntasSys')}}">Juntas</a></li>
                    <li><a href="{{url('/contactosSys')}}">Mensajes</a></li>
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
    
	<div class="container">
	{!!Form::open(['route' => 'clientesSys.store', 'method'=>'Post'])!!}
	<h4>Registrar Cliente</h4>
		<div class="row">
			<div class="input-field col s12">
    			{!! Form::text('nombre','',[
    				'class'=>"validate",
        			'placeholder' => "Nombre"
       			 ])!!}
			</div>
		</div>
		<div class="row">
			<div class="input-field col s12">
				{!! Form::text('apellidoP','',[
        			'class'=>"validate",
        			'placeholder' => "Apellido Paterno"
        		])!!}
			</div>
		</div>
		<div class="row">
			<div class="input-field col s12">
				{!! Form::text('apellidoM','',[
        			'class'=>"validate",
        			'placeholder' => "Apellido Materno"
        		])!!}
			</div>
		</div>
		<div class="row">
			<div class="input-field col s12">
				{!! Form::text('correo','',[
        			'class'=>"validate",
        			'placeholder' => "Correo"
        		])!!}
			</div>
		</div>
		<div class="row">
			<div class="input-field col s12">
				{!! Form::text('telefono','',[
        			'class'=>"validate",
        			'placeholder' => "Telefono"
        		])!!}
			</div>
		</div>
		<div class="row">
			<div class="input-field col s12">
				{!! Form::text('direccion','',[
        			'class'=>"validate",
        			'placeholder' => "Dirección"
        		])!!}
			</div>
		</div>
		<div class="row">
			<div class="input-field col s12">
				{!! Form::text('rfc','',[
        			'class'=>"validate",
        			'placeholder' => "RFC"
        		])!!}
			</div>
		</div>

		<button class="btn waves-effect waves-light left" type="submit" name="action" style="margin-right: 2em" > {!!Form::submit('Registrar Cliente')!!}</button>
    {!!Form::close()!!}

	</div>

@stop