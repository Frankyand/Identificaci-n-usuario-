<?php
    session_start();

    if(isset($_SESSION['usuario']) && isset($_SESSION['rol']))
    {
        echo "hola ".$_SESSION['usuario']."Tu rol es: ".$_SESSION['rol'];
    }
    else
        echo"No estas autenticado";
?>