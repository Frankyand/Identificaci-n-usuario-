<?php
require 'conexion.php'
$resultado = $conexion -> query("SELECT*FROM inscripciones");
?>

<h2>Lista de inscritos</h2>
<a href="formulario.php">Nueva Inscripción</a>
<table border="1" cellpadding ="5">
    <tr>
        <th>ID</th>
        <th>NOMBRE</th>
        <th>CORREO</th>
        <th>FECHA</th>
        <th>ACCIONES</th>
    </tr>
    <?php while($registros = $resultados ->fetch_assoc()) { ?>
        <tr>
            <td><?= $registros['ID'] ?></td>
            <td><?= $registros['NOMBRE'] ?></td>
            <td><?= $registros['CORREO'] ?></td>
            <td><?= $registros['FECHA_INSCRIPCION'] ?></td>
            <td>
                <a href="editar.php?id=<?= $registros['id'] ?>">ACTUALIZAR</a>
                <a href="eliminar.php?id=<?= $registros['id'] ?>" onclick="return confirm('Eliminar?')">Eliminar</a>
            </td>
        </tr>

    <?php} ?>

</table>
?>