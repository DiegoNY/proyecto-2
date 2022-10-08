<script >
   //manejo de dataTable
   $(document).ready(function() {
        $('#projectsTable').DataTable({
            scrollY: '280px',
            scrollCollapse: true,
            paging: false,
            "language": {
                "url": "https://cdn.datatables.net/plug-ins/1.10.19/i18n/Spanish.json"
            },
            "dom":'<"toolbar">Bftrp',
        });
    });

</script>