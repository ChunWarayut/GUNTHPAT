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
            $('#_img').attr('src', '../img_upload/contact_us/default.jpg');
        }
    }
</script>

<form id="form_target" role="form" method="post" action="index.php?content=contact_us&action=insert"
    enctype="multipart/form-data">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-lg-6">
                    <h1>
                        หน้าเพิ่มข้อมูล Contact Us
                        <?PHP 
echo $contact_us[$id]['contact_us_title'];  ?>
                    </h1>
                </div>
                <div class="col-lg-6">

                    <button type="submit" class="btn btn-primary float-right">เพิ่ม</button>
                </div>
            </div>
        </div>
        <div class="card-body">
            <input type="hidden" id="contact_us_img_o" name="contact_us_img_o"
                value="<?php echo  $contact_us[$id]['contact_us_img']; ?>" />
            <input type="hidden" id="contact_us_id" name="contact_us_id"
                value="<?php echo  $contact_us[$id]['contact_us_id']; ?>" />


            <div class="row ">
                
                    <div class="col-lg-2">
                        <div class="form-group">
                            <label> Title <font color="#F00"><b>*</b></font></label>
                            <input id="contact_us_title" name="contact_us_title" class="form-control"
                                value="<?PHP echo $contact_us[$id]['contact_us_title'];?>" />
                            <p class="help-block">Example : ...</p>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="form-group">
                            <label> Sub Title <font color="#F00"><b>*</b></font></label>
                            <input id="contact_us_sub_title" name="contact_us_sub_title" class="form-control"
                                value="<?PHP echo $contact_us[$id]['contact_us_sub_title'];?>" />
                            <p class="help-block">Example : ...</p>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="form-group">
                            <label> Facebook <font color="#F00"><b>*</b></font></label>
                            <input id="contact_us_facebook" name="contact_us_facebook" class="form-control"
                                value="<?PHP echo $contact_us[$id]['contact_us_facebook'];?>" />
                            <p class="help-block">Example : ...</p>
                        </div>
                    </div>
                
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label> Tel <font color="#F00"><b>*</b></font></label>
                            <input  id="contact_us_tel" name="contact_us_tel" class="form-control"
                                value="<?PHP echo $contact_us[$id]['contact_us_tel'];?>" />
                            <p class="help-block">Example : ...</p>
                        </div>
                    </div>

                    <div class="col-lg-8">
                        <div class="form-group">
                            <label> Address  <font color="#F00"><b>*</b></font></label>
                            <input id="contact_us_address" name="contact_us_address" class="form-control"
                                value="<?PHP echo $contact_us[$id]['contact_us_address'];?>" />
                            <p class="help-block">Example : ...</p>
                        </div>
                    </div>

                    <div class="col-lg-2">
                        <div class="form-group">
                            <label> Fax <font color="#F00"><b>*</b></font></label>
                            <input id="contact_us_fax" name="contact_us_fax" class="form-control"
                                value="<?PHP echo $contact_us[$id]['contact_us_fax'];?>" />
                            <p class="help-block">Example : ...</p>
                        </div>
                    </div>
                
                    <div class="col-lg-2">
                        <div class="form-group">
                            <label> Email <font color="#F00"><b>*</b></font></label>
                            <input id="contact_us_email" name="contact_us_email" class="form-control"
                                value="<?PHP echo $contact_us[$id]['contact_us_email'];?>" />
                            <p class="help-block">Example : ...</p>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="form-group">
                            <label> Carry Title <font color="#F00"><b>*</b></font></label>
                            <input id="contact_us_carry_title" name="contact_us_carry_title" class="form-control"
                                value="<?PHP echo $contact_us[$id]['contact_us_carry_title'];?>" />
                            <p class="help-block">Example : ...</p>
                        </div>
                    </div>

                    <div class="col-lg-8">
                        <div class="form-group">
                            <label> Carry Detail <font color="#F00"><b>*</b></font></label>
                            <input id="contact_us_carry_detail" name="contact_us_carry_detail" class="form-control"
                                value="<?PHP echo $contact_us[$id]['contact_us_carry_detail'];?>" />
                            <p class="help-block">Example : ...</p>
                        </div>
                    </div>
                
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label> Taxi Title <font color="#F00"><b>*</b></font></label>
                            <input id="contact_us_taxi_title" name="contact_us_taxi_title" class="form-control"
                                value="<?PHP echo $contact_us[$id]['contact_us_taxi_title'];?>" />
                            <p class="help-block">Example : ...</p>
                        </div>
                    </div>

                    <div class="col-lg-8">
                        <div class="form-group">
                            <label> Taxi Detai <font color="#F00"><b>*</b></font></label>
                            <input id="contact_us_taxi_detail" name="contact_us_taxi_detail" class="form-control"
                                value="<?PHP echo $contact_us[$id]['contact_us_taxi_detail'];?>" />
                            <p class="help-block">Example : ...</p>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="form-group">
                            <label> Car Title <font color="#F00"><b>*</b></font></label>
                            <input id="contact_us_car_titel" name="contact_us_car_titel" class="form-control"
                                value="<?PHP echo $contact_us[$id]['contact_us_car_titel'];?>" />
                            <p class="help-block">Example : ...</p>
                        </div>
                    </div>
                
                    <div class="col-lg-8">
                        <div class="form-group">
                            <label> Car Detail <font color="#F00"><b>*</b></font></label>
                            <input id="contact_us_car_detail" name="contact_us_car_detail" class="form-control"
                                value="<?PHP echo $contact_us[$id]['contact_us_car_detail'];?>" />
                            <p class="help-block">Example : ...</p>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="form-group">
                            <label> Map <font color="#F00"><b>*</b></font></label>
                            <input id="contact_us_map" name="contact_us_map" class="form-control"
                                value="<?PHP echo $contact_us[$id]['contact_us_map'];?>" />
                            <p class="help-block">Example : ...</p>
                        </div>
                    </div>

                </div>

        </div>
    </div>


</form>