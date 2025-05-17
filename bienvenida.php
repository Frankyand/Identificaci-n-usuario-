<?php
    session_start();

    if(isset($_SESSION['nombre']))
    {
        echo "hola ".$_SESSION['nombre'];
    }
    else
        echo"No estas autenticado";
?>