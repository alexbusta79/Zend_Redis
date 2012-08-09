<?php

class IndexController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
      
   $redis = new Redis();                     // Se crea la nueva instancia a redis 
   $redis->connect('127.0.0.1', 6379);       // nos conectamos a nuestro servidor redis  
  // $redis->connect('127.0.0.1'); 			 // port 6379 by default
   $redis->connect('127.0.0.1', 6379, 2.5);  // 2.5 sec timeout.
   //$redis->connect('/tmp/redis.sock'); 	 // unix domain socket.
   
     
   
   echo "Faccio un get di una chiave specifica del server: ".$redis->get('alex1')."</br>";
   echo "Stampo tutte le chiave nel server:"; 
   print_r($redis->keys('*')); 
   echo "</br> Quindi da qua possiamo usare tutte le funzione che sono abilitate: http://redis.io/commands"; 
    }


}

