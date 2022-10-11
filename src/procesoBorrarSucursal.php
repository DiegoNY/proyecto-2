<?php

    include 'connection/conexion.php';
    $id = $_GET['id'];

    validandoDatosVacios($id);

    $sentencia = $bd->prepare("UPDATE sucursal2 SET eliminada = 0 where id_sucursal = ?;");
    $resultado = $sentencia->execute([$id]);


    validandoResultado($resultado);

    function validandoResultado($resultado){
        $ruc = $_GET['ruc'];
        if($resultado == TRUE){
            $respuesta = header("Location: pantallaVerSucursal.php?ruc=$ruc&&mensaje=eliminada");
        }else{
            $respuesta = header('Location: pantallaVerSucursal.php?mensaje=error');
            return $respuesta;
        }
        
    }

    function validandoDatosVacios(){
        if(isset($id)){
            $respuesta = header('Location: login.php?mensaje=ingresaDatos??');
            return $respuesta ;
        }

    }
