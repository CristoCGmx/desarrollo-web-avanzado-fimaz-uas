<?php
// 1. Definimos la clase
class Usuario {
    // 2. Atributos privados (nadie los puede ver desde afuera directamente)
    private $nombre;
    private $correo;

    // 3. El Constructor: se ejecuta en cuanto creamos al usuario
    public function __construct($nombre, $correo) {
        $this->nombre = $nombre;
        $this->correo = $correo;
    }

    // --- Métodos GET (Para obtener los valores) ---
    public function getNombre() {
        return $this->nombre;
    }

    public function getCorreo() {
        return $this->correo;
    }

    // --- Métodos SET (Para cambiar los valores) ---
    public function setNombre($nuevoNombre) {
        $this->nombre = $nuevoNombre;
    }

    public function setCorreo($nuevoCorreo) {
        $this->correo = $nuevoCorreo;
    }
}
?>