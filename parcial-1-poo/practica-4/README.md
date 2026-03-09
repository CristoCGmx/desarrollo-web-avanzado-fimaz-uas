# Práctica 4: Integración POO + Herencia + Validaciones + Excepciones

**Estudiante:** Cristopher Chavarin Gaxiola
**Repositorio:** desarrollo-web-avanzado-fimaz-uas

## Objetivo
Construir un sistema integral en PHP 8 que aplique los pilares de la Programación Orientada a Objetos, incluyendo herencia múltiple desde una base, polimorfismo mediante el método `getRol()` y una gestión robusta de errores con excepciones.

## Requisitos del Entorno
- PHP 8.0 o superior
- Servidor local XAMPP
- Git para control de versiones

## Lógica del Sistema
1. **Validación Centralizada:** La clase `Usuario` valida el formato de correo mediante `filter_var`. Cualquier dato erróneo dispara una excepción que detiene la creación del objeto.
2. **Especialización:** - `Admin` representa perfiles de gestión.
   - `Alumno` integra el manejo de matrículas académicas.
   - `Invitado` permite registrar procedencias corporativas.
3. **Manejo de Excepciones:** Se utiliza un bloque `try-catch` para capturar intentos de registro inválidos, permitiendo que el sistema muestre los usuarios correctos en una tabla HTML y reporte el error específico sin interrumpir la carga de la página.

## Instrucciones de Ejecución
1. Iniciar Apache en el panel de **XAMPP**.
2. Colocar la carpeta del proyecto en `htdocs/desarrollo-web-avanzado-fimaz-uas/`.
3. Acceder a la URL:
   http://localhost/desarrollo-web-avanzado-fimaz-uas/parcial-1-poo/practica-4/index.php

---
*Facultad de Informática Mazatlán - UAS*