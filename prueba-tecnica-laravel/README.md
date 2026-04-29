# Mis Tareas

Mini-aplicación de gestión de tareas personales hecha con Laravel. Permite crear, listar, editar, eliminar y marcar tareas como completadas.

## Datos

- Nombre: Diana Guayara
- PHP: 8.2.12
- Laravel: 11.51.0
- Base de datos: SQLite

## Tecnologías usadas

- PHP 8
- Laravel 11
- Blade
- SQLite
- CSS plano

## Cómo correr el proyecto localmente

1. Clonar el repositorio:

```bash
git clone URL_DEL_REPOSITORIO
cd prueba-tecnica-laravel
```

2. Instalar dependencias de PHP:

```bash
composer install
```

3. Crear el archivo de entorno:

```bash
cp .env.example .env
```

En Windows PowerShell también puede usarse:

```powershell
Copy-Item .env.example .env
```

4. Generar la llave de la aplicación:

```bash
php artisan key:generate
```

5. Crear la base de datos SQLite si no existe:

```bash
touch database/database.sqlite
```

En Windows PowerShell:

```powershell
New-Item -ItemType File -Force database/database.sqlite
```

6. Ejecutar migraciones:

```bash
php artisan migrate
```

7. Levantar el servidor:

```bash
php artisan serve
```

Luego abrir:

```text
http://127.0.0.1:8000/tareas
```

## Nota local

En mi equipo PHP está instalado con XAMPP. Si `php` no está en el PATH, los comandos pueden ejecutarse usando la ruta completa:

```powershell
C:\xampp\php\php.exe artisan serve
```

## Deploy

No aplica por ahora.
