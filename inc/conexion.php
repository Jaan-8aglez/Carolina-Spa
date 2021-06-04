<?php

try {
   $bd = new mysqli('localhost','root','','carolina'); //parametros de sql 1-host 2-usuario 3-password 4-nombre de la bd
}catch(Exception $e) { //las variables se simbolizan con $
    echo $e->getMessage();
    exit;
} 

/* este es un ping para saber si esta haciendo correctamente la conexion
if($bd->ping() ){
    echo 'Todo bien'; //echo imprime en pantalla el mensaje
}else {
    echo $bd->connect_error;
}*/ 