<?php

    require    'conexion.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST"){

        $nombre = $_POST['nombre'];
        $correo = $_POST['correo'];
        $contraseña = $_post['contraseña'];

        $consulta = $conexion ->prepare("INSERT INTO inscripciones (nombre, correo, contraseña) VALUES (?,?,?)");

        $consulta ->bind_param("sss", $nombre, $correo, $contraseña);
        
        if ($consulta->execute()){
            header("Location: listar.php");
            exit();
        }else{
            echo "Error al inscribirse: "  . $consulta->error;
        }

        $consulta->close();
        $conexion->close();
    }
?>