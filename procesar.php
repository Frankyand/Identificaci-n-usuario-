<?php

    require    'conexion.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST"){

        $nombre = $_POST['nombre'];
        $correo = $_POST['correo'];

        $consulta = $conexion ->prepare("INSERT INTO inscripciones (nombre, correo) VALUES (?,?)");

        $consulta ->bind_param("ss", $nombre, $correo);
        
        if ($consulta->execute()){
            header("Location: listar.php");
        }else{
            echo "Error al inscribirse: "  . $consulta->error;
        }

        $consulta->close();
        $conexion->close();
    }
?>