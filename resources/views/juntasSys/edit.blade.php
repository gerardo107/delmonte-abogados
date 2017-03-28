@extends('layouts.main_layout')

@section('titulo')
Editar junta
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
  {!!Form::model($junta,[
  'method'=>'patch',
  'route' => ['juntasSys.update', $junta->id]
  ])!!}
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
        {!! Form::text('fecha','',[
              'class'=>"validate",
              'id'=>"datepicker",
              'placeholder' => "Fecha"
            ])!!}
            
      </div>
    </div>
      <div class="row">
      <div class="input-field col s12">
        {!! Form::text('hora','',[
              'class'=>"validate",
              'placeholder' => "Hora"
            ])!!}
           
      </div>
    </div>
    <div class="row">
      <div class="input-field col s12">
        {!! Form::text('asunto','',[
              'class'=>"validate",
              'placeholder' => "Asunto"
            ])!!}
            
      </div>
    </div>
    <button class="btn waves-effect waves-light left" type="submit" name="action" style="margin-right: 2em"
    3 > {!!Form::submit('Editar Junta')!!}</button>
    {!!Form::close()!!}

  </div>

@stop
@section('footer')
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <script>
  $(function() {
    $( '#datepicker' ).datepicker({
   
         altField: "#datepicker",
      altFormat: "yy-mm-dd"

  });
    });
  </script>
@stop 