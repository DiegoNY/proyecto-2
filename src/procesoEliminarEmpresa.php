<div>hola desde el rpoceso de eliminar empresa</div>
<?php
    
    include 'connection/conexion.php';
    $ruc = $_POST['ruc'];

    validandoDatosVacios($ruc);

    $sentencia = $bd->prepare("UPDATE empresa2 SET eliminada = 0 where ruc = ?;");
    $resultado = $sentencia->execute([$ruc]);


    validandoResultado($resultado);

    function validandoResultado($resultado){
        
        if($resultado == TRUE){
            $respuesta = header("Location: verEmpresas.php?mensaje=Bienvenido&&eliminada");
        }else{
            $respuesta = header('Location: verEmpresas.php?mensaje=error');
            return $respuesta;
        }
    }

    function validandoDatosVacios(){
        if(isset($id)){
            $respuesta = header('Location: login.php?mensaje=ingresaDatos??');
            return $respuesta ;
        }

    }
