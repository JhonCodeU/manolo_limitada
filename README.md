```markdown
# Proyecto de Gestión de Contactos - Manolo Limitada

Este proyecto tiene como objetivo crear una interfaz web para la gestión de contactos de la organización Manolo Limitada. Proporciona funcionalidades como registro, actualización y eliminación de contactos, y está diseñado con buenas prácticas de desarrollo.

## Requerimientos mínimos

- Interfaz web para consultar el catálogo de contactos registrados.
- Interfaz web para registrar, actualizar y eliminar contactos.
- Diseño gráfico agradable y usable en las interfaces web.
- Backend desarrollado en Laravel.
- Frontend desarrollado en Blade.

## Configuración inicial

Sigue estos pasos para configurar y ejecutar el proyecto:

1. Clona el repositorio:

   ```shell
   git clone https://github.com/JhonCodeU/manolo_limitada.git
   ```

2. Navega al directorio del proyecto:

   ```shell
   cd manolo_limitada
   ```

3. Instala las dependencias de Composer:

   ```shell
   composer install
   ```

4. Crea el archivo de configuración del entorno:

   ```shell
   cp .env.example .env
   ```

5. Genera una clave de aplicación:

   ```shell
   php artisan key:generate
   ```

6. Configura la base de datos en el archivo .env:

   ```
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=manoloDB
   DB_USERNAME=usuario_base_de_datos
   DB_PASSWORD=password_base_de_datos
   ```

7. Ejecuta las migraciones para crear las tablas en la base de datos:

   ```shell
   php artisan migrate
   ```

8. Ejecuta los seeders para poblar la base de datos con datos de prueba:

   ```shell
   php artisan db:seed
   ```

## Ejecutar el proyecto

1. Inicia el servidor de desarrollo de Laravel:

   ```shell
   php artisan serve
   ```

2. Accede a la aplicación en tu navegador web:

   ```
   http://localhost:8000
   ```

¡Listo! Ahora puedes utilizar la interfaz web para gestionar los contactos de Manolo Limitada.

```
