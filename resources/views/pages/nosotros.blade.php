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
                    <li class="current-menu-item"><a href="{{route('nosotros')}}">Quienes Somos</a></li>
                    <li><a href="{{route('contacto')}}">Contacto</a></li>
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
                    <div id="page-title">
                        <span class="titulo-info">¿Quiénes Somos?</span>
                    
                    </div>
                    <!-- ENDS title -->
                    <div id="tab-container" class="tab-container">
                        <ul class='tabs'>
                            <li><a href="#info"><span>info</span></a></li>
                            <li><a href="#LABORAL"><span>Laboral</span></a></li>
                            <li><a href="#MERCANTIL"><span>Mercantil</span></a></li>
                            <li><a href="#PENAL"><span>Penal y Civil</span></a></li>
                        </ul>
                        <div class="panes">
                            <div id="info" class="info">
                                <img src="imagenes/quienes-somos.jpg" width="500px"  style="float:right; margin:35px;" />
                                <p> Las empresas de hoy en día necesitan una prevención y defensa jurídica total en donde los clientes del despacho DEL MONTE ABOGADOS se sientan totalmente protegidos y blindados jurídicamente , por lo cual los servicios que ofrecemos son:
                                </p>
                                <ul id="contenido-listado">
                                    <li>
                                        PPREVENSION Y DEFENSA.
                                    </li><br/>
                                    <li>
                                        Laborales.
                                    </li><br/>
                                    <li>
                                        Mercantiles. 
                                    </li><br/>
                                    <li>
                                        Penales. 
                                    </li><br/>
                                    <li>
                                        Civiles
                                    </li>
                                </ul>           
                            </div>
                            <div id="LABORAL" class="info">
                                <p>Una de las principales preocupaciones de nuestros clientes son las relaciones laborales, el reclutamiento indicado del personal, lo cual DEL MONTE ABOGADOS actúa de manera conjunta con el departamento de recursos humanos para asesorar a la empresa a tomar decisiones que no afecten a la empresa en un tribunal, tomando las prevenciones debidas en caso de que el trabajador decida llegar a los tribunales laborales, aminorando el riesgo para la empresa, para que sufra perdidas económicas.
                                </p>
                                </br> </br><br /><br />
                                <p>En caso de que el trabajador en algún momento decida instar una instancia jurídica, DEL MONTE ABOGADOS  tiene el conocimiento pleno de realizar una defensa adecuada para que el cliente no corra un riesgo mayores, esto seria una instancia ultima, ya que el despacho DEL MONTE ABOGADOS tiene como misión principal agotar los medios preventivos y conciliatorios.
                                </p>
                                </br> </br>

                            </div>
                            <div id="MERCANTIL" class="info">
                                <p>El actual tiempo entre comerciantes es muy difícil tener una relación comercial basada en la confianza, por tal motivo  DEL MONTE ABOGADOS asesora y actúa de manera conjunta con el departamento de crédito y cobranza para que nuestros clientes puedan tener una mayor protección jurídica y aminorar riesgos de las personas que sean sujetos de crédito, esto es formación de un expediente completo, ya sea en cuanto a contrato de compraventa, solicitud de crédito dado por la empresa, en la cual se tiene que incluir la autorización de factores y dependientes y todo lo que se necesite para la protección de los clientes en la otorgación de crédito.
                                </p>
                                </br> </br><br /><br />
                                <p>Por lo que en caso de que el sujeto de crédito omita realizar el pago el cliente tendrá los elementos suficientes para poder recuperar la cartera que se omitió el pago y una vez con esto en caso de lrecuperación legar a tribunales tener un mayor porcentaje de para el cliente.
                                </p>
                                </br> </br>
                            </div>
                            <div id="PENAL" class="info">
                                </br> </br>
                                <p>El despacho DEL MONTE ABOGADOS se encargara de dar tramite a las denuncias y querellas que la empresa soliciten en cuanto al menos cabo que llegue a tener el cliente.
                                </p>
                                </br> </br></br> </br>
                                <p>Asi mismo en el ramo civil en relación a creación y asesoría todo tipo de contratos que se puedan desprenden de relación civiles que la empresa llegue a necesitar.
                                </p>
                                </br> </br>
                                </br> </br>
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

</body>
@stop