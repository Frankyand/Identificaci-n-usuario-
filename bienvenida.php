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