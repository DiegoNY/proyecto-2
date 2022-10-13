

<?php
include_once 'connection/conexion.php';

/**
 * Datos  
 * */
extract($_GET);
/**
 * Consulta
 * */
$consulta = $bd->query("SELECT s.nombre, s.id_sucursal,s.direccion,s.correo,s.celular,s.ruc_empresa FROM  sucursal2 as s  WHERE s.ruc_empresa = $ruc  and s.eliminada = 1;");

/**
 * Creando la dataTable para que se pueda instanciar y ver sin necesidad de enviar los parametros por url  
 */

$iFilteredTotal = 1;

$output = array(
    "sEcho"  => intval(1),
    "iTotalRecords" => $iFilteredTotal,
    "iTotalDisplayRecords" =>$iFilteredTotal,
    "aaData"                => array(),
);


$i = 0;
while($resultado = $consulta->fetchAll(PDO::FETCH_OBJ))
{   

    $row = array();

    $row[] = $resultado[$i]->nombre;
    $row[] = $resultado[$i]->direccion;
    $row[] = $resultado[$i]->ruc_empresa;
    $row[] = $resultado[$i]->id_sucursal;
    $row[] = $resultado[$i]='<i onclick="CargarContactos()"><img  src="img/icons8-edit (2).svg" class="img-table text-center" alt=""></i>';
    $row[] = $resultado[$i]='';
    $output['aaData'][] = $row;
     
    $i++;
}

echo json_encode($output);