## Requerimientos
1. Composer.
2. Versión de PHP >= 5.6.4

## Ejecución de proyecto

1. Abrir la consola y ubicarse en la raíz del proyecto.
2. Tipear "composer install" (instalar todas las dependencias).
3. Crear una base de datos con el nombre "mgp".
4. Configurar un usuario y contraseña con permisos.
5. Tipear "php artisan key:generate". Por medidas de seguridad cada proyecto de Laravel cuenta con una clave única que se crea en el archivo ".env" al iniciar el proyecto.
5. Configurar el archivo ".env" en la raíz del directorio con las credenciales de la DB (incluyendo el nombre "mgp").
6. Ejecutar "php artisan migrate".
7. Ubicarse en la raíz del directorio y ejecutar "php artisan serve".

## Rutas

1. Abrir la consola.
2. Ubicarse en la raíz del proyecto.
3. Tipear "php artian r:l" o "php artisan route:list".

## Modelos
Se encuentran en el directorio "app" del proyecto.

## Vistas
En el directorio "public" se encuentran las dependencias CSS y JS, además de los plugins necesarios (elementos adicionales como la adición de "bootstrap").

En "resources/views" se encuentran las vistas divididas a través de una carpeta, la principal en "admin". Para los Usuarios tipo "Representante" es necesario de otro directorio. 

## Controladores
"app/Http/Controllers".