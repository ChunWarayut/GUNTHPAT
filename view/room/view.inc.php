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
                                    <i class="fab fa-facebook-square" style="font-size:30px"></i> &nbsp;
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
                                    <i class="fas fa-phone-volume" style="font-size:30px"></i>&nbsp;
                                    <span class="text2">
                                        <a href="tel:<?PHP echo $contact_us[0]['contact_us_tel']; ?>">
                                            <p class="font-weight-light">
                                                <?PHP echo $contact_us[0]['contact_us_tel']; ?>
                                            </p>
                                        </a>
                                    </span>
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
        <?PHP for ($i=0; $i < count($rooms); $i++) { ?>
        <div class="col-lg-4 col-md-6">
            <div class="shadow-lg p-3 mb-5 bg-white rounded;">
                <section class="slide" style="padding:0%; margin:-16">
                    <?php for ($j = 0; $j < count($roomBy = $rooms_model -> getRoomsBy($rooms[$i]['room_id'])); ++$j) {    ?>
                    <img style=" width: 100px; height: 200px; object-fit: cover;"
                        src="<?php if ($roomBy[$j]['gallery_img'] == null ) {
                            echo $img_path_room . $roomBy[$j]['room_img'];
                        }else {
                            echo $img_path_gallery. $roomBy[$j]['gallery_img'];
                         } ?>">
                    <?php } ?>
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
                    <span class="text">
                        <?PHP if ($rooms[$i]['room_name'] == "") {
                            echo "ไม่ระบุ";
                        }else{
                            echo $rooms[$i]['room_name'];
                        }  ?>
                    </span>
                </h4>
                <i class="fas fa-home" style="font-size:15px; margin-left:30; margin-top: 15; "></i>
                <span class="text">
                    <?PHP if ($rooms[$i]['room_size'] == "") {
                            echo "ไม่ระบุ";
                        }else{
                            echo $rooms[$i]['room_size'];
                        }  ?>
                </span>
                <br>
                <i class="fa fa-users" style="font-size:15px; margin-left:30; margin-top: 15; "></i>
                <span class="text">
                    <?PHP if ($rooms[$i]['room_detail_1'] == "") {
                            echo "ไม่ระบุ";
                        }else{
                            echo $rooms[$i]['room_detail_1'];
                        }  ?>
                </span>
                <br>
                <br>
                <i class="fa fa-circle" style="font-size:7px; margin-left:30; margin-top: 15; "></i>
                <span class="text">
                    <?PHP if ($rooms[$i]['room_detail_1'] == "") {
                            echo "ไม่ระบุ";
                        }else{
                            echo $rooms[$i]['room_detail_1'];
                        }  ?>
                </span>
                <br>
                <i class="fa fa-circle" style="font-size:7px; margin-left:30; margin-top: 15; "></i>
                <span class="text">
                    <?PHP if ($rooms[$i]['room_detail_3'] == "") {
                            echo "ไม่ระบุ";
                        }else{
                            echo $rooms[$i]['room_detail_3'];
                        }  ?>
                </span>
                <br>
                <br>
                <span class="text">
                    บริการโทรศัพท์ห้อง
                </span>
                <br>
                <i class="fas fa-phone" style="font-size:15px; margin-left:30; margin-top: 15; "></i>
                <span class="text">
                    <?PHP if ($rooms[$i]['room_facility_1'] == "") {
                            echo "ไม่ระบุ";
                        }else{
                            echo $rooms[$i]['room_facility_1'];
                        }  ?>
                </span>
                <br>
                <i class="fas fa-wifi" style="font-size:15px; margin-left:30; margin-top: 15; "></i>
                <span class="text">
                    <?PHP if ($rooms[$i]['room_facility_2'] == "") {
                            echo "ไม่ระบุ";
                        }else{
                            echo $rooms[$i]['room_facility_2'];
                        }  ?>
                </span>
                <br>
                <br>
                <div class="row">
                    <div class="col-12">
                        <div class="p-3 mb-2 bg-light text-dark" style="padding:0%; margin:-16">
                            <h5 style=" margin-left:30">
                                <span class="text">
                                    THB
                                </span>
                                <span style=" margin-left:40">
                                    <?PHP if ($rooms[$i]['room_price'] == "") {
                            echo "ไม่ระบุ";
                        }else{
                            echo $rooms[$i]['room_price'];
                        }  ?>
                                </span>
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <button type="button" class="btn btn-secondary btn-lg btn-block ">
                            <span class="text">
                                Share
                            </span>
                        </button>
                    </div>
                    <div class="col-6">
                        <a href="room.php?action=detail&id=<?PHP echo $rooms[$i]['room_id']; ?>">
                            <button type="button" class="btn btn-outline-secondary btn-lg btn-block">
                                <span class="text">
                                    ดูเพิ่มเติม
                                </span>
                            </button>
                        </a>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-12">
                        <a href="room.php?action=book&id=<?PHP echo $rooms[$i]['room_id']; ?>" class="btn btn-primary text-uppercase js-scroll-trigger btn-lg btn-block">
                            <span class="text">
                                จองเดียวนี้
                            </span>

                        </a>
                    </div>
                </div>
            </div>
        </div>
        <?PHP } ?>
    </div>
</div>