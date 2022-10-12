<?php
include_once 'connection/conexion.php';

/**
 * Consultas a la base de datos seria mejor usando procedimientos almacenados
 */
$consultaClientes = $bd->query("SELECT e.nombre,e.direccion,e.razon_social,e.ruc,e.celular_contacto from empresa2 as e where e.eliminada = 1 and e.estado = 1;");

$consultaPosiblesCli = $bd->query("SELECT  e.nombre,e.direccion,e.razon_social,e.ruc,e.celular_contacto from empresa2 as e where e.eliminada = 1 and e.estado = 0;"); 

$consultaTodasEmpresas = $bd->query("SELECT e.nombre,e.direccion,e.razon_social,e.ruc,e.celular_contacto from empresa2 as e where e.eliminada = 1");
/**
 * si esta  logueado se ven todas las empresas 
 */
   
 switch (true) {
    case isset($_GET['mensaje']) and $_GET['mensaje']=='Bienvenido':
        $empresas = $consultaTodasEmpresas->fetchAll(PDO::FETCH_OBJ);
        break;
    case isset($_GET['clientes']) :
        $empresas = $consultaClientes->fetchAll(PDO::FETCH_OBJ);
        break;
    case isset($_GET['posiblesClientes']):
        $empresas = $consultaPosiblesCli->fetchAll(PDO::FETCH_OBJ);
        break;
    default:
        header('Location: login.php?logueate');
        break;
 }
   


?>

<!--Cabecera-->

<?php include 'templates/header.php' ?>

<?php include 'Prueba.php'?>
<!-- script -->
<?php include 'js/js.php'; ?>