<?php include 'procesoVerSucursal.php' ?>;

<div class="conte">
    <div class="cuadro-flotante">
        <div class="nom">Sucursales : </div>
    </div>

    <div class="btn-flotante btns">
        <input type="button" value="Ingresar Sucursal" class="primary-button login-button" onclick="location.href='pantallaRegistrarSucursal.php?ruc=<?php $ruc= $_GET['ruc']; echo $ruc; ?>'"
        <input type="button" value="" onclick="location.href='verEmpresas.php?posiblesClientes'" class="primary-button login-button">

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
                                        <th scope="col" class="border-secondary">Direccion</th>
                                        <th scope="col" class="border-secondary">Celular </th>
                                        <th scope="col" class="border-secondary">Correo</th>
                                        <th scope="col" class="border-secondary">Ruc Empresa</th>
                                        <th scope="col" class="border-secondary">Eliminar</th>
                                        <th scope="col" class="border-secondary">Editar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($sucursal  as $datos) :
                                    ?>
                                        <tr>
                                            <td scope="row" class="border-secondary"><?php echo $datos->direccion; ?></td>
                                            <td scope="row" class="border-secondary"><?php echo $datos->celular; ?></td>
                                            <td scope="row" class="border-secondary"><?php echo $datos->correo; ?></td>
                                            <td scope="row" class="border-secondary"><?php echo $datos->ruc_empresa; ?></td>
                                            <td scope="row" class="border-secondary"><a href="procesoBorrarSucursal.php?id=<?php echo $datos->id_sucursal ?>"><img class="img-sucursal-icons" src="img/icons8-delete.svg" alt="delete-icon"></a></td>
                                            <td scope="row" class="border-secondary"><a href="procesoEditarSucursal.php?id=<?php echo $datos->id ?>"><i class="bi bi-person-rolodex"></i></a></td>
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
</div>
<?php include 'js/js.php' ?>