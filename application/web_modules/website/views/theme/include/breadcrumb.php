<section id="page-title">

    <div class="container clearfix font-sarabun">
        <h1><?php echo $title_page;?></h1>
        <span><?php echo $title_page_detail;?></span>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo site_url();?>">หน้าหลัก</a></li>
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

</section>
