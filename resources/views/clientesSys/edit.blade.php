@extends('layouts.main_layout')

@section('titulo')
Editar cliente
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
  {!!Form::model($cliente,[
  'method'=>'patch',
  'route' => ['clientesSys.update', $cliente->id]
  ])!!}
  <h4>Registrar Cliente</h4>
    <div class="row">
      <div class="input-field col s12">
        {!! Form::text('nombre','',[
              'class'=>"validate"
            ])!!}
            <label for="icon_prefix">Nombre</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s12">
        {!! Form::text('apellidoP','',[
              'class'=>"validate"
            ])!!}
            <label for="icon_prefix">Apellido Paterno</label>
      </div>
    </div>
      <div class="row">
      <div class="input-field col s12">
        {!! Form::text('apellidoM','',[
              'class'=>"validate"
            ])!!}
            <label for="icon_prefix">Apellido Materno</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s12">
        {!! Form::text('correo','',[
              'class'=>"validate"
            ])!!}
            <label for="icon_prefix">Correo</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s12">
        {!! Form::text('telefono','',[
              'class'=>"validate"
            ])!!}
            <label for="icon_prefix">Telefono</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s12">
        {!! Form::text('direccion','',[
              'class'=>"validate"
            ])!!}
            <label for="icon_prefix"> Dirección</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s12">
        {!! Form::text('rfc','',[
              'class'=>"validate"
            ])!!}
            <label for="icon_prefix"> RFC</label>
      </div>
    </div>
    <button class="btn waves-effect waves-light left" type="submit" name="action" style="margin-right: 2em"
    3 > {!!Form::submit('Editar Cliente')!!}</button>
    {!!Form::close()!!}

  </div>

@stop