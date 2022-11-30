<!DOCTYPE html>
<html lang="es-Mx">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplicacion</title>
    <link rel="stylesheet" href="{{ url('css/bootstrap.min.css')}}">
    <style>
        body{
            width: 100%;
            height: auto;

            display: flex;
            align-items: center;
            justify-content: center;

            background-color: #EAEAEA;
        }
        .form-container{
            width: 700px;
        }
    </style>
</head>
<body>
    <main class="form-container">
        @yield('content')
    </main>
    <script src="{{ url('js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>