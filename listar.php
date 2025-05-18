<?php
require 'conexion.php';
$resultado = $conexion -> query("SELECT*FROM inscripciones");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de inscritos</title>
    <link rel="stylesheet" href="estilos.css"> 
</head>
<body>
    <h2>Lista de inscritos</h2>
    <a href="formulario.php">Nueva Inscripción</a>
    <table border="1" cellpadding ="5">
        <tr>
            <th>id</th>
            <th>nombre</th>
            <th>correo</th>
            <th>contraseña</th>
            <th>fecha_inscripcion</th>
            <th>acciones</th>
        </tr>
        <?php while($registros = $resultado ->fetch_assoc()) { ?>
            <tr>
                <td><?= $registros['id'] ?></td>
                <td><?= $registros['nombre'] ?></td>
                <td><?= $registros['correo'] ?></td>
                <td><?= $registros['contraseña'] ?></td>
                <td><?= $registros['fecha_inscripcion'] ?></td>
                <td>
                    <a href="editar.php?id=<?= $registros['id'] ?>">ACTUALIZAR</a>
                    <a href="eliminar.php?id=<?= $registros['id'] ?>" onclick="return confirm('Eliminar?')">Eliminar</a>
                </td>
            </tr>

        <?php } ?>

    </table>

</body>
</html>