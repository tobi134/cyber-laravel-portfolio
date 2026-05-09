<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">

    <title>Mi sitio</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    
    <nav>
        <ul>
            <li><a href="#">Inicio</a></li>
            <li><a href="#">proyectos</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Experimentos</a></li>
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Contacto</a></li>
        </ul>
    </nav>
    @yield('content')

    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>