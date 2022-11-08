
   <link href="<?php echo eliteadmin;?>assets/node_modules/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet">
    <!-- Page plugins css -->
    <link href="<?php echo eliteadmin;?>assets/node_modules/clockpicker/dist/jquery-clockpicker.min.css" rel="stylesheet">
    <!-- Color picker plugins css -->
    <link href="<?php echo eliteadmin;?>assets/node_modules/jquery-asColorPicker-master/dist/css/asColorPicker.css" rel="stylesheet">
    <!-- Date picker plugins css -->
    <link href="<?php echo eliteadmin;?>assets/node_modules/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css" />
    <!-- Daterange picker plugins css -->
    <link href="<?php echo eliteadmin;?>assets/node_modules/timepicker/bootstrap-timepicker.min.css" rel="stylesheet">
    <link href="<?php echo eliteadmin;?>assets/node_modules/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <link href="<?php echo eliteadmin;?>assets/node_modules/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css" rel="stylesheet" />

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
                    <div class="font-main">
                        <?php echo $icon_page; ?> <?php echo $title_page; ?>
                    </div>
                    <!-- <a href="#" class="btn btn-sm btn-warning font-main text-dark"><i class="fa-solid fa-circle-plus"></i> ออกเลขวุฒิบัตรใหม่</a> -->
                </h4>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title font-main"><i class="fa-solid fa-circle-info"></i> ข้อมูลกิจกรรม</h4>
                        <form class="needs-validation" novalidate>
                            <div class="row">
                                <div class="col-md-7 mb-3">
                                    <label class="form-label" for="validationCustom01">ชื่อกิจกรรม<span class="text-danger ms-1" style="font-size: 10px;"><i class="fa-solid fa-asterisk"></i></span></label>
                                    <input type="text" class="form-control" id="validationCustom01" placeholder="ชื่อกิจกรรม" value="" required>
                                    <div class="invalid-feedback">กรุณากรอกชื่อกิจกรรม</div>
                                </div>
                                <div class="col-md-5 mb-3">
                                    <label class="form-label" for="validationCustomUsername">วันที่จัดกิจกรรม<span class="text-danger ms-1" style="font-size: 10px;"><i class="fa-solid fa-asterisk"></i></span></label>
                                    <div class="input-group">
                                        <input type='text' class="form-control datetime" />
                                        <span class="input-group-text">
                                            <span class="ti-calendar"></span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label" for="">สถานที่จัดกิจกรรม</label>
                                    <input type="text" class="form-control" id="" placeholder="สถานที่จัดกิจกรรม" value="">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label" for="">หน่วยงานที่จัดกิจกรรม</label>
                                    <input type="text" class="form-control" id="" placeholder="ชื่อหน่วยงานที่จัดกิจกรรม" value="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label" for="validationCustom01">รูปแบบหลักสูตร (หลักที่ 1)<span class="text-danger ms-1" style="font-size: 10px;"><i class="fa-solid fa-asterisk"></i></span></label>
                                        <select class="form-control" required>
                                            <option value="">เลือกรูปแบบหลักสูตร</option>
                                            <option value="1">1. หลักสูตรสะสมหน่วยกิตในรูปแบบรายวิชา (Pre-degree)</option>
                                            <option value="2">2. หลักสูตรสะสมหน่วยกิตในรูปแบบฝึกอบรม (Modular)</option>
                                            <option value="3">3. หลักสูตรทักษะการเรียนรู้ตลอดชีวิต (Up-skill, Re-skill, New-skill)</option>
                                            <option value="4">4. หลักสูตรการจัดสหกิจศึกษาและการศึกษาเชิงบูรณาการกับการทำงาน (CWIE)</option>
                                            <option value="5">5. หลักสูตรอื่นๆ</option>
                                        </select>
                                        <div class="invalid-feedback">กรุณาเลือกรูปแบบหลักสูตร</div>
                                </div>
                                <div class="col-md-2 mb-3">
                                    <div class="form-group">
                                        <label class="form-label">ครั้งที่ (หลักที่ 2 – 4 )<span class="text-danger ms-1" style="font-size: 10px;"><i class="fa-solid fa-asterisk"></i></span></label>
                                        <input class="vertical-spin" type="text" data-bts-button-down-class="btn btn-secondary btn-outline" data-bts-button-up-class="btn btn-secondary btn-outline" value="1" name="vertical-spin">
                                    </div>
                                </div>
                                <div class="col-md-2 mb-3">
                                    <div class="form-group">
                                        <label class="form-label">หมู่เรียน/รุ่น (หลักที่ 5 – 6)<span class="text-danger ms-1" style="font-size: 10px;"><i class="fa-solid fa-asterisk"></i></span></label>
                                        <input class="vertical-spin" type="text" data-bts-button-down-class="btn btn-secondary btn-outline" data-bts-button-up-class="btn btn-secondary btn-outline" value="1" name="vertical-spin">
                                    </div>
                                </div>
                                <div class="col-md-2 mb-3">
                                    <div class="form-group">
                                        <label class="form-label">ปี พ.ศ. ที่ออก (หลักที่ 10 – 13)<span class="text-danger ms-1" style="font-size: 10px;"><i class="fa-solid fa-asterisk"></i></span></label>
                                        <input class="vertical-spin-year" type="text" data-bts-button-down-class="btn btn-secondary btn-outline" data-bts-button-up-class="btn btn-secondary btn-outline" value="<?php echo date("Y",strtotime(date('Y')))+543; ?>" name="vertical-spin">
                                    </div>
                                </div>
                            </div>
                        </form>
                        <script>
                            // Example starter JavaScript for disabling form submissions if there are invalid fields
                            (function() {
                                'use strict';
                                window.addEventListener('load', function() {
                                    // Fetch all the forms we want to apply custom Bootstrap validation styles to
                                    var forms = document.getElementsByClassName('needs-validation');
                                    // Loop over them and prevent submission
                                    var validation = Array.prototype.filter.call(forms, function(form) {
                                        form.addEventListener('submit', function(event) {
                                            if (form.checkValidity() === false) {
                                                event.preventDefault();
                                                event.stopPropagation();
                                            }
                                            form.classList.add('was-validated');
                                        }, false);
                                    });
                                }, false);
                            })();
                        </script>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title font-main"><i class="fa-solid fa-user-group"></i> รายชื่อผู้เข้าร่วม</h4>
                        
                        <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">อัพโหลดรายชื่อผู้เข้าร่วม (.xlsx)<span class="text-danger ms-1" style="font-size: 10px;"><i class="fa-solid fa-asterisk"></i></span></label>
                                    <div class="custom-file">
                                        <input type="file" class="form-control" id="validatedCustomFile" required>
                                        <label class="custom-file-label" for="validatedCustomFile"></label>
                                        <div class="invalid-feedback">Example invalid custom file feedback</div>
                                    </div>
                                </div>
                                <div class="col-md-2 mb-3">
                                    <label class="form-label">&nbsp;</label>
                                    <div class="form-group">
                                    <button class="btn btn-primary text-white" type="submit">อัพโหลดรายชื่อ</button>
                                    </div>
                                    
                                </div>
                            </div>
                        
                            <div class="row">
                                
                            </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End PAge Content -->
        <!-- ============================================================== -->

    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Page wrapper  -->
