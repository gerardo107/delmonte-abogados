@extends('layouts.main_layout')

@section('titulo')
	Juntas
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
                    <li class="current-menu-item"><a href="{{url('/juntasSys')}}">Juntas</a></li>
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
		<h1 class="center-align">Juntas</h1>
		
		     <table class="highlight bordered responsive-table">
        <thead>
          <tr>
              <th data-field="nombre">Nombre</th>
              <th data-field="fecha">Fecha</th>
              <th data-field="hora">Hora</th>
              <th data-field="asunto">Asunto</th>
          </tr>
        </thead>

        <tbody class="rowlink" data-link="row">
        	@foreach ($juntas as $junta)
          <tr>
           <td>{{$junta->nombre}}</td>
           <td>{{$junta->fecha}}</td>
           <td>{{$junta->hora}}</td>
           <td>{{$junta->asunto}}</td>
           <td>
						{!!Form::open(['method' => 'delete', 'route' => ['juntasSys.destroy', $junta->id], 'id' => $junta->id])!!}
            <a class="btn-floating btn-small waves-effect waves-light blue tooltipped" data-position="left" data-delay="50" data-tooltip="Editar gasto" href="{{route('juntasSys.edit', $junta->id)}}"><i class="material-icons">mode_edit</i></a>

            <a onclick="document.getElementById('{{$junta->id}}').submit()" class="btn-floating btn-small waves-effect waves-light red tooltipped" data-position="right" data-delay="50" data-tooltip="Eliminar gasto"><i class="material-icons">delete_forever</i></a>
            {!!Form::close()!!}
				
					</td>

          </tr>
          @endforeach
        </tbody>
      </table>
      <br>
      <button class="btn waves-effect waves-light left"  name="action" style="margin-right: 2em" onclick="location.href='{{url('juntasSys/create')}}'"> Agregar Junta</button>
		
	</div>

@stop
 