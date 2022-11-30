<!DOCTYPE html>
<html lang="es-Mx">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplicacion</title>
    <link rel="stylesheet" href="{{ url('css/bootstrap.min.css')}}">
</head>
<body>
    @include('layouts.partials.navbar')
    <main class="container">
        @yield('content')
    </main>
    <script src="{{ url('js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>