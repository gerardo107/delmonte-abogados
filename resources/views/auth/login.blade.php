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
                    <li ><a href="{{route('index')}}">Inicio</a></li>
                    <li><a href="{{route('nosotros')}}">Quienes Somos</a></li>
                    <li><a href="{{route('contacto')}}">Contacto</a></li>
                    <li class="current-menu-item"><a href="{{url('/login')}}" >Login</a></li>
                    
                </ul>
                <!-- Navigation -->
            </div>
            <!-- wrapper-menu -->
        </div>
        <!-- ENDS menu-holder -->
    </div>
    <!-- wrapper-header -->
    <!-- ENDS Menu -->
    
</br></br></br>
<div class="container login">
    <div class="row">
        <div class="container ">
            <div class="card-panel">
                <div class="center-align row">
                    <h2>Login</h2>
                </div>
                <div class="row">
                    <form class="center-align row" role="form" method="POST" action="{{ url('/login') }}">
                        {!! csrf_field() !!}
                        <div class="row">
                            <div class="container form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <div class="col s12">
                                    <input type="email" class="form-control" name="email" value="{{ old('email') }}" id="usr">
                                    <label for="usr" data-error="invalid">E-Mail Address</label>
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="container form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <div class="col s12">
                                    <input type="password" class="form-control" name="password" id="pwd">
                                    <label for="pwd" data-error="invalid">Password</label>
                                    @if ($errors->has('password'))
                                    {{ $errors->first('password') }}
                                       <script type="text/javascript">
                                           $(document).ready(function(){
                                                $("#pwd").trigger('data-error');
                                           });
                                       </script>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12">
                                <input type="checkbox" name="remember" id="rememberme"/>
                                <label for="rememberme">Remember Me</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12" style="margin-top: 1%">
                                <button type="submit" class="btn btn-primary">
                                <i class=""></i>Login
                            </button>
                            </div>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
