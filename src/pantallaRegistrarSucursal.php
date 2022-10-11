<?php include 'templates/header.php' ?>
<?php include 'style/style.php' ?>

</div>
<div class="logins registra-sucursal ">
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
</div>