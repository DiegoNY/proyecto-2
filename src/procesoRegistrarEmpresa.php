<?php 

if(empty($_POST["txtDireccion"])||empty($_POST["txtCelularEmpresa"])||empty($_POST["txtRuc"])||empty($_POST["txtNombre"])||empty($_POST["txtCodUbigeo"])||empty($_POST["txtEliminada"])||empty($_POST["txtRazonSocial"])||empty($_POST["txtPais"])){
    header('Location: pantallaRegistraEmpresa.php?mensaje=faltanDatos');
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


$agregar = $bd->prepare("INSERT INTO empresa2(nombre,direccion,razon_social,ruc,celular_contacto,pais,estado,eliminada)VALUE(?,?,?,?,?,?,?,?);");

$resultado = $agregar->execute([$nombre,$direccion,$razonSocial,$ruc,$celular,$pais,$trabaja,$eliminada]);


if($resultado == TRUE){
    header("Location: pantallaRegistrarSucursal.php?ruc=$ruc");
    exit();
}else{
    header('Location: pantallaRegistraEmpresa.php?mensaje=error');
    exit();
}

?>
