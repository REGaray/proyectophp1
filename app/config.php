<?php

//Conexión con la base da datos MySQL

define('SERVIDOR','localhost');
define('USUARIO','root');
define('PASSWORD','');
define('BD','sistemaventas');

$servidor = "mysql:dbname=".BD.";host=".SERVIDOR;

//Capturamos algún error en caso que suceda alguno y mostramos por pantalla el mensaje capturado en $e
try{
    $pdo = new PDO($servidor, USUARIO, PASSWORD, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

    //$pdo = new PDO($servidor, username: USUARIO, password: PASSWORD,array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
    echo "La conexión a la base de datos fue creada con éxito";
}catch (PDOException $e){
    //print_r($e);

    //si queremos mostrar un mensaje en vez del error detallado, comentamos el print_r de la línea 18
    echo "Error en la conexión a la base de datos";
}