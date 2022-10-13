<main>
  <div class="btn-menu-tablas">

    <div class="cuadro-flotantes">
      <div class="cuadro">
        <div class="nom">Empresas</div>
      </div>

      <div class="btn-flotante btns">
        <input type="button" value="Clientes" class="primary-button login-button" onclick="location.href='verEmpresas.php?clientes'">
        <input type="button" value="Posibles Clientes" onclick="location.href='verEmpresas.php?posiblesClientes?'" class="primary-button login-button">
      </div>
    </div>


  </div>
  <div class="tablas">
    <div class="tablas-empresa">
      <table id="empresa" class="table table-bordered border table-hover" style="width:100%">
        <thead>
          <tr>
            <th>Nombre</th>
            <th>Direccion</th>
            <th>R.Social</th>
            <th>Ruc</th>
            <th>Sucursal</th>
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
              <td><i class="bi bi-book text-primary" onclick="CargarSucursal(<?=$datos->ruc ?>)" ></i></td>
              <td>$320,800</td>
            </tr>
          <?php
          endforeach;
          ?>
        </tbody>
      </table>


    </div>

    <div class="tabla-sucursales">
      <div class="tablas-empresa">
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

</main>

<div class="logins registrar-empresa inactive">
  <div>
    <form action="procesoRegistrarEmpresa.php " method="POST" id="form-registrar-empresa" class="form-containers">
      <div class="cont-forms">
        <label for="email" class="label-form">Nombre</label>
        <input type="text" id="email" name="txtNombre" placeholder="Escribe ... " class="input input-email">
      </div>
      <div class="cont-forms">
        <label for="password" class="label-form">Direccion</label>
        <input type="text" id="pasword" name="txtDireccion" placeholder="Escribe ..." class="input input-password">
      </div>
      <div class="cont-forms">
        <label for="email" class="label-form">Razon Social</label>
        <input type="text" id="email" name="txtRazonSocial" placeholder="Escribe ..." class="input input-email">
      </div>
      <div class="cont-forms">
        <label for="password" class="label-form">Ruc</label>
        <input type="number" id="pasword" name="txtRuc" placeholder="123 456 789 123" class="input input-password">
      </div>
      <div class="cont-forms">
        <label for="celular" class="label-form">Celular Empresa</label>
        <input type="number" id="celular" name="txtCelularEmpresa" placeholder="916 540 936" class="input input-email">
      </div>

      <div class="cont-forms">
        <!-- select -->
        <label for="password" class="label-form">Pais</label>
        <input type="text" id="pasword" placeholder=" Escribe ... " name="txtPais" class="input input-password">
        <!-- combo box devuelve true o false si es true valor 1 si no valor 0-->
      </div>
      <div class="cont-forms">
        <label for="email" class="label-form">Trabajara con nosotros ? </label>
        <label for="" class="labels">si marca la casilla</label>
        <input type="checkbox" value="1" name="txtTrabajaNosotros">
      </div>

      <!-- Select -->
      <div class="cont-forms">
        <label for="password" class="label-form">Ingresa el codigo de Ubigeo</label>
        <input type="text" id="pasword" name="txtCodUbigeo" placeholder="123456789123" class="input input-password">
      </div>


      <input type="hidden" name="txtEliminada" value="1">

      <input type="submit" value="Registrar" id="btn-registrar" class="primary-button btn-form">


    </form>
  </div>
</div>

<div class="logins registrar-sucursal inactive">
  <div>
    <form action="procesoRegistrarSucursal.php " method="POST" class="form-containers">
      <div class="cont-forms">
        <label for="email" class="label-form">Correo Sucursal</label>
        <input type="text" id="email" name="txtCorreoSucursal" placeholder="Escribe el nombre" class="input input-email">
      </div>
      <div class="cont-forms">
        <label for="password" class="label-form">Direccion Sucursal</label>
        <input type="text" id="pasword" name="txtDireccionSucursal" placeholder="Escribe la direccion" class="input input-password">
      </div>
      <div class="cont-forms">
        <label for="celular-contacto" class="label-form">Telf-Fij Sucursal </label>
        <input type="number" id="celular-contacto" name="txtCelularContactoSucursal" placeholder="999 999 999" class="input input-password">
      </div>
      <div class="cont-forms">
        <label for="email" class="label-form">Nombre Contacto </label>
        <input type="text" id="email" name="txtNombreContacto" placeholder="Escribe el nombre " class="input input-email">
      </div>

      <div class="cont-forms">
        <label for="correo" class="label-form">Correo Contacto </label>
        <input type="text" id="correo" name="txtCorreoContacto" placeholder="ejemplo@ejemplo.com" class="input input-email">
      </div>

      <div class="cont-forms">
        <label for="celular-contacto" class="label-form">Celular Contacto </label>
        <input type="number" id="celular-contacto" name="txtCelularContacto" placeholder="999 999 999" class="input input-password">
      </div>
      <!-- Select -->

      <input type="hidden" name="txtRuc" value="<?php //obteniendo el ruc y enviandolo por post 
                                                $ruc = $_GET['ruc'];
                                                echo $ruc; ?>" id="">

      <input type="submit" value="Registrar" id="btn-registrar-sucursal" class="primary-button btn-form">

    </form>
  </div>
</div>

<?php include'style/style2.php' ?>
