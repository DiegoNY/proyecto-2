<?php include 'templates/header.php' ?>
<?php include 'style/style.php' ?>

<?php
include_once 'connection/conexion.php';

/**
 * Datos  
 * */
$ruc = $_GET['ruc'];

/**
 * validando si no estan vacios 
 * */
validandoDatosVacios($ruc);

/**
 * Consulta
 * */

$consulta = $bd->query("SELECT s.id_sucursal,s.direccion,s.correo,s.celular,s.ruc_empresa FROM  sucursal2 as s JOIN empresa2 as e WHERE s.ruc_empresa = $ruc and e.eliminada = 1;");
$sucursal = $consulta->fetchAll(PDO::FETCH_OBJ);

/**
 * si los datos estan vacios no sigue con el proceso 
 * */
function validandoDatosVacios($ruc){
    if(empty($ruc)){
       $resultado = header('Location: pantallaVerContactos.php?mensaje=error');
       return $resultado;
    } 
}
?>