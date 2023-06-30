<div class="card-group">
    <div class="card">
        <div class="card-body">
            <div class="row">
            <h5 class="card-title font-main mb-0">SEO On Pages 
                <button type="button" onclick="toggleCard('frm-seo');" class="bt-showhide btn waves-effect waves-light btn-rounded btn-light px-3"><i class="fas fa-angle-down fs-5"></i></button>
            </h5>
            </div>
            
            <hr>
            <div id="frm-seo">
            <div class="form-group">
                <div class="row">
                    <label class="col-md-12" for="example-text">Title</span>
                    </label>
                    <div class="col-md-12">
                        <input type="text" id="example-text" name="example-text" class="form-control" placeholder="">
                        <small class="form-control-feedback"> กรอกหัวเว็บไซต์</small>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <label class="col-md-12">Description</label>
                    <div class="col-md-12">
                        <textarea class="form-control" rows="6" placeholder=""></textarea>
                        <small class="form-control-feedback"> กรอกคำอธิบายหัวเว็บไซต์</small>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <label class="col-md-12" for="example-text">Keywords (comma separated):</span>
                    </label>
                    <div class="col-md-12">
                        <input type="text" id="example-text" name="example-text" class="form-control" placeholder="">
                        <small class="form-control-feedback"> กรอกคีย์เวิร์ดคั่นด้วยเครื่องหมาย ( , คอมม่า )</small>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>

<script>
    function toggleCard(cardName=""){
        //alert($('.bt-showhide').html());
        if(cardName != ""){
            if($('#'+cardName).css('display') == "block"){
                $('#'+cardName).hide(300);
                $('.bt-showhide').html('<i class="fas fa-angle-up"></i>');
            }else{
                $('#'+cardName).show(300);
                $('.bt-showhide').html('<i class="fas fa-angle-down fs-5"></i>');
            }
        }
    }
</script>