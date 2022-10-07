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
<!-- tabla -->
<div class="container-fluid cont " id="contenedor-tabla">
    <div class="row">
        <div class="col-xxl-5 d-flex">
            <!-- Card -->
            <div class="card border-0 flex-fill w-100">
                <div class="card-header border-0 card-header-space-between">

                    <!-- Title -->
                    <h2 class="card-header-title h4 text-uppercase" id="tit-emp">
                        Empresas : 
                    </h2>

                    <!-- Table -->
                    <div class="table-responsive">
                        <table id="projectsTable" class="table align-middle table-edge table-nowrap mb-0">
                            <thead class="thead-light">
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
    <?php include 'js/js.php'; ?>