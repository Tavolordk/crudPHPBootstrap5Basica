<?php
$contrasenia = "";
$usuario="root";
$nombreDB="ejemplo";
$dsn = 'mysql:host=localhost;dbname=';
try{
$db= new PDO($dsn.$nombreDB,$usuario,$contrasenia,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
);
} catch(Exception $e){
echo"Problema con la conexion: ".$e->getMessage();
}
?>