<?php  include 'style/style.php' ?>

<?php
include_once 'connection/conexion.php';

$sentencia = $bd->query("select * from contacto");
$contacto = $sentencia->fetchAll(PDO::FETCH_OBJ);
// print_r($contacto);
?>

<?php include 'templates/login.php'?>

<?php include 'templates/footer.php' ?>