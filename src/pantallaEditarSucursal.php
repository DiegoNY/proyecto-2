<?php include 'templates/header.php' ?>
<?php include 'style/style.php' ?>

</div>
<div class="logins registra-sucursal ">
    <div>
        <form action="procesoEditarSucursal.php " method="POST" class="form-containers">
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
            <!-- Select -->

            <input type="hidden" name="txtId" value="<?php //obteniendo el id y enviandolo por post 
                                                        $id = $_GET['id'];
                                                        echo $id; ?>" id="">


            <input type="hidden" name="txtRuc" value="<?php //obteniendo el ruc y enviandolo por post 
                                                        $ruc = $_GET['ruc'];
                                                        echo $ruc; ?>" id="">

            <input type="submit" value="Registrar" id="btn-registrar-sucursal" class="primary-button btn-form">

        </form>
    </div>
</div>
</div>