<main>
  <div class="btn-menu-tablas">

    <div class="cuadro-flotantes">
      <div class="cuadro">
        <div class="nom">Empresas</div>
      </div>

      <div class="btn-flotante btns">
        <input type="button" value="Clientes" class="primary-button login-button" onclick="location.href='verEmpresas.php?clientes'">
        <input type="button" value="Posibles Clientes" onclick="location.href='verEmpresas.php?posiblesClientes'" class="primary-button login-button">
    </div>


  </div>
  <div class="tablas">
    <div class="tablas-empresa ">
      <div class="tablas-empresa table-responsive">
        <table id="empresa" class="table  table-bordered border table-hover" style="width:100%">
          <thead>
            <tr>
              <th>Nombre</th>
              <th>Direccion</th>
              <th>R.Social</th>
              <th>Ruc</th>
              <th>Sucursales</th>
              <th>Contactos</th>
            </tr>
          </thead>
          <tbody>
            <?php
            foreach ($empresas  as $datos) :
            ?>
              <tr>
                <td><?php echo $datos->nombre ?></td>
                <td><?php echo $datos->direccion; ?></td>
                <td><?php echo $datos->razon_social; ?></td>
                <td><?php echo $datos->ruc; ?></td>
                <td><i onclick="CargarSucursal(<?= $datos->ruc ?>)"><img src="img/icons8-bookmark.svg" class="img-table text-center" alt=""></i></td>
                <td><i onclick="CargarContactos(<?= $datos->ruc ?>)"><img  src="img/icons8-contact-60.png" class="img-table text-center" alt=""></i></td>
              </tr>
            <?php
            endforeach;
            ?>
          </tbody>
        </table>
      </div>  
    </div>

    <div class="tabla-sucursales">
      <div class="tablas-empresa table-responsive">
        <table id="sucursal" class="table table-bordered border table-hover" style="width:100%">
          <thead>
            <tr>
              <th>Nombre</th>
              <th>Direccion</th>
              <th>R.Social</th>
              <th>Contactos</th>
              <th>Editar</th>
              <th>Eliminar</th>
            </tr>
          </thead>
          <tbody>
            <!-- Data en Ajax-->
          </tbody>
        </table>

      </div>

    </div>

    
    <div class="tabla-sucursales ">
      <div class="tablas-empresa table-responsive">
        <table id="contactos" class="table table-bordered border table-hover" style="width:100%">
          <thead>
            <tr>
              <th>Nombre</th>
              <th>Apellido</th>
              <th>Celular</th>
              <th>Correo</th>
              <th>Ruc</th>
              <th>Eliminar</th>
            </tr>
          </thead>
          <tbody>
            <!-- Data en Ajax-->
          </tbody>
        </table>

      </div>

    </div>

</main>
<?php include 'style/style2.php' ?>