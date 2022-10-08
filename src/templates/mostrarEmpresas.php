<?php
include_once 'connection/conexion.php';

//obteniendo datos de la empresa 
$sentencia = $bd->query("SELECT empresa.nombre,empresa.direccion,empresa.razon_social,empresa.ruc,empresa.celular_contacto from empresa where empresa.eliminada = 1");
$empresas = $sentencia->fetchAll(PDO::FETCH_OBJ);
// print_r($empresas);
?>
<!-- estilos -->
<?php include 'style/style.php'; ?>
<!-- tabla -->
<div class="conte">
    <div class="nombre-flotante">
        <div class="nom">Empresas</div>
    </div>
    <div class="container-fluid cont " id="contenedor-tabla">
        <div class="row">
            <div class="col-xxl-5 d-flex">
                <!-- Card -->
                <div class="card border-0 flex-fill w-100">
                    <div class="card-header border-0 card-header-space-between">

                    
                        <!-- Table -->
                        <div class="table-responsive">
                            <table id="projectsTable" class="ui celled table responsive nowrap unstackable" style="width:100%">
                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col">Nombre</th>
                                        <th scope="col">Direccion</th>
                                        <th scope="col">Razon Social</th>
                                        <th scope="col">Ruc</th>
                                        <th scope="col">Celular Contacto</th>
                                        <th scope="col">Distrito</th>
                                        <th scope="col">Provincia</th>
                                        <th scope="col">Departamento</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($empresas as $data) {
                                    ?>
                                        <tr>
                                            <td scope="row"><?php echo $data->nombre; ?></td>
                                            <td scope="row"><?php echo $data->direccion; ?></td>
                                            <td scope="row"><?php echo $data->razon_social; ?></td>
                                            <td scope="row"><?php echo $data->ruc; ?></td>
                                            <td scope="row"><?php echo $data->celular_contacto; ?></td>
                                            <td scope="row"> Lima</td>
                                            <td scope="row">Peru</td>
                                            <td scope="row">No se </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div> <!-- / .table-responsive -->
                    </div>
                </div>
            </div>
        </div>
    </div>