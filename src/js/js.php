<script>

   var tsucursal = '';
    var tcontacto= '';
    //tabla Prueba


    $(document).ready(function() {
        tsucursal = $('#sucursal').DataTable({
            "sAjaxSource": "sucursales.php?ruc=0",
            scrollY: '420px',
            scrollCollapse: true,
            paging: true,
            "language": {
                "url": "https://cdn.datatables.net/plug-ins/1.10.19/i18n/Spanish.json"
            },
            "dom": '<"toolbar">Bftrp'
        });
    });
    $(document).ready(function() {
        tcontacto = $('#contactos').DataTable({
            "sAjaxSource": "verContactos.php?ruc=0",
            scrollY: '420px',
            scrollCollapse: true,
            paging: true,
            "language": {
                "url": "https://cdn.datatables.net/plug-ins/1.10.19/i18n/Spanish.json"
            },
            "dom": '<"toolbar">Bftrp'
        });
    });

    $(document).ready(function() {
        $('#empresa').DataTable({
            scrollY: '420px',
            scrollCollapse: true,
            paging: true,
            "language": {
                "url": "https://cdn.datatables.net/plug-ins/1.10.19/i18n/Spanish.json"
            },
            "dom": '<"toolbar">Bftrp'
        });
    });

    function CargarSucursal(ruc) {
        tsucursal.destroy();
        tsucursal = $('#sucursal').DataTable({
            "sAjaxSource": "sucursales.php?ruc=" + ruc
        });
    }

    function CargarContactos(ruc) {
        tcontacto.destroy();
        tcontacto = $('#contactos').DataTable({
            "sAjaxSource": "verContactos.php?ruc=" + ruc
        });
    }

   
</script>