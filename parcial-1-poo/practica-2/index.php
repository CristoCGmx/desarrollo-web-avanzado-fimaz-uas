<?php
// Incluimos la clase Admin, la cual ya incluye a Usuario.php internamente
require_once 'Admin.php';

// Creamos la instancia con tus datos específicos
$miAdmin = new Admin("Cristopher Chavarin Gaxiola", "ChavarinMx@gmail.com");

echo "<h1>Práctica 2: Herencia en PHP</h1>";

// Mostramos los datos heredados de Usuario
echo "<b>Nombre del Administrador:</b> " . $miAdmin->getNombre() . "<br>";
echo "<b>Correo Electrónico:</b> " . $miAdmin->getCorreo() . "<br>";

// Mostramos el método único de la clase Admin
echo "<b>Rol asignado:</b> " . $miAdmin->getRol();
?>