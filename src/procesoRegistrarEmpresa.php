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

validandoDatos($direccion,$celular,$nombre,$codUbigeo,$eliminada,$razonSocial,$pais,$ruc,$trabaja,$bd);

/**
 * 
 * si los datos son vacios n deja ingresar datos peros si si contiene datos se ingresan a la bd 
 * 
 */
function validandoDatos($direccion,$celular,$nombre,$codUbigeo,$eliminada,$razonSocial,$pais,$ruc,$trabaja,$bd)
{
    if(empty($direccion)|| empty($celular)||empty($nombre)||empty($codUbigeo)||empty($razonSocial)||empty($pais)){
        $volver =  header('Location: pantallaRegistraEmpresa.php?mensaje=faltanDatos');
    }else{
        $agregar = $bd->prepare("INSERT INTO empresa2(nombre,direccion,razon_social,ruc,celular_contacto,pais,estado,eliminada)VALUE(?,?,?,?,?,?,?,?);");

        $resultado = $agregar->execute([$nombre,$direccion,$razonSocial,$ruc,$celular,$pais,$trabaja,$eliminada]);
        
        if($resultado == TRUE){
            $volver = header("Location: pantallaRegistrarSucursal.php?ruc=$ruc");
        }else{
            $volver = header('Location: pantallaRegistraEmpresa.php?mensaje=error');
        }
    }
    return $volver;
}
?>
