<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cabin:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/styles-login.css">
    <title>PartyMaker - Inicio de sesión</title>
</head>
<body>
    <section class="form-register">
        <form action="login.php" method="POST">
            <h2>Inicio de sesión</h2>
            
            <?php
            if (isset($error_message)) {
                echo '<p style="color: red;">' . $error_message . '</p>';
            }
            ?>
            
            <input class="input" type="email" id="email" name="email" required placeholder="Ingresa tu correo electrónico">
            <input class="input" type="password" id="password" name="password" required placeholder="Ingresa tu contraseña">
            <input class="btn-1" type="submit" value="INICIAR SESIÓN">
            <p>¿No tienes cuenta? <a href="register.php"> Regístrate aquí.</a></p>
        </form>
    </section>
    <script src="../js/script-login.js"></script>
</body>
</html>

