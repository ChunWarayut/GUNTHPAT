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
        $('#_img').attr('src', '../img_upload/about_us/default.png');
    }
}
</script>

<form id="form_target" role="form" method="post" action="index.php?content=about_us&action=edit"
    enctype="multipart/form-data">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-lg-6">
                    <h1>
                        หน้าแก้ไขข้อมูล About us
                        <?PHP echo $about_us[$id]['about_us_title_en'];  ?>
                    </h1>
                </div>
                <div class="col-lg-6">
                    <button type="submit" class="btn btn-primary float-right">แก้ไข</button>
                </div>
            </div>
        </div>
        <div class="card-body">
            <input type="hidden" id="about_us_img_o" name="about_us_img_o"
                value="<?php echo  $about_us[$id]['about_us_img']; ?>" />
            <input type="hidden" id="about_us_id" name="about_us_id"
                value="<?php echo  $about_us[$id]['about_us_id']; ?>" />

            <div class="col-12">

            </div>
            <div class="row ">
                <div class="col-lg-3">
                    <div class="form-group" align="center">
                        <img id="_img" width="400"
                            src="<?PHP 
                        if ($about_us[$id]['about_us_img'] != "" || $about_us[$id]['about_us_img'] != null) { 
                            echo $img_path . $about_us[$id]['about_us_img']; 
                            } else {
                                echo $img_path . 'default.png';
                            }  ?> "
                            class="img-fluid" alt="">
                        <input accept=".jpg , .png" type="file" id="about_us_img" name="about_us_img"
                            class="form-control" style="margin: 14px 0 0 0 ;" onChange="readURL(this);"
                            value="<?php echo  $about_us[$id]['about_us_img']; ?>">
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="row">

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>About Title EN <font color="#F00"><b>*</b></font></label>
                                <input id="about_us_title_en" name="about_us_title_en" class="form-control"
                                    value="<?PHP echo $about_us[$id]['about_us_title_en'];?>" />
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>About Title TH <font color="#F00"><b>*</b></font></label>
                                <input id="about_us_title_th" name="about_us_title_th" class="form-control"
                                    value="<?PHP echo $about_us[$id]['about_us_title_th'];?>" />
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>About Sub Title EN<font color="#F00"><b>*</b></font></label>
                                <textarea class="form-control " id="about_us_sub_title_en" name="about_us_sub_title_en"rows="8"><?PHP echo $about_us[$id]['about_us_sub_title_en'];?></textarea>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>About Sub Title TH<font color="#F00"><b>*</b></font></label>
                                <textarea class="form-control " id="about_us_sub_title_th" name="about_us_sub_title_th"rows="8"><?PHP echo $about_us[$id]['about_us_sub_title_th'];?></textarea>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

        </div>
    </div>


</form>



<script>


CKEDITOR.replace("about_us_sub_title_th",{
		filebrowserBrowseUrl : '../template/backend/ckfinder/ckfinder.html',
		filebrowserImageBrowseUrl : '../template/backend/ckfinder/ckfinder.html?Type=Images',
		filebrowserFlashBrowseUrl : '../template/backend/ckfinder/ckfinder.html?Type=Flash',
		filebrowserUploadUrl : '../template/backend/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
		filebrowserImageUploadUrl : '../template/backend/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
		filebrowserFlashUploadUrl : '../template/backend/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
	}); 
    

CKEDITOR.replace("about_us_sub_title_en",{
		filebrowserBrowseUrl : '../template/backend/ckfinder/ckfinder.html',
		filebrowserImageBrowseUrl : '../template/backend/ckfinder/ckfinder.html?Type=Images',
		filebrowserFlashBrowseUrl : '../template/backend/ckfinder/ckfinder.html?Type=Flash',
		filebrowserUploadUrl : '../template/backend/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
		filebrowserImageUploadUrl : '../template/backend/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
		filebrowserFlashUploadUrl : '../template/backend/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
	}); 


</script>
