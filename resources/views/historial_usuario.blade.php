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
        .hidden {
            display: none;
        }
    </style>
</head>

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
    <main id="main">
        <div class="container mt-5">
            <h2>Generar Historial</h2>
            <!-- Selección del tipo de servicio -->
            <div class="form-group">
                <label for="historial">Seleccionar Historial:</label>
                <select id="historial" class="form-control" onchange="mostrarFormulario()">
                    <option value="">Selecciona el servicio</option>
                    <option value="domicilios">Servicio de domicilios con robots y drones</option>
                    <option value="transporte">Servicio de transporte</option>
                    <option value="emergencias">Soporte para emergencias</option>
                    <option value="alquiler">Alquiler de medios de transporte</option>
                </select>
            </div>

            <!-- Sección para el historial de domicilios -->
            <div id="formulario-domicilios" class="hidden">
                <h3>Historial del Servicio de Domicilios con Robots y Drones</h3>
                <p>Información sobre el historial del servicio de domicilios...</p>
                <style>
                    .table {
                      border-collapse: separate;
                      border-spacing: 0 10px;
                      width: 100%;
                    }
                    .table th,
                    .table td {
                      padding: 8px;
                      text-align: left;
                      border-bottom: 1px solid #ddd;
                    }
                    .table th {
                      background-color: #f2f2f2;
                      color: black;
                      border-top: 1px solid #ddd;
                    }
                    .table tbody tr:nth-child(even) {
                      background-color: #f2f2f2;
                    }
                    .table tbody tr:hover {
                      background-color: #ddd;
                    }
                  </style>
                  
                  <table class="table">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col">Fecha</th>
                        <th scope="col">Tipo de entrega</th>
                        <th scope="col">Distancia (km)</th>
                        <th scope="col">Tiempo de entrega (min)</th>
                        <th scope="col">Valoración (1-5)</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>25/05/2024</td>
                        <td>Robot</td>
                        <td>4</td>
                        <td>25</td>
                        <td>4</td>
                      </tr>
                      <tr>
                        <td>17/05/2024</td>
                        <td>Drone</td>
                        <td>3</td>
                        <td>20</td>
                        <td>5</td>
                      </tr>
                      <tr>
                        <td>09/05/2024</td>
                        <td>Robot</td>
                        <td>6</td>
                        <td>35</td>
                        <td>4</td>
                      </tr>
                      <tr>
                        <td>01/05/2024</td>
                        <td>Drone</td>
                        <td>7</td>
                        <td>40</td>
                        <td>5</td>
                      </tr>
                      <tr>
                        <td>23/04/2024</td>
                        <td>Robot</td>
                        <td>5</td>
                        <td>30</td>
                        <td>3</td>
                      </tr>
                      <tr>
                        <td>15/04/2024</td>
                        <td>Drone</td>
                        <td>4</td>
                        <td>25</td>
                        <td>5</td>
                      </tr>
                      <tr>
                        <td>07/04/2024</td>
                        <td>Robot</td>
                        <td>6</td>
                        <td>35</td>
                        <td>4</td>
                      </tr>
                      <tr>
                        <td>30/03/2024</td>
                        <td>Drone</td>
                        <td>3</td>
                        <td>20</td>
                        <td>5</td>
                      </tr>
                      <tr>
                        <td>22/03/2024</td>
                        <td>Robot</td>
                        <td>5</td>
                        <td>30</td>
                        <td>4</td>
                      </tr>
                      <tr>
                        <td>15/03/2024</td>
                        <td>Drone</td>
                        <td>2</td>
                        <td>15</td>
                        <td>5</td>
                      </tr>
                      <tr>
                        <td>08/03/2024</td>
                        <td>Robot</td>
                        <td>7</td>
                        <td>40</td>
                        <td>3</td>
                      </tr>
                      <tr>
                        <td>28/02/2024</td>
                        <td>Drone</td>
                        <td>6</td>
                        <td>35</td>
                        <td>4</td>
                      </tr>
                      <tr>
                        <td>20/02/2024</td>
                        <td>Robot</td>
                        <td>4</td>
                        <td>25</td>
                        <td>5</td>
                      </tr>
                      <tr>
                        <td>12/02/2024</td>
                        <td>Drone</td>
                        <td>3</td>
                        <td>20</td>
                        <td>4</td>
                      </tr>
                      <tr>
                        <td>05/02/2024</td>
                        <td>Robot</td>
                        <td>5</td>
                        <td>30</td>
                        <td>5</td>
                      </tr>
                    </tbody>
                  </table>
                  
                  
                  
                  
            </div>

            <!-- Sección para el historial de transporte -->
            <div id="formulario-transporte" class="hidden">
                <h3>Historial del Servicio de Transporte</h3>
                <p>Información sobre el historial del servicio de transporte...</p>
                <!-- Aquí puedes poner el contenido relevante -->
                <style>
                    .table {
                      border-collapse: separate;
                      border-spacing: 0 10px;
                      width: 100%;
                    }
                    .table th,
                    .table td {
                      padding: 8px;
                      text-align: left;
                      border-bottom: 1px solid #ddd;
                    }
                    .table th {
                      background-color: #f2f2f2;
                      color: black;
                      border-top: 1px solid #ddd;
                    }
                    .table tbody tr:nth-child(even) {
                      background-color: #f2f2f2;
                    }
                    .table tbody tr:hover {
                      background-color: #ddd;
                    }
                  </style>
                  
                  <table class="table">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col">Fecha</th>
                        <th scope="col">Origen</th>
                        <th scope="col">Destino</th>
                        <th scope="col">Distancia (km)</th>
                        <th scope="col">Tiempo (min)</th>
                        <th scope="col">Valoración (1-5)</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>31/05/2024</td>
                        <td>Estación Central</td>
                        <td>Aeropuerto</td>
                        <td>20</td>
                        <td>30</td>
                        <td>4</td>
                      </tr>
                      <tr>
                        <td>25/05/2024</td>
                        <td>Plaza Mayor</td>
                        <td>Estación Central</td>
                        <td>10</td>
                        <td>15</td>
                        <td>5</td>
                      </tr>
                      <tr>
                        <td>19/05/2024</td>
                        <td>Centro Comercial</td>
                        <td>Universidad</td>
                        <td>8</td>
                        <td>12</td>
                        <td>4</td>
                      </tr>
                      <tr>
                        <td>13/05/2024</td>
                        <td>Universidad</td>
                        <td>Plaza Mayor</td>
                        <td>6</td>
                        <td>10</td>
                        <td>5</td>
                      </tr>
                      <tr>
                        <td>07/05/2024</td>
                        <td>Aeropuerto</td>
                        <td>Centro Comercial</td>
                        <td>18</td>
                        <td>25</td>
                        <td>4</td>
                      </tr>
                      <tr>
                        <td>01/05/2024</td>
                        <td>Estación Central</td>
                        <td>Universidad</td>
                        <td>5</td>
                        <td>8</td>
                        <td>3</td>
                      </tr>
                      <tr>
                        <td>25/04/2024</td>
                        <td>Plaza Mayor</td>
                        <td>Centro Comercial</td>
                        <td>10</td>
                        <td>15</td>
                        <td>4</td>
                      </tr>
                      <tr>
                        <td>19/04/2024</td>
                        <td>Centro Comercial</td>
                        <td>Plaza Mayor</td>
                        <td>10</td>
                        <td>15</td>
                        <td>5</td>
                      </tr>
                      <tr>
                        <td>13/04/2024</td>
                        <td>Universidad</td>
                        <td>Aeropuerto</td>
                        <td>12</td>
                        <td>20</td>
                        <td>4</td>
                      </tr>
                      <tr>
                        <td>07/04/2024</td>
                        <td>Aeropuerto</td>
                        <td>Estación Central</td>
                        <td>20</td>
                        <td>30</td>
                        <td>5</td>
                      </tr>
                      <tr>
                        <td>01/04/2024</td>
                        <td>Plaza Mayor</td>
                        <td>Universidad</td>
                        <td>6</td>
                        <td>10</td>
                        <td>4</td>
                      </tr>
                      <tr>
                        <td>26/03/2024</td>
                        <td>Centro Comercial</td>
                        <td>Plaza Mayor</td>
                        <td>8</td>
                        <td>12</td>
                        <td>5</td>
                      </tr>
                      <tr>
                        <td>20/03/2024</td>
                        <td>Universidad</td>
                        <td>Centro Comercial</td>
                        <td>8</td>
                        <td>12</td>
                        <td>4</td>
                      </tr>
                      <tr>
                        <td>14/03/2024</td>
                        <td>Estación Central</td>
                        <td>Aeropuerto</td>
                        <td>20</td>
                        <td>30</td>
                        <td>3</td>
                      </tr>
                      <tr>
                        <td>08/03/2024</td>
                        <td>Aeropuerto</td>
                        <td>Centro Comercial</td>
                        <td>18</td>
                        <td>25</td>
                        <td>5</td>
                      </tr>
                      <tr>
                        <td>02/03/2024</td>
                        <td>Plaza Mayor</td>
                        <td>Universidad</td>
                        <td>6</td>
                        <td>10</td>
                        <td>4</td>
                      </tr>
                      <tr>
                        <td>25/02/2024</td>
                        <td>Centro Comercial</td>
                        <td>Universidad</td>
                        <td>8</td>
                        <td>12</td>
                        <td>5</td>
                      </tr>
                      <tr>
                        <td>19/02/2024</td>
                        <td>Universidad</td>
                        <td>Plaza Mayor</td>
                        <td>6</td>
                        <td>10</td>
                        <td>4</td>
                      </tr>
                      <tr>
                        <td>13/02/2024</td>
                        <td>Estación Central</td>
                        <td>Centro Comercial</td>
                        <td>5</td>
                        <td>8</td>
                        <td>5</td>
                      </tr>
                      <tr>
                        <td>07/02/2024</td>
                        <td>Aeropuerto</td>
                        <td>Universidad</td>
                        <td>12</td>
                        <td>20</td>
                        <td>4</td>
                      </tr>
                    </tbody>
                  </table>
                  
            </div>

            <!-- Sección para el historial de emergencias -->
            <div id="formulario-emergencias" class="hidden">
                <h3>Historial del Soporte para Emergencias</h3>
                <p>Información sobre el historial del soporte para emergencias...</p>
                <!-- Aquí puedes poner el contenido relevante -->
                <style>
                    .table {
                      border-collapse: separate;
                      border-spacing: 0 10px;
                      width: 100%;
                    }
                    .table th,
                    .table td {
                      padding: 8px;
                      text-align: left;
                      border-bottom: 1px solid #ddd;
                    }
                    .table th {
                      background-color: #f2f2f2;
                      color: black;
                      border-top: 1px solid #ddd;
                    }
                    .table tbody tr:nth-child(even) {
                      background-color: #f2f2f2;
                    }
                    .table tbody tr:hover {
                      background-color: #ddd;
                    }
                  </style>
                  
                  <table class="table">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col">Fecha</th>
                        <th scope="col">Tipo de emergencia</th>
                        <th scope="col">Tiempo de respuesta (min)</th>
                        <th scope="col">Resolución de emergencia</th>
                        <th scope="col">Valoración (1-5)</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>27/04/2024</td>
                        <td>Robo</td>
                        <td>30</td>
                        <td>Sí</td>
                        <td>4</td>
                      </tr>
                      <tr>
                        <td>22/02/2024</td>
                        <td>Incendio menor</td>
                        <td>10</td>
                        <td>Sí</td>
                        <td>5</td>
                      </tr>
                    </tbody>
                  </table>
                  
            </div>

            <!-- Sección para el historial de alquiler -->
            <div id="formulario-alquiler" class="hidden">
                <h3>Historial del Alquiler de Medios de Transporte</h3>
                <p>Información sobre el historial del alquiler de medios de transporte...</p>
                <!-- Aquí puedes poner el contenido relevante -->
                <style>
                    .table {
                      border-collapse: separate;
                      border-spacing: 0 10px;
                      width: 100%;
                    }
                    .table th,
                    .table td {
                      padding: 8px;
                      text-align: left;
                      border-bottom: 1px solid #ddd;
                    }
                    .table th {
                      background-color: #f2f2f2;
                      color: black;
                      border-top: 1px solid #ddd;
                    }
                    .table tbody tr:nth-child(even) {
                      background-color: #f2f2f2;
                    }
                    .table tbody tr:hover {
                      background-color: #ddd;
                    }
                  </style>
                  
                  <table class="table">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col">Fecha</th>
                        <th scope="col">Medio de transporte</th>
                        <th scope="col">Duración del alquiler (días)</th>
                        <th scope="col">Distancia recorrida (km)</th>
                        <th scope="col">Valoración (1-5)</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>28/05/2024</td>
                        <td>Skateboard</td>
                        <td>1</td>
                        <td>10</td>
                        <td>5</td>
                      </tr>
                      <tr>
                        <td>20/05/2024</td>
                        <td>Patines eléctricos</td>
                        <td>2</td>
                        <td>20</td>
                        <td>4</td>
                      </tr>
                      <tr>
                        <td>12/05/2024</td>
                        <td>Bicicleta</td>
                        <td>3</td>
                        <td>25</td>
                        <td>5</td>
                      </tr>
                      <tr>
                        <td>04/05/2024</td>
                        <td>Skateboard</td>
                        <td>2</td>
                        <td>18</td>
                        <td>5</td>
                      </tr>
                      <tr>
                        <td>26/04/2024</td>
                        <td>Patines eléctricos</td>
                        <td>1</td>
                        <td>15</td>
                        <td>4</td>
                      </tr>
                      <tr>
                        <td>18/04/2024</td>
                        <td>Bicicleta</td>
                        <td>3</td>
                        <td>20</td>
                        <td>5</td>
                      </tr>
                      <tr>
                        <td>10/04/2024</td>
                        <td>Skateboard</td>
                        <td>1</td>
                        <td>10</td>
                        <td>4</td>
                      </tr>
                      <tr>
                        <td>02/04/2024</td>
                        <td>Patines eléctricos</td>
                        <td>2</td>
                        <td>22</td>
                        <td>5</td>
                      </tr>
                      <tr>
                        <td>25/03/2024</td>
                        <td>Bicicleta</td>
                        <td>1</td>
                        <td>12</td>
                        <td>4</td>
                      </tr>
                      <tr>
                        <td>17/03/2024</td>
                        <td>Skateboard</td>
                        <td>3</td>
                        <td>15</td>
                        <td>5</td>
                      </tr>
                      <tr>
                        <td>09/03/2024</td>
                        <td>Patines eléctricos</td>
                        <td>2</td>
                        <td>18</td>
                        <td>4</td>
                      </tr>
                      <tr>
                        <td>01/03/2024</td>
                        <td>Bicicleta</td>
                        <td>4</td>
                        <td>25</td>
                        <td>5</td>
                      </tr>
                      <tr>
                        <td>23/02/2024</td>
                        <td>Skateboard</td>
                        <td>1</td>
                        <td>8</td>
                        <td>5</td>
                      </tr>
                      <tr>
                        <td>15/02/2024</td>
                        <td>Patines eléctricos</td>
                        <td>3</td>
                        <td>20</td>
                        <td>4</td>
                      </tr>
                      <tr>
                        <td>07/02/2024</td>
                        <td>Bicicleta</td>
                        <td>2</td>
                        <td>15</td>
                        <td>5</td>
                      </tr>
                    </tbody>
                  </table>
                  
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
        function mostrarFormulario() {
            var selectedValue = document.getElementById("historial").value;
            var formularios = document.querySelectorAll("div[id^='formulario-']");
            formularios.forEach(function(formulario) {
                formulario.classList.add("hidden");
            });
            if (selectedValue) {
                document.getElementById("formulario-" + selectedValue).classList.remove("hidden");
            }
        }
    </script>
</body>

</html>
