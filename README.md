Italiano: 
Aplicativo di prova su una database NoSql. In questo caso si usa 
Redis e si integra con Zend-Framework, usando tutte le funzionalità di tutte
due. 

INSTALLAZIONE: 
Prima si deve installare il server REDIS. Di questo path: https://github.com/alexbusta79/Server_Redis_Windows
poi si inizia il servizio in redis-server. Dipende del SO, sia 32 bits o 64 bits. 
Poi si deve aggiungere il archivio php_redis.dll in nostre stenzione php. 
Poi sul archivio di configurazione di php.ini dobbiamo aggiungere la directiva. 
extension=php_redis.dll 
Per finire riavviamo il server Apache. 
Poi si copiano tutte le cartele, nel htdocs o si avete un virtual host. 
Per provare il aplicativo devi andare al controller index e fare delle prove. 

Espanol: 
Aplicativo de prueba sobre una base de datos NoSQL. En este caso usamos Redis (NoSql centrado en clave-valor) y 
lo integramos con Zend Framework, usando todas las funzionalidades de los dos programas.

INSTALACION:
Lo primero que debemos hacer es instalar el servidor REDIS. En este link lo pueden encontrar: 
https://github.com/alexbusta79/Server_Redis_Windows
Despues de instalado iniciamos el servicio dandole clik al archivo redis-server, que encontraras en la instalacion
depende del sistema operativo que uses y si es de 32 o 64 bits. 
Luego debemos agregar el archivo php_redis.dll en nuestras extensiones de php. (Esto genera que todas los metodos
y clases del redisphp las tengamos de forma nativa en nuestro php-core). 
Luego en el archivo de configuracion de php.ini agregamos la directiva.
extension = php_redis.dll
Por ultimo reiniciamos el servidor Apache y copiamos el sistema en nuestro document root.
Para probar el aplicativo debes dirigirte al controlador index y hacer las pruebas. 