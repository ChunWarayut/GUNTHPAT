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
           echo $pathImgContact_us .  $contact_us[0]['contact_us_img']; 
        ?>"
                style=" padding-bottom:8%"
                class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="">
        </div>

        <div class="col-lg-8" style="padding-bottom:8%;">
            <h4 class="font-weight-light">
                <span>
                    <?PHP echo $contact_us[0]['contact_us_title'];  ?>
                </span>
            </h4>
            <p class="font-weight-light">
                <span>
                    <?PHP echo $contact_us[0]['contact_us_sub_title'];  ?>
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
                                <a href="<?PHP echo $contact_us[0]['contact_us_facebook'];  ?>">
                                    <p class="font-weight-light">
                                        <?PHP echo $contact_us[0]['contact_us_facebook'];  ?>
                                    </p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-auto">
                        <div class="container">
                            <div class="row">
                                <i class="fas fa-phone-volume" style="font-size:30px"></i>&nbsp;
                                <a href="tel:<?PHP echo $contact_us[0]['contact_us_tel'];  ?>">
                                    <p class="font-weight-light">
                                        <?PHP echo $contact_us[0]['contact_us_tel'];  ?>
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
                            <?PHP echo $contact_us[0]['contact_us_address'];  ?><br>
                            <?PHP echo $contact_us[0]['contact_us_address_1'];  ?>
                            <?PHP echo $contact_us[0]['contact_us_address_2'];  ?>
                            <?PHP echo $contact_us[0]['contact_us_address_3'];  ?>
                            <?PHP echo $contact_us[0]['contact_us_address_4'];  ?>
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
                            <?PHP echo $contact_us[0]['contact_us_fax'];  ?>
                        </p>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-auto">
                        <i class="fas fa-envelope" style="font-size:40px"></i>
                    </div>
                    <div class="col-auto">
                        <a href="mailto:<?PHP echo $contact_us[0]['contact_us_email'];  ?>">
                            <p class="font-weight-light"> &nbsp;
                                <?PHP echo $contact_us[0]['contact_us_email'];  ?>
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
                <div class="dropdown" style="padding-left:10%;">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        ดาวโหลดแผนที่
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Action</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">


            </div>
        </div>
    </div>


    <div class="container" style="padding-top:8%">
        <div class="col-md-6">
            <h4>
                <p class="font-weight-light">
                    <u>พูดคุยกั</u>บเรา
                </p>
            </h4>
            <p class="font-weight-light">
                <?PHP echo $contact_head[0]['contact_head_detail'];  ?>
            </p>
        </div>
        <div class="col-md-6">
            <form id="form_target" role="form" method="post" action="contact_us.php?&action=add">

            </form>
        </div>
    </div>

</div>