<?php
include_once 'connection/conexion.php';

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
$eliminada = 1;

validandoDatos($ruc, $direccion, $correo, $celular, $nombreContacto, $celularContacto, $correoContacto, $bd, $eliminada);


function validandoDatos($ruc, $direccion, $correo, $celular, $nombreContacto, $celularContacto, $correoContacto, $bd, $eliminada)
{
    if (empty($ruc) || empty($correo) || empty($direccion) || empty($celular) || empty($nombreContacto) || empty($celularContacto) || empty($correoContacto)) {

        $resultado = header('Location: pantallaRegistraEmpresa.php?mensaje=faltanDatos');
        
    } else {


        //registrando sucursal 
        $agregar = $bd->prepare("INSERT INTO sucursal2(direccion,celular,correo,ruc_empresa,eliminada)VALUE(?,?,?,?,?)");
        $resultado = $agregar->execute([$direccion, $celular, $correo, $ruc, $eliminada]);

        //registrando contacto
        $agregarContacto = $bd->prepare("INSERT INTO contacto(nombre,correo)VALUE(?,?)");
        $resultadaContacto = $agregarContacto->execute([$nombreContacto, $correoContacto]);


        if ($resultado and $resultadaContacto === TRUE) {
            header("Location: pantallaRegistrarSucursal.php?mensaje=sucursalregistrada&&ruc=$ruc");
            exit();
        } else {
            header('Location: pantallaRegistrarSucursal.php?mensaje=error');
        }
    }
    return $resultado;
}
