<?php

require_once 'view/menu.inc.php';
?>

<div class="container" style="">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
            <div class="text-left" style=" margin-left:150">
                <h1>
                    <span>
                        ROOM
                    </span>
                    <span style="color:#f47322; ">
                        S
                    </span>
                </h1>
                <p class="text-right">
                    <span>

                    </span>
                </p>
            </div>
        </div>
        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
            <div class="" style="padding-bottom:8%;">

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
            </div>
        </div>
    </div>
</div>
<div class="container" style="">
    <div class="row">
        <div class="col-4">
            <div class="shadow-lg p-3 mb-5 bg-white rounded;">
                <section class="slide" style="padding:0%; margin:-16">
                    <?php for ($i = 0; $i < count($slide); ++$i) {
    ?>
                    <img style=" width: 100px; height: 200px; object-fit: cover;"
                        src="img_upload/slide/<?php echo $slide[$i]['slide_img']; ?>">
                    <?php
} ?>
                </section>


                <script type="text/javascript">
                $(document).on('ready', function() {
                    $(".slide").slick({
                        arrows: false,
                        dots: false,
                        infinite: true,
                        autoplay: true,
                        autoplaySpeed: 2500,
                    });
                });
                </script>
                <h4 class="font-weight-light;" style="margin-top: 25;">
                    <span>
                        Deluxe Room
                    </span>
                </h4>
                <i class="fas fa-home" style="font-size:15px; margin-left:30; margin-top: 15; "></i>
                <span>
                    38 ตารางเมตร
                </span>
                <br>
                <i class="fa fa-users" style="font-size:15px; margin-left:30; margin-top: 15; "></i>
                <span>
                    ผู้ใหญ่ 2 ท่าน + เด็ก 1 ท่าน
                </span>
                <br>
                <br>
                <i class="fa fa-circle" style="font-size:7px; margin-left:30; margin-top: 15; "></i>
                <span>
                    ระเบียงส่วนตัว
                </span>
                <br>
                <i class="fa fa-circle" style="font-size:7px; margin-left:30; margin-top: 15; "></i>
                <span>
                    วิวเมืองหรือสวน
                </span>
                <br>
                <br>
                <span>
                    ห้องพักทุกห้องประกอปด้วย
                </span>
                <br>
                <i class="fas fa-phone" style="font-size:15px; margin-left:30; margin-top: 15; "></i>
                <span>
                    บริการ WiFi ฟรี
                </span>
                <br>
                <i class="fas fa-wifi" style="font-size:15px; margin-left:30; margin-top: 15; "></i>
                <span>
                    บริการโทรศัพท์ห้อง
                </span>
                <br>
                <br>
                <div class="row">
                    <div class="col-12">
                        <div class="p-3 mb-2 bg-light text-dark" style="padding:0%; margin:-16">
                            <h5 style=" margin-left:30">
                                <span>
                                    THB
                                </span>
                                <span style=" margin-left:40">
                                    48,000
                                </span>
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <button type="button" class="btn btn-secondary btn-lg btn-block ">
                            <span>
                                Share
                            </span>
                        </button>
                    </div>
                    <div class="col-6">
                        <button type="button" class="btn btn-outline-secondary btn-lg btn-block">
                            <span>
                                ดูเพิ่มเติม
                            </span>
                        </button>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-12">
                        <a href="" class="btn btn-primary text-uppercase js-scroll-trigger btn-lg btn-block">
                            จองเดียวนี้
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>