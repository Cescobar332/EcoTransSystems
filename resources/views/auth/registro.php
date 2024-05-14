<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ECOLAB</title>
    <link rel="stylesheet" href="resources\css\styles.css">
    <link rel="icon" type="image/x-icon" href="resources\IMG\favicon_io\favicon.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="resources\IMG\favicon_io\apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="resources\IMG\favicon_io\favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="resources\IMG\favicon_io\favicon-16x16.png">
    <link rel="manifest" href="resources\IMG\favicon_io\site.webmanifest">
</head>
<body>

<div class="container">
    <h2>Eco Trans Systems</h2>
    <p class="parrafo">¡Hola! Regístrate para utilizar nuestra aplicación:</p>
    <form>
        <div style="margin-bottom: 10px;">
            <input class="form-control" type="text" name="nombre" placeholder="Nombre" required title="Por favor ingresa tu nombre" autocomplete="given-name" required>
        </div>
        <div style="margin-bottom: 7px;">
            <input type="text" name="apellido" class="form-control" placeholder="Apellido" required title="Por favor ingresa tu apellido" autocomplete="family-name" required>
        </div>
        <div style="margin-bottom: 7px;">
            <input type="email" name="email" class="form-control" placeholder="Email" required title="Por favor ingresa tu correo electrónico" autocomplete="email" required>
        </div>
        <div style="margin-bottom: 7px;">
            <input type="password" name="password" class="form-control" placeholder="Contraseña" required title="Por favor ingresa tu contraseña" autocomplete="new-password" required>
        </div>
        <div style="margin-bottom: 7px;">
            <input type="password" name="password_confirmation" class="form-control" placeholder="Confirmar contraseña" required title="Por favor confirma tu contraseña" autocomplete="new-password" required>
        </div>
        <button id="open-popup-ok" type="submit" class="button">REGÍSTRATE</button>
    </form>
</div>
<br>
<br>
</body>
<script src="resources\js\script.js"></script>
</html>