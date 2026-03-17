# APP (Sesiones con Redis)

Aplicación para testear el uso de sesiones (en disco o Redis) con un balanceador de carga. 

Muestra un contador de visitas que se va incrementando cada vez que se realiza una visita a la página.

Se deben completar las siguientes variables de entorno:
- `APP_NAME`: Nombre que se muestra al acceder a la página web.
- `SESSION_DRIVER`: `redis` para guardar sesiones en Redis. Cualquier otro valor para guardar en local.
- `REDIS_URL`: URL para la conexión con Redis. Por defecto, `tcp://redis:6379`.
- `STATIC_DOMAIN`: Dominio para assets. Por ejemplo, `http://192.168.56.56:9001/`.