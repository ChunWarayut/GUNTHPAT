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

                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>Facilities Name <font color="#F00"><b>*</b></font></label>
                                <input id="facilities_name" name="facilities_name" class="form-control"
                                    value="<?PHP echo $facilities[$id]['facilities_name'];?>" />
                                <p class="help-block">Example :CONTACT</p>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>Sub Title <font color="#F00"><b>*</b></font></label>
                                <textarea class="form-control " id="facilities_detail" name="facilities_detail"rows="6"><?PHP echo $facilities[$id]['facilities_detail'];?></textarea>
                                <p class="help-block">Example : </p>
                            </div>
                        </div>



                    </div>

                </div>
            </div>

        </div>
    </div>


</form>