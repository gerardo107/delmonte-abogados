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
    <div class="container">
    <h1 class="center-align">Mensajes</h1>
    
         <table class="highlight bordered responsive-table">
        <thead>
          <tr>
              <th data-field="nombre">Nombre</th>
              <th data-field="correo">Correo</th>
              <th data-field="empresa">Empresa</th>
          </tr>
        </thead>

        <tbody class="rowlink" data-link="row">
          @foreach ($contactos as $contacto)
          <tr>
           <td>{{$contacto->nombre}}</td>
           <td>{{$contacto->correo}}</td>
           <td>{{$contacto->empresa}}</td>
           <td>
            {!!Form::open(['method' => 'delete', 'route' => ['contactosSys.destroy', $contacto->id], 'id' => $contacto->id])!!}
            <a class="btn-floating btn-small waves-effect waves-light blue tooltipped" data-position="left" data-delay="50" data-tooltip="Editar gasto" href="{{route('contactosSys.show', $contacto->id)}}"><i class="material-icons">feedback</i></a>

            <a onclick="document.getElementById('{{$contacto->id}}').submit()" class="btn-floating btn-small waves-effect waves-light red tooltipped" data-position="right" data-delay="50" data-tooltip="Eliminar Mensaje"><i class="material-icons">delete_forever</i></a>
            {!!Form::close()!!}
        
          </td>

          </tr>
          @endforeach
        </tbody>
      </table>

	

@stop