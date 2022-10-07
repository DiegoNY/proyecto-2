<!--Cabecera-->
<?php include 'templates/header.php' ?>

<?php
include_once 'connection/conexion.php';

//obteniendo datos de la empresa 
$sentencia = $bd->query("SELECT empresa.nombre,empresa.direccion,empresa.razon_social,empresa.ruc,empresa.celular_contacto from empresa where empresa.eliminada = 1");
$empresas = $sentencia->fetchAll(PDO::FETCH_OBJ);
// print_r($empresas);
?>
<!-- estilos -->
<?php include 'style/style.php'; ?>

<div class="col-md-8 " id="contenedor-tabla">
    <div class="table-responsive" id="mydatatable-container">
        <table class="records_list table table-striped table-bordered table-hover" id="mydatatable">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Direccion</th>
                    <th>Razon Social</th>
                    <th>Ruc</th>
                    <th>Celular Contacto</th>
                    <th>Distrito</th>
                    <th>Provincia</th>
                    <th>Departamento</th>

                </tr>
            </thead>

            <tbody>
                <?php
                foreach($empresas as $data){
                ?>
                <tr>
                    <td><?php echo $data->nombre; ?></td>
                    <td><?php echo $data->direccion; ?></td>
                    <td><?php echo $data->razon_social; ?></td>
                    <td><?php echo $data->ruc; ?></td>
                    <td><?php echo $data->celular_contacto; ?></td>
                    <td> Lima</td>
                    <td>Peru</td>
                    <td>No se </td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</div>

<?php include 'js/js.php'; ?>