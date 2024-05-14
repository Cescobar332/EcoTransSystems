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
    <style>
        .center {
            display: flex;
            justify-content: center;
        }
    </style>
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
            <h2>Generar Reportes</h2>
            <!-- Selección del tipo de reporte -->
            <div class="form-group">
                <label for="reporte">Seleccionar tipo de reporte:</label>
                <select id="reporte" class="form-control" onchange="mostrarFormulario2()">
                    <option value="">Selecciona un tipo de reporte</option>
                    <option value="semana">Reporte de la Semana</option>
                    <option value="mes">Reporte del Mes</option>
                    <option value="año">Reporte del Año</option>
                </select>
            </div>

            <!-- Sección para el reporte de la semana -->
            <div id="formulario-semana" class="hidden">
                <h3>Reporte de la Semana</h3>
                <h4>Servicio de domicilios con robots y drones:</h4>
                <p>Análisis Semanal:</p>
                <ul>
                    <li>La estabilidad en el número de entregas sugiere una demanda consistente de este servicio a lo
                        largo de la semana.</li>
                    <li>Las fluctuaciones mínimas en la distancia total y el tiempo promedio de entrega pueden
                        atribuirse a variaciones en la densidad del tráfico o en la distribución de los destinos de
                        entrega.</li>
                    <li>Los altos índices de satisfacción y las valoraciones indican una operación eficiente y
                        satisfactoria para los clientes, lo que sugiere un alto nivel de confiabilidad y calidad en el
                        servicio.</li>
                </ul>

                <body>
                    <div class="center">
                        <img src="IMG\grafica1.png" alt="Gráfica 1">
                    </div>
                    <p></p>
                    <div class="center">
                        <img src="IMG\tabla1.png" alt="Imagen 1">
                    </div>
                </body>
                <p></p>


                <h4>Servicio de transporte:</h4>
                <p>Análisis Semanal:</p>
                <ul>
                    <li>La estabilidad en el número de viajes y en la distancia total recorrida sugiere una demanda
                        constante de transporte a lo largo de la semana.</li>
                    <li>Las fluctuaciones mínimas en el tiempo promedio de espera pueden deberse a variaciones en la
                        congestión del tráfico o en la distribución de la demanda durante diferentes momentos del día.
                    </li>
                    <li>Los altos índices de satisfacción y las valoraciones indican un servicio confiable y
                        satisfactorio para los clientes, lo que sugiere una buena gestión de la puntualidad y la calidad
                        del servicio.</li>
                </ul>
                <div class="center">
                    <img src="IMG\grafica2.png" alt="Gráfica 2">
                </div>
                <p></p>
                <div class="center">
                    <img src="IMG\tabla2.png" alt="Imagen 2">
                </div>
                <p></p>
                <h4>Soporte para emergencias:</h4>
                <p>Análisis Semanal:</p>
                <ul>
                    <li>La estabilidad en el número de llamadas y en el tiempo promedio de respuesta sugiere una demanda
                        constante de soporte para emergencias a lo largo de la semana.</li>
                    <li>Los altos índices de resolución de emergencias y de satisfacción post-resolución indican una
                        eficaz gestión de las situaciones de emergencia por parte del equipo de soporte.</li>
                </ul>
                <div class="center">
                    <img src="IMG\grafica3.png" alt="Gráfica 3">
                </div>
                <p></p>
                <div class="center">
                    <img src="IMG\tabla3.png" alt="Imagen 3">
                </div>
                <p></p>

                <h4>Alquiler de medios de transporte:</h4>
                <p>Análisis Semanal:</p>
                <ul>
                    <li>La estabilidad en el número de alquileres y en la distancia total recorrida sugiere una demanda
                        constante de medios de transporte de alquiler a lo largo de la semana.</li>
                    <li>Los altos índices de devoluciones a tiempo indican una buena gestión de los tiempos de alquiler
                        y una eficaz coordinación con los clientes.</li>
                </ul>
                <div class="center">
                    <img src="IMG\grafica4.png" alt="Gráfica 4">
                </div>
                <p></p>
                <div class="center">
                    <img src="IMG\tabla4.png" alt="Imagen 4">
                </div>
                <p></p>
            </div>
            <!-- Sección para el reporte del mes -->
            <div id="formulario-mes" class="hidden">
                <h3>Reporte del Mes</h3>
                <h4>Servicio de domicilios con robots y drones</h4>
                <p>Análisis Mensual:</p>
                <ul>
                    <li>El aumento en el número de entregas durante el mes de marzo podría relacionarse con factores
                        estacionales, como días festivos o eventos especiales que aumenten la demanda de entregas a
                        domicilio.</li>
                    <li>La estabilidad en los índices de satisfacción y las valoraciones a lo largo del mes sugiere una
                        consistencia en la calidad del servicio prestado, independientemente de la variación en la
                        demanda.</li>
                </ul>
                <div class="center">
                    <img src="IMG\grafica5.png" alt="Gráfica 5">
                </div>
                <p></p>
                <div class="center">
                    <img src="IMG\grafica6.png" alt="Gráfica 6">
                </div>
                <p></p>
                <div class="center">
                    <img src="IMG\tabla5.png" alt="Imagen 5">
                </div>
                <p></p>

                <h4>Servicio de transporte</h4>
                <p>Análisis Mensual:</p>
                <ul>
                    <li>El aumento general en el número de viajes y en la distancia total recorrida durante el mes
                        podría estar relacionado con factores estacionales, como cambios en el clima o eventos que
                        aumenten la movilidad de las personas.</li>
                    <li>La estabilidad en los índices de satisfacción y las valoraciones a lo largo del mes sugiere una
                        consistencia en la calidad del servicio prestado, independientemente de la variación en la
                        demanda.</li>
                </ul>
                <div class="center">
                    <img src="IMG\grafica7.png" alt="Gráfica 7">
                </div>
                <p></p>
                <div class="center">
                    <img src="IMG\grafica8.png" alt="Gráfica 8">
                </div>
                <p></p>
                <div class="center">
                    <img src="IMG\tabla6.png" alt="Imagen 6">
                </div>
                <p></p>
                <h4>Soporte para emergencias</h4>
                <p>Análisis Mensual:</p>
                <ul>
                    <li>El pico de llamadas en diciembre podría estar relacionado con factores estacionales, como
                        condiciones climáticas adversas o vacaciones, que podrían aumentar la incidencia de emergencias.
                    </li>
                    <li>La estabilidad en los índices de satisfacción a lo largo del mes indica una consistencia en la
                        calidad del servicio de soporte prestado, incluso durante períodos de mayor demanda.</li>
                </ul>
                <div class="center">
                    <img src="IMG\grafica9.png" alt="Gráfica 9">
                </div>
                <p></p>
                <div class="center">
                    <img src="IMG\grafica10.png" alt="Gráfica 10">
                </div>
                <p></p>
                <div class="center">
                    <img src="IMG\tabla7.png" alt="Imagen 7">
                </div>
                <p></p>

                <h4>Alquiler de medios de transporte</h4>
                <p>Análisis Mensual:</p>
                <ul>
                    <li>El pico en la demanda de alquiler de medios de transporte en julio podría estar relacionado con
                        factores estacionales, como vacaciones de verano, eventos o festivales locales que aumenten la
                        movilidad de las personas.</li>
                    <li>La estabilidad en los índices de satisfacción a lo largo del mes sugiere una consistencia en la
                        calidad del servicio de alquiler prestado, incluso durante períodos de mayor demanda.</li>
                </ul>
                <div class="center">
                    <img src="IMG\grafica11.png" alt="Gráfica 11">
                </div>
                <p></p>
                <div class="center">
                    <img src="IMG\grafica12.png" alt="Gráfica 12">
                </div>
                <p></p>
                <div class="center">
                    <img src="IMG\tabla8.png" alt="Imagen 8">
                </div>
                <p></p>
            </div>

            <!-- Sección para el reporte del año -->
            <div id="formulario-año" class="hidden">
                <h3>Reporte del Año</h3>
                <div>
                    <h4>Servicio de domicilios con robots y drones</h4>
                    <p>Análisis Anual:</p>
                    <ul>
                        <li>El aumento constante en el número de entregas y la distancia total recorrida a lo largo del
                            año indica un crecimiento continuo en la demanda del servicio de domicilios con robots y
                            drones.</li>
                        <li>Los altos índices de satisfacción y las valoraciones consistentemente altas durante todo el
                            año reflejan la capacidad de la empresa para mantener altos estándares de servicio y
                            satisfacción del cliente a largo plazo.</li>
                    </ul>
                    <div class="center">
                        <img src="IMG\grafica13.png" alt="Gráfica 13">
                    </div>
                    <p></p>
                    <div class="center">
                        <img src="IMG\grafica14.png" alt="Gráfica 14">
                    </div>
                    <p></p>
                    <div class="center">
                        <img src="IMG\tabla9.png" alt="Imagen 9">
                    </div>
                    <p></p>
                </div>
                <div>
                    <h4>Servicio de transporte</h4>
                    <p>Análisis Anual:</p>
                    <ul>
                        <li>El crecimiento constante en el número de viajes y en la distancia total recorrida a lo largo
                            del año indica una mayor confianza y dependencia en el servicio de transporte ofrecido por
                            la empresa.</li>
                        <li>Los altos índices de satisfacción y las valoraciones consistentemente altas durante todo el
                            año reflejan la capacidad de la empresa para mantener altos estándares de servicio y
                            satisfacción del cliente a largo plazo.</li>
                    </ul>
                    <div class="center">
                        <img src="IMG\grafica15.png" alt="Gráfica 15">
                    </div>
                    <p></p>
                    <div class="center">
                        <img src="IMG\grafica16.png" alt="Gráfica 16">
                    </div>
                    <p></p>
                    <div class="center">
                        <img src="IMG\tabla10.png" alt="Imagen 10">
                    </div>
                    <p></p>
                </div>
                <div>
                    <h4>Soporte para emergencias</h4>
                    <p>Análisis Anual:</p>
                    <ul>
                        <li>El aumento general en el número de llamadas a lo largo del año podría indicar una mayor
                            conciencia sobre el servicio de soporte para emergencias entre los clientes.</li>
                        <li>Los altos índices de satisfacción y las valoraciones consistentemente altas durante todo el
                            año reflejan la capacidad del equipo de soporte para gestionar eficazmente una variedad de
                            situaciones de emergencia y satisfacer las necesidades de los clientes.</li>
                    </ul>
                    <div class="center">
                        <img src="IMG\grafica17.png" alt="Gráfica 17">
                    </div>
                    <p></p>
                    <div class="center">
                        <img src="IMG\grafica18.png" alt="Gráfica 18">
                    </div>
                    <p></p>
                    <div class="center">
                        <img src="IMG\tabla11.png" alt="Imagen 11">
                    </div>
                    <p></p>
                </div>
                <div>
                    <h4>Alquiler de medios de transporte</h4>
                    <p>Análisis Anual:</p>
                    <ul>
                        <li>El crecimiento constante en el número de alquileres y en la distancia total recorrida a lo
                            largo del año indica una mayor dependencia en el servicio de alquiler de medios de
                            transporte ofrecido por la empresa.</li>
                        <li>Los altos índices de satisfacción y las valoraciones consistentemente altas durante todo el
                            año reflejan la capacidad de la empresa para mantener altos estándares de servicio y
                            satisfacción del cliente a largo plazo.</li>
                    </ul>
                    <div class="center">
                        <img src="IMG\grafica19.png" alt="Gráfica 19">
                    </div>
                    <p></p>
                    <div class="center">
                        <img src="IMG\grafica20.png" alt="Gráfica 20">
                    </div>
                    <p></p>
                    <div class="center">
                        <img src="IMG\tabla12.png" alt="Imagen 12">
                    </div>
                    <p></p>
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
