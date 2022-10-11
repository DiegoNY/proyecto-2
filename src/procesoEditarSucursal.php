<?php
include 'connection/conexion.php';

$ruc = $_POST["txtRuc"];
$id = $_POST["txtId"];
$direccion = $_POST["txtDireccionSucursal"];
$correo = $_POST["txtCorreoSucursal"];
$celular = $_POST["txtCelularContactoSucursal"];
$eliminada = 1;

validandoDatosVacios($id,$direccion,$correo,$celular,$bd,$eliminada,$ruc);


function validandoDatosVacios($id, $direccion, $correo, $celular, $bd, $eliminada, $ruc)
{
    if (empty($correo) || empty($direccion) || empty($celular)) {
        $resultado = header("Location: pantallaEditarSucursal.php?mensaje=faltanDatos&&id=$id&&ruc=$ruc");
    } else {
        $sentencia = $bd->prepare("UPDATE sucursal2 SET direccion = ?,celular = ?,correo = ?,eliminada =? where id_sucursal = ?");

        $resultado = $sentencia -> execute([$direccion, $celular, $correo, $eliminada, $id]);

        if ($resultado === true) {
            header("Location: pantallaVerSucursal.php?mensaje=editada&&ruc=$ruc&&id=$id");
        } else {
            header("Location: index.php?mensaje=error&&ruc=$ruc&&id=$id");
        }
    }
    return $resultado;
}
