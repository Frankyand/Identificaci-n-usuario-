<?php
    session_start();

    if(isset($_SESSION['nombre']))
    {
        echo "hola ".$_SESSION['nombre'];
        
        echo "<p><a href='logout.php'>Cerrar sesión</a></p>";
    }
    else
        echo"No estas autenticado";
?>