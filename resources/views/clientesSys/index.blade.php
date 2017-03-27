@extends('layouts.main_layout')

@section('titulo')
	Gastos
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
                    <li><a href="{{url('/juntasSys')}}">Juntas</a></li>
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
		<h1 class="center-align">Clientes</h1>
		
		     <table class="highlight bordered responsive-table">
        <thead>
          <tr>
              <th data-field="nombre">Nombre</th>
              <th data-field="apellidoP">Apellido Paterno</th>
              <th data-field="apellidoM">Apellido Materno</th>
              <th data-field="correo">Correo</th>
              <th data-field="telefono">Telefono</th>
              <th data-field="direccion">Dirección</th>
              <th data-field="rfc">RFC</th>
          </tr>
        </thead>

        <tbody class="rowlink" data-link="row">
        	@foreach ($clientes as $cliente)
          <tr>
           <td>{{$cliente->nombre}}</td>
           <td>{{$cliente->apellidoP}}</td>
           <td>{{$cliente->apellidoM}}</td>
           <td>{{$cliente->correo}}</td>
           <td>{{$cliente->telefono}}</td>
           <td>{{$cliente->direccion}}</td>
           <td>{{$cliente->rfc}}</td>

           <td>
						{!!Form::open(['method' => 'delete', 'route' => ['clientesSys.destroy', $cliente->id], 'id' => $cliente->id])!!}
            <a class="btn-floating btn-small waves-effect waves-light blue tooltipped" data-position="left" data-delay="50" data-tooltip="Editar gasto" href="{{route('clientesSys.edit', $cliente->id)}}"><i class="material-icons">mode_edit</i></a>

            <a onclick="document.getElementById('{{$cliente->id}}').submit()" class="btn-floating btn-small waves-effect waves-light red tooltipped" data-position="right" data-delay="50" data-tooltip="Eliminar gasto"><i class="material-icons">delete_forever</i></a>
            {!!Form::close()!!}
				
					</td>

          </tr>
          @endforeach
        </tbody>
      </table>
      <br>
      <button class="btn waves-effect waves-light left"  name="action" style="margin-right: 2em" onclick="location.href='{{url('clientesSys/create')}}'"> Agregar Cliente</button>
		
	</div>

@stop
 