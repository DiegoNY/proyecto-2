<?php include 'procesoVerSucursal.php' ?>
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
      <table id="empresa" class="table table-striped table-hover" style="width:100%">
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
              <td><a href="verEmpresas.php?mensaje=Bienvenido&&ruc=<?php echo $datos->ruc ?>"><i class="bi bi-book text-primary"></i></a></td>
              <td>$320,800</td>
            </tr>
          <?php
          endforeach;
          ?>
        </tbody>
        <tfoot>
          <tr>
            <th>Name</th>
            <th>Position</th>
            <th>Office</th>
            <th>Age</th>
            <th>Start date</th>
            <th>Salary</th>
          </tr>
        </tfoot>
      </table>


    </div>

    <div class="tabla-sucursales">
      <div class="tablas-empresa">
        <table id="sucursal" class="table table-striped table-hover" style="width:100%">
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
            <?php
            foreach ($resultado as $data) :
            ?>
              <tr>
                <td><?php echo $data->nombre; ?></td>
                <td><?php echo $data->direccion; ?></td>
                <td><?php echo $data->ruc_empresa ?></td>
                <td> Eliminar </td>
                <td>2011-04-25</td>
                <td>$320,800</td>
              </tr>
            <?php
            endforeach;
            ?>
          </tbody>
          <tfoot>
            <tr>
              <th>Name</th>
              <th>Position</th>
              <th>Office</th>
              <th>Age</th>
              <th>Start date</th>
              <th>Salary</th>
            </tr>
          </tfoot>
        </table>

      </div>

    </div>

</main>

<div class="logins registrar-empresa ">
  <div>
    <form action="procesoRegistrarEmpresa.php " method="POST" class="form-containers">
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

<div class="logins registrar-sucursal ">
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


<footer>

</footer>





