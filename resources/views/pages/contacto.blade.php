@extends('layouts.main_layout')

@section('titulo')
    delmonteabogados
@stop

@section('body')
   <!-- Menu -->
    <div id="menu">
        <!-- ENDS menu-holder -->
        <div id="menu-holder">
            <!-- wrapper-menu -->
            <div class="wrapper">
                <!-- Navigation -->
                <ul id="nav" class="sf-menu">
                    <li><a href="{{route('index')}}">Inicio</a></li>
                    <li><a href="{{route('nosotros')}}">Quienes Somos</a></li>
                    <li class="current-menu-item"><a href="{{route('contacto')}}">Contacto</a></li>
                    <li><a href="{{url('/login')}}" >Login</a></li>
                </ul>
                <!-- Navigation -->
            </div>
            <!-- wrapper-menu -->
        </div>
        <!-- ENDS menu-holder -->
    </div>
    <!-- ENDS Menu -->
    <!-- wrapper-header -->
    <div id="header">
            <a href="{{route('index')}}"><img id="logo2" src="imagenes/logo2.png" /></a>
    </div>
    <!-- MAIN -->
        <div id="main">
            <!-- wrapper-main -->
            <div class="wrapper">
                <!-- content -->
                <div id="content">
                    <!-- title -->
                    <div id="page-title2">

                        <span class="titulo-info">Contacto</span>
                    
                    </div>
                    <!-- ENDS title -->
                        <div class="row">
                            <div class="col l6">
                                    <h2>Escríbenos</h2>
                                <div class="row"> 
                                  {!!Form::open(['route'=>'contactosSys.store', 'method'=>'Post'])!!}
                                  <div class="input-field col l12">
                                    <i class="material-icons prefix">account_circle</i>
                                    {!! Form::text('nombre','',[
                                    'class'=>"validate",
                                    'placeholder' => "Nombre"
                                    ])!!}
                                  </div> 
                                </div> 
                                <div class="row"> 
                                  <div class="input-field col l12">
                                    <i class="material-icons prefix">email</i>
                                    {!! Form::email('correo','',[
                                    'required', 
                                    'class'=>"validate",
                                    'placeholder' => "Correo"
                                    ])!!}
                                    @if ($errors->has('correo'))<p style="color:red;">{!!$errors->first('correo')!!}</p>@endif 
                                  </div>
                                </div>
                                <div class="row"> 
                                  <div class="input-field col l12">
                                    <i class="material-icons prefix">work</i>
                                    {!! Form::text('empresa','',[
                                    'class'=>"validate",
                                    'placeholder' => "Empresa"
                                    ])!!}
                                  </div>
                                </div> 
                                <div class="row"> 
                                  <div class="input-field col l12">
                                    <i class="material-icons prefix">comment</i>
                                     {!! Form::textarea('comentario','',[
                                    'class'=>"validate",
                                    'placeholder' => "Comentario"
                                    ])!!}
                                  </div>
                                </div>
                                <div class="col l2">
                                  <button class="btn waves-effect waves-light left" type="submit" name="action" style="margin-right: 2em"  > {!!Form::submit('Registrar Comentario')!!}</button>
                                {!!Form::close()!!}
                                </div>
                            </div>
                            <div class="col l6">
                                <div class="contenido" style="text-align:left" >
                                    <p><iframe width="600" height="450" frameborder="0" style="border:0"
                                        src="https://www.google.com/maps/embed/v1/place?q=%20Calle%20Francisco%20I%20Madero219%20Interior%20506&key=AIzaSyDD5TjRRzrhl1OlXnx7TuQT4W5yDzpfQSY" allowfullscreen></iframe>
                                    </p>
                                    <p>Francisco I. Madero 219, Zona Centro, despacho 506<br/>
                                    León, Gto., México CP. 37000<br/>
                                    (477) 2510508 <br/>
                                    <a href="mailto:direccion@delmonteabogados.com">direccion@delmonteabogados.com</a></p>

                                </div>

                            </div>
                        </div>
          
                </div>
                <!-- ENDS content -->
            </div>
            <!-- ENDS wrapper-main -->
        </div>
    <!-- ENDS MAIN -->



    <!-- Bottom -->
            <div id="bottom">
                <table  id="bottom"  class="fondo" width="100%"  height="10%" cellspacing="20" style=" margin-bottom:-20px" >
                    <tr>
                        <td width="80%">
                            DEL MONTE ABOGADOS con domicilio en Calle Francisco I. Madero 219, Zona Centro, Despacho 506, León, Gto., México CP. 37000, utiliza la información proporcionada por sus clientes exclusivamente para los fines específicos que los servicios solicitados requieren y mantiene en todo tiempo la reserva a que obliga la prestación de los servicios profesionales que ofrece.    
                            <br /><br />  
                            Responsable
                            <br />
                            Lic. Jorge del Monte
                        </td>
                        <td width="80%" >
                            Contacto
                            <br /><br /><br /><br />
                            telefono: (477) 2510508
                            <br />
                            correo: direccion@delmonteabogados.com
                        </td>
                    </tr>
                </table>
            </div>  
    <!-- ENDS Bottom -->
    
@stop