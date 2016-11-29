<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Tienda en Línea - @yield('titulo')</title>
    <!-- Inlcuir Archivos CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/materialize.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/jquery.dataTables.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/estilos.css')}}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Fin Archivos CSS -->
</head>
<body>
<nav>
    <div class="nav-wrapper  light-green accent-3">
        <a href="{{url('/')}}" class="brand-logo">Tiendas En Línea</a>
        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
            <li><a href="{{route('personas.index')}}">Personas</a></li>
        </ul>
        <ul class="side-nav" id="mobile-demo">
            <li><a href="{{route('personas.index')}}">Personas</a></li>
        </ul>
    </div>
</nav>
    @yield('contenido')
    <!-- Incluir Archivos JS-->
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/materialize.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.dataTables.min.js')}}"></script>
    <!-- Fin Archivos JS -->
    <script>
        $(".button-collapse").sideNav();
    </script>
    @yield('scripts')
</body>
</html>