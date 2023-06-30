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
                <li class="breadcrumb-item"><a href="<?php echo site_url('backend');?>">Dashboard</a></li>
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
            <?php if($has_button_nav): ?>
                <a href="<?php echo $has_button_nav_link;?>" class="btn btn-info d-none d-lg-block m-l-15 text-white"><?php echo $has_button_nav_icon.' '.$has_button_nav_name;?></a>
                <div class="fixed-bottom text-end d-lg-none pe-3 pb-3">
                    <a href="<?php echo $has_button_nav_link;?>" class="btn btn-lg btn-info d-lg-block m-l-15 text-white"><?php echo $has_button_nav_icon.' '.$has_button_nav_name;?></a>
                </div>
            <?php endif;?>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
