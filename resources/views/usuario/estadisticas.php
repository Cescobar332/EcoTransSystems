<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eco Trans Systems</title>
    <link rel="stylesheet" href="resources\css\styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="resources\IMG\favicon_io\favicon.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="resources\IMG\favicon_io\apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="resources\IMG\favicon_io\favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="resources\IMG\favicon_io\favicon-16x16.png">
    <link rel="manifest" href="resources\IMG\favicon_io\site.webmanifest">
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
            <li class="texto-con-sombra"><a href="resources\views\usuario\index.php">Home</a></li>
            <li class="texto-con-sombra"><a href="resources\views\usuario\nosotros.php">Nosotros</a></li>
            <li class="texto-con-sombra"><a href="resources\views\usuario\servicios.php">Servicios</a></li>
            <li class="texto-con-sombra"><a href="resources\views\usuario\contacto.php">Contacto</a></li>
            <li class="texto-con-sombra"><a href="resources\views\usuario\estadisticas.php">Reportes</a></li>
            <li class="texto-con-sombra"><a href="resources\views\auth\login.php">Login</a></li>
            <li class="texto-con-sombra"><a href="resources\views\auth\registro.php">Registro</a></li>
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
                    <li>La estabilidad en el número de entregas sugiere una demanda consistente de este servicio a lo largo de la semana.</li>
                    <li>Las fluctuaciones mínimas en la distancia total y el tiempo promedio de entrega pueden atribuirse a variaciones en la densidad del tráfico o en la distribución de los destinos de entrega.</li>
                    <li>Los altos índices de satisfacción y las valoraciones indican una operación eficiente y satisfactoria para los clientes, lo que sugiere un alto nivel de confiabilidad y calidad en el servicio.</li>
                </ul>
                
                <body>
                    <div class="center">
                        <img src="resources\IMG\grafica1.png" alt="Gráfica 1">
                    </div>
                    <p></p>
                    <div class="center">
                        <img src="resources\IMG\tabla1.png" alt="Imagen 1">
                    </div>
                </body>
                <p></p>

                
                <h4>Servicio de transporte:</h4>
                <p>Análisis Semanal:</p>
                <ul>
                    <li>La estabilidad en el número de viajes y en la distancia total recorrida sugiere una demanda constante de transporte a lo largo de la semana.</li>
                    <li>Las fluctuaciones mínimas en el tiempo promedio de espera pueden deberse a variaciones en la congestión del tráfico o en la distribución de la demanda durante diferentes momentos del día.</li>
                    <li>Los altos índices de satisfacción y las valoraciones indican un servicio confiable y satisfactorio para los clientes, lo que sugiere una buena gestión de la puntualidad y la calidad del servicio.</li>
                </ul>
                <div class="center">
                    <img src="resources\IMG\grafica2.png" alt="Gráfica 2">
                </div>
                <p></p>
                <div class="center">
                    <img src="resources\IMG\tabla2.png" alt="Imagen 2">
                </div>
                <p></p>
                <h4>Soporte para emergencias:</h4>
                <p>Análisis Semanal:</p>
                <ul>
                    <li>La estabilidad en el número de llamadas y en el tiempo promedio de respuesta sugiere una demanda constante de soporte para emergencias a lo largo de la semana.</li>
                    <li>Los altos índices de resolución de emergencias y de satisfacción post-resolución indican una eficaz gestión de las situaciones de emergencia por parte del equipo de soporte.</li>
                </ul>
                <div class="center">
                    <img src="resources\IMG\grafica3.png" alt="Gráfica 3">
                </div>
                <p></p>
                <div class="center">
                    <img src="resources\IMG\tabla3.png" alt="Imagen 3">
                </div>
                <p></p>

                <h4>Alquiler de medios de transporte:</h4>
                <p>Análisis Semanal:</p>
                <ul>
                    <li>La estabilidad en el número de alquileres y en la distancia total recorrida sugiere una demanda constante de medios de transporte de alquiler a lo largo de la semana.</li>
                    <li>Los altos índices de devoluciones a tiempo indican una buena gestión de los tiempos de alquiler y una eficaz coordinación con los clientes.</li>
                </ul>
                <div class="center">
                    <img src="resources\IMG\grafica4.png" alt="Gráfica 4">
                </div>
                <p></p>
                <div class="center">
                    <img src="resources\IMG\tabla4.png" alt="Imagen 4">
                </div>
                <p></p>
            </div>
            <!-- Sección para el reporte del mes -->
            <div id="formulario-mes" class="hidden">
                <h3>Reporte del Mes</h3>
                <h4>Servicio de domicilios con robots y drones</h4>
                <p>Análisis Mensual:</p>
                <ul>
                    <li>El aumento en el número de entregas durante el mes de marzo podría relacionarse con factores estacionales, como días festivos o eventos especiales que aumenten la demanda de entregas a domicilio.</li>
                    <li>La estabilidad en los índices de satisfacción y las valoraciones a lo largo del mes sugiere una consistencia en la calidad del servicio prestado, independientemente de la variación en la demanda.</li>
                </ul>
                <div class="center">
                    <img src="resources\IMG\grafica5.png" alt="Gráfica 5">
                </div>
                <p></p>
                <div class="center">
                    <img src="resources\IMG\grafica6.png" alt="Gráfica 6">
                </div>
                <p></p>
                <div class="center">
                    <img src="resources\IMG\tabla5.png" alt="Imagen 5">
                </div>
                <p></p>
                
                <h4>Servicio de transporte</h4>
                <p>Análisis Mensual:</p>
                <ul>
                    <li>El aumento general en el número de viajes y en la distancia total recorrida durante el mes podría estar relacionado con factores estacionales, como cambios en el clima o eventos que aumenten la movilidad de las personas.</li>
                    <li>La estabilidad en los índices de satisfacción y las valoraciones a lo largo del mes sugiere una consistencia en la calidad del servicio prestado, independientemente de la variación en la demanda.</li>
                </ul>
                <div class="center">
                    <img src="resources\IMG\grafica7.png" alt="Gráfica 7">
                </div>
                <p></p>
                <div class="center">
                    <img src="resources\IMG\grafica8.png" alt="Gráfica 8">
                </div>
                <p></p>
                <div class="center">
                    <img src="resources\IMG\tabla6.png" alt="Imagen 6">
                </div>
                <p></p>
                <h4>Soporte para emergencias</h4>
                <p>Análisis Mensual:</p>
                <ul>
                    <li>El pico de llamadas en diciembre podría estar relacionado con factores estacionales, como condiciones climáticas adversas o vacaciones, que podrían aumentar la incidencia de emergencias.</li>
                    <li>La estabilidad en los índices de satisfacción a lo largo del mes indica una consistencia en la calidad del servicio de soporte prestado, incluso durante períodos de mayor demanda.</li>
                </ul>
                <div class="center">
                    <img src="resources\IMG\grafica9.png" alt="Gráfica 9">
                </div>
                <p></p>
                <div class="center">
                    <img src="resources\IMG\grafica10.png" alt="Gráfica 10">
                </div>
                <p></p>
                <div class="center">
                    <img src="resources\IMG\tabla7.png" alt="Imagen 7">
                </div>
                <p></p>
                
                <h4>Alquiler de medios de transporte</h4>
                <p>Análisis Mensual:</p>
                <ul>
                    <li>El pico en la demanda de alquiler de medios de transporte en julio podría estar relacionado con factores estacionales, como vacaciones de verano, eventos o festivales locales que aumenten la movilidad de las personas.</li>
                    <li>La estabilidad en los índices de satisfacción a lo largo del mes sugiere una consistencia en la calidad del servicio de alquiler prestado, incluso durante períodos de mayor demanda.</li>
                </ul>
                <div class="center">
                    <img src="resources\IMG\grafica11.png" alt="Gráfica 11">
                </div>
                <p></p>
                <div class="center">
                    <img src="resources\IMG\grafica12.png" alt="Gráfica 12">
                </div>
                <p></p>
                <div class="center">
                    <img src="resources\IMG\tabla8.png" alt="Imagen 8">
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
                        <li>El aumento constante en el número de entregas y la distancia total recorrida a lo largo del año indica un crecimiento continuo en la demanda del servicio de domicilios con robots y drones.</li>
                        <li>Los altos índices de satisfacción y las valoraciones consistentemente altas durante todo el año reflejan la capacidad de la empresa para mantener altos estándares de servicio y satisfacción del cliente a largo plazo.</li>
                    </ul>
                    <div class="center">
                        <img src="resources\IMG\grafica13.png" alt="Gráfica 13">
                    </div>
                    <p></p>
                    <div class="center">
                        <img src="resources\IMG\grafica14.png" alt="Gráfica 14">
                    </div>
                    <p></p>
                    <div class="center">
                        <img src="resources\IMG\tabla9.png" alt="Imagen 9">
                    </div>
                    <p></p>
                </div>
                <div>
                    <h4>Servicio de transporte</h4>
                    <p>Análisis Anual:</p>
                    <ul>
                        <li>El crecimiento constante en el número de viajes y en la distancia total recorrida a lo largo del año indica una mayor confianza y dependencia en el servicio de transporte ofrecido por la empresa.</li>
                        <li>Los altos índices de satisfacción y las valoraciones consistentemente altas durante todo el año reflejan la capacidad de la empresa para mantener altos estándares de servicio y satisfacción del cliente a largo plazo.</li>
                    </ul>
                    <div class="center">
                        <img src="resources\IMG\grafica15.png" alt="Gráfica 15">
                    </div>
                    <p></p>
                    <div class="center">
                        <img src="resources\IMG\grafica16.png" alt="Gráfica 16">
                    </div>
                    <p></p>
                    <div class="center">
                        <img src="resources\IMG\tabla10.png" alt="Imagen 10">
                    </div>
                    <p></p>
                </div>
                <div>
                    <h4>Soporte para emergencias</h4>
                    <p>Análisis Anual:</p>
                    <ul>
                        <li>El aumento general en el número de llamadas a lo largo del año podría indicar una mayor conciencia sobre el servicio de soporte para emergencias entre los clientes.</li>
                        <li>Los altos índices de satisfacción y las valoraciones consistentemente altas durante todo el año reflejan la capacidad del equipo de soporte para gestionar eficazmente una variedad de situaciones de emergencia y satisfacer las necesidades de los clientes.</li>
                    </ul>
                    <div class="center">
                        <img src="resources\IMG\grafica17.png" alt="Gráfica 17">
                    </div>
                    <p></p>
                    <div class="center">
                        <img src="resources\IMG\grafica18.png" alt="Gráfica 18">
                    </div>
                    <p></p>
                    <div class="center">
                        <img src="resources\IMG\tabla11.png" alt="Imagen 11">
                    </div>
                    <p></p>
                </div>
                <div>
                    <h4>Alquiler de medios de transporte</h4>
                    <p>Análisis Anual:</p>
                    <ul>
                        <li>El crecimiento constante en el número de alquileres y en la distancia total recorrida a lo largo del año indica una mayor dependencia en el servicio de alquiler de medios de transporte ofrecido por la empresa.</li>
                        <li>Los altos índices de satisfacción y las valoraciones consistentemente altas durante todo el año reflejan la capacidad de la empresa para mantener altos estándares de servicio y satisfacción del cliente a largo plazo.</li>
                    </ul>
                    <div class="center">
                        <img src="resources\IMG\grafica19.png" alt="Gráfica 19">
                    </div>
                    <p></p>
                    <div class="center">
                        <img src="resources\IMG\grafica20.png" alt="Gráfica 20">
                    </div>
                    <p></p>
                    <div class="center">
                        <img src="resources\IMG\tabla12.png" alt="Imagen 12">
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
    <script src="resources\js\script.js"></script>
</body>

</html>
