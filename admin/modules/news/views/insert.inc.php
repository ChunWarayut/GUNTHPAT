<script>
//---------ฟังชั่นแสดงรูป----------------
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#_img').attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
    } else {
        $('#_img').attr('src', '../img_upload/news/default.jpg');
    }
}
</script>
<form role="form" method="post" action="index.php?content=news&action=add" enctype="multipart/form-data">

    <div class="row">
        <div class="col-lg-6">
            <h1>เพิ่มข่าวสาร</h1>
        </div>
        <div class="col-lg-6">

            <div align="right">
                <button type="button" class="btn btn-default"
                    onclick="window.location='?content=news';">ย้อนกลับ</button>
                <button type="reset" class="btn btn-primary">ล้างข้อมูล</button>
                <button type="submit" class="btn btn-success">บันทึกข้อมูล</button>
            </div>
        </div>
    </div>

    <br>
    <hr>
    <input type="hidden" id="news_img_o" name="news_img_o" />
    <input type="hidden" id="news_id" name="news_id" />

    <div class="row">
        <div class="col-lg-8">
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label> หัวข้อข่าว TH<font color="#F00"><b>*</b></font></label>
                        <input id="news_name_th" name="news_name_th" class="form-control"
                            value="<?php echo $news[0]['news_name_th']?>" autocomplete="off">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label> หัวข้อข่าว EN <font color="#F00"><b>*</b></font></label>
                        <input id="news_name_en" name="news_name_en" class="form-control"
                            value="<?php echo $news[0]['news_name_en']?>" autocomplete="off">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label> รายละเอียดข่าว TH<font color="#F00"><b>*</b></font></label>
                        <textarea id="news_detail_th" name="news_detail_th" class="form-control"
                            value="<?php echo $news[0]['news_detail_th']?>" autocomplete="off" rows="9"><?php echo $news[0]['news_detail_th']?></textarea>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label> รายละเอียดข่าว EN <font color="#F00"><b>*</b></font></label>
                        <textarea id="news_detail_en" name="news_detail_en" class="form-control"
                            value="<?php echo $news[0]['news_detail_en']?>" autocomplete="off" rows="9"><?php echo $news[0]['news_detail_en']?></textarea>
                    </div>
                </div>
            </div>
            
        </div>        <div class="col-lg-4">
            <div class="col-lg-12">
                <div class="form-group" align="center">
                    <img id="_img" width="400" src="<?PHP  echo $img_path . 'default.png ';?> " class="img-fluid"
                        alt="">
                    <input accept=".jpg , .png" type="file" id="news_img" name="news_img" class="form-control"
                        style="margin: 14px 0 0 0 ;" onChange="readURL(this);">
                </div>
            </div>
        </div>
        <!-- /.col-lg-9 (nested) -->
        <!-- /.row (nested) -->

    </div>
</form>