<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor font-main"><?php echo $icon_page;?> <?php echo $title_page;?></h4>
    </div>
    <div class="col-md-7 align-self-center text-end">
        <div class="d-flex justify-content-end align-items-center">
            <ol class="breadcrumb justify-content-end">
                <li class="breadcrumb-item"><a href="javascript:void(0)">หนัาหลัก</a></li>
                <?php
                    foreach($breadcrumb as $k => $v){
                        if($v[1]=="active"){
                            echo '<li class="breadcrumb-item active" aria-current="page">'.$k.'</li>';
                        }else{
                            echo '<li class="breadcrumb-item"><a href="'.$v[0].'">'.$k.'</a></li>';
                        }
                    }
                ?>
            </ol>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->