<?php
$contrasenia = "";
$usuario="root";
$nombreDB="ejemplo";
$dsn = 'mysql:host=localhost;dbname=';
try{
    /*Intenta hacer una conexion a la siguiente base de datos yo te paso el nombre, la contraseña, el usuario
    y el como vas a mostrar esa info para quien lo vea en este caso alguien que hable español (utf8)*/
$db= new PDO($dsn.$nombreDB,$usuario,$contrasenia,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
);
/*En caso de fallar me vas a mostrar el error de por qué fallo*/
} catch(Exception $e){
echo"Problema con la conexion: ".$e->getMessage();
}
?>