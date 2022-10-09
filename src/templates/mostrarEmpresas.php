<?php
include_once 'connection/conexion.php';

//obteniendo datos de la empresa 
$sentencia = $bd->query("SELECT e.nombre,e.direccion,e.razon_social,e.ruc,e.celular_contacto from empresa as e where e.eliminada = 1");
$empresas = $sentencia->fetchAll(PDO::FETCH_OBJ);
// print_r($empresas);

?>
<!-- estilos -->
<?php include 'style/style.php'; ?>
<!-- tabla -->
<div class="conte">
    <div class="cuadro-flotante">
        <div class="nom">Empresas</div>
    </div>

    <div class="btn-flotante btns">
        <input type="button" value="Clientes" class="primary-button login-button" >
        <input type="button" value="Posibles Clientes" onclick="" class="primary-button login-button">
    </div>
    <div class="container-fluid cont " id="contenedor-tabla">
        <div class="row">
            <div class="col-xxl-5 d-flex">
                <!-- Card -->
                <div class="card border-0 flex-fill w-100">
                    <div class="card-header border-0 card-header-space-between bg-transparent">


                        <!-- Table -->
                        <div class="table-responsive">
                            <table id="projectsTable" class="table  table-bordered border border-secondary " style="width:100%">
                                <thead class="">
                                    <tr>
                                        <th scope="col" class="border-secondary">Nombre</th>
                                        <th scope="col" class="border-secondary">Direccion</th>
                                        <th scope="col" class="border-secondary">Razon Social</th>
                                        <th scope="col" class="border-secondary">Ruc</th>
                                        <th scope="col" class="border-secondary">Celular Contacto</th>
                                        <th scope="col" class="border-secondary">Distrito</th>
                                        <th scope="col" class="border-secondary">Provincia</th>
                                        <th scope="col" class="border-secondary">Departamento</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($empresas as $datos) :
                                    ?>
                                        <tr>
                                            <td scope="row" class="border-secondary"><?php echo $datos->nombre; ?></td>
                                            <td scope="row" class="border-secondary"><?php echo $datos->direccion; ?></td>
                                            <td scope="row" class="border-secondary"><?php echo $datos->razon_social; ?></td>
                                            <td scope="row" class="border-secondary"><?php echo $datos->ruc; ?></td>
                                            <td scope="row" class="border-secondary"><?php echo $datos->celular_contacto; ?></td>
                                            <td scope="row" class="border-secondary"> Lima</td>
                                            <td scope="row" class="border-secondary">Peru</td>
                                            <td scope="row" class="border-secondary">No se </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div> <!-- / .table-responsive -->
                    </div>
                </div>
            </div>
        </div>
    </div>