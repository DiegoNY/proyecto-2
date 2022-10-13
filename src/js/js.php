<script>
    
    var tsucursal = '';
    //tabla Prueba
    $(document).ready(function() {
        tsucursal = $('#sucursal').DataTable({
            "sAjaxSource":"sucursales.php?ruc=0"
        });
    });
    $(document).ready(function() {
        $('#empresa').DataTable();
    }); 

    function CargarSucursal(ruc)
    {
        tsucursal.destroy();
        tsucursal = $('#sucursal').DataTable({
            "sAjaxSource":"sucursales.php?ruc="+ruc
        });
    }

</script>