# Laravel Pyramid

**Laravel Pyramid** es una aplicación web que permite generar pirámides y triángulos de números de manera dinámica. Incluye opciones de alineación, tamaño y estilo de visualización, con soporte para colores en los bloques.

## Características

* Generación de pirámides y triángulos de números.
* Configuración de la base y número de filas.
* Alineación dinámica (izquierda, centro, derecha).
* Opción de pirámides coloridas.
* Interfaz interactiva con **Livewire** y estilos con **Tailwind CSS**.

## Tecnologías

* **PHP 8.x**
* **Laravel 10**
* **Livewire**
* **Tailwind CSS**
* **Node.js & NPM** (para compilación de assets)

## Instalación

Sigue estos pasos para levantar el proyecto en tu entorno local:

1. **Clonar el repositorio y entrar en la carpeta del proyecto**

   ```bash
   git clone https://github.com/adrian-reboceno/laravel-pyramid.git
   cd laravel-pyramid
   ```

2. **Instalar dependencias de PHP y Node.js**

   ```bash
   composer install
   npm install
   npm run dev
   ```

3. **Configurar variables de entorno**
   Copia el archivo de ejemplo `.env.example` y genera la clave de aplicación:

   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

   > Opcional: Configura la conexión a la base de datos en el archivo `.env` si planeas usar migraciones o datos persistentes.

4. **Ejecutar migraciones (opcional)**

   ```bash
   php artisan migrate
   ```

5. **Levantar el servidor local**

   ```bash
   php artisan serve
   ```

6. **Abrir en el navegador**

   ```
   http://localhost:8000
   ```

## Uso

* Ingresa los valores de **Base Number** y **Number of Rows**.
* Selecciona el tipo de pirámide (`triangle` o `pyramid`) y la alineación.
* Activa la opción **Colorful** para ver bloques con colores.
* Haz clic en **Generar** para ver la pirámide dinámica.

## Estructura del proyecto

* **app/Livewire/Examples/Pyramid.php**: Componente Livewire principal.
* **resources/views/livewire/examples/pyramid.blade.php**: Vista del componente.
* **app/Models/Pyramid.php**: Modelo que define atributos de la pirámide.
* **routes/web.php**: Rutas del proyecto.
* **resources/css/app.css**: Estilos principales con Tailwind.

## Contribución

1. Haz un fork del proyecto.
2. Crea una rama (`git checkout -b feature/nueva-funcionalidad`).
3. Realiza tus cambios y haz commit.
4. Envía un pull request.

## Licencia

Este proyecto está bajo la licencia MIT.
