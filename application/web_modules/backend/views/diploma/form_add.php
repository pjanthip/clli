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
                        <?php echo $icon_page;?> <?php echo $title_page;?>
                    </div>
                    <a href="#" class="btn btn-sm btn-warning font-main text-dark"><i class="fa-solid fa-circle-plus"></i> ออกเลขวุฒิบัตรใหม่</a>
                </h4>
                <div class="card-body">
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