# APP (Sesiones con Redis)

Aplicación para testear el uso de sesiones con un balanceador de carga. 

Muestra un contador de visitas que se va incrementando cada vez que se realiza una visita a la página.

Se deben completar dos variables de entorno:
- `SESSION_DRIVER`: `redis` o `files`, según se desean manejar las sesiones.
- `REDIS_URL`: URL para la conexión con Redis.