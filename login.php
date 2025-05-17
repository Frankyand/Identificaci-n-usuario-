<?php
session_start(); 
include("conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];

    $sql = "SELECT * FROM usuarios WHERE nombre = '$usuario' AND contraseña = '$contraseña'";
    $resultado = mysqli_query($conexion, $sql);

    if (mysqli_num_rows($resultado) == 1) {
        $_SESSION['usuario'] = $nombre;
        header("Location: bienvenida.php");
        exit();
    } else {
        $error = "Usuario o contraseña incorrectos.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h2>Inicio de sesión</h2>
    <form method="POST" action="procesar.php">
        <label for="usuario"> Usuario:</label>
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