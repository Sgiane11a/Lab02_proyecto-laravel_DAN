<?php
// Configuración básica
$club_name = "Alianza Lima";
$fundacion = "15 de febrero de 1901";
$estadio = "Estadio Alejandro Villanueva";
$apodos = ["Blanquiazules", "Íntimos", "Aliancistas", "Grones"];
$titulos = 25;

// Función para obtener la fecha actual
function getFechaActual() {
    return date("d/m/Y");
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Club Alianza Lima - Página Oficial</title>
    <style>
        /* Estilos generales */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }

        body {
            background-color: #f0f0f0;
            color: #333;
            overflow-x: hidden;
        }

        /* Header */
        header {
            background: linear-gradient(to right, #0033a0, #000046);
            color: white;
            padding: 20px 0;
            text-align: center;
            position: relative;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .logo-container {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .logo {
            width: 150px;
            height: auto;
            animation: pulse 2s infinite;
            transition: transform 0.3s ease;
        }

        .logo:hover {
            transform: scale(1.1);
        }

        @keyframes pulse {
            0% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.05);
            }
            100% {
                transform: scale(1);
            }
        }

        /* Navegación */
        nav {
            background-color: #00205b;
            padding: 15px 0;
        }

        nav ul {
            display: flex;
            justify-content: center;
            list-style: none;
        }

        nav li {
            margin: 0 15px;
        }

        nav a {
            color: white;
            text-decoration: none;
            font-weight: bold;
            text-transform: uppercase;
            font-size: 0.9rem;
            letter-spacing: 1px;
            transition: color 0.3s ease;
            position: relative;
            padding: 5px 10px;
        }

        nav a:after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: 0;
            left: 0;
            background-color: white;
            transition: width 0.3s ease;
        }

        nav a:hover {
            color: #f5f5f5;
        }

        nav a:hover:after {
            width: 100%;
        }

        /* Sección principal */
        main {
            max-width: 1200px;
            margin: 30px auto;
            padding: 20px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .hero {
            text-align: center;
            padding: 50px 20px;
            background: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ3clsFw9kw_RVMfFyBxfXZyuyKjxp_rKHUbWgC3_6GcC_3XDYAQ8Fr1zEtGnxpYvSIcGI&usqp=CAU') center/cover;
            color: white;
            position: relative;
            overflow: hidden;
            border-radius: 8px;
            margin-bottom: 30px;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 51, 0.7);
            z-index: 1;
        }

        .hero-content {
            position: relative;
            z-index: 2;
        }

        .big-text {
            font-size: 5rem;
            font-weight: bold;
            margin-bottom: 20px;
            text-shadow: 3px 3px 5px rgba(0, 0, 0, 0.5);
            animation: fadeInUp 1s ease-out;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(40px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .sub-text {
            font-size: 1.5rem;
            margin-bottom: 30px;
            animation: fadeIn 2s ease-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        .sections {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-top: 50px;
        }

        .section {
            background-color: #f9f9f9;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .section:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        }

        .section h3 {
            color: #00205b;
            margin-bottom: 15px;
            font-size: 1.5rem;
            padding-bottom: 10px;
            border-bottom: 2px solid #e6e6e6;
        }

        .section p {
            line-height: 1.6;
            color: #666;
        }

        .section ul {
            margin-left: 20px;
            margin-top: 10px;
            color: #666;
        }

        .section li {
            margin-bottom: 5px;
        }

        /* Estilos del botón */
        .cta-button {
            display: inline-block;
            padding: 12px 30px;
            background: linear-gradient(to right, #0033a0, #000046);
            color: white;
            text-decoration: none;
            border-radius: 50px;
            font-weight: bold;
            margin-top: 20px;
            box-shadow: 0 4px 12px rgba(0, 0, 150, 0.3);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
            z-index: 1;
        }

        .cta-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 18px rgba(0, 0, 150, 0.4);
        }

        .cta-button:active {
            transform: translateY(0);
        }

        .cta-button::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(to right, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.7s ease;
            z-index: -1;
        }

        .cta-button:hover::before {
            left: 100%;
        }

        /* Galería */
        .gallery {
            margin-top: 50px;
        }

        .gallery h2 {
            text-align: center;
            margin-bottom: 30px;
            color: #00205b;
            font-size: 2rem;
        }

        .gallery-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            grid-gap: 20px;
        }

        .gallery-item {
            height: 200px;
            overflow: hidden;
            border-radius: 8px;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
            position: relative;
            cursor: pointer;
        }

        .gallery-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .gallery-item:hover img {
            transform: scale(1.1);
        }

        .gallery-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: linear-gradient(transparent, rgba(0, 0, 0, 0.7));
            color: white;
            padding: 15px;
            transform: translateY(100%);
            transition: transform 0.3s ease;
        }

        .gallery-item:hover .gallery-overlay {
            transform: translateY(0);
        }

        /* Contador */
        .counter-section {
            background: linear-gradient(to right, #0033a0, #000046);
            padding: 60px 0;
            color: white;
            text-align: center;
            margin-top: 50px;
            border-radius: 8px;
        }

        .counter-container {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            max-width: 1000px;
            margin: 0 auto;
        }

        .counter-item {
            margin: 20px;
            flex: 1;
            min-width: 200px;
        }

        .counter {
            font-size: 3rem;
            font-weight: bold;
            margin-bottom: 10px;
        }

        /* Footer */
        footer {
            background: #00205b;
            color: white;
            text-align: center;
            padding: 30px 0;
            margin-top: 50px;
        }

        .footer-content {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .social-links {
            display: flex;
            justify-content: center;
            margin: 20px 0;
        }

        .social-links a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            background-color: white;
            color: #00205b;
            border-radius: 50%;
            margin: 0 10px;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .social-links a:hover {
            transform: translateY(-5px);
            background-color: #f0f0f0;
        }

        .copyright {
            margin-top: 20px;
            font-size: 0.9rem;
            opacity: 0.8;
        }

        /* Animaciones adicionales */
        .animate-on-scroll {
            opacity: 0;
            transform: translateY(40px);
            transition: opacity 1s ease, transform 1s ease;
        }

        .animate-on-scroll.visible {
            opacity: 1;
            transform: translateY(0);
        }

        /* Responsive */
        @media (max-width: 768px) {
            nav ul {
                flex-direction: column;
                text-align: center;
            }

            nav li {
                margin: 10px 0;
            }

            .big-text {
                font-size: 3rem;
            }

            .counter-container {
                flex-direction: column;
            }
        }
    </style>
</head>
<body>
    <header>
        <div class="logo-container">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ3clsFw9kw_RVMfFyBxfXZyuyKjxp_rKHUbWgC3_6GcC_3XDYAQ8Fr1zEtGnxpYvSIcGI&usqp=CAU" alt="Logo Alianza Lima" class="logo">
        </div>
        <h1><?php echo $club_name; ?></h1>
        <p>Fundado el <?php echo $fundacion; ?></p>
    </header>

    <nav>
        <ul>
            <li><a href="#">Inicio</a></li>
            <li><a href="#">Historia</a></li>
            <li><a href="#">Plantilla</a></li>
            <li><a href="#">Estadio</a></li>
            <li><a href="#">Títulos</a></li>
            <li><a href="#">Contacto</a></li>
        </ul>
    </nav>

    <main>
        <section class="hero">
            <div class="hero-content">
                <h2 class="big-text">¡VIVA ALIANZA!</h2>
                <p class="sub-text">El corazón de Lima late en blanquiazul</p>
                <a href="#" class="cta-button">ÚNETE A LA HINCHADA</a>
            </div>
        </section>

        <div class="sections">
            <div class="section animate-on-scroll">
                <h3>Historia</h3>
                <p>Fundado el <?php echo $fundacion; ?>, el Club Alianza Lima es uno de los equipos más tradicionales y populares del Perú. Con más de 120 años de historia, los blanquiazules han representado la pasión y el orgullo de miles de peruanos.</p>
                <p>Su nombre original fue Sport Alianza, y su primer uniforme estaba compuesto por camisetas a rayas verticales azules y blancas, pantalones blancos y medias negras.</p>
                <a href="#" class="cta-button">Ver más</a>
            </div>

            <div class="section animate-on-scroll">
                <h3>Estadio</h3>
                <p>El <?php echo $estadio; ?>, también conocido como Matute, es la casa de Alianza Lima. Inaugurado en 1974, tiene una capacidad para aproximadamente 35,000 espectadores.</p>
                <p>Es considerado uno de los estadios con mejor ambiente del país, donde la hinchada aliancista hace sentir su pasión en cada partido.</p>
                <a href="#" class="cta-button">Ver más</a>
            </div>

            <div class="section animate-on-scroll">
                <h3>Apodos</h3>
                <ul>
                    <?php foreach ($apodos as $apodo): ?>
                        <li><?php echo $apodo; ?></li>
                    <?php endforeach; ?>
                </ul>
                <p>Estos sobrenombres han acompañado al equipo a lo largo de su historia, representando la identidad única del club y su hinchada.</p>
                <a href="#" class="cta-button">Ver más</a>
            </div>
        </div>

        <section class="gallery animate-on-scroll">
            <h2>Galería</h2>
            <div class="gallery-container">
                <div class="gallery-item">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ3clsFw9kw_RVMfFyBxfXZyuyKjxp_rKHUbWgC3_6GcC_3XDYAQ8Fr1zEtGnxpYvSIcGI&usqp=CAU" alt="Alianza Lima">
                    <div class="gallery-overlay">Escudo del club</div>
                </div>
                <div class="gallery-item">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ3clsFw9kw_RVMfFyBxfXZyuyKjxp_rKHUbWgC3_6GcC_3XDYAQ8Fr1zEtGnxpYvSIcGI&usqp=CAU" alt="Alianza Lima">
                    <div class="gallery-overlay">Historia del club</div>
                </div>
                <div class="gallery-item">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ3clsFw9kw_RVMfFyBxfXZyuyKjxp_rKHUbWgC3_6GcC_3XDYAQ8Fr1zEtGnxpYvSIcGI&usqp=CAU" alt="Alianza Lima">
                    <div class="gallery-overlay">Hinchada blanquiazul</div>
                </div>
                <div class="gallery-item">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ3clsFw9kw_RVMfFyBxfXZyuyKjxp_rKHUbWgC3_6GcC_3XDYAQ8Fr1zEtGnxpYvSIcGI&usqp=CAU" alt="Alianza Lima">
                    <div class="gallery-overlay">Jugadores históricos</div>
                </div>
            </div>
        </section>

        <section class="counter-section animate-on-scroll">
            <div class="counter-container">
                <div class="counter-item">
                    <div class="counter" data-count="<?php echo $titulos; ?>">0</div>
                    <div>Títulos Nacionales</div>
                </div>
                <div class="counter-item">
                    <div class="counter" data-count="1901">0</div>
                    <div>Año de Fundación</div>
                </div>
                <div class="counter-item">
                    <div class="counter" data-count="35000">0</div>
                    <div>Capacidad del Estadio</div>
                </div>
                <div class="counter-item">
                    <div class="counter" data-count="10000000">0</div>
                    <div>Hinchas en el Mundo</div>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <div class="footer-content">
            <div class="social-links">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
            </div>
            <p>© <?php echo date("Y"); ?> Club Alianza Lima - Todos los derechos reservados</p>
            <p class="copyright">Kenny Palacin Cristobal</p>
            <p>Última actualización: <?php echo getFechaActual(); ?></p>
        </div>
    </footer>

    <script>
        // Animación al hacer scroll
        document.addEventListener('DOMContentLoaded', function() {
            // Función para detectar elementos en el viewport
            function isInViewport(element) {
                const rect = element.getBoundingClientRect();
                return (
                    rect.top <= (window.innerHeight || document.documentElement.clientHeight) &&
                    rect.bottom >= 0
                );
            }

            // Seleccionamos todos los elementos con la clase animate-on-scroll
            const elements = document.querySelectorAll('.animate-on-scroll');

            // Función para comprobar qué elementos están visibles
            function checkVisibility() {
                elements.forEach(element => {
                    if (isInViewport(element)) {
                        element.classList.add('visible');
                    }
                });
            }

            // Ejecutamos la función inicialmente y luego al hacer scroll
            checkVisibility();
            window.addEventListener('scroll', checkVisibility);

            // Animación de contadores
            const counters = document.querySelectorAll('.counter');
            const speed = 200; // Velocidad de la animación

            counters.forEach(counter => {
                const updateCount = () => {
                    const target = +counter.getAttribute('data-count');
                    const count = +counter.innerText;

                    // Calculamos la velocidad según el valor final
                    const increment = target / speed;

                    if (count < target) {
                        counter.innerText = Math.ceil(count + increment);
                        setTimeout(updateCount, 1);
                    } else {
                        counter.innerText = target.toLocaleString();
                    }
                };

                // Solo iniciamos la animación cuando el elemento está visible
                const counterObserver = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            updateCount();
                            counterObserver.unobserve(entry.target);
                        }
                    });
                });

                counterObserver.observe(counter);
            });

            // Efecto parallax en el hero
            const hero = document.querySelector('.hero');
            window.addEventListener('scroll', function() {
                const offset = window.pageYOffset;
                hero.style.backgroundPositionY = offset * 0.5 + 'px';
            });

            // Navegación smooth scroll
            document.querySelectorAll('nav a').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    e.preventDefault();
                    document.querySelector(this.getAttribute('href')).scrollIntoView({
                        behavior: 'smooth'
                    });
                });
            });
        });
    </script>
</body>
</html>