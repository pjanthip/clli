<?php
$this->load->view('backend/theme/navbar');
$this->load->view('backend/theme/sidebar');
?>
<link rel="stylesheet" type="text/css" href="<?php echo eliteadmin;?>assets/node_modules/datatables.net-bs4/css/dataTables.bootstrap4.css">
<link href="<?php echo eliteadmin;?>assets/node_modules/bootstrap-table/dist/bootstrap-table.min.css" rel="stylesheet" type="text/css" />
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
                <div class="card-body">
                    <h5 class="card-title font-main">ข่าวประชาสัมพันธ์</h5>
                    <hr>

                    <div class="table-responsive">
                        <table id="myTable" class="table table-striped">
                            <thead>
                                <tr class="text-center">
                                    <th class="col-1">ID</th>
                                    <th class="col-5">ข่าวประชาสัมพันธ์</th>
                                    <th class="col-2">วันที่โพสต์</th>
                                    <th class="col-2">ประเภท</th>
                                    <th class="col-2">Tool</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center">1</td>
                                    <td>Computer Graphics</td>
                                    <td class="text-center">Animation</td>
                                    <td>Computer</td>
                                    <td class="text-center">
                                        <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                                            <a href="" class="btn btn-success"><i class="fas fa-eye"></i> ดู</a>
                                            <a href="" class="btn btn-warning"><i class="fas fa-edit"></i> แก้ไข</a>
                                            <button type="button" class="btn btn-danger"><i class="fas fa-trash-alt"></i> ลบ</button>
                                        </div>
                                    </td>
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
    <script src="<?php echo eliteadmin;?>assets/node_modules/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo eliteadmin;?>assets/node_modules/datatables.net-bs4/js/dataTables.responsive.min.js"></script>
    <!-- start - This is for export functionality only -->
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>

    <!-- end - This is for export functionality only -->
    <script>
        $(function () {
            $('#myTable').DataTable({
                language: {
                    url: '//cdn.datatables.net/plug-ins/1.13.4/i18n/th.json'
                },
                "pageLength": 50
            });
        });

    </script>