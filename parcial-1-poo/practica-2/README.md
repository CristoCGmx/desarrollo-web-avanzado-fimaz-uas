# Práctica 2: Herencia y Reutilización de Código en PHP

**Estudiante:** Cristopher Chavarin Gaxiola
**Repositorio:** desarrollo-web-avanzado-fimaz-uas

## Objetivo
Implementar herencia mediante la extensión de clases, reutilizando atributos y métodos de una clase base para optimizar el desarrollo de software.

## Explicación de la Herencia Aplicada

En esta práctica, mi clase `Admin` utiliza la palabra reservada `extends` para heredar de la clase `Usuario`. Esto permite que ambas clases estén comunicadas y compartan la misma lógica de negocio sin necesidad de duplicar código.

### Ajustes Técnicos Realizados:
1. **Modificación de Visibilidad:** Cambié los atributos `nombre` y `correo` de `private` a `protected` en la clase base. Esto es fundamental para que la clase hija (`Admin`) pueda acceder a ellos directamente.
2. **Optimización de Código:** La clase `Admin` no necesita volver a definir el constructor ni los métodos de nombre y correo; simplemente añadí la función `getRol()` para especializar la clase de forma rápida.

## Diferencias entre Usuario y Admin

* **Clase Usuario:** Funciona como el "cerebro" o la base; define la estructura general (nombre y correo) que cualquier usuario del sistema debe tener.
* **Clase Admin:** Es la clase hija; hereda toda la estructura del usuario y añade privilegios específicos, que en este caso es el rol de "Administrador".

## Instrucciones de Ejecución

1. **Activar Apache:** Inicie el módulo desde el panel de **XAMPP**.
2. **Ubicación:** El proyecto debe estar en la ruta `htdocs/desarrollo-web-avanzado-fimaz-uas/parcial-1-poo/practica-2/`.
3. **Acceso:** Ingrese a la siguiente URL en su navegador:
   [http://localhost/desarrollo-web-avanzado-fimaz-uas/parcial-1-poo/practica-2/index.php]

---
*Facultad de Informática Mazatlán - UAS*