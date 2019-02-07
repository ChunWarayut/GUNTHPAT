<div class="container" style=" padding-bottom:8%">

    <div class="text-center" style="padding-top: 8%; padding-bottom:8%">
        <h1>
            <span>
                CONTACT
            </span>
            <span style="color:#f47322; ">
                US
            </span>
        </h1>
    </div>

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
                <span>
                    <?PHP echo $contact_us[0]['contact_us_title']; ?>
                </span>
            </h4>
            <p class="font-weight-light">
                <span>
                    <?PHP echo $contact_us[0]['contact_us_sub_title']; ?>
                </span>
            </p>
            <hr>
            <div class="container">
                <div class="row">
                    <div class="col-sm-auto">
                        <div class="row">
                            <div class="col-1">
                                <i class="fab fa-facebook-square" style="font-size:30px"></i> &nbsp;
                            </div>
                            <div class="col-10">
                                <a href="<?PHP echo $contact_us[0]['contact_us_facebook']; ?>">
                                    <p class="font-weight-light">
                                        <?PHP echo $contact_us[0]['contact_us_facebook']; ?>
                                    </p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-auto">
                        <div class="container">
                            <div class="row">
                                <i class="fas fa-phone-volume" style="font-size:30px"></i>&nbsp;
                                <a href="tel:<?PHP echo $contact_us[0]['contact_us_tel']; ?>">
                                    <p class="font-weight-light">
                                        <?PHP echo $contact_us[0]['contact_us_tel']; ?>
                                    </p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <p class="font-weight-light"><u>รายละเอีย</u>ดการติดต่อ</p>
            <div class="container">

                <div class="row">
                    <div class="col-1">
                        <i class="fas fa-map-marker" style="font-size:40px"></i>
                    </div>
                    <div class="col-auto">
                        <p class="font-weight-light"> &nbsp;
                            <?PHP echo $contact_us[0]['contact_us_address']; ?><br>
                            <?PHP echo $contact_us[0]['contact_us_address_1']; ?>
                            <?PHP echo $contact_us[0]['contact_us_address_2']; ?>
                            <?PHP echo $contact_us[0]['contact_us_address_3']; ?>
                            <?PHP echo $contact_us[0]['contact_us_address_4']; ?>
                        </p>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-auto">
                        <i class="fas fa-phone-volume" style="font-size:40px"></i>
                    </div>
                    <div class="col-auto">
                        <p class="font-weight-light"> &nbsp;
                            <?PHP echo $contact_us[0]['contact_us_fax']; ?>
                        </p>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-auto">
                        <i class="fas fa-envelope" style="font-size:40px"></i>
                    </div>
                    <div class="col-auto">
                        <a href="mailto:<?PHP echo $contact_us[0]['contact_us_email']; ?>">
                            <p class="font-weight-light"> &nbsp;
                                <?PHP echo $contact_us[0]['contact_us_email']; ?>
                            </p>
                        </a>
                    </div>
                </div>
                <br>
                <div class="container">
                    <div class="col">
                        <a href="" class="btn btn-primary text-uppercase js-scroll-trigger"
                            style="padding-left:8%; padding-right:8%"> ติดต่อเรา </a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="p-3 mb-2 bg-light text-dark">
        <div class="row">
            <div class="col-md-6">

                <h4>
                    <p class="font-weight-light">
                        <u>การเดินทางมา</u>ยังโรงแรม
                    </p>
                </h4>
                <div class="dropdown" style="padding-left:10%;padding-bottom:3%;">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        ดาวโหลดแผนที่
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Action</a>
                    </div>
                </div>

                <div id="accordion">

                    <div class="card">
                        <div class="card-header">
                            <a class="card-link" data-toggle="collapse" href="#collapseOne">
                                Collapsible Group Item #1
                            </a>
                        </div>
                        <div id="collapseOne" class="collapse show bg-light text-dark" data-parent="#accordion">
                            <div class="card-body">
                                Lorem ipsum..
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">


                <div style="">
                    <fieldset class="gllpLatlonPicker">
                        <div class="gllpMap" style="width: 100%; height: 60%;">Google Maps</div>
                        <input type="text" class="gllpLatitude form-control" name="location_lat" value="14.9764223"
                            hidden />
                        <input type="text" class="gllpLongitude form-control" name="location_long" value="102.0701143"
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
                    <p class="font-weight-light">
                        <u>พูดคุยกั</u>บเรา
                    </p>
                </h4>
                <p class="font-weight-light">
                    <?PHP echo $contact_head[0]['contact_head_detail']; ?>
                </p>
            </div>
            <div class="col-md-6">
                <form id="form_target" role="form" method="post" action="contact_us.php?&action=add">
                    <div class="row">
                        <div class="col-lg-6">
                            <label>ชื่อเรื่อง <font color="#F00"><b>*</b></font></label>
                            <select class="form-control  custom-select" id="contact_title_id" name="contact_title_id">
                                <option selected value="">ที่พัก</option>
                                <option value="">สถานที่</option>
                                <option value="">อาหาร</option>
                                <option value="">บริการ</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <label>ชื่อ <font color="#F00"><b>*</b></font></label>
                            <input id="contact_firstname" name="contact_firstname" class="form-control"
                                autocomplete="off">
                        </div>
                        <div class="col-lg-6">
                            <label>นามสกุล <font color="#F00"><b>*</b></font></label>
                            <input id="contact_lastname" name="contact_lastname" class="form-control"
                                autocomplete="off">
                        </div>
                        <div class="col-lg-6">
                            <label>Email <font color="#F00"><b>*</b></font></label>
                            <input id="contact_email" name="contact_email" class="form-control" autocomplete="off">
                        </div>
                        <div class="col-lg-6">
                            <label>หมายลขโทรศัพท์ <font color="#F00"><b>*</b></font></label>
                            <input id="contact_tel" name="contact_tel" class="form-control" autocomplete="off">
                        </div>
                        <div class="col-lg-6">
                            <label>ประเทศ <font color="#F00"><b>*</b></font></label>
                            <select class="form-control  custom-select" id="contact_country" name="contact_country">
                                <option selected value="">ไทย</option>
                                <option value="">พำะ</option>
                                <option value="">ำพะ</option>
                                <option value="">ำพะ</option>
                            </select>
                        </div>
                        <div class="col-lg-6">
                            <label>ประเภทของคำถาม <font color="#F00"><b>*</b></font></label>
                            <select class="form-control  custom-select" id="contact_type_id" name="contact_type_id">
                                <option selected value="">สำคัญ</option>
                                <option value="">ด่วน</option>
                                <option value="">เฉยๆ</option>
                                <option value="">ปกติ</option>
                            </select>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label> ข้อความ <font color="#F00"><b>*</b></font></label>
                                <textarea class="form-control " id="contact_text" name="contact_text" rows="6">
                                </textarea>
                            </div>
                        </div>
                        <div class="col-lg-12" align="center">

                            <button type="submit" name="" id="" class="btn btn-primary btn-md" btn-block
                                style="width: 150px; text-align: center; margin:0 auto;">ส่ง</button>
                        </div>
                    </div>  
                </form>
            </div>
        </div>
    </div>

</div>



<script src="https://maps-api-ssl.google.com/maps/api/js?key=AIzaSyBPYt_mZGd-2iotzhpiZKw1_GpZ6H9w3vs&sensor=false">
</script>
<script src="template/map/js/jquery-gmaps-latlon-picker.js"></script>