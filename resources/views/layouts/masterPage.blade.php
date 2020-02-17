<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        
          <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="{{ asset('style/css/materialize.min.css') }}"  media="screen,projection"/>
        <link type="text/css" rel="stylesheet" href="{{ asset('css/masterPage.css') }}"/>

        <title>Diócesis de Alajuela</title>
          <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta name="_token" content="{!! csrf_token() !!}" /> 
        <!--background-repeat: no-repeat;-->
        
        <link rel="icon" type="image/png" href="{{ asset('style/img/favicon.png') }}" />
        
        <script>
          window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
          ]) !!};
        </script>
        
        <style> 
        
        nav {
                background-image: url("/style/img/head3dorado.jpg");
                background-position:  center center;
                background-repeat: no-repeat;
                background-size: 100% 70px;
                background-color: #51081C;
                /*height:130px;*/
            }
            
            #footer, .btn, .collapsible-header {
                background-color: #51081C;
            }
            
            #tamanoFooter { height: 50px; }
            
            .btn:hover {
                background-color: #EDB35B; 
            }
            
            .btn:active{
            background: #51081C;
            }
            
            .dropdown-content li > a, .dropdown-content li > span {
              color: #840f2d;
            }
            
            #tablaConsulta td .material-icons {
              color: #840f2d;
            }
            
            #miTabla td .material-icons {
              color: #840f2d;
            }
            
            .nav-wrapper li > a:hover {
              color: #EDB35B;
              font-weight: bold;
              font-size: 120%;
            }
            
            [type="radio"]:checked + label:before,
            [type="radio"]:checked + label:after {
              border: 2px solid #840f2d;
              background-color: #840f2d;
            }
            
            input:not([type]):focus:not([readonly]), input[type=text]:focus:not([readonly]), input[type=password]:focus:not([readonly]), input[type=email]:focus:not([readonly]), input[type=date]:focus:not([readonly]), input[type=number]:focus:not([readonly]), textarea.materialize-textarea:focus:not([readonly]) {
              border-bottom: 1px solid #840f2d;
              box-shadow: 0 1px 0 0 #840f2d;
            }
            
            input:not([type]):focus:not([readonly]) + label, input[type=text]:focus:not([readonly]) + label, input[type=password]:focus:not([readonly]) + label, input[type=email]:focus:not([readonly]) + label, input[type=date]:focus:not([readonly]) + label, input[type=number]:focus:not([readonly]) + label, textarea.materialize-textarea:focus:not([readonly]) + label {
              color: #840f2d;
            }

            [type="checkbox"]:checked + label:before {
              border-right: 2px solid #840f2d;
              border-bottom: 2px solid #840f2d;
            }
            
            body {
                display: flex;
                min-height: 100vh;
                flex-direction: column;
                background-color: #f9f3e3;
            }
            
            main {
                flex: 1 0 auto;
            }
            
        </style>
    </head>
    
    <body>
        <header>
          <!-- Dropdown Structure -->
          <ul id="dropdownUsuario" class="dropdown-content">
            <li><a href="{{ url('cambiarContrasenaUser') }}">Cambiar contraseña</a></li>
            <li><a href="{{url('editarPerfil')}}">Editar perfil</a></li>
            <li class="divider"></li>
            <li>
              <a href="{{ route('logout') }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                Cerrar sesión</a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
              </form>
            </li>
          </ul>
          
         <!-- <ul id="dropdownActa" class="dropdown-content">
            <li><a href="{{ url('actaAdmin') }}">Agregar Nueva Acta</a></li>
            <li><a href="">Editar...</a></li>
          </ul> -->
          <!-- ------------------------- -->
          
          <nav class="nav-extended">
            
          @if (Auth::guest())
          
            <div class="nav-wrapper">
              <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="{{ route('login') }}">Iniciar sesión</a></li>
                <li><a href="{{ url('/registro') }}">Registrarse</a></li>
              </ul>
            </div>
         
          @else
          
            <div class="nav-wrapper">
              <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="Manual/Manualdelusuario.pdf" download="Manual Sistema Web" title="Descargar manual de sistema"><i class="material-icons large">help</i></a></li>
                <li><a class="dropdown-button" data-constrainwidth="false" href="" data-activates="dropdownUsuario"><i class="material-icons large left">person</i>{{ Auth::user()->Nombre }}</a></li>
              </ul>

              <ul class="">
                <li><a href="{{ url('notificaciones') }} ">Notificaciones</a></li>
                <li><a href="{{ url('Actas') }} ">Actas</a></li>
                <!-- <li><a class="dropdown-button" data-constrainwidth="false" data-beloworigin="true" data-activates="dropdownActa">Actas<i class="material-icons right">arrow_drop_down</i></a></li> -->
                <li><a href="{{ url('consulta') }}">Consultas</a></li>
              </ul>
            </div>
          
          @endif
          
          </nav>
        </header>
        
        <main id="main">
          <div class= "content">
            @yield('content')
          </div>
        </main>
        
        <footer id="footer" class="page-footer">
           <div id="tamanoFooter" class="footer-copyright">
            <div class="container center">
              <h5>
                <ul>
                  <li><a class="white-text" href="{{ url('contacto') }}">Contáctenos</a></li>
                </ul>
              </h5>
            </div>
            
            <div class="container">
              Copyright © 2020 Diócesis de Alajuela, Costa Rica. Derechos Reservados.
            </div>
          </div>
        </footer>
        
    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="{{ asset('style/js/materialize.min.js') }}"></script>
   
</html>