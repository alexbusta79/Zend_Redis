Aplicativo di prova per provare una database NoSql. In questo caso si usa 
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
