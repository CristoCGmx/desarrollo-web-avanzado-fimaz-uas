<?php
require_once 'Admin.php';
require_once 'Alumno.php';

$usuarios = [];
$mensajeError = "";

try {
    // 1. Datos correctos (Aparecerán en la tabla)
    $usuarios[] = new Admin("Cristopher Chavarin Gaxiola", "ChavarinMx@gmail.com");
    $usuarios[] = new Alumno("Juan Ramirez", "juan@uasMx.edu.mx", "20202020");

    // 2. Dato INCORRECTO (Aquí es donde se comprueba la excepción)
    // Al no tener "@" ni ".com", el constructor lanzará el error.
    $usuarios[] = new Alumno("Usuario Error", "correo invalido", "000000");

} catch (Exception $e) {
    // 3. Validación: Se guarda el mensaje para mostrarlo en el HTML
    $mensajeError = $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Examen Final-Poo</title>
    <style>
        table { width: 80%; border-collapse: collapse; margin: 20px 0; }
        th, td { border: 1px solid #000; padding: 8px; text-align: left; }
        th { background-color: #eee; }
        .error { color: red; font-weight: bold; }
    </style>
</head>
<body>
    <h1>Examen Parcial Unidad 1</h1>

    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Rol</th>
                <th>Matrícula</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($usuarios as $u): ?>
                <tr>
                    <td><?php echo $u->getNombre(); ?></td>
                    <td><?php echo $u->getCorreo(); ?></td>
                    <td><?php echo $u->getRol(); ?></td>
                    <td><?php echo (method_exists($u, 'getMatricula')) ? $u->getMatricula() : "N/A"; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <?php if ($mensajeError): ?>
        <p class="error"><?php echo $mensajeError; ?></p>
    <?php endif; ?>
</body>
</html>