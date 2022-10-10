<?php 
if(empty($_POST["txtDireccion"])||empty($_POST["txtCelularEmpresa"])||empty($_POST["txtRuc"])||empty($_POST["txtNombre"])||empty($_POST["txtCodUbigeo"])||empty($_POST["txtEliminada"])||empty($_POST["txtRazonSocial"])||empty($_POST["txtPais"])){
    header('Location: editar.php?mensaje=faltanDatos');
    exit();
}

include_once 'connection/conexion.php';

// print_r($_POST);
$direccion = $_POST['txtDireccion'];
$celular = $_POST['txtCelularEmpresa'];
$ruc = $_POST['txtRuc'];
$nombre= $_POST['txtNombre'];
$trabaja = $_POST['txtTrabajaNosotros'] ?? $trabaja = 0;
$codUbigeo = $_POST['txtCodUbigeo'];
$eliminada = $_POST['txtEliminada'];
$razonSocial = $_POST['txtRazonSocial'];
$pais = $_POST['txtPais'];
$id_empresa = $_POST['txtId'];
//checkbox retorna on transformando para poder ingresar estado [1=trabajando,2=posiblesClientes]
// if($trabaja === 'on'){
//      $trabaja = 1;
// }

$sentencia = $bd->prepare("UPDATE  empresa SET nombre = ? ,direccion = ?,razon_social = ?,ruc = ?,celular_contacto = ?,pais = ?,estado= ?,eliminada= ? where id_empresa = ?;");

$resultado = $sentencia->execute([$nombre,$direccion,$razonSocial,$ruc,$celular,$pais,$trabaja,$eliminada,$id_empresa]);

if($resultado == TRUE){
    header('Location: index.php?mensaje=ActualizadaCorrectamente');
    exit();
}else{
    header('Location: index.php?mensaje=error');
    exit();
}

?>
