<script>
    //manejo de dataTable
    $(document).ready(function() {
        $('#projectsTable').DataTable({
            scrollY: '420px',
            scrollCollapse: true,
            paging: false,
            "language": {
                "url": "https://cdn.datatables.net/plug-ins/1.10.19/i18n/Spanish.json"
            },
            "dom": '<"toolbar">Bftrp',
        });
    });

    //tabla Prueba
    $(document).ready(function() {
        $('#sucursal').DataTable();
    });
    $(document).ready(function() {
        $('#empresa').DataTable();
    }); 
</script>