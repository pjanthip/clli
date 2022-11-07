<?php
$this->load->view('backend/theme/navbar');
$this->load->view('backend/theme/sidebar');
?>

<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <?php $this->load->view('backend/theme/breadcrumb'); ?>

        <div class="card-group">
            <div class="card">
                <h4 class="card-header d-flex justify-content-between align-items-center bg-info text-light">
                    <div>
                        <i class="fas fa-user-alt"></i> Title Here
                    </div>
                    <a href="#" class="btn btn-sm btn-warning font-main text-dark"><i class="fa-solid fa-circle-plus"></i> ออกเลขวุฒิบัตรใหม่</a>
                </h4>
                <div class="card-body">
                    <div class="table-responsive m-t-40">
                        <table id="result_table" class="table display table-striped border no-wrap">
                            <thead>
                                <tr>
                                    <th>First name</th>
                                    <th>Last name</th>
                                    <th>Position</th>
                                    <th>Office</th>
                                    <th>Age</th>
                                    <th>Start date</th>
                                    <th>Salary</th>
                                    <th>Extn.</th>
                                    <th>E-mail</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Tiger</td>
                                    <td>Nixon</td>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                    <td>61</td>
                                    <td>2011/04/25</td>
                                    <td>$320,800</td>
                                    <td>5421</td>
                                    <td>t.nixon@datatables.net</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Page wrapper  -->
<!-- ============================================================== -->

<!-- This is data table -->
<script src="<?php echo eliteadmin ?>assets/node_modules/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo eliteadmin ?>assets/node_modules/datatables.net-bs4/js/dataTables.responsive.min.js"></script>
<!-- start - This is for export functionality only -->
<script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/plug-ins/1.12.1/i18n/th.json"></script>
<!-- end - This is for export functionality only -->
<script>
    $(function() {
        $('#result_table').DataTable({
            responsive: true,
            "oLanguage": {
                        "sUrl": "https://cdn.datatables.net/plug-ins/1.12.1/i18n/th.json"}
                        ,
            dom: 'Bfrtip',
            buttons: [
                // 'copy', 'csv', 'excel', 'pdf', 'print'
                'excel'
            ]
        });
        $('.buttons-excel').addClass('btn btn-primary me-1').html('ดาวน์โหลด <i class="fa-solid fa-download"></i>');
    });
</script>