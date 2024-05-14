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
        <div class="container mt-5">
            <h2>Formulario de Servicios</h2>
            <!-- Selección del servicio -->
            <div class="form-group">
                <label for="servicio">Seleccionar servicio:</label>
                <select id="servicio" class="form-control" onchange="mostrarFormulario()">
                    <option value="">Selecciona un servicio</option>
                    <option value="domicilios">Servicio de domicilios con robots y drones</option>
                    <option value="transporte">Servicio de transporte</option>
                    <option value="emergencias">Soporte para emergencias</option>
                    <option value="alquiler">Alquiler de medios de transporte</option>
                </select>
            </div>

            <!-- Sección de servicio de domicilios -->
            <div id="formulario-domicilios" class="hidden">
                <h3>Servicio de domicilios con robots y drones</h3>
                <div class="form-group">
                    <label for="ubicacion-recogida">Ubicación de recogida:</label>
                    <input type="text" id="ubicacion-recogida" class="form-control">
                </div>
                <div class="form-group">
                    <label for="direccion-entrega">Dirección de entrega:</label>
                    <input type="text" id="direccion-entrega" class="form-control">
                </div>
                <div class="form-group">
                    <label for="peso-paquete">Peso del paquete (en kg):</label>
                    <input type="number" id="peso-paquete" class="form-control" step="0.1">
                </div>
                <div class="form-group">
                    <label for="precio">Precio del domicilio:</label>
                    <input type="text" id="precio" class="form-control" readonly>
                    <!-- El precio se calcula automáticamente -->
                </div>
                <br>
                <button class="btn btn-primary" onclick="calcularPrecio()">Calcular precio</button>
                <button class="btn btn-primary">Confirmar</button>
                <br>
                <!-- Botón para calcular el precio -->

                <!-- Botón para mostrar métodos de pago -->
                <div class="mt-3">
                    <h4 style="text-align: center;">Métodos de pago</h4>
                    <br>
                    <div>
                        <div class="metodos-pago">
                            <div>
                                <input type="radio">
                                <label>Tarjeta débito/crédito</label>
                                <img src="IMG\tarjetas.jpg">
                            </div>
                            <div>
                                <input type="radio">
                                <label>PayPal</label>
                                <img src="IMG\paypal.png">
                            </div>
                            <div>
                                <input type="radio">
                                <label>PSE</label>
                                <img src="IMG\pse.jpg">
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Sección de servicio de transporte -->
            <div id="formulario-transporte" class="hidden">
                <h3>Servicio de transporte</h3>
                <div class="form-group">
                    <label for="ubicacion-actual">Ubicación actual:</label>
                    <input type="text" id="ubicacion-actual" class="form-control">
                </div>
                <div class="form-group">
                    <label for="ubicacion-destino">Ubicación de destino:</label>
                    <input type="text" id="ubicacion-destino" class="form-control">
                </div>
                <br>
                <button class="btn btn-primary" onclick="calcularPrecioRide()">Calcular precio</button>
                <button class="btn btn-primary">Confirmar</button>
                <br>
                <div class="mt-3">
                    <h4 style="text-align: center;">Plataformas de ridesharing</h4>
                    <br>
                    <div class="metodos-pago1">
                        <div>
                            <input type="radio" name="ridesharing" value="didi">
                            <label>Didi</label>
                            <img src="IMG\didi.png" alt="Didi">
                            <div id="precio-didi"></div>
                        </div>
                        <div>
                            <input type="radio" name="ridesharing" value="uber">
                            <label>Uber</label>
                            <img src="IMG\uber.png" alt="Uber">
                            <div id="precio-uber"></div>
                        </div>
                        <div>
                            <input type="radio" name="ridesharing" value="indrive">
                            <label>inDrive</label>
                            <img src="IMG\indrive.png" alt="inDrive">
                            <div id="precio-indrive"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sección de soporte para emergencias -->
            <div id="formulario-emergencias" class="hidden">
                <h3>Soporte para emergencias</h3>
                <div class="form-group">
                    <label for="ubicacion-emergencia">Ubicación actual:</label>
                    <input type="text" id="address" placeholder="Ingrese una dirección" class="form-control">
                    <br>
                    <button class="btn btn-primary">Confirmar</button>
                    <br>
                </div>
                <div class="form-group">
                    <h4 style="text-align: center;">Servicios de emergencia</h4>
                    <br>
                    <div>
                        <div class="metodos-pago1">
                            <div>
                                <input type="radio">
                                <label>Alerta de seguridad</label>
                                <img src="IMG\alerta.png">
                            </div>
                            <div>
                                <input type="radio">
                                <label>Asistencia en carretera</label>
                                <img src="IMG\grua.png">
                            </div>
                            <div>
                                <input type="radio">
                                <label>Acceso a servicios de emergencia</label>
                                <img src="IMG\911.jpg">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sección de alquiler de medios de transporte -->
            <div id="formulario-alquiler" class="hidden">
                <h3>Alquiler de medios de transporte</h3>
                <div class="form-group">
                    <label para="nombre">Nombres:</label>
                    <input type="text" id="nombre" class="form-control">
                </div>
                <div class="form-group">
                    <label para="apellido">Apellidos:</label>
                    <input type="text" id="apellido" class="form-control">
                </div>
                <div class="form-group">
                    <label para="cedula">Cédula de ciudadanía:</label>
                    <input type="number" id="cedula" class="form-control">
                </div>
                <button class="btn btn-primary">Confirmar</button>
                <br>
                <div class="form-group">
                    <h4 style="text-align: center;">Seleccione el medio de transporte</h4>
                    <br>
                    <div>
                        <div class="metodos-pago">
                            <div>
                                <input type="radio">
                                <label>Bicicletas</label>
                                <img src="IMG\bici.jpeg">
                            </div>
                            <div>
                                <input type="radio">
                                <label>Patines eléctricos</label>
                                <img src="IMG\patines_e.jpg">
                            </div>
                            <div>
                                <input type="radio">
                                <label>Skateboards</label>
                                <img src="IMG\skateb.jpg" style="width: 3rem;">
                            </div>
                        </div>
                    </div>
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
