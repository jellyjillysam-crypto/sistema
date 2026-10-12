# CRUD Sistema de ventas

Aplicacion PHP + MySQL + jQuery Mobile para administrar las tablas `usuarios`, `productos` y `ventas` definidas en `Sistema.sql`.

## Requisitos

- PHP 8.1 o superior con PDO MySQL habilitado.
- MySQL/MariaDB.
- Conexion a internet para cargar jQuery Mobile y las fuentes desde CDN.

## Instalacion local

1. Crea una base de datos llamada `sistema`.
2. Importa `Sistema.sql` desde phpMyAdmin o MySQL.
3. Edita `config.local.php` (copia de `config.php`) con el host, usuario y contrasena de MySQL.
4. Sirve esta carpeta desde Apache/Nginx o ejecuta `php -S localhost:8000` dentro de esta carpeta.
5. Abre `http://localhost:8000`.

## Publicar en InfinityFree

1. En el panel de InfinityFree abre **MySQL Databases** y crea la base de datos. InfinityFree mostrara el host, nombre, usuario y contrasena reales; no uses `localhost` si el panel indica otro host.
2. Entra a phpMyAdmin desde el mismo panel y selecciona la base creada.
3. Importa `Sistema.sql`. Si el importador rechaza las primeras instrucciones, elimina solamente estas tres lineas antes de importar: `DROP DATABASE IF EXISTS sistema;`, `CREATE DATABASE sistema;` y `USE sistema;`.
4. Copia el contenido de esta carpeta a `htdocs` usando el administrador de archivos o FTP.
5. Edita `config.local.php` (copia de `config.php`) con los datos proporcionados por InfinityFree. Conserva exactamente el prefijo que el panel agrega al nombre de la base de datos.
6. Visita el dominio asignado. La aplicacion usa HTTPS si el dominio/certificado esta habilitado.

## Funciones incluidas

- Alta, edicion y eliminacion de usuarios.
- Alta, edicion y eliminacion de productos.
- Alta, edicion y eliminacion de ventas.
- Listados con relaciones usuario-producto.
- Calculo de totales de ventas mediante los triggers de `Sistema.sql`.
- Consultas preparadas PDO, escape HTML y token CSRF para formularios.

No subas contrasenas reales a un repositorio publico. La plantilla `config.php` solo contiene valores de ejemplo.

## Estructura de carpetas (htdocs)

```
htdocs/
├── .htaccess
├── index.php
├── functions.php
├── config.php
├── config.local.php
└── assets/
    ├── style.css
    └── mi_foto.jpeg
```
"# sistema" 
"# sistema" 
