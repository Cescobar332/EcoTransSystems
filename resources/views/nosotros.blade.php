<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nosotros - Cyber Connect Commute</title>
    <link rel="stylesheet" href="css\styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="IMG\favicon_io\favicon.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="IMG\favicon_io\apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="IMG\favicon_io\favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="IMG\favicon_io\favicon-16x16.png">
    <link rel="manifest" href="IMG\favicon_io\site.webmanifest">
</head>
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
    <main>
        <section>
            <div class="columna2">
                <h2 class="title">Historia de la empresa</h2>
                <p class="nosotros-paragraph">Cyber Connect Commute es una empresa innovadora fundada por tres
                    apasionados estudiantes: Camila Villamizar, Carlos Rueda y Fernando Silva. Surgió como un proyecto
                    para la materia de Ingeniería de Software II, donde estos emprendedores se propusieron crear una
                    solución tecnológica para mejorar la experiencia de transporte en la comunidad. Con su visión
                    compartida y su dedicación, transformaron una idea académica en una empresa que busca revolucionar
                    la forma en que las personas se desplazan en su día a día.</p>
            </div>
            <div class="columna2">
                <h2 class="title">Misión</h2>
                <p class="nosotros-paragraph">En Eco Trans Systems, nuestra misión es revolucionar la forma en que las
                    personas se desplazan en su día a día, ofreciendo soluciones de transporte sostenibles y eficientes
                    que mejoren la calidad de vida de nuestros usuarios y contribuyan positivamente al medio ambiente.
                    Nos esforzamos por proporcionar un servicio accesible, seguro y confiable, impulsado por la
                    innovación y la tecnología, con un enfoque en la comodidad y la satisfacción del cliente.</p>
            </div>
            <div class="columna2">
                <h2 class="title">Visión</h2>
                <p class="nosotros-paragraph">Nuestra visión en Eco Trans Systems es convertirnos en líderes globales en
                    el campo del transporte sostenible, estableciendo un estándar de excelencia en la industria y siendo
                    reconocidos por nuestro compromiso con la innovación, la sostenibilidad y la responsabilidad social
                    corporativa. Nos esforzamos por construir un futuro donde la movilidad urbana sea más eficiente,
                    ecológica y equitativa, impactando positivamente en las comunidades en las que operamos y
                    contribuyendo a la construcción de un mundo más limpio y habitable para las generaciones futuras.
                </p>
            </div>
        </section>
        <section>
            <h1 class="title">Valores Corporativos</h1>
            <div class="columna3">
                <div class="card" style="width: 18rem;">
                    <img src="IMG\security.png" class="card-img-top" alt="...">
                    <div class="card-body card-cam">
                        <h5 class="card-title">Seguridad</h5>
                    </div>
                </div>
            </div>
            <div class="columna3">
                <div class="card" style="width: 18rem;">
                    <img src="IMG\innovation.png" class="card-img-top" alt="...">
                    <div class="card-body card-cam">
                        <h5 class="card-title">Innovación</h5>
                    </div>
                </div>
            </div>
            <div class="columna3">
                <div class="card" style="width: 18rem;">
                    <img src="IMG\sostenibilidad.png" class="card-img-top" alt="...">
                    <div class="card-body card-cam">
                        <h5 class="card-title">Sostenibilidad</h5>
                    </div>
                </div>
            </div>
            <div class="columna3">
                <div class="card" style="width: 18rem;">
                    <img src="IMG\accesibilidad.png" class="card-img-top" alt="...">
                    <div class="card-body card-cam">
                        <h5 class="card-title">Accesibilidad</h5>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <h1 class="title">Conoce a nuestro equipo</h1>
            <div class="columna2 equipo-member">
                <img src="IMG\cami.jpg" alt="Camila Villamizar">
                <h3>Camila Villamizar</h3>
                <p>Co-Fundadora y CEO</p>
                <p>Camila es una emprendedora apasionada por la innovación en el transporte urbano. Con
                    una sólida experiencia en desarrollo de software y gestión de proyectos, lidera
                    nuestro equipo hacia la excelencia.</p>
            </div>
            <div class="columna2 equipo-member">
                <img src="IMG\carlos.jpeg" alt="Carlos Rueda">
                <h3>Carlos Rueda</h3>
                <p>Co-Fundador y CTO</p>
                <p>Carlos es un visionario tecnológico con experiencia en sistemas distribuidos y
                    arquitectura de software. Su visión y experiencia técnica son fundamentales para
                    impulsar la innovación en nuestro servicio de transporte.</p>
            </div>
            <div class="columna2 equipo-member">
                <img src="IMG\fer.jpeg" alt="Fernando Silva">
                <h3>Fernando Silva</h3>
                <p>Co-Fundador y CMO</p>
                <p>Fernando es un estratega de marketing con una sólida comprensión del comportamiento
                    del consumidor. Su creatividad y enfoque en la experiencia del usuario son clave
                    para establecer relaciones sólidas con nuestros clientes.</p>
            </div>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Cyber Connect Commute</p>
    </footer>
</body>
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

</html>
