<div class="container" style="">

    <div class="text-center" style=" padding-bottom:8%">
        <h1>
            <span class="text">
                CONTACT
            </span>
            <span class="text" style="color:#f47322; ">
                US
            </span>
        </h1>
    </div>
</div>
<div class="container" style="">
    <div class="row">

        <div class="col-lg-4">
            <img src=" <?PHP
                        echo $pathImgContact_us . $contact_us[0]['contact_us_img'];
                        ?>"
                style=" padding-bottom:8%"
                class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="">
        </div>

        <div class="col-lg-8" style="padding-bottom:8%;">
            <h4 class="font-weight-light">
                <span class="text2">
                    <?PHP echo $contact_us[0]['contact_us_title']; ?>
                </span>
            </h4>
            <p class="font-weight-light">
                <span class="text2">
                    <?PHP echo $contact_us[0]['contact_us_sub_title']; ?>
                </span>
            </p>
            <hr>
            <div class="container">
                <div class="row">
                    <div class="col-sm-auto">
                        <div class="row">
                            <div class="col-1">
                                <i class="fab fa-facebook-square" style="font-size:20px"></i> &nbsp;
                            </div>
                            <div class="col-10">
                                <span class="text2">
                                    <a href="<?PHP echo $contact_us[0]['contact_us_facebook']; ?>">
                                        <p class="font-weight-light">
                                            <?PHP echo $contact_us[0]['contact_us_facebook']; ?>
                                        </p>
                                    </a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-auto">
                        <div class="container">
                            <div class="row">
                                <i class="fas fa-phone-volume" style="font-size:20px"></i>&nbsp;
                                <span class="text2">
                                    <a href="tel:<?PHP echo $contact_us[0]['contact_us_tel']; ?>">
                                        <p class="font-weight-light">
                                            <?PHP echo $contact_us[0]['contact_us_tel']; ?>
                                        </p>
                                </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <h4 class="font-weight-light;" style="margin-top: 25;">
                <span class="text">
                    รายละเอียดการติดต่อ
                </span>
            </h4>
            <div class="col-2">
                <hr style="border-top: 2px solid #f47322">
            </div>
            <div class="container">

                <div class="row">
                    <div class="col-1">
                        <i class="fas fa-map-marker-alt" style="font-size:20px"></i>
                    </div>
                    <div class="col-auto">
                        <p class="font-weight-light">
                            <span class="text2">
                                <?PHP echo $contact_us[0]['contact_us_address']; ?><br>
                                <?PHP echo $contact_us[0]['contact_us_address_1']; ?>
                                <?PHP echo $contact_us[0]['contact_us_address_2']; ?>
                                <?PHP echo $contact_us[0]['contact_us_address_3']; ?>
                                <?PHP echo $contact_us[0]['contact_us_address_4']; ?>
                            </span>
                            </a>
                        </p>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-auto">
                        <i class="fas fa-phone-volume" style="font-size:20px"></i>
                    </div>
                    <div class="col-auto">
                        <p class="font-weight-light"> &nbsp;
                            <span class="text2">
                                <?PHP echo $contact_us[0]['contact_us_fax']; ?>
                            </span>
                        </p>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-auto">
                        <i class="fas fa-envelope" style="font-size:20px"></i>
                    </div>
                    <div class="col-auto">
                        <a href="mailto:<?PHP echo $contact_us[0]['contact_us_email']; ?>">
                            <p class="font-weight-light"> &nbsp;
                                <span class="text2">
                                    <?PHP echo $contact_us[0]['contact_us_email']; ?>
                                </span>
                            </p>
                        </a>
                    </div>
                </div>
                <br>
                <div class="container">
                    <div class="col">
                        <a href="" class="btn btn-primary text-uppercase js-scroll-trigger"
                            style="padding-left:8%; padding-right:8%">
                            <span class="text">
                                ติดต่อเรา
                            </span> </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="p-3 mb-2 bg-light text-dark">
    <div class="row">
        <div class="col-md-6">

            <h4>
                <p class="text">
                    การเดินทางมายังโรงแรม
                </p>
            </h4>
            <div class="col-2">
                <hr style="border-top: 2px solid #f47322">
            </div>
            <div class="dropdown" style="padding-left:10%;padding-bottom:3%;">
                <a class="btn btn-secondary dropdown-toggle" href="<?PHP echo $contact_us[0]['contact_us_map']; ?>">
                  
                        <span class="text">
                            ดาวโหลดแผนที่
                        </span> 
                </a>
            </div>


            <div id="accordion">
                <div class="card">
                    <div class="card-header">
                        <a class="card-link" data-toggle="collapse" href="#collapseOne">
                            <span class="text">
                                <?PHP echo $contact_us[0]['contact_us_carry_title']; ?>
                            </span>
                        </a>
                    </div>
                    <div id="collapseOne" class="collapse show bg-light text-dark" data-parent="#accordion">
                        <div class="card-body">
                            <span class="text">
                                <?PHP echo $contact_us[0]['contact_us_carry_detail']; ?>
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
                        <span class="text">
                            <?PHP echo $contact_us[0]['contact_us_taxi_title']; ?>
                        </span>
                    </a>
                </div>
                <div id="collapseTwo" class="collapse  bg-light text-dark" data-parent="#accordion">
                    <div class="card-body">
                        <span class="text">
                            <?PHP echo $contact_us[0]['contact_us_taxi_detail']; ?>
                        </span>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
                        <span class="text">
                            <?PHP echo $contact_us[0]['contact_us_car_titel']; ?>
                        </span>
                    </a>
                </div>
                <div id="collapseThree" class="collapse  bg-light text-dark" data-parent="#accordion">
                    <div class="card-body">
                        <span class="text">
                            <?PHP echo $contact_us[0]['contact_us_car_detail']; ?>
                        </span>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-md-6">
            <div style="">
                <fieldset class="gllpLatlonPicker" style="margin: -14; height: auto;">
                    <div class="gllpMap" style="width: 100%;  height: 50%;">Google Maps</div>
                    <!-- <div class="gllpMap" style="width: 100%; height: 80%;">Google Maps</div> -->
                    <input type="text" class="gllpLatitude form-control" name="contact_us_map_latitude" value="<?PHP echo $contact_us[0]['contact_us_map_latitude']; ?>"
                        hidden />
                    <input type="text" class="gllpLongitude form-control" name="contact_us_map_longitude" value="<?PHP echo $contact_us[0]['contact_us_map_longitude']; ?>"
                        hidden />
                    <input type="hidden" class="gllpZoom" value="14" />
                </fieldset>
            </div>
        </div>
    </div>
