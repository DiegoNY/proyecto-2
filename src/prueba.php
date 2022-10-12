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
            <tr>
              <td>Tiger Nixon</td>
              <td>System Architect</td>
              <td>Edinburgh</td>
              <td>61</td>
              <td>2011-04-25</td>
              <td>$320,800</td>
            </tr>
            <tr>
              <td>Garrett Winters</td>
              <td>Accountant</td>
              <td>Tokyo</td>
              <td>63</td>
              <td>2011-07-25</td>
              <td>$170,750</td>
            </tr>
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
</style>
<?php include 'js/js.php' ?>