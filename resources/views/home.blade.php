@extends('layouts.main_layout')



@section('body')
<a href="{{route('index')}}"><img id="logo3" src="imagenes/logo2.png" /></a>
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
                    <li ><a href="{{url('/contactosSys')}}">Mensajes</a></li>
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
    

    
@stop