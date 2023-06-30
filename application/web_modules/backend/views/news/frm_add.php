<?php
$this->load->view('backend/theme/navbar');
$this->load->view('backend/theme/sidebar');
?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/cropme@latest/dist/cropme.min.css">
<script src="https://cdn.jsdelivr.net/npm/cropme@latest/dist/cropme.min.js"></script>
<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        
        <?php $this->load->view('backend/theme/breadcrumb'); ?>

        <form id="" class="" method="POST" enctype="multipart/form-data"></form>

            <div class="card-group">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title font-main"><a href="<?php echo site_url("backend/news")?>" class="btn btn-outline-secondary me-3"><i class="fa-solid fa-caret-left"></i> ย้อนกลับ</a> <i class="fa-solid fa-circle-plus"></i> เพิ่มข่าวใหม่</h5>
                        <hr>


                        <div class="form-group">
                            <div class="row">
                                <label class="col-sm-12">ภาพข่าว(รูปภาพหลัก)</label>
                                <div class="col-sm-12">
                                    <img id="imgPreview"
                                        src="<?php echo base_url('assets/images/website/bg-500x500.png') ?>"
                                        class="img-thumbnail mt-2" style="max-width:500px; max-height:500px;">
                                    <div class="ms-2 mt-2">
                                        <input type="file" accept=".jpg, .jpeg, .png" id="imgupload" name="cover_news" style="display:none;" />
                                        <button id="OpenImgUpload" type="button" class="btn btn-success"><i class="far fa-image"></i> เลือกรูปภาพ</button>
                                        <button id="deleteImg" type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i> ลบรูปภาพ</button>
                                        <button id="downloadImg" type="button" class="btn btn-light"><i class="fas fa-download"></i>  Template</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <label class="col-sm-12">ประเภทข่าวสาร <span class="text-danger">*</span></label>
                                <div class="col-sm-12">
                                    <select class="select2_news_type form-select text-dark" name="type_news[]" multiple="multiple" style="width: 100%;">
                                        <?php
                                        foreach ($news_type as $row) {
                                            echo '<option class="text-dark" value="' . $row->news_type_id . '">' . $row->news_type_name_th . '[' . $row->news_type_name_en . ']</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <h5 class="font-main">แสดงรูปภาพหลักเนื้อหา <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <div class="form-check">
                                            <input type="checkbox" required="" value="single" class="form-check-input" id="show_img_detail" name="show_img_detail">
                                            <label class="form-check-label" for="show_img_detail">ไม่ต้องแสดงรูปภาพหลักในเนื้อหา</label>
                                        </div>
                                        <div class="help-block"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <h5 class="font-main">แสดงหน้าแรก <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <fieldset>
                                            <div class="form-check">
                                                <input type="radio" value="1" name="styled_radio" required="" id="show_index1" name="show_index" checked class="form-check-input">
                                                <label class="form-check-label" for="show_index1">แสดงข่าวในหน้าแรก</label>
                                            </div>
                                        </fieldset>
                                        <fieldset>
                                            <div class="form-check">
                                                <input type="radio" value="0" name="styled_radio" required="" id="show_index2" name="show_index" class="form-check-input">
                                                <label class="form-check-label" for="show_index2">ไม่ต้องแสดงข่าวในหน้าแรก</label>
                                            </div>
                                        </fieldset>
                                        <div class="help-block"></div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <h5 class="font-main">วันที่ประชาสัมพันธ์ <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                    <input data-provide="datepicker">
                                        <div class="help-block"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-md-12" for="title_news">หัวข้อข่าว <span class="text-danger">*</span></span></label>
                                <div class="col-md-12">
                                    <input type="text" id="title_news" name="title_news" class="form-control" placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-md-12">รายละเอียด <span class="text-danger">*</span></label>
                                <div class="col-md-12 mb-3">
                                    <button type="button" id="open_album" name="open_album" class="btn btn-light"><i class="fas fa-images"></i> คลังสื่อมัลติมีเดีย</button>
                                </div>
                                <div class="col-md-12">
                                    <textarea class="form-control tinymce file-picker" id="detail_news" name="detail_news" rows="6"></textarea>
                                </div>
                            </div>
                        </div>
                        
                        <div class="d-flex align-items-center bg-light text-dark highlight-toolbar py-2 border-0 border-top border-bottom">
                            <button type="button" class="btn btn-info"><i class="fas fa-images"></i> เลือกอัลบั้มภาพข่าว</button>
                            <button type="button" class="btn btn-danger ms-2"><i class="fas fa-times"></i> ลบอัลบั้ม</button>
                            <input type="hidden" id="album_news" name="album_news" value=""/>
                        </div>
                        <div class="highlight py-4">
                            <h3 class="font-main fw-bold text-center mb-3">อัลบั้ม : ชื่ออัลบั้ม</h3>
                            <div class="portfolio-item row">
                                <?php for($i=0;$i<=10;$i++):?>
                                <div class="item col-lg-3 col-md-4 col-sm-1 position-relative">
                                    <a href="" class="position-absolute top-0 end-0 me-4 mt-2 text-light"><i class="fas fa-times"></i></a>
                                    <a href="https://image.freepik.com/free-photo/stylish-young-woman-with-bags-taking-selfie_23-2147962203.jpg" class="image-popup-vertical-fit"> 
                                        <img class="img-fluid" src="https://image.freepik.com/free-photo/stylish-young-woman-with-bags-taking-selfie_23-2147962203.jpg" alt="">
                                    </a>
                                </div>
                                <?php endfor;?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php $this->load->view('backend/seo/frm_seo'); ?>

            <div class="card-group">
                <div class="card">
                    <div class="card-body text-center">
                        <button type="submit" class="btn btn-info waves-effect waves-light m-r-10 text-white"><i class="fa-solid fa-floppy-disk"></i> บันทึก</button>
                        <button type="button" id="btn-news-refresh" class="btn btn-dark waves-effect waves-light"><i class="fa-solid fa-rotate-right"></i> Refresh</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Page wrapper  -->
<!-- ============================================================== -->

<!-- or use image tag -->
<script>
  //$('#person_img_show').cropme();
</script>

<style>
    .select2-selection__choice,
    .select2-selection__choice__display {
        color: black;
    }

    .portfolio-item{
	/*width:100%;*/
}
.portfolio-item .item{
	/*width:303px;*/
	float:left;
	margin-bottom:10px;
}
</style>

<script>
    $('#btn-news-refresh').click(function (){
        Swal.fire({
        title: 'ยืนยัน Refresh ?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'ตกลง',
        cancelButtonText: 'ปิด'
        }).then((result) => {
            if (result.isConfirmed) {
                location.reload();
            }
        })
    });
    
    $(document).ready(function() {
        $('.datepicker').datepicker();
        var popup_btn = $('.popup-btn');
        popup_btn.magnificPopup({
            type : 'image',
            gallery : {
                enabled : true
            }
        });
    });

    $('#OpenImgUpload').click(function () {
        $('#imgupload').trigger('click');
    });

    $('#deleteImg').click(function () {
        $('#imgupload').val('');
        $('#imgPreview').attr('src', '<?php echo base_url('assets/images/website/bg-500x500.png') ?>');
    });

    $('#editImg').click(function () {
        $('#imgPreview').cropme({
            "container": {
                "width": 550,
                "height": 550
            },
            "viewport": {
                "width": 500,
                "height": 500,
                "type": "square",
                "border": {
                    "width": 2,
                    "enable": true,
                    "color": "#fff"
                }
            },
            "zoom": {
                "enable": true,
                "mouseWheel": true,
                "slider": true
            },
            "rotation": {
                "slider": true,
                "enable": true,
                "position": "left"
            },
            "transformOrigin": "viewport"
        });
    });

    imgupload.onchange = evt => {
        const [file] = imgupload.files;
        if (file) {
            imgPreview.src = URL.createObjectURL(file)
        }
    }

    $(document).ready(function () {
        $('.select2_news_type').select2({
            placeholder: 'กรุณาเลือกประเภทข่าว'
        });
    });

    const btn = document.getElementById('downloadImg');
    const url = "<?php echo base_url('assets/images/website/bg-500x500.png') ?>";

    btn.addEventListener('click', (event) => {
        event.preventDefault();
        //console.log('ABC')
        downloadImage(url);
    })


    function downloadImage(url) {
    fetch(url, {
        mode : 'no-cors',
    })
        .then(response => response.blob())
        .then(blob => {
        let blobUrl = window.URL.createObjectURL(blob);
        let a = document.createElement('a');
        a.download = url.replace(/^.*[\\\/]/, '');
        a.href = blobUrl;
        document.body.appendChild(a);
        a.click();
        a.remove();
    })
    }
</script>