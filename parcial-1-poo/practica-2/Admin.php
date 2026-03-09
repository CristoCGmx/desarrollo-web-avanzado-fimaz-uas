<?php
// Primero necesitamos traer al "padre"
require_once 'Usuario.php';

// La palabra 'extends' hace que Admin herede todo de Usuario
class Admin extends Usuario {
    
    // Este es el método nuevo que solo tiene el Administrador
    public function getRol() {
        return "Administrador";
    }
}
?>