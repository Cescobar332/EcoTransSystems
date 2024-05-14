<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eco Trans Systems</title>
    <link rel="stylesheet" href="css\styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="IMG\favicon_io\favicon.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="IMG\favicon_io\apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="IMG\favicon_io\favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="IMG\favicon_io\favicon-16x16.png">
    <link rel="manifest" href="IMG\favicon_io\site.webmanifest">
</head>

<body>
    <header>
        <h1>Eco Trans Systems</h1>
    </header>
    <nav>
        <ul>
            <li class="texto-con-sombra"><a href="{{ route('index') }}">Home</a></li>
            <li class="texto-con-sombra"><a href="{{ route('nosotros') }}">Nosotros</a></li>
            <li class="texto-con-sombra"><a href="{{ route('servicios') }}">Servicios</a></li>
            <li class="texto-con-sombra"><a href="{{ route('contacto') }}">Contacto</a></li>
            <li class="texto-con-sombra"><a href="{{ route('estadisticas') }}">Reportes</a></li>
            <li class="texto-con-sombra"><a href="{{ route('login') }}">Login</a></li>
            <li class="texto-con-sombra"><a href="{{ route('register') }}">Registro</a></li>
        </ul>
    </nav>
    <main id="main">
        <div class="columna">
            <div class="card" style="width: 18rem;">
                <img src="IMG\robot.jpeg" class="card-img-top img-fluid" alt="...">
                <div class="card-body card-cam">
                    <h5 class="card-title">Servicio de domicilios con robots y drones</h5>
                    <p class="card-text">Este revolucionario servicio utiliza la última tecnología en robótica y drones
                        para realizar entregas rápidas y eficientes. Los robots autónomos y los drones de entrega se
                        encargan de llevar los paquetes directamente desde el punto de origen hasta su destino,
                        reduciendo los tiempos de entrega y optimizando la logística.</p>
                    <!-- <a href="#" class="btn btn-primary btn-azul">Ver</a> -->
                </div>
            </div>
        </div>

        <div class="columna">
            <div class="card" style="width: 18rem;">
                <img src="IMG\apps.jpeg" class="card-img-top" alt="...">
                <div class="card-body card-cam">
                    <h5 class="card-title">Servicios de Transporte</h5>
                    <p class="card-text">Ofrecemos una amplia gama de opciones de transporte, incluyendo servicios de
                        ridesharing como Uber, taxis tradicionales y otros medios de transporte público. Con nuestra
                        plataforma, los usuarios pueden elegir la opción de transporte que mejor se adapte a sus
                        necesidades y preferencias, garantizando viajes seguros y cómodos en todo momento.</p>
                    <!-- <a href="#" class="btn btn-primary btn-azul">Ver</a> -->
                </div>
            </div>
        </div>

        <div class="columna">
            <div class="card" style="width: 18rem;">
                <img src="IMG\emergencia.jpg" class="card-img-top" alt="...">
                <div class="card-body card-cam">
                    <h5 class="card-title">Soporte para emergencias del conductor y/o pasajeros</h5>
                    <p class="card-text">La seguridad es nuestra prioridad. Por eso, hemos implementado una serie de
                        mecanismos de soporte para situaciones de emergencia tanto para conductores como para pasajeros.
                        Esto incluye funciones de alerta de seguridad, asistencia en carretera y acceso a servicios de
                        emergencia en caso de accidentes u otros eventos imprevistos.</p>
                    <!-- <a href="#" class="btn btn-primary btn-azul">Ver</a> -->
                </div>
            </div>
        </div>

        <div class="columna">
            <div class="card" style="width: 18rem;">
                <img src="IMG\bici.jpg" class="card-img-top" alt="...">
                <div class="card-body card-cam">
                    <h5 class="card-title">Alquiler de medios de transporte</h5>
                    <p class="card-text">Nuestro servicio de alquiler de transporte ofrece una alternativa ecológica y
                        económica para moverse por la ciudad. Con una amplia selección de opciones, incluyendo
                        bicicletas, patinetes eléctricos, skateboards y más, los usuarios pueden disfrutar de la
                        libertad de explorar la ciudad de manera sostenible y divertida.</p>
                    <!-- <a href="#" class="btn btn-primary btn-azul">Ver</a> -->
                </div>
            </div>
        </div>
        <br>
        <br>
        <br>
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
