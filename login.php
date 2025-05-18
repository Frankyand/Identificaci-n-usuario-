<?php
session_start(); 
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <h2>Inicio de sesión</h2>
    <form method="POST" action="procesar.php">
        <label for="nombre"> Usuario:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>

        <label for="contraseña">Contraseña:</label>
        <input type="password" id="contraseña" name="contraseña" required><br><br>

        <input type="submit" value="Ingresar">
    </form>

    <p>¿No tienes cuenta? <a href="formulario.php">Regístrate aquí</a></p>

    <?php
    if (isset($_GET['error'])) {
        echo "<p style='color:red;'>Usuario o contraseña incorrectos</p>";
    }
    ?>
</body>
</html>