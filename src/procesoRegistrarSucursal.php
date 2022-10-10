<?php
print_r($_POST);

/**validando si los campos no estan vacios crear una funcion */

if(empty($_POST["txtNombreSucursal"])||empty($_POST["txtDireccionSucursal"])||empty($_POST["txtRazonSocialSucursal"])||empty($_POST["txtCelularContactoSucursal"])||empty($_POST["txtCorreoSucursal"])||empty($_POST["txtRazonSocial"])){
    header('Location: pantallaRegistraEmpresa.php?mensaje=faltanDatos');
    exit();
}



?>