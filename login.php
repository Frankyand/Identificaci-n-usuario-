<?php
    session_start(); //inicio 

    //suponer que el usuario se autentico 

    $_SESSION['usuario'] = "Frank";
    $_SESSION['rol']= "docente";

    echo "sesion iniciada"."<br>";

    echo "<a href= 'bienvenida.php'> Ir a la pagina de bienvenida</a>"; 

?>