<!-- estilos para la pagina principales-->
<style>
  .cabecera {
    background-color: red;
  }

  .btn-menu-tablas {
    height: 150px;
  }

  .tablas-empresa {
    width: auto;
  }

  .tabla-sucursales {
    width: auto;
  }



  main {
    height: 75vh;
    display: flex;
    flex-direction: column;
  }

  .tablas {
    height: 338px;
    display: grid;
    grid-template-columns: repeat(2, auto);
    gap: 15px;
    padding: 15px;
  }

  .cuadro-flotantes {
    padding: 10px;
    display: grid;
    grid-template-columns: repeat(2, auto);
    grid-gap: 15px;
  }

  .btns {
    display: flex;
  }

  .primary-button {
    background-color: var(--hospital-green);
    border-radius: 8px;
    border: none;
    color: var(--white);
    width: 68%;
    cursor: pointer;
    font-size: var(--md);
    font-weight: bold;
    height: 50px;
    margin-left: 42px;
  }

  .login-button {
    top: 14px;
    margin-bottom: 30px;
  }

  :root {
    /*colores de las letras*/
    --white: #FFFFFF;
    --very-light-pink: #C7C7C7;
    --text-input-field: #F7F7F7;
    --hospital-green: #060605;
    /*tamaño de la letra*/
    --sm: 14px;
    --md: 16px;
    --lg: 18px;
  }

  .inactive {
    display: none;
  }


  body {
    /*quitando margenes y definiendo el tipo de letra*/
    margin: 0;
    font-family: 'Quicksand', sans-serif;
  }

  .login {
    width: 100%;
    /*centrar elementos con css grid*/
    display: grid;
    place-items: center;
  }

  .form-container {
    /*creando 3 filas*/
    display: grid;
    /*titulo y subtitulo auto password e input una fraccion el resto que seria el button lo que sobre :D*/
    grid-template-rows: auto 1fr auto;
    /*colocamos un ancho por que no se muestra en toda la pantalla*/
    width: 300px;
  }

  .title {
    /*utilizandeo las variables colocamos el tamaño de letra*/
    font-size: var (--lg);
    /*un margen para el texto recuerda todos son cajas u.u */
    margin-bottom: 12px;
    /*centramos el titulo*/
    text-align: center;

  }

  .subtitle {
    /*colocamos color que esta en la varible*/
    color: var(--very-light-pink);
    /*colocamos el tamaño de la letra*/
    font-size: var(--md);
    /*definimos el grosor de la letra */
    font-weight: 300px;
    /*colocamos un margin para que no se cruzen los parrafos*/
    margin-top: 0;
    /*margen para separarlo de los inputs */
    margin-bottom: 32px;
    /*centramos*/
    text-align: center;
  }

  .form {
    /*desplegamos las cajas en un formato flexible*/
    display: flex;
    /*las direccionamos*/
    flex-direction: column;
  }

  .form a {
    /*cambiamos el color al link*/
    color: var(--hospital-green);
    font-size: var(--sm);
    text-align: center;
    text-decoration: none;
    margin-bottom: 52px;

  }

  .label {
    /*definimos el tamaño de letra*/
    font-size: var(--sm);
    /*definimos el grosor*/
    font-weight: bold;
    /*definimos el margen*/
    margin-bottom: 4px;

  }

  .input {
    /*colocamos color con las variables */
    background-color: var(--text-input-field);
    /*quitamos el borde*/
    border: none;
    /*redondeamos los bordes*/
    border-radius: 8px;
    /*colocamos un alto */
    height: 45px;
    /*colocamos tamaño de letra con variables*/
    font-size: var(--md);
    /*colocamos relleno*/
    padding: 5px;
    /*para que se vea mejor :p*/
    margin-bottom: 12px;
  }

  .input-email {
    margin-bottom: 22px;
  }

  .primary-button {
    /*colocamos el color con la varible*/
    background-color: var(--hospital-green);
    /*colocamos el radio de los bordes*/
    border-radius: 8px;
    /*le quitamos bordes*/
    border: none;
    /*colocamos color con las varables*/
    color: var(--white);
    /*colcando ancho ocupa el 100% de la caja*/
    width: 68%;
    /*muestra manita no flecho :o*/
    cursor: pointer;
    /*agrandamos la letra*/
    font-size: var(--md);
    /*le colocamos un grosor :o*/
    font-weight: bold;
    /*le agregamos altura*/
    height: 50px;
    margin-left: 42px;

  }

  .secondary-button {
    /*colocamos el color con la varible*/
    background-color: var(--white);
    /*colocamos el radio de los bordes*/
    border-radius: 8px;
    border: 1px solid var(--hospital-green);
    /*colocamos color con las varables*/
    color: var(--hospital-green);

    width: 100%;
    cursor: pointer;
    font-size: var(--md);
    font-weight: bold;
    height: 50px;

  }

  .login-button {
    top: 14px;
    margin-bottom: 30px;
  }

  @media(max-width:640px) {

    .secondary-button {
      /*para poder moverlo a gusto :p*/
      position: absolute;
      width: 300px;
      /*lo colocamos en la posicion 0*/
      bottom: 0;
      margin-bottom: 28px;
    }
  }

  /*estilos para tabla */
  #contenedor-tabla {
    margin-top: -120px;
  }

  .cont {
    width: auto;
  }

  .conte {
    margin-top: 141px;
    position: relative;
  }

  .cuadro-flotante {
    position: absolute;
    top: -3px;
    left: 23px;
    font-weight: bold;
    z-index: 1;
    padding: 15px;

  }

  /*responsive*/
  @media(max-width:640px) {}

  .logins {
    width: 100%;
    display: flex;
    place-items: center;
    flex-direction: column;
    flex-wrap: wrap;
  }

  .form-containers {
    width: 570px;
    margin-top: 50px;
    display: grid;
    grid-template-columns: repeat(auto-fill, 240px);

  }

  .cont-forms {
    margin-bottom: 6px;
    margin-left: 18px;
  }

  .inactive {
    display: none;
  }

  .btn-flotante {

    font-weight: bold;

  }

  .btns {

    display: flex;

  }

  .label-form {
    font-size: var(--sm);
    font-weight: bold;
    margin-bottom: 4px;
    width: 150px;
  }

  .btn-form {
    top: 14px;
    margin-bottom: 30px;
    margin-left: 126px;
  }


  .cuadro {
    width: 100%;

  }
</style>
<script></script>