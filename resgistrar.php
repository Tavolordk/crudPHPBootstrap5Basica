<?php
if(empty($_POST['nombre']) || empty($_POST['apellidos']) || empty($_POST['telefono'])
|| empty($_POST['email']) || empty($_POST['contrasenia']) || empty($_POST['direccion'])){
    header('Location:index.php?mensaje=falta');
    exit();
}

include_once 'model/conexion.php';
$nombre=$_POST['nombre'];
$apellidos=$_POST['apellidos'];
$telefono=$_POST['telefono'];
$email=$_POST['email'];
$contrasenia=$_POST['contrasenia'];
$direccion=$_POST['direccion'];

try{
$query=$db->prepare("INSERT INTO usuario(nombre,apellidos,telefono,contrasenia,correo,direccion) VALUES (?,?,?,?,?,?);");
$resultado=$query->execute([$nombre,$apellidos,$telefono,$contrasenia,$email,$direccion]);
header('Location:index.php?mensaje=registrado');
}catch(Exception $e){
    echo 'Hubo un error: '.$e ->getMessage();
    header('Location:index.php');
    exit();
}
?>