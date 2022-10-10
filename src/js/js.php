<script >
   //manejo de dataTable
   $(document).ready(function() {
        $('#projectsTable').DataTable({
            scrollY: '420px',
            scrollCollapse: true,
            paging: false,
            "language": {
                "url": "https://cdn.datatables.net/plug-ins/1.10.19/i18n/Spanish.json"
            },
            "dom":'<"toolbar">Bftrp',
        });
    });

    
    /**variables */
    const registraSucursal = document.querySelector('.registra-sucursal');
    const registraEmpresa = document.querySelector('.registra-empresa');
    const btn = document.querySelector('.btn-registrar');
    const btn2 = document.querySelector('#btn-registrar-sucursal');
    btn.addEventListener('onclick',mostrarFormSucursal);

    // btn2.addEventListener('onclick',mostrarFormEmpresa);

    /**mostrar formulario de sucursal si ya se a registrado la empresa */
    function mostrarFormSucursal() {
        // const formSucursal = registraSucursal.contains('inactive');
        // const formEmpresa = registraEmpresa.contains('inactive');
        // if(!formEmpresa){
        //     registraEmpresa.classList.add('inactive');
        // }

        console.log('hello')
        //  registraSucursal.classList.toggle('inactive');

    }
    
    function mostrarFormEmpresa() {
        const formEmpresa = registraEmpresa.contains('inactive');
        if(!formEmpresa){
            registraEmpresa.classList.add('inactive');
        }
        
    }

    // console.log("hola");
</script>