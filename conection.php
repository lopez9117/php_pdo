<?php

 $dsn = 'mysql:dbname=php_sql_course;host=192.168.6.213';
 $user = 'root';
 $password = 'root';

try{
    $pdo = new PDO($dsn,
                   $user,
                   $password);
                   
    echo 'Conexion correcta';
}
catch( PDOException $e){
    echo 'Error a el conectarse' .$e->getMessage();
}

