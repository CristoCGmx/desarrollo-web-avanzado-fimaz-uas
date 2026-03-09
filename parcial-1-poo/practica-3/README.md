# Práctica 3: Sistema de Usuarios con Validaciones y Excepciones

**Estudiante:** Cristopher Chavarin Gaxiola
**Repositorio:** desarrollo-web-avanzado-fimaz-uas

## Objetivo
Desarrollar un sistema orientado a objetos más robusto, integrando herencia, validaciones de datos y manejo de excepciones para simular un entorno de desarrollo profesional.

## Explicación de la Lógica Aplicada

En esta práctica, el sistema evoluciona para no solo organizar usuarios, sino también para asegurar que la información ingresada sea correcta.

### Puntos clave implementados:
1. **Validación de Datos:** En la clase base `Usuario`, implementé un filtro que verifica si el correo electrónico tiene un formato válido. Si el correo es incorrecto, el sistema utiliza `throw new Exception` para detener el proceso y reportar el fallo.
2. **Jerarquía y Especialización:** - La clase `Admin` hereda la validación de la clase base.
   - La clase `Alumno` añade el atributo `matricula` y utiliza `parent::__construct` para asegurar que sus datos también sean validados por el "padre".
3. **Manejo de Errores (Try/Catch):** En el archivo `index.php`, envolví la creación de objetos en un bloque `try`. Si ocurre un error de validación, el bloque `catch` captura la excepción y muestra un mensaje controlado en lugar de un error fatal de PHP.

## Estructura del Proyecto

* **clases/Usuario.php:** Clase base con la lógica de validación de correo.
* **clases/Admin.php:** Clase hija que representa a un administrador.
* **clases/Alumno.php:** Clase hija con atributo adicional de matrícula.
* **index.php:** Archivo principal donde se ejecutan las pruebas de éxito y de error controlado.

## Instrucciones de Ejecución

1. **Servidor Local:** Iniciar el módulo Apache en el panel de **XAMPP**.
2. **Ubicación:** El proyecto debe estar en la ruta `htdocs/desarrollo-web-avanzado-fimaz-uas/parcial-1-poo/practica-3/`.
3. **Acceso:** Copie y pegue la siguiente URL en su navegador:
   http://localhost/desarrollo-web-avanzado-fimaz-uas/parcial-1-poo/practica-3/index.php

---
*Facultad de Informática Mazatlán - UAS*