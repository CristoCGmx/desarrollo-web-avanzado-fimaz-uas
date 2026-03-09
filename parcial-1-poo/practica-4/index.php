<?php
require_once 'clases/Admin.php';
require_once 'clases/Alumno.php';
require_once 'clases/Invitado.php';

$usuarios = [];
$errorMsg = "";

try {
    // 1. Admin válido (Tus datos)
    $usuarios[] = new Admin("Cristopher Chavarin Gaxiola", "ChavarinMx@gmail.com");

    // 2. Alumno válido
    $usuarios[] = new Alumno("Juan Perez", "juan.perez@uas.edu.mx", "20240001");

    // 3. Invitado válido
    $usuarios[] = new Invitado("Maria Lopez", "m.lopez@empresa.com", "Tech Solutions");

    // 4. Registro inválido (Provoca la excepción)
    $usuarios[] = new Usuario("Usuario Error", "correo-mal-escrito");

} catch (Exception $e) {
    $errorMsg = $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Práctica 4: Integración POO</title>
    <style>
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #333; padding: 10px; text-align: left; }
        th { background-color: #8f4b4b; }
        .error { color: #d9534f; font-weight: bold; margin-top: 20px; }
    </style>
</head>
<body>
    <h1>Sistema de Usuarios - Integración Final</h1>

    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Rol</th>
                <th>Matrícula</th>
                <th>Empresa</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($usuarios as $u): ?>
                <tr>
                    <td><?php echo $u->getNombre(); ?></td>
                    <td><?php echo $u->getCorreo(); ?></td>
                    <td><?php echo $u->getRol(); ?></td>
                    <td><?php echo (method_exists($u, 'getMatricula')) ? $u->getMatricula() : "—"; ?></td>
                    <td><?php echo (method_exists($u, 'getEmpresa')) ? $u->getEmpresa() : "—"; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <?php if ($errorMsg): ?>
        <div class="error">
            Error controlado: <?php echo $errorMsg; ?>
        </div>
    <?php endif; ?>
</body>
</html>