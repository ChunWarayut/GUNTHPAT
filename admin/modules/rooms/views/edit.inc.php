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
        $('#_img').attr('src', '../img_upload/rooms/default.jpg');
    }
}
</script>

<form id="form_target" role="form" method="post" action="index.php?content=rooms&action=edit"
    enctype="multipart/form-data">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-lg-6">
                    <h1>
                        หน้าแก้ไขข้อมูลห้อง
                        <?PHP echo $roomBy[0]['room_name'];  ?>
                    </h1>
                </div>
                <div class="col-lg-6">

                    <button type="submit" class="btn btn-primary float-right">บันทึก</button>
                </div>
            </div>
        </div>
        <div class="card-body">
            <input type="hidden" id="room_img_o" name="room_img_o" value="<?php echo  $roomBy[0]['room_img']; ?>" />
            <input type="hidden" id="room_id" name="room_id" value="<?php echo  $roomBy[0]['room_id']; ?>" />

            <div class="col-12">

            </div>
            <div class="row ">
                <div class="col-lg-3">
                    <div class="form-group" align="center">
                        <img id="_img" width="400" 
                        src="<?PHP 
                        if ($roomBy[0]['room_img'] != "" || $roomBy[0]['room_img'] != null) { 
                            echo $img_path . $roomBy[0]['room_img']; 
                            } else {
                                echo $img_path . 'default.jpg';
                            }  ?> " 
                            class="img-fluid" alt="">
                        
                        <input accept=".jpg , .png" type="file" id="room_img" name="room_img" class="form-control"
                            style="margin: 14px 0 0 0 ;" onChange="readURL(this);"
                            value="<?php echo  $roomBy[0]['room_img']; ?>">
                            <input  type="hidden" id="room_id" name="room_id" class="form-control"
                            value="<?php echo  $roomBy[0]['room_id']; ?>">
                    </div>
                </div>
                        <div class="text-left">
                            <div class="form-group">
                                <label>Room Type <font color="#F00"><b>*</b></font></label> <br />
                                <select class="form-control  custom-select" id="room_type_id" name="room_type_id">
                                    <?PHP  for ($i=0; $i < count($room_type); $i++) {  ?>
                                    <option value="<?PHP echo $room_type[$i]['room_type_id'];?>" <?PHP
                                        if($roomBy[0]['room_type_id']==$room_type[$i]['room_type_id']) { echo "selected"
                                        ;} ?>>
                                        <?PHP echo $room_type[$i]['room_type_name_th'];?>
                                        <?PHP echo $room_type[$i]['room_type_name_en'];?>
                                        <?PHP echo $room_type[$i]['room_type_name'];?>
                                    </option>
                                    <?PHP }?>
                                </select>
                                <p class="help-block">Example : Deluxe Junior Suite </p>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Price TH<font color="#F00"><b>*</b></font></label>
                                        <input type="text" id="room_price_th" name="room_price_th" class="form-control"
                                            value="<?PHP echo  $roomBy[0]['room_price_th'];?>" />
                                        <p class="help-block">Example : 2,000 / วัน </p>
                                    </div>
                                </div>


                                <!-- <div class="col-12">

                                    <div class="form-group">
                                        <label>Amout <font color="#F00"><b>*</b></font></label>
                                        <input id="room_amout" name="room_amout" class="form-control"
                                            value="<?PHP echo number_format( $roomBy[0]['room_amout']);?>" />
                                        <p class="help-block">Example : 5 </p>
                                    </div>
                                </div> -->

                            </div>


                        </div>



                    </div>
                </div>



                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Room Name TH <font color="#F00"><b>*</b></font></label>
                                <input id="room_name_th" name="room_name_th" class="form-control"
                                    value="<?PHP echo $roomBy[0]['room_name_th'];?>" />
                                <p class="help-block">Example : Delux Room</p>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Room Name EN <font color="#F00"><b>*</b></font></label>
                                <input id="room_name_en" name="room_name_en" class="form-control"
                                    value="<?PHP echo $roomBy[0]['room_name_en'];?>" />
                                <p class="help-block">Example : Delux Room</p>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label> รายละเอียด <font color="#F00"><b>*</b></font></label>
                                <textarea id="room_sub_title_th" name="room_sub_title_th" class="form-control"
                                    value="<?PHP echo $roomBy[0]['room_sub_title_th'];?>"
                                    rows="6"><?PHP echo $roomBy[0]['room_sub_title_th'];?></textarea>
                                <p class="help-block">Example : Delux Room</p>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label> Detail<font color="#F00"><b>*</b></font></label>
                                <textarea id="room_sub_title_en" name="room_sub_title_en" class="form-control"
                                    value="<?PHP echo $roomBy[0]['room_sub_title_en'];?>"
                                    rows="6"><?PHP echo $roomBy[0]['room_sub_title_en'];?></textarea>
                                <p class="help-block">Example : Delux Room</p>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-6">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Size TH<font color="#F00"><b>*</b></font></label>
                                                <input id="room_size_th" name="room_size_th" class="form-control"
                                                    value="<?PHP echo $roomBy[0]['room_size_th'];?>" />
                                                <p class="help-block">Example : 50 ตารางเมตร </p>
                                            </div>
                                        </div>



                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Detail 1 TH<font color="#F00"><b>*</b></font></label>
                                                <input id="room_detail_1_th" name="room_detail_1_th"
                                                    class="form-control"
                                                    value="<?PHP echo $roomBy[0]['room_detail_1_th'];?>" />
                                                <p class="help-block">Example : ผู้ใหญ่ 2 ท่าน + เด็ก 1 ท่าน </p>
                                            </div>
                                        </div>


                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" <?php if ($roomBy[0]['room_detail_2_th']!=""||$roomBy[0]['room_detail_2_th']!=null){echo 'checked="checked"';} ?>
                                                        id="room_detail_2_th" name="room_detail_2_th">
                                                    <label class="custom-control-label" for="room_detail_2_th">
                                                        ระเบียงส่วนตัว /
                                                        Balcony
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input"<?php if ($roomBy[0]['room_detail_3_th']!=""||$roomBy[0]['room_detail_3_th']!=null){echo 'checked="checked"';} ?>
                                                        id="room_detail_3_th" name="room_detail_3_th">
                                                    <label class="custom-control-label" for="room_detail_3_th">
                                                        WIFI
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input"<?php if ($roomBy[0]['room_facility_1_th']!=""||$roomBy[0]['room_facility_1_th']!=null){echo 'checked="checked"';} ?>
                                                        id="room_facility_1_th" name="room_facility_1_th">
                                                    <label class="custom-control-label" for="room_facility_1_th">
                                                        เครื่องปรับอากาศ / air
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input"<?php if ($roomBy[0]['room_facility_2_th']!=""||$roomBy[0]['room_facility_2_th']!=null){echo 'checked="checked"';} ?>
                                                        id="room_facility_2_th" name="room_facility_2_th">
                                                    <label class="custom-control-label" for="room_facility_2_th">
                                                        โทรศัพท์ / Tel
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Size EN<font color="#F00"><b>*</b></font></label>
                                                <input id="room_size_en" name="room_size_en" class="form-control"
                                                    value="<?PHP echo $roomBy[0]['room_size_en'];?>" />
                                                <p class="help-block">Example : 50 square meters </p>
                                            </div>
                                        </div>


                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Detail 1 EN<font color="#F00"><b>*</b></font></label>
                                                <input id="room_detail_1_en" name="room_detail_1_en"
                                                    class="form-control"
                                                    value="<?PHP echo $roomBy[0]['room_detail_1_en'];?>" />
                                                <p class="help-block">Example : 2 adults + 1 child </p>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



            </div>

        </div>
    </div>


    <br>
    <hr>
    <h1>
        Gallery
    </h1>
    <a href="?content=gallery&action=insert&room_id=<?php echo  $_GET['id']; ?>&gallery_type_id=1"
        class="btn btn-primary float-right">เพิ่มข้อมูล</a>
