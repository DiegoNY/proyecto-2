<!--Cabecera-->
<?php include 'templates/header.php' ?>

<style>
    .cont{
        width: 700px;
    }
</style>
<div class="container-fluid cont py-5">
    <div class="row">
        <div class="col-xxl-5 d-flex">
            <!-- Card -->
            <div class="card border-0 flex-fill w-100">
                <div class="card-header border-0 card-header-space-between">

                    <!-- Title -->
                    <h2 class="card-header-title h4 text-uppercase">
                        Projects
                    </h2>

                    

                <!-- Table -->
                <div class="table-responsive">
                    <table id="projectsTable" class="table align-middle table-edge table-nowrap mb-0">
                        <thead class="thead-light">
                            <tr>
                                <th class="w-60px">#</th>
                                <th>Name</th>
                                <th>Project manager</th>
                                <th class="text-end">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Alibaba</td>
                                <td class="text-muted">Jon Richardson</td>
                                <td class="text-end"><span class="badge text-bg-success rounded-pill">Completed</span></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Nike</td>
                                <td class="text-muted">Alba Monday</td>
                                <td class="text-end"><span class="badge text-bg-success rounded-pill">Completed</span></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Amazon</td>
                                <td class="text-muted">Rose Watson</td>
                                <td class="text-end"><span class="badge text-bg-warning rounded-pill">In-progress</span></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Webinning</td>
                                <td class="text-muted">Levente Kosa</td>
                                <td class="text-end"><span class="badge text-bg-warning rounded-pill">In-progress</span></td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>eBay</td>
                                <td class="text-muted">Andy Webb</td>
                                <td class="text-end"><span class="badge text-bg-danger rounded-pill">Outdated</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div> <!-- / .table-responsive -->
            </div>
        </div>
    </div>
</div>

<script >
   
    $(document).ready(function() {
        $('#projectsTable').DataTable({
            scrollY: '350px',
            scrollCollapse: true,
            paging: false,
            "language": {
                "url": "https://cdn.datatables.net/plug-ins/1.10.19/i18n/Spanish.json"
            },"dom":'<"toolbar">Bftrp'

        });
    });

</script>