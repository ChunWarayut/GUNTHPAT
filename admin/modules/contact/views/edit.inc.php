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
            $('#_img').attr('src',   '../img_upload/contact/default.png');
        }
    }

</script>

<form id="form_target" role="form" method="post" action="index.php?content=contact&action=edit" enctype="multipart/form-data">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-lg-6">
                    <h1>
                        หน้าแก้ไขข้อมูล Gallary
                        <?PHP 
use Monolog\Handler\PHPConsoleHandler;
echo $contact[$id]['contact_name'];  ?>
                    </h1>
                </div>
                <div class="col-lg-6">

                    <button type="submit" class="btn btn-primary float-right">แก้ไข</button>
                </div>
            </div>
        </div>
        <div class="card-body">
            <input type="hidden" id="contact_img_o" name="contact_img_o" value="<?php echo  $contact[$id]['contact_img']; ?>" />
            <input type="hidden" id="contact_id" name="contact_id" value="<?php echo  $contact[$id]['contact_id']; ?>" />

            <div class="col-12">

            </div>
            <div class="row ">
                <div class="col-lg-3">
                    <div class="form-group" align="center">
                        <img id="_img" width="400" src="<?PHP 
                        if ($contact[$id]['contact_img'] != "" || $contact[$id]['contact_img'] != null) { 
                            echo $img_path . $contact[$id]['contact_img']; 
                            } else {
                                echo $img_path . 'default.png';
                            }  ?> "
                            class="img-fluid" alt="">
                        <input accept=".jpg , .png" type="file" id="contact_img" name="contact_img" class="form-control"
                            style="margin: 14px 0 0 0 ;" onChange="readURL(this);" value="<?php echo  $contact[$id]['contact_img']; ?>">
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="row">

                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>Gallary Name <font color="#F00"><b>*</b></font></label>
                                <input id="contact_name" name="contact_name" class="form-control" value="<?PHP echo $contact[$id]['contact_name'];?>" />
                                <p class="help-block">Example :CONTACT</p>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="form-group">

                                <label>Gallary Type <font color="#F00"><b>*</b></font></label> <br />
                                <select class="form-control  custom-select" id="contact_type_id" name="contact_type_id">
                                    <option selected value="<?PHP echo $contact_type[$type-1]['contact_type_id'];?>">
                                        <?PHP echo $contact_type[$type-1]['contact_type_name'];?>
                                    </option>
                                    <?PHP #endregion
                                for ($i=0; $i < count($contact_type); $i++) { 
                                    # code...
                                ?>
                                    <option value="<?PHP echo $contact_type[$i]['contact_type_id'];?>">
                                        <?PHP echo $contact_type[$i]['contact_type_name'];?>
                                    </option>
                                    <?PHP 
                                }
                                ?>
                                </select>
                                <p class="help-block">Example : ที่พัก </p>
                            </div>
                        </div>



                    </div>

                </div>
            </div>

        </div>
    </div>


</form>