</form>
<br>
<div class="row">
    <?PHP for ($i=0; $i < count($gallery); $i++) { 
    # code...
?>
    <div class="col-md-3">
        <img id="_img" width="400" src="<?PHP echo $pathImgGallery . $gallery[$i]['gallery_img']; ?>" class="img-fluid"
            alt="">
    </div>
    <?PHP }  ?>
</div>





<script>
CKEDITOR.replace("room_sub_title_th", {
    filebrowserBrowseUrl: '../template/backend/ckfinder/ckfinder.html',
    filebrowserImageBrowseUrl: '../template/backend/ckfinder/ckfinder.html?Type=Images',
    filebrowserFlashBrowseUrl: '../template/backend/ckfinder/ckfinder.html?Type=Flash',
    filebrowserUploadUrl: '../template/backend/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
    filebrowserImageUploadUrl: '../template/backend/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
    filebrowserFlashUploadUrl: '../template/backend/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
});


CKEDITOR.replace("room_sub_title_en", {
    filebrowserBrowseUrl: '../template/backend/ckfinder/ckfinder.html',
    filebrowserImageBrowseUrl: '../template/backend/ckfinder/ckfinder.html?Type=Images',
    filebrowserFlashBrowseUrl: '../template/backend/ckfinder/ckfinder.html?Type=Flash',
    filebrowserUploadUrl: '../template/backend/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
    filebrowserImageUploadUrl: '../template/backend/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
    filebrowserFlashUploadUrl: '../template/backend/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
});
</script>