% Aplicación para empresa de telecomunicaciones»
% Daniel Gallego Calderón
% Curso 2022/23

# Descripción general del proyecto

La aplicación permite a cualquier usuario vinculado a la empresa (sea trabajador o cliente de esta), hacer uso de todas las funcionalidades de esta según su rol.

## Funcionalidad principal de la aplicación

En la aplicación, los usuarios, dependiendo de su tipo podrán:

    - Si es cliente, crear incidencias, contactar con la empresa y hacer uso de un chat en vivo.
    - Si es soporte, asignar dichas incidencias, crear nuevas incidencias, acceder a los datos de los clientes y ser la otra parte del chat en vivo.
    - Si es técnico, acceder a la lista de incidencias que le han sido asignadas, cambiar el estado de estas a su gusto y hacer uso de un sistema de rutas en el que se le guiará hasta la ubicación del cliente.
    - Si es administrador, acceder y manipular todos los datos y tipos de usuario.

## Objetivos generales

* Objetivo: "crear un sitio web dónde todos los usuarios que sean miembros de una empresa puedan hacer uso de esta según sus necesidades".
* Casos de uso: 
    * Invitado: "registrarse", "navegar por el área cliente"
    * Cliente: "iniciar sesión", "cerrar sesión", "crear incidencias", "modificar incidencias propias", "eliminar incidencias propias", "enviar un mensaje a la empresa", "chatear en vivo con un usuario de soporte"
    * Soporte: "iniciar sesión", "cerrar sesión", "crear incidencias", "modificar incidencias", "eliminar incidencias", "asignar incidencias a técnicos", "acceder a datos del cliente", "ver detalles de la incidencia", "chatear en vivo con un usuario cliente", "acceder al historial de incidencias de cualquier cliente"
    * Administrador: "iniciar sesión", "cerrar sesión", "registrar usuario", "modificar usuario", "eliminar usuario", "crear incidencia", "modificar incidencia", "eliminar indicendia", "acceder a datos de cualquier usuario"

# Elemento de innovación

Chat en vivo dónde el cliente iniciará y entablará una conversación con un trabajador de soporte de la empresa.

Sistema de rutas dónde se guiará al usuario técnico desde su ubicación hasta la ubicación del cliente.