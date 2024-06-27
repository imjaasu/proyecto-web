<?php
session_start();
$isLoggedIn = isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true;
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cabin:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/styles-index.css">
    <title>PartyMaker - Inicio</title>
</head>
<body>
    <div id="session-status" data-logged-in="<?php echo $isLoggedIn ? 'true' : 'false'; ?>"></div>
    <header class="header">
        <div class="menu container">
            <a class="logo" href="index.php">Party Maker</a>
            <input type="checkbox" id="menu">
            <label for="menu">
                <img class="menu-icono" src="" alt="">
            </label>
            <nav class="navbar">
                <ul id="navbar-links">
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="register.php">Registro</a></li>
                    <li><a href="loginUsu.php">Iniciar sesión</a></li>
                    <li><a href="about-us.html">Quiénes somos</a></li>
                    <li><a href="reservation.php">Reservaciones</a></li>
                    <li><a href="event-menu.html">Eventos y Menú</a></li>
                </ul>
            </nav>
        </div>
        <div class="header-content container">
            <h1>Party Maker</h1>
            <p>Haz realidad tus eventos soñados con nosotros. En Party Maker, nos dedicamos a convertir tus celebraciones en momentos inolvidables. Reserva ahora y deja que nuestro salón de eventos sea el escenario perfecto para tus momentos más especiales.</p>
            <a class="btn-1" href="#">Reserva Ahora</a>
        </div>
    </header>
    <main>
        <section class="bienvenida">
        <div>
                <img src="img/index/salon2.jpg" alt="salon">
            </div>
            <div>
                <h2 class="bienvenida__titulo">Ideal para organizar tus eventos</h2>
                <p class="bienvenida__texto">Nos especializamos en hacer realidad tus sueños y convertir cualquier
                    ocasión en un evento
                    inolvidable. Ya sea que estés planeando un cumpleaños, una reunión de negocios, una boda o cualquier
                    otro tipo de celebración, estamos aquí para ayudarte a cada paso del camino.</p>

                <div class="bienvenida__iconos">

                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-balloon" width="60"
                        height="60" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fd0061" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M14 8a2 2 0 0 0 -2 -2" />
                        <path d="M6 8a6 6 0 1 1 12 0c0 4.97 -2.686 9 -6 9s-6 -4.03 -6 -9" />
                        <path d="M12 17v1a2 2 0 0 1 -2 2h-3a2 2 0 0 0 -2 2" />
                    </svg>
                    <h4>Hola</h4>
                    <p>Lorem ipsum dolor sit.</p>

                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-users" width="60"
                        height="60" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fd0061" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M9 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                        <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                        <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                        <path d="M21 21v-2a4 4 0 0 0 -3 -3.85" />
                    </svg>

                    <h4>Hola</h4>
                    <p>Lorem ipsum dolor sit.</p>

                    <a class="btn-1" href="#">Conócenos</a>
                </div>
            </div>
        </section>
        <section class="card-container">
        <div class="info-card">
                <div class="card card1">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-map-pin-2" width="80"
                        height="80" viewBox="0 0 24 24" stroke-width="1" stroke="#000000" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M12 18.5l-3 -1.5l-6 3v-13l6 -3l6 3l6 -3v7" />
                        <path d="M9 4v13" />
                        <path d="M15 7v5" />
                        <path
                            d="M21.121 20.121a3 3 0 1 0 -4.242 0c.418 .419 1.125 1.045 2.121 1.879c1.051 -.89 1.759 -1.516 2.121 -1.879z" />
                        <path d="M19 18v.01" />
                    </svg>
                    <h4>Ubicación</h4>
                    <p>Juan Salvador Agraz 97, Santa Fe, Contadero, Cuajimalpa de Morelos, 05300 Ciudad de México, CDMX.
                    </p>
                </div>
            </div>

            <div class="info-card">
                <div class="card card2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-mail" width="80"
                        height="80" viewBox="0 0 24 24" stroke-width="1" stroke="#000000" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M3 7a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10z" />
                        <path d="M3 7l9 6l9 -6" />
                    </svg>

                    <h4>Contacto</h4>
                    <p>partymaker@fiestas.com</p>
                    <ul>
                        <li>Tel: 55 1234 5678</li>
                        <li>Cel: 55 8765 4321</li>
                    </ul>
                </div>
            </div>

            <div class="info-card">
                <div class="card card3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-confetti" width="80"
                        height="80" viewBox="0 0 24 24" stroke-width="1" stroke="#000000" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M4 5h2" />
                        <path d="M5 4v2" />
                        <path d="M11.5 4l-.5 2" />
                        <path d="M18 5h2" />
                        <path d="M19 4v2" />
                        <path d="M15 9l-1 1" />
                        <path d="M18 13l2 -.5" />
                        <path d="M18 19h2" />
                        <path d="M19 18v2" />
                        <path d="M14 16.518l-6.518 -6.518l-4.39 9.58a1 1 0 0 0 1.329 1.329l9.579 -4.39z" />
                    </svg>
                    <h4>Ofrecemos</h4>
                    <p>Espacios sofisticados y servicios de lujo, ideales para bodas y eventos corporativos. Servicios
                        completos de organización y catering.
                    </p>
                </div>
            </div>

        </section>
    </main>
    <footer class="footer">
        <h3 class="footer__titulo">Copyright &copy; 2024 Party Maker. Todos los derechos reservados.</h3>
    </footer>
    <script src="../js/script-sesion.js"></script>
</body>
</html>
