<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión - ECOLAB</title>
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
    <p>Bienvenido de nuevo!</p>
    <form>
        <div style="margin-bottom: 20px;">
            <input type="email" name="email" class="form-control_is" placeholder="Correo electrónico" required>
        </div>
        <div style="margin-bottom: 20px;">
            <input type="password" name="password" class="form-control_is" placeholder="Contraseña" required>
        </div>
        <div class="continuar-texto">
            <p>O continúa con:</p>
            <div class="linea"></div>
        </div>
        
        <!-- Alineación horizontal -->
        <div class="boton-servicio-container">
            <button class="boton-servicio">
                <img src="resources/IMG\google.png">
            </button>
            <button class="boton-servicio">
                <img src="resources/IMG\microsoft.png">
            </button>
        </div>
        <div class="continuar-texto1">
        <div class="olvidar-link">
            <a href="resources\views\auth\recuperar_contraseña.php">¿Olvidaste tu contraseña?</a>
        </div>
    </div>
        <button type="submit" class="button_is">INICIAR SESIÓN</button>
    </form>
    
    <div class="registro-link">
        <p class="mt-3">¿No tienes una cuenta? <a href="resources\views\auth\registro.php">Regístrate</a></p>
    </div>
</div>

<br><br> <!-- Espacio para navbar fijo -->
</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</html>