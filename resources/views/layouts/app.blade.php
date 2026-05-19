<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">

    <title>Mi sitio</title>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@500;700&family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
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
    <main>
         @yield('content')
    </main>
   

    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>