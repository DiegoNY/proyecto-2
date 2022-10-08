<!--Cabecera-->
<?php include 'templates/header.php' ?>
<?php include 'style/style.php'?>

<style>
    .logins{
    width: 100%;
    height: 78vh;
    display: flex;
    place-items: center;
    flex-direction: column;
    flex-wrap: wrap;
}
.form-containers{
    width: 570px;
    margin-top: 50px;
}

</style>
</div>
<div class="logins">
    <div class="form-containers">
        <form action="/">
            <label for="email" class="label">Nombre</label>
            <input type="text" id="email" name="txtNombre" placeholder="EmpresaSAC..." class="input input-email">
            <label for="password" class="label">Direccion</label>
            <input type="text" id="pasword" name="txtDireccion" placeholder="Direccion..." class="input input-password">
            <label for="email" class="label">Razon Social</label>
            <input type="text" id="email" name="txtRazonSocial" placeholder="Razon ..." class="input input-email">
            <label for="password" class="label">Ruc</label>
            <input type="number" id="pasword" name="txtRuc" placeholder="123456789123" class="input input-password">
            <label for="email" class="label">Celular Empresa</label>
            <input type="number" id="email" name="txtCelularEmpresa" placeholder="916 540 936" class="input input-email">
            <!-- select -->
            <label for="password" class="label">Pais</label>
            <input type="text" id="pasword" placeholder="PE" class="input input-password">
            <!-- combo box devuelve true o false si es true valor 1 si no valor 0-->
            <label for="email" class="label">Trabajara con nosotros ? </label>
            <label for="" class="labels" >si marca la casilla</label>
            <input type="checkbox" name="txtTrabajaNosotros">
            <!-- Select -->
            <label for="password" class="label">Ingresa el codigo de Ubigeo</label>
            <input type="text" id="pasword" name="txtCodUbigeo" placeholder="123456789123" class="input input-password">
            
            <input type="submit" value="Registrar" class="primary-button login-button">
            
            <a href="/">volver</a>
            
        </form>
    </div>
</div>


<?php include 'js/js.php'; ?>