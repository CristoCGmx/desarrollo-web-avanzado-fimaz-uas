<?php
// 1. Incluimos el archivo donde definimos la clase
require_once 'Usuario.php';

// 2. Creamos una instancia (objeto) de la clase Usuario
// Pasamos el nombre y el correo al constructor
$miUsuario = new Usuario("Chavarin Gaxiola Cristopher", "ChavarinMx@gmail.com");

// 3. Mostramos los valores utilizando los métodos GET (getters)
echo "<h1>Resultado de la Práctica 1</h1>";

echo "<b>Nombre del usuario:</b> " . $miUsuario->getNombre() . "<br>";
echo "<b>Correo del usuario:</b> " . $miUsuario->getCorreo();
?>