</div>


<div class="container" style="padding-top:8%">
    <div class="row">

        <div class="col-md-6">
            <h4>
                <p class="text">
                    พูดคุยกับเรา
                </p>
            </h4>
            <div class="col-2">
                <hr style="border-top: 2px solid #f47322">
            </div>
            <p class="text">
                <?PHP echo $contact_head[0]['contact_head_detail']; ?>
            </p>
        </div>
        <div class="col-md-6">
            <form id="form_target" role="form" method="post" action="contact_us.php?&action=add">
                <div class="row">
                    <div class="col-lg-6">
                        <label class="text">ชื่อเรื่อง <font color="#F00"><b>*</b></font></label>
                        <select class="form-control  custom-select" id="contact_title_id" name="contact_title_id">
                            <?PHP for ($i=0; $i < count($contact_title); $i++) { ?>
                            <option selected value="<?PHP echo $contact_title[$i]['contact_title_id'];   ?>">
                                <?PHP echo $contact_title[$i]['contact_title_name'];   ?>
                            </option>
                            <?PHP } ?>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <label class="text">ชื่อ <font color="#F00"><b>*</b></font></label>
                        <input id="contact_firstname" name="contact_firstname" class="form-control" autocomplete="off">
                    </div>
                    <div class="col-lg-6">
                        <label class="text">นามสกุล <font color="#F00"><b>*</b></font></label>
                        <input id="contact_lastname" name="contact_lastname" class="form-control" autocomplete="off">
                    </div>
                    <div class="col-lg-6">
                        <label class="text">Email <font color="#F00"><b>*</b></font></label>
                        <input id="contact_email" name="contact_email" class="form-control" autocomplete="off">
                    </div>
                    <div class="col-lg-6">
                        <label class="text">หมายลขโทรศัพท์ <font color="#F00"><b>*</b></font></label>
                        <input id="contact_tel" name="contact_tel" class="form-control" autocomplete="off">
                    </div>
                    <div class="col-lg-6">
                        <label class="text">ประเทศ <font color="#F00"><b>*</b></font></label>
                        <select class="form-control  custom-select" id="contact_country" name="contact_country">
                            <?PHP for ($i=0; $i < count($country); $i++) { 
                                # code...
                            ?>
                            <option value="<?PHP echo $country[$i]['ct_code'];?>">
                                <?PHP echo $country[$i]['ct_nameTHA'];?>
                            </option>
                            <?PHP } ?>
                        </select>
                    </div>
                    <div class="col-lg-6">
                        <label class="text">ประเภทของคำถาม <font color="#F00"><b>*</b></font></label>
                        <select class="form-control  custom-select" id="contact_type_id" name="contact_type_id">
                            <?PHP for ($i=0; $i < count($contact_type); $i++) { 
                                # code...
                            ?>
                            <option value="<?PHP echo $contact_type[$i]['contact_type_id'];?>">
                                <?PHP echo $contact_type[$i]['contact_type_name'];?>
                            </option>
                            <?PHP } ?>
                        </select>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="text"> ข้อความ <font color="#F00"><b>*</b></font></label>
                            <textarea class="form-control " id="contact_text" name="contact_text" rows="6">
                                </textarea>
                        </div>
                    </div>
                    <div class="col-lg-12" align="center">

                        <button type="submit" name="" id="" class="btn btn-primary btn-md" btn-block
                            style="width: 150px; text-align: center; margin:0 auto;">
                            <span class="text">
                                ส่ง
                            </span></button>
                    </div>
                </div>  
            </form>
        </div>
    </div>
</div>





<script src="https://maps-api-ssl.google.com/maps/api/js?key=AIzaSyBPYt_mZGd-2iotzhpiZKw1_GpZ6H9w3vs&sensor=false">
</script>
<script src="template/map/js/jquery-gmaps-latlon-picker.js"></script>