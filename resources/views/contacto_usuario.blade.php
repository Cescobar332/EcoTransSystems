<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eco Trans Systems - Contacto</title>
    <link rel="stylesheet" href="css\styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="IMG\favicon_io\favicon.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="IMG\favicon_io\apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="IMG\favicon_io\favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="IMG\favicon_io\favicon-16x16.png">
    <link rel="manifest" href="IMG\favicon_io\site.webmanifest">
</head>
<style>
    body {
        background-color: #cce6ff;
    }
</style>

<body>
    <header>
        <h1>Eco Trans Systems</h1>
    </header>
    <nav>
        <ul>
            <li class="texto-con-sombra"><a href="{{ route('index_usuario') }}">Home</a></li>
            <li class="texto-con-sombra"><a href="{{ route('nosotros_usuarios') }}">Nosotros</a></li>
            <li class="texto-con-sombra"><a href="{{ route('servicios_usuarios') }}">Servicios</a></li>
            <li class="texto-con-sombra"><a href="{{ route('contacto_usuario') }}">Contacto</a></li>
            <li class="texto-con-sombra"><a href="{{ route('historial_usuario') }}">Historial</a></li>
            <li class="texto-con-sombra"><a href="{{ route('login') }}">Login</a></li>
            <li class="texto-con-sombra"><a href="{{ route('register') }}">Registro</a></li>
        </ul>
    </nav>
    <main>
        <section class="contacto">
            <h2>Contáctanos</h2>
            <p>¡Estamos aquí para ayudarte! Si tienes alguna <br>pregunta, comentario o sugerencia, no dudes en
                contactarnos.</p>
            <ul>
                <li>
                    <img src="IMG\email-icon.png" alt="Email icon">
                    <span>Email: mvillamizar666@unab.edu.co</span>
                </li>
                <li>
                    <span>Teléfono:
                        <ul>
                            <li><img src="IMG\phone-icon.png" alt="Phone icon"> 3505030233</li>
                            <li><img src="IMG\phone-icon.png" alt="Phone icon"> 3166071650</li>
                            <li><img src="IMG\phone-icon.png" alt="Phone icon"> 3173105375</li>
                        </ul>
                    </span>
                </li>
                <li>
                    <img src="IMG\address-icon.png" alt="Address icon">
                    <span>Dirección: Av. 42 #48 - 11, Bucaramanga, Santander</span>
                </li>
            </ul>
        </section>
        <div class="fondo-claro">
            <section class="cuadrado-blanco">
                <h2>Ponerse en contacto</h2>
                <p>¡No dudes en escribirnos a continuación!</p>
                <form action="" class="formulario-contacto">
                    <input type="text" placeholder="Escribe tu mensaje aquí">
                    <button type="submit">Enviar</button>
                </form>
            </section>
        </div>
    </main>
    <footer>
        <p>&copy; 2024 Cyber Connect Commute</p>
    </footer>
    <script>
        const enlacesConSombra = document.querySelectorAll('.texto-con-sombra');

        enlacesConSombra.forEach(enlace => {
            enlace.addEventListener('mouseover', () => {
                enlace.classList.add('con-sombra');
            });

            enlace.addEventListener('mouseout', () => {
                enlace.classList.remove('con-sombra');
            });
        });


        function cargarContenido(url) {
            fetch(url)
                .then(response => response.text())
                .then(html => {
                    document.getElementById('main').innerHTML = html;
                });
        }


        document.querySelectorAll('.link').forEach(enlace => {
            enlace.addEventListener('click', function(e) {
                e.preventDefault();
                cargarContenido(this.getAttribute('href'));
            });
        });

        // Función para mostrar el formulario correspondiente según el servicio seleccionado
        function mostrarFormulario() {
            // Ocultar todos los formularios
            document.getElementById("formulario-domicilios").classList.add("hidden");
            document.getElementById("formulario-transporte").classList.add("hidden");
            document.getElementById("formulario-emergencias").classList.add("hidden");
            document.getElementById("formulario-alquiler").classList.add("hidden");

            const servicio = document.getElementById("servicio").value;

            // Mostrar el formulario adecuado según el servicio seleccionado
            if (servicio === "domicilios") {
                document.getElementById("formulario-domicilios").classList.remove("hidden");
            } else if (servicio === "transporte") {
                document.getElementById("formulario-transporte").classList.remove("hidden");
            } else if (servicio === "emergencias") {
                document.getElementById("formulario-emergencias").classList.remove("hidden");
            } else if (servicio === "alquiler") {
                document.getElementById("formulario-alquiler").classList.remove("hidden");
            }
        }



        // Función para calcular el precio del servicio de domicilios
        function calcularPrecio() {
            const peso = document.getElementById("peso-paquete").value;
            let precio = 0;

            if (peso > 0 && peso <= 1) {
                precio = 10000; // Precio base
            } else if (peso > 1 && peso <= 5) {
                precio = 20000; // Precio intermedio
            } else if (peso > 5) {
                precio = 30000; // Precio más alto
            }

            document.getElementById("precio").value = `COP ${precio.toFixed(0)}`;
        }

        function calcularPrecioRide() {
            // Calcular precios aleatorios entre 1000 COP y 2000 COP
            const minPrice = 5000;
            const maxPrice = 10000;

            // Genera un precio aleatorio dentro del rango dado
            function precioAleatorio() {
                return Math.floor(Math.random() * (maxPrice - minPrice + 1)) + minPrice;
            }

            // Asigna precios a cada plataforma
            document.getElementById("precio-didi").textContent = `Precio: COP ${precioAleatorio()}`;
            document.getElementById("precio-uber").textContent = `Precio: COP ${precioAleatorio()}`;
            document.getElementById("precio-indrive").textContent = `Precio: COP ${precioAleatorio()}`;
        }


        function mostrarFormulario2() {
            const seleccion = document.getElementById("reporte").value;

            // Ocultar todos los formularios
            document.getElementById("formulario-semana").classList.add("hidden");
            document.getElementById("formulario-mes").classList.add("hidden");
            document.getElementById("formulario-año").classList.add("hidden");

            // Mostrar mensaje según la opción seleccionada
            if (seleccion === "semana") {
                document.getElementById("formulario-semana").classList.remove("hidden");
            } else if (seleccion === "mes") {
                document.getElementById("formulario-mes").classList.remove("hidden");
            } else if (seleccion === "año") {
                document.getElementById("formulario-año").classList.remove("hidden");
            }

        }
    </script>
</body>

</html>
