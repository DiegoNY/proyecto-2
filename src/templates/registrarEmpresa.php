
</div>
<div class="logins">
    <div>
        <form action="registrarEmpresa.php" method="POST" class="form-containers">
            <div class="cont-forms">
                <label for="email" class="label">Nombre</label>
                <input type="text" id="email" name="txtNombre" placeholder="EmpresaSAC..." class="input input-email">
            </div>
            <div class="cont-forms">
                <label for="password" class="label">Direccion</label>
                <input type="text" id="pasword" name="txtDireccion" placeholder="Direccion..." class="input input-password">
            </div>
            <div class="cont-forms">
                <label for="email" class="label">Razon Social</label>
                <input type="text" id="email" name="txtRazonSocial" placeholder="Razon ..." class="input input-email">
            </div>
            <div class="cont-forms">
                <label for="password" class="label">Ruc</label>
                <input type="number" id="pasword" name="txtRuc" placeholder="123456789123" class="input input-password">
            </div>
            <div class="cont-forms">
                <label for="email" class="label">Celular Empresa</label>
                <input type="number" id="email" name="txtCelularEmpresa" placeholder="916 540 936" class="input input-email">
            </div>

            <div class="cont-forms">
                <!-- select -->
                <label for="password" class="label">Pais</label>
                <input type="text" id="pasword" placeholder="PE" name="txtPais" class="input input-password">
                <!-- combo box devuelve true o false si es true valor 1 si no valor 0-->
            </div>
            <div class="cont-forms">
                <label for="email" class="label">Trabajara con nosotros ? </label>
                <label for="" class="labels" >si marca la casilla</label>
                <input type="checkbox" value="1"  name="txtTrabajaNosotros">
            </div>

            <!-- Select -->
            <div class="cont-forms">
                <label for="password" class="label">Ingresa el codigo de Ubigeo</label>
                <input type="text" id="pasword" name="txtCodUbigeo" placeholder="123456789123" class="input input-password">
            </div>


            <input type="hidden" name="txtEliminada" value="1">

            <input type="submit" value="Registrar" class="primary-button login-button">

            <a href="/">volver</a>

        </form>
    </div>
</div>