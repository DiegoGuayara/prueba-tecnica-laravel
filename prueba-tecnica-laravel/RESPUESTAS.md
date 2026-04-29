# RESPUESTAS

## 1. ¿Qué es el patrón MVC y qué responsabilidad tiene cada parte?

MVC significa Modelo, Vista y Controlador. El Modelo maneja los datos y la lógica relacionada con la base de datos, la Vista muestra la información al usuario, y el Controlador recibe la petición, coordina el modelo y devuelve una respuesta.

## 2. Diferencia entre GET y POST. ¿Cuándo usarías cada uno?

GET se usa para pedir información, por ejemplo abrir el listado de tareas. POST se usa para enviar datos que crean o cambian información, por ejemplo guardar una tarea nueva desde un formulario.

## 3. ¿Qué es Eloquent en Laravel y qué problema resuelve?

Eloquent es el ORM de Laravel. Permite trabajar con tablas de la base de datos usando clases y objetos de PHP, evitando escribir SQL manual para operaciones comunes como crear, buscar, actualizar o eliminar.

## 4. ¿Qué hace `php artisan migrate` y para qué sirven las migraciones?

`php artisan migrate` ejecuta las migraciones pendientes y crea o modifica tablas en la base de datos. Las migraciones sirven para versionar la estructura de la base de datos y compartir esos cambios con otras personas del equipo.

## 5. Diferencia entre `==` y `===` en PHP. Da un ejemplo donde el resultado cambie.

`==` compara valores permitiendo conversiones de tipo, mientras que `===` compara valor y tipo exacto. Por ejemplo, `"5" == 5` es verdadero, pero `"5" === 5` es falso porque uno es string y el otro entero.

## 6. ¿Qué es Composer y diferencia entre `composer install` y `composer update`?

Composer es el gestor de dependencias de PHP. `composer install` instala las versiones exactas registradas en `composer.lock`; `composer update` busca versiones nuevas permitidas por `composer.json` y actualiza el lock.

## 7. En Git, ¿cuál es la diferencia entre `git pull` y `git fetch`?

`git fetch` descarga cambios del remoto pero no los mezcla con la rama actual. `git pull` hace fetch y además intenta integrar esos cambios en la rama local, normalmente con merge o rebase.
