<?php
require_once 'clases/Admin.php';
require_once 'clases/Alumno.php';

echo "<h1>Práctica 3: Validaciones y Excepciones</h1>";

try {
    // 1. Probamos un Administrador válido (Tus datos)
    $admin = new Admin("Cristopher Chavarin Gaxiola", "ChavarinMx@gmail.com");
    echo "Admin creado: " . $admin->getNombre() . " (" . $admin->getRol() . ")<br>";

    // 2. Probamos un Alumno válido
    $alumno = new Alumno("Juan Perez", "juan@uas.edu.mx", "20240001");
    echo "Alumno creado: " . $alumno->getNombre() . " - Matrícula: " . $alumno->getMatricula() . "<br>";

    // 3. PROBAMOS EL ERROR (Quitamos el .com o el @ para que falle)
    echo "<h3>Probando validación de error:</h3>";
    $error = new Usuario("Falso", "correo-invalido"); 

} catch (Exception $e) {
    // Si algo falla arriba, el código salta aquí directamente
    echo "Error detectado: " . $e->getMessage();
}
?>