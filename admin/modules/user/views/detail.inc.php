<h1>ดูข้อมูลผู้ดูเเลระบบ</h1>

<div class="row">
    <div class="col-lg-9">
        <div class="row">
            <div class="col-lg-4">
                <div class="form-group">
                    <label>ชื่อ <font color="#F00"><b>*</b></font></label>
                    <input id="user_firstname" name="user_firstname" class="form-control" value="<?php echo $user['user_firstname']?>" autocomplete="off" readonly>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <label>นามสกุล <font color="#F00"><b>*</b></font></label>
                    <input id="user_lastname" name="user_lastname" class="form-control" value="<?php echo $user['user_lastname']?>" autocomplete="off" readonly>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <label>เบอร์โทรศัพท์ </label>
                    <input id="user_phone" name="user_phone" class="form-control" value="<?php echo $user['user_phone']?>" autocomplete="off" readonly>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="form-group">
                    <label>ที่อยู่อีเมล </label>
                    <input id="user_email" name="user_email" class="form-control" value="<?php echo $user['user_email']?>" autocomplete="off" readonly>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label>FACEBOOK URL </label>
                    <input id="user_facebook" name="user_facebook" class="form-control" value="<?php echo $user['user_facebook']?>" autocomplete="off" readonly>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label>LINE ID </label>
                    <input id="user_line" name="user_line" class="form-control" value="<?php echo $user['user_line']?>" autocomplete="off" readonly>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-3">
        <div class="form-group" align="center">
            <img id="img_user" src="../img_upload/user/<?php if($user['user_image'] != "" ){echo $user['user_image'];}else{ echo "default.png"; }?>" class="example-avater"> 
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="form-group">
            <label>ที่อยู่ <font color="#F00"><b>*</b></font> </label>
            <textarea type="text" id="user_address" name="user_address" class="form-control" readonly><?php echo $user['user_address']?></textarea>
            <p class="help-block">Example : 271/55.</p>
        </div>
    </div>
</div>
<!-- /.row (nested) -->

<div class="row">
    <div class="col-lg-3">
        <div class="form-group">
            <label>จังหวัด <font color="#F00"><b>*</b></font> </label>
            <input id="user_province" name="user_province" type="text" class="form-control" value="<?php echo $user['user_province']?>" readonly>
        </div>
    </div>

    <div class="col-lg-3">
        <div class="form-group">
            <label>อำเภอ/เขต <font color="#F00"><b>*</b></font> </label>
            <input id="user_amphur" name="user_amphur" type="text" class="form-control" value="<?php echo $user['user_amphur']?>" readonly>
        </div>
    </div>

    <div class="col-lg-3">
        <div class="form-group">
            <label>ตำบล/แขวง <font color="#F00"><b>*</b></font> </label>
            <input id="user_district" name="user_district" type="text" class="form-control" value="<?php echo $user['user_district']?>" readonly>
        </div>
    </div>

    <div class="col-lg-3">
        <div class="form-group">
            <label>หมายเลขไปรษณีย์ <font color="#F00"><b>*</b></font> </label>
            <input id="user_zipcode" name="user_zipcode" type="text" class="form-control" value="<?php echo $user['user_zipcode']?>" readonly>
        </div>
    </div>
</div>

<div align="right">
    <button type="button" class="btn btn-default" onclick="window.location='?content=user';" >ย้อนกลับ</button>
</div>