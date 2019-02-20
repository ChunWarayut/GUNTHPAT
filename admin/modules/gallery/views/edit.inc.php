<script>
    //---------ฟังชั่นแสดงรูป----------------
    function readURL(input) {
        if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#_img').attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
        }else{
            $('#_img').attr('src',   '../img_upload/gallery/default.png');
        }
    }

</script>

<form id="form_target" role="form" method="post" action="index.php?content=gallery&action=edit" enctype="multipart/form-data">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-lg-6">
                    <h1>
                        หน้าแก้ไขข้อมูล Gallery
                        <?PHP 
use Monolog\Handler\PHPConsoleHandler;
echo $gallery[$id]['gallery_name'];  ?>
                    </h1>
                </div>
                <div class="col-lg-6">

                    <button type="submit" class="btn btn-primary float-right">แก้ไข</button>
                </div>
            </div>
        </div>
        <div class="card-body">
            <input type="hidden" id="gallery_img_o" name="gallery_img_o" value="<?php echo  $gallery[$id]['gallery_img']; ?>" />
            <input type="hidden" id="gallery_id" name="gallery_id" value="<?php echo  $gallery[$id]['gallery_id']; ?>" />

            <div class="col-12">

            </div>
            <div class="row ">
                <div class="col-lg-3">
                    <div class="form-group" align="center">
                        <img id="_img" width="400" src="<?PHP 
                        if ($gallery[$id]['gallery_img'] != "" || $gallery[$id]['gallery_img'] != null) { 
                            echo $img_path . $gallery[$id]['gallery_img']; 
                            } else {
                                echo $img_path . 'default.png';
                            }  ?> "
                            class="img-fluid" alt="">
                        <input accept=".jpg , .png" type="file" id="gallery_img" name="gallery_img" class="form-control"
                            style="margin: 14px 0 0 0 ;" onChange="readURL(this);" value="<?php echo  $gallery[$id]['gallery_img']; ?>">
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="row">

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Gallery Name TH <font color="#F00"><b>*</b></font></label>
                                <input id="gallery_name_th" name="gallery_name_th" class="form-control" value="<?PHP echo $gallery[$id]['gallery_name_th'];?>" />
                                <p class="help-block">Example :CONTACT</p>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Gallery Name EN<font color="#F00"><b>*</b></font></label>
                                <input id="gallery_name_en" name="gallery_name_en" class="form-control" value="<?PHP echo $gallery[$id]['gallery_name_en'];?>" />
                                <p class="help-block">Example :CONTACT</p>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="form-group">

                                <label>Gallery Type <font color="#F00"><b>*</b></font></label> <br />
                                <select class="form-control  custom-select" id="gallery_type_id" name="gallery_type_id">
                                    </option>
                                    <?PHP #endregion
                                for ($i=0; $i < count($gallery_type); $i++) { 
                                    # code...
                                ?>
                                    <option  value="<?PHP echo $gallery_type[$i]['gallery_type_id'];?>"  <?PHP if ($gallery_type[$type-1]['gallery_type_id'] == $gallery_type[$i]['gallery_type_id'])  { echo 'selected'; } ?>>
                                        <?PHP echo $gallery_type[$i]['gallery_type_name'];?>
                                    </option>
                                    <?PHP 
                                }
                                ?>
                                </select>
                                <p class="help-block">Example : ที่พัก </p>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="form-group">

                                <label> ROOM <font color="#F00"><b>*</b></font></label> <br />
                                <select class="form-control  custom-select" id="room_id" name="room_id">
                                <option  value=""> อื่น ๆ </option> <?PHP for ($i=0; $i < count($rooms); $i++) { ?>
                                    <option  value="<?PHP echo $rooms[$i]['room_id'];?>" <?PHP if ($rooms[$type-1]['room_id'] == $rooms[$i]['room_id'])  { echo 'selected'; } ?>>
                                        <?PHP echo $rooms[$i]['room_name'];?>
                                    </option>
                                    <?PHP }  ?>
                                </select>
                                <p class="help-block">Example : Delux Room </p>
                            </div>
                        </div>



                    </div>

                </div>
            </div>

        </div>
    </div>


</form>