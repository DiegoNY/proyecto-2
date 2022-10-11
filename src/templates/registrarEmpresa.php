</div>
<div class="logins registra-empresa">
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

