@extends('layouts.main_layout')

@section('titulo')
    delmonteabogados
@stop
@section('head')
<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" />
<link rel="stylesheet" href="themes/default/default.css" type="text/css" /> 
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js" type="text/javascript"></script> 
<script src="js/nivo-slider/jquery.nivo.slider.pack.js" type="text/javascript"></script>
    <!-- ENDS Nivo slider -->
<script type="text/javascript"> 
$(window).on('load', function() {
    $('#slider').nivoSlider(); 
}); 
</script>

@stop

@section('body')
    <div id="menu">
        <!-- ENDS menu-holder -->
        <div id="menu-holder">
            <!-- wrapper-menu -->
            <div class="wrapper">
                <!-- Navigation -->
                <ul id="nav" class="sf-menu">
                    <li class="current-menu-item"><a href="{{route('index')}}">Inicio</a></li>
                    <li><a href="{{route('nosotros')}}">Quienes Somos</a></li>
                    <li><a href="{{route('contacto')}}">Contacto</a></li>
                    <li><a href="{{url('/login')}}" >Login</a></li>
                    
                </ul>
                <!-- Navigation -->
            </div>
            <!-- wrapper-menu -->
        </div>
        <!-- ENDS menu-holder -->
    </div>
    <!-- wrapper-header -->
    <!-- ENDS Menu -->
    <div id="header">
        <a href="{{route('index')}}"><img id="logo2" src="imagenes/logo2.png" /></a>
    </div>
    <!-- Slider -->
    <div id="slider-block">
        <div id="slider-holder">
            <div class="slider-wrapper theme-default" >    
                <div id="slider" class="nivoSlider">
                    <a href="index.html"><img src="imagenes/inicio.jpg" alt="" /></a>  
                    <a href="nosotros.html"><img src="imagenes/nosotros.jpg" alt="" title="Conócenos" /></a>
                    <a href="contacto.html"><img src="imagenes/contacto.jpg" alt="" title="contacto" /></a>
                </div>  
            </div> 
        </div>  
    </div> 

    <!-- ENDS Slider -->
    <!-- MAIN -->
        <div id="main">
            <!-- wrapper-main -->
            <div class="wrapper">
                <!-- content -->
                <div id="content">
                <div class="row" >
                    <div class="col l6" style="text-align:center" >
                        <div class="titulo">
                        Misión
                        </div>
                        <div class="contenido" style="text-align:justify" >
                        Dar una prevención y protección total jurídica adaptándonos a las necesidades que nuestros clientes necesiten.
                      </br>
                      Nos especializamos en empresas lideres en el mercado.
                      </br>
                      Contamos con corresponsales en Querétaro, Aguascalientes, Ciudad de México, Guadalajara, San Luis potosí y Monterrey.


                        </div>
                    </div>
                    <div class="col l6" id ="titulo" style="text-align:center">
                        <div class="titulo">
                            Experiencia
                        </div>
                        <div class="contenido" style="text-align:justify" >
                            
                        El despacho DEL MONTE ABOGADOS tiene una experiencia de mas de 18 años en el ramo de prevención y defensa jurídica, tiempo que se ha acumulado conocimiento total a la protección a empresas. Cabe señalar que en el despacho DEL MONTE ABOGADOS se hace una selección de clientes lideres en el mercado. 


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
                            <br />
                        </td>
                    </tr>
                </table>
            </div>  
    <!-- ENDS Bottom -->
    
@stop