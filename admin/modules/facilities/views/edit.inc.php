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
        $('#_img').attr('src', '../img_upload/facilities/default.jpg');
    }
}
</script>

<form id="form_target" role="form" method="post" action="index.php?content=facilities&action=edit"
    enctype="multipart/form-data">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-lg-6">
                    <h1>
                        หน้าแก้ไขข้อมูลบริการ
                        <?PHP 
echo $facilities[$id]['facilities_name'];  ?>
                    </h1>
                </div>
                <div class="col-lg-6">

                    <button type="submit" class="btn btn-primary float-right">แก้ไข</button>
                </div>
            </div>
        </div>
        <div class="card-body">
            <input type="hidden" id="facilities_img_o" name="facilities_img_o"
                value="<?php echo  $facilities[$id]['facilities_img']; ?>" />
            <input type="hidden" id="facilities_id" name="facilities_id"
                value="<?php echo  $facilities[$id]['facilities_id']; ?>" />

            <div class="col-12">

            </div>
            <div class="row ">
                <div class="col-lg-3">
                    <div class="form-group" align="center">
                        <img id="_img" width="400"
                            src="<?PHP 
                        if ($facilities[$id]['facilities_img'] != "" || $facilities[$id]['facilities_img'] != null) { 
                            echo $img_path . $facilities[$id]['facilities_img']; 
                            } else {
                                echo $img_path . 'default.jpg';
                            }  ?> "
                            class="img-fluid" alt="">
                        <input accept=".jpg , .png" type="file" id="facilities_img" name="facilities_img"
                            class="form-control" style="margin: 14px 0 0 0 ;" onChange="readURL(this);"
                            value="<?php echo  $facilities[$id]['facilities_img']; ?>">
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="row">

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Facilities Name TH <font color="#F00"><b>*</b></font></label>
                                <input id="facilities_name_th" name="facilities_name_th" class="form-control"
                                    value="<?PHP echo $facilities[$id]['facilities_name_th'];?>" />
                                <p class="help-block">Example :CONTACT</p>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Facilities Name EN<font color="#F00"><b>*</b></font></label>
                                <input id="facilities_name_en" name="facilities_name_en" class="form-control"
                                    value="<?PHP echo $facilities[$id]['facilities_name_en'];?>" />
                                <p class="help-block">Example :CONTACT</p>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Sub Title TH <font color="#F00"><b>*</b></font></label>
                                <textarea class="form-control " id="facilities_detail_th" name="facilities_detail_th"rows="6"><?PHP echo $facilities[$id]['facilities_detail_th'];?></textarea>
                                <p class="help-block">Example : </p>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Sub Title EN<font color="#F00"><b>*</b></font></label>
                                <textarea class="form-control " id="facilities_detail_en" name="facilities_detail_en"rows="6"><?PHP echo $facilities[$id]['facilities_detail_en'];?></textarea>
                                <p class="help-block">Example : </p>
                            </div>
                        </div>



                    </div>

                </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Facilities Detail 1 TH<font color="#F00"><b>*</b></font></label>
                                <input id="facilities_detail_1_th" name="facilities_detail_1_th" class="form-control"
                                    value="<?PHP echo $facilities[$id]['facilities_detail_1_th'];?>" />
                                <p class="help-block">Example :CONTACT</p>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Facilities Detail 1 EN<font color="#F00"><b>*</b></font></label>
                                <input id="facilities_detail_1_en" name="facilities_detail_1_en" class="form-control"
                                    value="<?PHP echo $facilities[$id]['facilities_detail_1_en'];?>" />
                                <p class="help-block">Example :CONTACT</p>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Facilities Detail 2 TH<font color="#F00"><b>*</b></font></label>
                                <input id="facilities_detail_2_th" name="facilities_detail_2_th" class="form-control"
                                    value="<?PHP echo $facilities[$id]['facilities_detail_2_th'];?>" />
                                <p class="help-block">Example :CONTACT</p>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Facilities Detail 2 EN<font color="#F00"><b>*</b></font></label>
                                <input id="facilities_detail_2_en" name="facilities_detail_2_en" class="form-control"
                                    value="<?PHP echo $facilities[$id]['facilities_detail_2_en'];?>" />
                                <p class="help-block">Example :CONTACT</p>
                            </div>
                        </div>
            </div>

        </div>
    </div>


</form>