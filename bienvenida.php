<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Bienvenida</title>
    <link rel="stylesheet" href="estilos.css"> 
</head>
<body>

    <div class="cabecera">
        <img src="logo.jpeg" alt="izquierda" class="logo">
        <span class="titulo_c">CUERPO DE INGENIEROS DEL EJÉRCITO</span>
        <img src="logo.jpeg" alt="derecha" class="logo">
    </div>
    
    <?php
    if(isset($_SESSION['nombre']))
    {
        echo "hola ".$_SESSION['nombre'];
        
        echo "<p><a href='logout.php'>Cerrar sesión</a></p>";
    }
    else
        echo"No estas autenticado";
    ?>

</body>
</html>