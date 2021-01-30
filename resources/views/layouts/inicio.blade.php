<!doctype html>
<html lang="en">
  <head>
    <title>WINNNED</title>
    <link rel="shortcut icon" href="{{asset('images/logo.png')}}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet"> 

    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{asset('fonts/ionicons/css/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('fonts/fontawesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('fonts/flaticon/font/flaticon.css')}}">
    

    <!-- Theme Style -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
  </head>
  <body>

<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12"> 


<!-- BOTON PARA CERRAR SESION -->
<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
{{ Auth::user()->name }} <span class="caret"></span>
</a> 

<ul class="dropdown-menu" role="menu">
    <li>
        <a class="btn btn-primary" class="dropdown-item" href="{{ route('logout') }}"
        onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">
        {{ __('Cerrar Sesion') }}
        </a>
        
         <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
         @csrf
         </form>
    </li>
</ul>

<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12"> 
  <header role="banner" style="background:black">
     
     <nav class="navbar navbar-expand-md navbar-dark bg-light">
       <div class="container">
         <a class="navbar-brand" href="{{ url('#')}}">WINNED</a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
           <span class="navbar-toggler-icon"></span>
         </button>

         <div class="collapse navbar-collapse navbar-light" style="background:black" id="navbarsExample05">
           <ul class="navbar-nav ml-auto pl-lg-5 pl-0">

            <li class="nav-item">
               <a class="nav-link" href="{{ url('/productos/create')}}">NUEVO PRODUCTO</a>
             </li>

             <li class="nav-item">
               <a class="nav-link" href="{{ url('/productos')}}">INVENTARIO</a>
             </li>
            
             <li class="nav-item">
               <a class="nav-link" href="{{ url('/clientes')}}">CLIENTES</a>
             </li>

             <li class="nav-item">
               <a class="nav-link" href="{{ url('/facturacion/create')}}">VENDER</a>
             </li>

             <li class="nav-item">
               <a class="nav-link" href="{{ url('/facturacion')}}">VENTAS</a>
             </li>

           </ul>
         </div>
       </div>
     </nav>
   </header> 
   <!-- END header -->



<!-- ACA ES DONDE SE MUESTRA EL CONTENIDO DE LA VISTA --> 
   <br><br>
   @yield('contenido')
   <br><br>


</div>

    <script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('js/jquery-migrate-3.0.0.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('js/jquery.stellar.min.js')}}"></script>

    <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('js/magnific-popup-options.js')}}"></script>

    <script src="{{asset('js/main.js')}}"></script>
  </body>
</html>