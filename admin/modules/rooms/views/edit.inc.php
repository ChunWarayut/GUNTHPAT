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
            $('#_img').attr('src',   '../img_upload/rooms/default.jpg');
        }
    }

</script>

<form  id="form_target" role="form" method="post"  action="index.php?content=rooms&action=edit" enctype="multipart/form-data">  
<div class="card">
    <div class="card-header">
    <div class="row">
        <div class="col-lg-6">
            <h1>
            หน้าแก้ไขข้อมูลห้อง <?PHP echo $rooms[$id]['room_name'];  ?> 
            </h1>
        </div>
        <div class="col-lg-6">
        
            <button type="submit" class="btn btn-primary float-right">แก้ไข</button>
        </div>
    </div>
    </div>
    <div class="card-body">
        <input type="hidden"  id="room_img_o" name="room_img_o" value="<?php echo  $rooms[$id]['room_img']; ?>" />
        <input type="hidden"  id="room_id" name="room_id" value="<?php echo  $rooms[$id]['room_id']; ?>" />

            <div class="col-12">
        
            </div>
            <div class="row ">
                <div class="col-lg-3">
                    <div class="form-group" align="center">
                        <img id="_img" width="400" src="<?PHP 
                        if ($rooms[$id]['room_img'] != "" || $rooms[$id]['room_img'] != null) { 
                            echo $img_path . $rooms[$id]['room_img']; 
                            } else {
                                echo $img_path . 'default.jpg';
                            }  ?> " class="img-fluid"   alt="">
                        <input accept=".jpg , .png" type="file" id="room_img" name="room_img" class="form-control" style="margin: 14px 0 0 0 ;" onChange="readURL(this);" value="<?php echo  $rooms[$id]['room_img']; ?>">
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="row">
                    
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label>Room Name  <font color="#F00"><b>*</b></font></label>
                                <input id="room_name"  name="room_name" class="form-control" value="<?PHP echo $rooms[$id]['room_name'];?>"  />
                                <p class="help-block">Example : Delux Room</p>
                            </div>
                        </div>
                        
                        
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label>Room Type  <font color="#F00"><b>*</b></font></label>
                                <input id="room_type_name"  name="room_type_name" class="form-control" value="<?PHP echo $rooms[$id]['room_type_name'];?>"  />
                                <p class="help-block">Example : Deluxe Junior Suite </p>
                            </div>
                        </div>
                        
                        
                        <div class="col-lg-2">
                            <div class="form-group">
                                <label>Price  <font color="#F00"><b>*</b></font></label>
                                <input type="number" id="room_price"  name="room_price" class="form-control" value="<?PHP echo  $rooms[$id]['room_price'];?>"  />
                                <p class="help-block">Example : 2,000 </p>
                            </div>
                        </div>
                        
                        
                        <div class="col-lg-2">
                            <div class="form-group">
                                <label>Amout  <font color="#F00"><b>*</b></font></label>
                                <input id="room_amout"  name="room_amout" class="form-control" value="<?PHP echo number_format( $rooms[$id]['room_amout']);?>"  />
                                <p class="help-block">Example : 5  </p>
                            </div>
                        </div>
                        
                        
                        <div class="col-lg-2">
                            <div class="form-group">
                                <label>Size  <font color="#F00"><b>*</b></font></label>
                                <input id="room_size"  name="room_size" class="form-control" value="<?PHP echo $rooms[$id]['room_size'];?>"  />
                                <p class="help-block">Example : 50 ตารางเมตร </p>
                            </div>
                        </div>
                        
                        
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label>Detail 1  <font color="#F00"><b>*</b></font></label>
                                <input id="room_detail_1"  name="room_detail_1" class="form-control" value="<?PHP echo $rooms[$id]['room_detail_1'];?>"  />
                                <p class="help-block">Example : ผู้ใหญ่ 2 ท่าน + เด็ก 1 ท่าน </p>
                            </div>
                        </div>
                        
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label>Detail 2  <font color="#F00"><b>*</b></font></label>
                                <input id="room_detail_2"  name="room_detail_2" class="form-control" value="<?PHP echo $rooms[$id]['room_detail_2'];?>"  />
                                <p class="help-block">Example : ระเบียงส่วนตัว </p>
                            </div>
                        </div>
                        
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label>Detail 3  <font color="#F00"><b>*</b></font></label>
                                <input id="room_detail_3"  name="room_detail_3" class="form-control" value="<?PHP echo $rooms[$id]['room_detail_3'];?>"  />
                                <p class="help-block">Example : วิวห้องหรือสวน </p>
                            </div>
                        </div>
                        
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label>Facility 1  <font color="#F00"><b>*</b></font></label>
                                <input id="room_facility_1"  name="room_facility_1" class="form-control" value="<?PHP echo $rooms[$id]['room_facility_1'];?>"  />
                                <p class="help-block">Example : บริการโทรศัพท์ห้อง </p>
                            </div>
                        </div>
                        
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label>Facility 2  <font color="#F00"><b>*</b></font></label>
                                <input id="room_facility_2"  name="room_facility_2" class="form-control" value="<?PHP echo $rooms[$id]['room_facility_2'];?>"  />
                                <p class="help-block">Example : บริการ WiFi ฟรี </p>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        
    </div>
</div>


</form>