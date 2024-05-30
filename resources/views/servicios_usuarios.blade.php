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
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <style>
        #map {
            height: 400px;
            width: 100%;
        }
    </style>
</head>

<body>
    <header>
        <h1>Eco Trans Systems</h1>
    </header>
    <nav>
        <ul>
            <li class="texto-con-sombra"><a href="index.html">Home</a></li>
            <li class="texto-con-sombra"><a href="nosotros.html">Nosotros</a></li>
            <li class="texto-con-sombra"><a href="servicios.html">Servicios</a></li>
            <li class="texto-con-sombra"><a href="contacto.html">Contacto</a></li>
            <li class="texto-con-sombra"><a href="historial.html">Historial</a></li>
            <li class="texto-con-sombra"><a href="login.html">Login</a></li>
            <li class="texto-con-sombra"><a href="register.html">Registro</a></li>
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

            <!-- Enlace al archivo CSS -->
            <link rel="stylesheet" href="resources/css/styles.css">

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
                <br>
                <br>
                <br>
                <!-- Botón para calcular el precio -->
                <!-- Mapa para simular la ruta -->
                <button class="btn btn-primary" onclick="initMap()">Mostrar Mapa</button>
                <div class="form-group">
                    <h4 style="text-align: center;">Ubicación de recogida y entrega</h4>
                    <div id="map" style="height: 400px; width: 100%;"></div>
                </div>
                <!-- Botón para mostrar métodos de pago -->
                <div class="mt-3">
                    <h4 style="text-align: center;">Métodos de pago</h4>
                    <br>
                    <div>
                        <div class="metodos-pago">
                            <div>
                                <input type="radio" name="metodo-pago">
                                <label>Tarjeta débito/crédito</label>
                                <img src="IMG/tarjetas.jpg">
                            </div>
                            <div>
                                <input type="radio" name="metodo-pago">
                                <label>PayPal</label>
                                <img src="IMG/paypal.png">
                            </div>
                            <div>
                                <input type="radio" name="metodo-pago">
                                <label>PSE</label>
                                <img src="IMG/pse.jpg">
                            </div>
                        </div>
                        <br>
                        <br>
                        <button id="confirmar-btn" class="btn btn-primary" onclick="mostrarDatosBancarios()">Confirmar</button>
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
                <button class="btn btn-primary" onclick="initMapTransporte()">Mostrar Mapa</button>
                <!-- Mapa insertado -->
                <div class="form-group">
                    <h4 style="text-align: center;">Ruta de transporte</h4>
                    <div id="mapTransporte" style="height: 400px; width: 100%;"></div>
                </div>
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
                    <br>
                    <button class="btn btn-primary" onclick="mostrarDatosBancarios()">Confirmar</button>
                </div>
            </div>
            <!-- Sección de soporte para emergencias -->
            <div id="formulario-emergencias" class="hidden">
                <h3>Soporte para emergencias</h3>
                <div class="form-group">
                    <label for="ubicacion-emergencia">Ubicación actual:</label>
                    <input type="text" id="address" placeholder="Ingrese una dirección" class="form-control">
                    <br>
                    <button class="btn btn-primary" onclick="initMapEmergencias()">Confirmar</button>
                    <br>
                    <div class="form-group">
                        <h4 style="text-align: center;">Ubicación de emergencia</h4>
                        <div id="mapEmergencias" style="height: 400px; width: 100%;"></div>
                    </div>
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
                        <br>
                        <button class="btn btn-primary" onclick="mostrarDatosBancarios()">Confirmar</button>
                    </div>
                </div>
                <!-- Mapa insertado -->
                <div class="form-group">
                    <h4 style="text-align: center;">Ubicación de alquiler</h4>
                    <iframe src="https://www.google.com/maps/d/u/0/embed?mid=16WfFj25um0CErLvvrBlpdt7_daQNokg&ehbc=2E312F&noprof=1" width="1300" height="480"></iframe>
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
            let advertencia = '';
            const confirmarBtn = document.getElementById("confirmar-btn");

            if (peso > 0 && peso <= 1) {
                precio = 10000; // Precio base
                advertencia = '';
            } else if (peso > 1 && peso <= 5) {
                precio = 20000; // Precio intermedio
                advertencia = '';
            } else if (peso > 5 && peso <= 7) {
                precio = 30000; // Precio más alto
                advertencia = '';
            } else if (peso > 7) {
                advertencia = 'NO HAY DRONES NI ROBOTS DISPONIBLES EN ESTOS MOMENTOS';
                confirmarBtn.disabled = true;
                // Mostrar mensaje de error con SweetAlert2
                swal({
                    title: advertencia,
                    icon: 'error',
                    customClass: {
                    content: 'text-center' // Centrar el texto
                }
                });
            }

            if (advertencia === '') {
                document.getElementById("precio").value = `COP ${precio.toFixed(0)}`;
                confirmarBtn.disabled = false;
            } else {
                document.getElementById("precio").value = '';
                document.getElementById("advertencia").innerText = advertencia;
            }
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

        function mostrarDatosBancarios() {
            // Redirigir a la vista de datos bancarios
            window.location.href = "{{ route('datos_bancarios') }}";
        }

        // Inicializar el mapa y la ruta
        async function geocodeAddress(address) {
            const url = `https://nominatim.openstreetmap.org/search?format=json&q=${encodeURIComponent(address)}&countrycodes=co&limit=1&viewbox=-73.1833,7.1253,-73.0156,7.0738&bounded=1`;
            const response = await fetch(url);
            const data = await response.json();
            if (data.length > 0) {
                return [parseFloat(data[0].lat), parseFloat(data[0].lon)];
            } else {
                alert('Dirección no encontrada: ' + address);
                return null;
            }
        }

        async function initMap() {
            const direccionRecogida = document.getElementById("ubicacion-recogida").value;
            const direccionEntrega = document.getElementById("direccion-entrega").value;

            const ubicacionRecogida = await geocodeAddress(direccionRecogida);
            const ubicacionEntrega = await geocodeAddress(direccionEntrega);

            if (ubicacionRecogida && ubicacionEntrega) {
                // Inicializar el mapa
                const map = L.map('map').setView(ubicacionRecogida, 13);

                // Añadir capa de OpenStreetMap
                L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                }).addTo(map);

                // Añadir marcadores para la ubicación de recogida y entrega
                L.marker(ubicacionRecogida).addTo(map).bindPopup('Ubicación de recogida').openPopup();
                L.marker(ubicacionEntrega).addTo(map).bindPopup('Dirección de entrega').openPopup();

                // Dibujar una línea entre los dos puntos
                const latlngs = [ubicacionRecogida, ubicacionEntrega];
                const polyline = L.polyline(latlngs, { color: 'red' }).addTo(map);

                // Ajustar el zoom del mapa para mostrar toda la ruta
                map.fitBounds(polyline.getBounds());
            }
        }

        async function initMapTransporte() {
            const ubicacionActual = document.getElementById("ubicacion-actual").value;
            const ubicacionDestino = document.getElementById("ubicacion-destino").value;

            const coordenadasActual = await geocodeAddress(ubicacionActual);
            const coordenadasDestino = await geocodeAddress(ubicacionDestino);

            if (coordenadasActual && coordenadasDestino) {
                // Inicializar el mapa
                const map = L.map('mapTransporte').setView(coordenadasActual, 13);

                // Añadir capa de OpenStreetMap
                L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                }).addTo(map);

                // Añadir marcadores para la ubicación actual y destino
                L.marker(coordenadasActual).addTo(map).bindPopup('Ubicación actual').openPopup();
                L.marker(coordenadasDestino).addTo(map).bindPopup('Ubicación de destino').openPopup();

                // Dibujar una línea entre los dos puntos
                const latlngs = [coordenadasActual, coordenadasDestino];
                const polyline = L.polyline(latlngs, { color: 'blue' }).addTo(map);

                // Ajustar el zoom del mapa para mostrar toda la ruta
                map.fitBounds(polyline.getBounds());
            }
        }
        async function initMapEmergencias() {
        const ubicacionEmergencia = document.getElementById("address").value;

        const coordenadasEmergencia = await geocodeAddress(ubicacionEmergencia);

        if (coordenadasEmergencia) {
            // Inicializar el mapa
            const map = L.map('mapEmergencias').setView(coordenadasEmergencia, 13);

            // Añadir capa de OpenStreetMap
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
            }).addTo(map);

            // Añadir marcador para la ubicación de emergencia
            L.marker(coordenadasEmergencia).addTo(map).bindPopup('Ubicación de emergencia').openPopup();
        }
    }
    </script>
</body>

</html>
