<script>

    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#img_user').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }else{
            $('#img_user').attr('src', '../img_upload/user/default.png');
        }
    }
</script>

<h1>เเก้ไขข้อมูลผู้ดูเเลระบบ</h1>
<div align="right">

</div>

<form role="form" method="post" action="index.php?content=user&action=edit" enctype="multipart/form-data">
    <div class="row">
        <div class="col-lg-9">
            <div class="row">
                <div class="col-lg-3">
                    <div class="form-group">
                        <label>username <font color="#F00"><b>*</b></font></label>
                        <input id="user_username" name="user_username" class="form-control" value="<?php echo $user['user_username']?>" autocomplete="off">
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-group">
                        <label>password <font color="#F00"><b>*</b></font></label>
                        <input id="user_password" name="user_password" class="form-control" value="<?php echo $user['user_password']?>" autocomplete="off">
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-group">
                        <label>ประเภทผู้ดูเเล <font color="#F00"><b>*</b></font></label>
                        <select id="user_type_id" name="user_type_id" class="form-control">
                            <?php 
                            for($i =  0 ; $i < count($user_type) ; $i++){
                            ?>
                                <option <?php if($user['user_type_id'] == $user_type[$i]['user_type_id'] ){?> selected <?php } ?> value="<?php echo $user_type[$i]['user_type_id'] ?>"><?php echo $user_type[$i]['user_type_name'] ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="form-group">
                        <label>ชื่อ <font color="#F00"><b>*</b></font></label>
                        <input id="user_firstname" name="user_firstname" class="form-control" value="<?php echo $user['user_firstname']?>" autocomplete="off">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <label>นามสกุล <font color="#F00"><b>*</b></font></label>
                        <input id="user_lastname" name="user_lastname" class="form-control" value="<?php echo $user['user_lastname']?>" autocomplete="off">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <label>เบอร์โทรศัพท์ </label>
                        <input id="user_phone" name="user_phone" class="form-control" value="<?php echo $user['user_phone']?>" autocomplete="off">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>ที่อยู่อีเมล </label>
                        <input id="user_email" name="user_email" class="form-control" value="<?php echo $user['user_email']?>" autocomplete="off">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>FACEBOOK URL </label>
                        <input id="user_facebook" name="user_facebook" class="form-control" value="<?php echo $user['user_facebook']?>" autocomplete="off">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>LINE ID </label>
                        <input id="user_line" name="user_line" class="form-control" value="<?php echo $user['user_line']?>" autocomplete="off">
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-3">
            <div class="form-group" align="center">
                <img id="img_user" src="../img_upload/user/<?php if($user['user_image'] != "" ){echo $user['user_image'];}else{ echo "default.png"; }?>" class="example-avater"> 
                <input accept=".jpg , .png" type="file" id="user_image" name="user_image" class="form-control" style="margin: 14px 0 0 0 ;" onChange="readURL(this);" value="<?php echo $user['user_image']?>">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="form-group">
                <label>ที่อยู่ <font color="#F00"><b>*</b></font> </label>
                <textarea type="text" id="user_address" name="user_address" class="form-control" ><?php echo $user['user_address']?></textarea>
                <p class="help-block">Example : 271/55.</p>
            </div>
        </div>
    </div>
    <!-- /.row (nested) -->

    <div class="row">
        <div class="col-lg-3">
            <div class="form-group">
                <label>จังหวัด <font color="#F00"><b>*</b></font> </label>
                <input id="user_province" name="user_province" type="text" class="form-control" value="<?php echo $user['user_province']?>">
            </div>
        </div>

        <div class="col-lg-3">
            <div class="form-group">
                <label>อำเภอ/เขต <font color="#F00"><b>*</b></font> </label>
                <input id="user_amphur" name="user_amphur" type="text" class="form-control" value="<?php echo $user['user_amphur']?>">
            </div>
        </div>

        <div class="col-lg-3">
            <div class="form-group">
                <label>ตำบล/แขวง <font color="#F00"><b>*</b></font> </label>
                <input id="user_district" name="user_district" type="text" class="form-control" value="<?php echo $user['user_district']?>">
            </div>
        </div>

        <div class="col-lg-3">
            <div class="form-group">
                <label>หมายเลขไปรษณีย์ <font color="#F00"><b>*</b></font> </label>
                <input id="user_zipcode" name="user_zipcode" type="text" class="form-control" value="<?php echo $user['user_zipcode']?>">
            </div>
        </div>
    </div>

    <div align="right">
        <input type="hidden"  id="user_id" name="user_id" value="<?php echo $user['user_id'] ?>" />
        <input type="hidden"  id="user_image_o" name="user_image_o" value="<?php echo  $user['user_image'] ?>" />
        <button type="button" class="btn btn-default" onclick="window.location='?content=user';" >ย้อนกลับ</button>
        <button type="reset" class="btn btn-primary">ล้างข้อมูล</button>
        <button name="submit" type="submit" class="btn btn-success">บันทึกข้อมูล</button>
    </div>
</form>