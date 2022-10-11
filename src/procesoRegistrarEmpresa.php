<?php 

include_once 'connection/conexion.php';

$direccion = $_POST['txtDireccion'];
$celular = $_POST['txtCelularEmpresa'];
$ruc = $_POST['txtRuc'];
$nombre= $_POST['txtNombre'];
$trabaja = $_POST['txtTrabajaNosotros'] ?? $trabaja = 0;
$codUbigeo = $_POST['txtCodUbigeo'];
$eliminada = $_POST['txtEliminada'];
$razonSocial = $_POST['txtRazonSocial'];
$pais = $_POST['txtPais'];


validandoDatos($direccion,$celular,$nombre,$codUbigeo,$eliminada,$razonSocial,$pais);


$agregar = $bd->prepare("INSERT INTO empresa2(nombre,direccion,razon_social,ruc,celular_contacto,pais,estado,eliminada)VALUE(?,?,?,?,?,?,?,?);");

$resultado = $agregar->execute([$nombre,$direccion,$razonSocial,$ruc,$celular,$pais,$trabaja,$eliminada]);


if($resultado == TRUE){
    header("Location: pantallaRegistrarSucursal.php?ruc=$ruc");
    exit();
}else{
    header('Location: pantallaRegistraEmpresa.php?mensaje=error');
    exit();
}


function validandoDatos($direccion,$celular,$nombre,$codUbigeo,$eliminada,$razonSocial,$pais)
{
    if(empty($trabaja)||empty($direccion)|| empty($celular)||empty($nombre)||empty($codUbigeo)||empty($eliminada)||empty($razonSocial)||empty($pais)){
        $volver =  header('Location: pantallaRegistraEmpresa.php?mensaje=faltanDatos');
    }
    return $volver;
}
?>
