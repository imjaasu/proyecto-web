<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
    header("Location: loginUsu.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cabin:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/styles-reservation.css">
    <title>PartyMaker - Reservaciones</title>
</head>
<body>
    <header class="header">
        <div class="menu container">
            <a class="logo" href="index.html">Party Maker</a>
            <input type="checkbox" id="menu" />
            <label for="menu">
                <img class="menu-icono" src="" alt="" />
            </label>
            <nav class="navbar">
                <ul>
                    <li><a href="index.html">Inicio</a></li>
                    <li><a href="about-us.html">Quiénes somos</a></li>
                    <li><a href="">Cerrar Sesión</a></li>
                    <li><a href="#">Contacto</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <div class="options-container">
            <form class="form" id="reservation-form" action="registro.php" method="POST">
                <h2>Reservaciones</h2>
                <label for="evento">Tipo de evento</label>
                <select name="evento" id="evento">
                    <option value="graduacion">Graduación</option>
                    <option value="boda">Boda</option>
                    <option value="bautizo">Bautizo</option>
                    <option value="xvanios">XV años</option>
                    <option value="reunion-familiar">Reunión familiar</option>
                    <option value="reunion-negocios">Reunión de negocios</option>
                </select>

                <label for="fecha">Fecha</label>
                <input type="date" id="fecha" name="fecha" required>

                <label for="hora">Hora</label>
                <input type="time" id="hora" name="hora" required>

                <label for="menu">Menú</label>
                <select name="menu" id="menu">
                    <option value="desayuno">Desayuno (9:00 - 12:00)</option>
                    <option value="comida">Comida (12:00 - 17:00)</option>
                    <option value="cena">Cena (17:00 - 23:00)</option>
                </select>

                <h3>Platillos</h3>
                <div id="platillos"></div>

                <input class="btn-1" type="submit" value="Reservar">
            </form>
        </div>

        <div class="event-list">
            <h2>Eventos Creados</h2>
            <ul id="event-list"></ul>
        </div>

        <div class="salon">
            <h2>Distribución del Salón</h2>
            <div id="salon-container">
                <!-- Aquí se colocarán los elementos de drag and drop -->
            </div>
        </div>
    </main>

    <footer class="footer">
        <h3>Copyright &copy; 2024 Party Maker. Todos los derechos reservados.</h3>
    </footer>

    <script src="../js/script-reservacion.js"></script>
    <script src="../js/salon-setup.js"></script>
</body>
</html>
