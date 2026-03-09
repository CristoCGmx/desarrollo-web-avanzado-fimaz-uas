# Práctica 1: Creación de Clases y Encapsulamiento en PHP

**Estudiante:** Cristopher Chavarin Gaxiola
**Repositorio:** desarrollo-web-avanzado-fimaz-uas

## Objetivo
Aplicar los fundamentos de la Programación Orientada a Objetos (POO) en PHP, implementando una clase con atributos privados, constructor y métodos de acceso, siguiendo las mejores prácticas de encapsulamiento.

## Explicación del Código

En esta primera práctica, me enfoqué en el concepto de **Encapsulamiento**, que consiste en proteger los datos internos de un objeto para que no sean modificados de forma arbitraria desde afuera.

### Puntos clave implementados:
1. **Atributos Privados:** Definí `$nombre` y `$correo` como `private`. Esto significa que solo la propia clase `Usuario` puede verlos o cambiarlos.
2. **Método Constructor:** Utilicé la función `__construct` para inicializar los datos del usuario en el momento exacto en que se crea el objeto.
3. **Métodos de Acceso (Getters y Setters):** - Cree `getNombre()` y `getCorreo()` para poder leer la información de forma segura.
   - Cree `setNombre()` y `setCorreo()` para permitir la actualización de los datos bajo las reglas de la clase.

## Estructura del Proyecto

* **Usuario.php:** Contiene la definición de la clase, sus propiedades y métodos.
* **index.php:** Es el archivo principal donde instancio la clase con mis datos y verifico que el encapsulamiento funcione correctamente al mostrar la información en el navegador.

## Instrucciones de Ejecución

1. **Servidor Local:** Iniciar Apache en el panel de **XAMPP**.
2. **Ruta del Proyecto:** Colocar los archivos en `htdocs/desarrollo-web-avanzado-fimaz-uas/parcial-1-poo/practica-1/`.
3. **Navegador:** Acceder mediante la URL:
   [http://localhost/desarrollo-web-avanzado-fimaz-uas/parcial-1-poo/practica-1/index.php]

---
*Facultad de Informática Mazatlán - UAS*