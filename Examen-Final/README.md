# Examen Final: Mini-sistema de Usuarios POO

Este proyecto consiste en la implementación de un sistema básico de gestión de usuarios desarrollado en **PHP 8**, aplicando los pilares de la Programación Orientada a Objetos (POO).

## Requisitos del Sistema
* Servidor local: XAMPP / Apache.
* Versión de PHP: 8.0 o superior.

## Estructura del Proyecto
* **Usuario.php**: Clase base que gestiona el nombre y correo, incluyendo la validación de formato mediante excepciones.
* **Admin.php**: Clase que extiende a Usuario para representar el rol de Administrador.
* **Alumno.php**: Clase que extiende a Usuario e incorpora el atributo de matrícula.
* **index.php**: Punto de entrada que procesa la lógica, captura excepciones y genera la salida en una tabla HTML.

## Características Implementadas
1. **Encapsulamiento**: Uso de modificadores de acceso (`protected` y `private`).
2. **Herencia**: Extensión de funcionalidades desde una clase padre a clases hijas.
3. **Manejo de Excepciones**: Validación de correos electrónicos en el constructor con bloques `try-catch`.
4. **Polimorfismo**: Implementación del método `getRol()` con diferentes retornos según la clase.

## Autor
**Cristopher Chavarin Gaxiola** Facultad de Informática Mazatlán - UAS