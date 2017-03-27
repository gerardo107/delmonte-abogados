<!DOCTYPE html>
<html>
    <head>

        <title>@yield('titulo')</title>
        <meta charset="utf-8">
    <link type="text/css" rel="stylesheet" href="{{asset('css/materialize.min.css')}}"  media="screen"/>
    <link type="text/css" rel="stylesheet" href="{{asset('css/style.css')}}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- superfish -->
        <link rel="stylesheet" media="screen" href="{{asset('css/superfish.css')}}" />
        <script type="text/javascript" src="{{asset('js/superfish-1.7.3/js/hoverIntent.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/superfish-1.7.3/js/superfish.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/superfish-1.7.3/js/supersubs.js')}}"></script>
    <!-- ENDS superfish -->

<!--  checar-->
    <script type="text/javascript" src="{{asset('js/custom.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery.js')}}"></script>
    <!-- Fancybox !! checar-->
    <link rel="stylesheet" href="{{asset('js/jquery.fancybox-1.3.4.css')}}" type="text/css" media="screen" />
    <script type="text/javascript" src="{{asset('js/jquery.fancybox-1.3.4.pack.js')}}"></script>
    <!-- ENDS Fancybox -->
    <!-- Nivo slider !! checar-->
<link rel="stylesheet" href="{{asset('css/nivo-slider.css')}}" type="text/css" />
<link rel="stylesheet" href="{{asset('themes/default/default.css')}}" type="text/css" /> 
<script src="{{asset('http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js')}}" type="text/javascript"></script> 
<script src="{{asset('js/nivo-slider/jquery.nivo.slider.pack.js')}}" type="text/javascript"></script>
    <!-- ENDS Nivo slider -->
<script type="text/javascript"> 
$(window).on('load', function() {
    $('#slider').nivoSlider(); 
}); 
</script>
<!-- tabs -->
    <script src="{{asset('js/jquery.js')}}" type="text/javascript"></script>
<script src="{{asset('js/jquery.hashchange.min.js')}}" type="text/javascript"></script>
<script src="{{asset('js/jquery.easytabs.js')}}" type="text/javascript"></script>
<link rel="stylesheet" href="{{asset('css/tabs.css')}}" type="text/css" media="screen" />

 <script type="text/javascript">
    $(document).ready( function() {
      $('#tab-container').easytabs();
    });
  </script>
    <!-- ENDS tabs -->
        @yield('head')
    </head>
    <body >
    	
    	@yield('body')
    
    </body>
 </html>   
@yield('footer') 