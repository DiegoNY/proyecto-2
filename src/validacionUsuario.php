<?php 
print_r($_POST);
if(empty($_POST['txtUsuario'])||empty($_POST['txtContraseña'])){
    header('Location: /proyecto-2/src/login.php');
}

include_once 'connection/conexion.php';
$usuario = $_POST['txtUsuario'];
$contraseña = $_POST['txtContraseña'];

$consulta = $bd->prepare('SELECT * FROM usuarios where nombre = ? and correo = ?;');
$respuesta = $consulta->execute([$usuario,$contraseña]);

if($consulta->rowCount()>=1){
    header('Location: /proyecto-2/src/verEmpresas.php?mensaje=Bienvenido');
}else{
    header('Location: /proyecto-2/src/login.php?mensaje=datosInvalidos');
    exit();
}

?>
