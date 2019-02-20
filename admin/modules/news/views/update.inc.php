
<script>
//---------ฟังชั่นแสดงรูป----------------
function readURL(input) {
    if (input.files && input.files) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#_img').attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files);
    } else {
        $('#_img').attr('src', '../img_upload/news/default.jpg');
    }
}
</script>

<form role="form" method="post" action="index.php?content=news&action=edit" enctype="multipart/form-data">
<div class="row">
<div class="col-lg-6">
<h1>เเก้ไขข้อมูลข่าวสาร</h1>
</div>
<div class="col-lg-6">

<div align="right">
            <input type="hidden" id="news_id" name="news_id" value="<?php echo $news['news_id'] ?>" />
            <input type="hidden" id="news_image_o" name="news_image_o" value="<?php echo  $news['news_image'] ?>" />
            <button type="button" class="btn btn-default" onclick="window.location='?content=news';">ย้อนกลับ</button>
            <button name="submit" type="submit" class="btn btn-success">บันทึกข้อมูล</button>
        </div>
</div>
</div>

<br>
<hr>
    <div class="row">
        <div class="col-lg-8">
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label> หัวข้อข่าว <font color="#F00"><b>*</b></font></label>
                        <input id="news_name" name="news_name" class="form-control"
                            value="<?php echo $news['news_name']?>" autocomplete="off">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <label> รายละเอียดข่าว <font color="#F00"><b>*</b></font></label>
                        <input id="news_detail" name="news_detail" class="form-control"
                            value="<?php echo $news['news_detail']?>" autocomplete="off">
                    </div>
                </div>
            </div>
            
        </div><div class="col-lg-4">
                <div class="col-lg-12">
                    <div class="form-group" align="center">
                        <img id="_img" width="500" src="<?PHP 
                        if ($news['news_img'] != "" || $news['news_img'] != null) { 
                            echo $img_path . $news['news_img']; 
                            } else {
                                echo $img_path . 'default.jpg';
                            }  ?>" class="img-fluid"
                            alt="">
                        <input accept=".jpg , .png" type="file" id="news_img" name="news_img" class="form-control"
                            style="margin: 14px 0 0 0 ;" onChange="readURL(this);">
                    </div>
                </div>
            </div>

        <!-- /.row (nested) -->

</form>
