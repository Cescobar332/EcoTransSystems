<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuarios - EcoTransSystems</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <style>
        /* Estilos adicionales */
        .container {
            text-align: center; /* Centra los elementos dentro del contenedor */
            margin-top: 50px; /* Espacio superior para separar del borde superior */
        }
        h1 {
            margin-bottom: 20px; /* Espacio inferior para separar del título del formulario */
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Eco Trans Systems</h1>
        <h2>Registro de usuarios</h2>
        <form action="{{ route('register') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Nombre:</label>
                <input type="text" name="name" id="name" class="form-control">
            </div>
            <div class="form-group">
                <label for="email">Correo electrónico:</label>
                <input type="email" name="email" id="email" class="form-control">
            </div>
            <div class="form-group">
                <label for="password">Contraseña:</label>
                <input type="password" name="password" id="password" class="form-control">
            </div>
            <div class="form-group">
                <label for="password_confirmation">Confirmar contraseña:</label>
                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary"><a href="{{ route('login') }}" class="btn btn-primary">Registrar</a></button>
        </form>
    </div>
</body>
</html>
