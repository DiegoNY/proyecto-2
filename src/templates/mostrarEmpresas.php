<!-- estilos -->
<?php include 'style/style.php'; ?>
<!-- tabla -->
<div class="conte">
   
<div class="cuadro-flotantes">
     <div class="cuadro">
        <div class="nom">Empresas</div>
    </div>
    
    <div class="btn-flotante btns">
        <input type="button" value="Clientes" class="primary-button login-button" onclick="location.href='verEmpresas.php?clientes'">
        <input type="button" value="Posibles Clientes" onclick="location.href='verEmpresas.php?posiblesClientes'" class="primary-button login-button">

    </div>
</div>
   
    <div class="container-fluid cont " id="contenedor-tabla">
        <div class="row">
            <div class="col-md-12 d-flex">
                <!-- Card -->
                <div class="card border-0 flex-fill w-100">
                    <div class="card-header border-0 card-header-space-between bg-transparent">


                        <!-- Table -->
                        <div class="table-responsive col-md-12">
                            <table id="projectsTable" class="table   table-hover " style="width:100%">
                                <thead class="bg-info text-white text-center">
                                    <tr>
                                        <th scope="col" class="border-secondary">Nombre</th>
                                        <th scope="col" class="border-secondary">Direccion</th>
                                        <th scope="col" class="border-secondary">Razon Social</th>
                                        <th scope="col" class="border-secondary">Ruc</th>
                                        <th scope="col" class="border-secondary">Celular Contacto</th>
                                        <th scope="col" class="border-secondary">Distrito</th>
                                        <th scope="col" class="border-secondary">Provincia</th>
                                        <th scope="col" class="border-secondary">Departamento</th>
                                        <th scope="col" class="border-secondary">Sucursal</th>
                                        <th scope="col" class="border-secondary">Contacto</th>
                                        <th scope="col" class="border-secondary">Eliminar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($empresas  as $datos) :
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
                                            
                                            <td scope="" class="border-secondary text-center"><a href="pantallaVerSucursal.php?ruc=<?php echo $datos->ruc ?>"><i class="bi bi-book text-primary"></i></a></td>
                                            <td scope="" class="border-secondary text-center"><a href="pantallaVerContactos.php?ruc=<?php echo $datos->ruc ?>"><i class="bi bi-person-rolodex text-success"></i></a></td>
                                            
                                            <td scope="row" class="border-secondary text-center" ><a href="procesoEliminarEmpresa.php?ruc=<?php echo $datos->ruc ?>"><i class="bi bi-trash text-danger "></i></a></td>
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