<!-- ============================================================== -->
<!-- ============================================================== -->
    <!-- Plugins for this page -->
    <!-- ============================================================== -->
    <!-- Plugin JavaScript -->
    <script src="<?php echo eliteadmin;?>assets/node_modules/moment/moment.js"></script>
    <script src="<?php echo eliteadmin;?>assets/node_modules/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
    <!-- Clock Plugin JavaScript -->
    <script src="<?php echo eliteadmin;?>assets/node_modules/clockpicker/dist/jquery-clockpicker.min.js"></script>
    <!-- Color Picker Plugin JavaScript -->
    <script src="<?php echo eliteadmin;?>assets/node_modules/jquery-asColor/dist/jquery-asColor.js"></script>
    <script src="<?php echo eliteadmin;?>assets/node_modules/jquery-asGradient/dist/jquery-asGradient.js"></script>
    <script src="<?php echo eliteadmin;?>assets/node_modules/jquery-asColorPicker-master/dist/jquery-asColorPicker.min.js"></script>
    <!-- Date Picker Plugin JavaScript -->
    <script src="<?php echo eliteadmin;?>assets/node_modules/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <!-- Date range Plugin JavaScript -->
    <script src="<?php echo eliteadmin;?>assets/node_modules/timepicker/bootstrap-timepicker.min.js"></script>
    <script src="<?php echo eliteadmin;?>assets/node_modules/bootstrap-daterangepicker/daterangepicker.js"></script>
    
    <script src="<?php echo eliteadmin;?>assets/node_modules/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js" type="text/javascript"></script>
<script>
    // Date & Time
    $('.datetime').daterangepicker({
        timePicker: true,
        timePickerIncrement: 1,
        timePicker24Hour: true,
        locale: {
            cancelLabel: 'ปิด',
            applyLabel: 'ยืนยัน',
            "separator": " ถึง ",
            format: 'DD-MM-YYYY' + ' h:mmน.',
            "daysOfWeek": [
                "อา",
                "จ",
                "อ",
                "พ",
                "พฤ",
                "ศ",
                "ส"
            ],
            "monthNames": [
                "มกราคม",
                "กุมภาพันธ์",
                "มีนาคม",
                "เมษายน",
                "พฤษภาคม",
                "มิถุนายน",
                "กรกฎาคม",
                "สิงหาคม",
                "กันยายน",
                "ตุลาคม",
                "พฤศจิกายน",
                "ธันวาคม"
            ],
        }
    });
    $(function () {
            //Bootstrap-TouchSpin
            $(".vertical-spin").TouchSpin({
                verticalbuttons: true
            });
            var vspinTrue = $(".vertical-spin").TouchSpin({
                verticalbuttons: true
            });
            if (vspinTrue) {
                $('.vertical-spin').prev('.bootstrap-touchspin-prefix').remove();
            }
            $(".vertical-spin-year").TouchSpin({
                verticalbuttons: true,
                min: 2565,
                max: 3000
            });
        });
    </script>