<?php 
include 'connection/conexion.php';
/**
 * saco los datos de get
 */
extract($_GET);

$consulta = $bd->query("SELECT * FROM contacto  as c where c.ruc = $ruc");

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
    $row[] = $resultado[$i]->apellidos;
    $row[] = $resultado[$i]->celular;
    $row[] = $resultado[$i]->correo;
    $row[] = $resultado[$i]->ruc;
    $row[] = $resultado[$i]='';
    $output['aaData'][] = $row;
     
    $i++;
}

echo json_encode($output);

?>

