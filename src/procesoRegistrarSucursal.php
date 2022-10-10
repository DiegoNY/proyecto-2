<?php
print_r($_POST);

include_once 'connection/conexion.php';

/**validando si los campos no estan vacios crear una funcion */

if (empty($_POST["txtRucEmpresa"]) || empty($_POST["txtDireccionSucursal"]) || empty($_POST["txtNombreContacto"]) || empty($_POST["txtCelularContactoSucursal"]) || empty($_POST["txtCorreoSucursal"]) || empty($_POST["txtRazonSocial"])) {
     header('Location: pantallaRegistraEmpresa.php?mensaje=faltanDatos');
     exit();
}

/** 
 * obteniendo los datos del usuario 
 */

$ruc = $_POST['txtRuc'];
$direccion = $_POST["txtDireccionSucursal"];
$correo = $_POST["txtCorreoSucursal"];
$celular = $_POST["txtCelularContactoSucursal"];
$nombreContacto = $_POST["txtNombreContacto"];
$celularContacto = $_POST["txtCelularContacto"];
$correoContacto = $_POST["txtCorreoContacto"];


//registrando sucursal 
$agregar = $bd->prepare("INSERT INTO sucursal2(direccion,celular,correo,ruc_empresa)VALUE(?,?,?,?)");
$resultado = $agregar->execute([$direccion, $celular, $correo, $ruc]);

//registrando contacto
$agregarContacto = $bd->prepare("INSERT INTO contacto(nombre,correo)VALUE(?,?)");
$resultadaContacto = $agregarContacto->execute([$nombreContacto, $correoContacto]);

if($resultado and $resultadaContacto === TRUE){
    header("Location: pantallaRegistrarSucursal.php?mensaje=sucursalregistrada&&ruc=$ruc");
    exit();
}else{
    header('Location: pantallaRegistrarSucursal.php?mensaje=error');
}
?>

