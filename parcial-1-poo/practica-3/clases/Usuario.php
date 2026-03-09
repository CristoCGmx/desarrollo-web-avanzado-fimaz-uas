<?php
class Usuario {
    protected $nombre;
    protected $correo;

    public function __construct($nombre, $correo) {
        // Validamos el correo antes de asignarlo
        if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
            // Si el correo está mal, lanzamos una "alarma" (Excepción)
            throw new Exception("El correo '$correo' no tiene un formato válido.");
        }
        
        $this->nombre = $nombre;
        $this->correo = $correo;
    }

    public function getNombre() { return $this->nombre; }
    public function getCorreo() { return $this->correo; }
}
?>