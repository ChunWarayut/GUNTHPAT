<?php
require_once 'view/menu.inc.php';
?>
<div class="container" id="detail">
    <div class="text-center room-detail-style">
        <h1>
            <span class="text-black-title">
                <?PHP if ($rooms[$id]['room_name'] == "") {
                    echo "ไม่ระบุ";
                }else{
                    echo $rooms[$id]['room_name'];
                }  ?>
        </h1>
    </div>
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
            <section class="slide-room-detail p-0">
                <?php for ($j = 0; $j < count($roomBy = $rooms_model -> getRoomsBy($rooms[$id]['room_id'])); ++$j) {    ?>
                <img class="img-room-detail"
                    src="<?php if ($roomBy[$j]['gallery_img'] == null ) {
                            echo $img_path_room . $roomBy[$j]['room_img'];
                        }else {
                            echo $img_path_gallery. $roomBy[$j]['gallery_img'];
                         } ?>">
                <?php } ?>
            </section>

            <script type="text/javascript">
            $(document).on('ready', function() {
                $(".slide-room-detail").slick({
                    arrows: false,
                    dots: false,
                    infinite: true,
                    autoplay: true,
                    autoplaySpeed: 2500,
                });
            });
            </script>

        </div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 room-detail-detail">
            <div class="text-top room-detail-thb" style="">
                <h5 class="room-thb-button">
                    THB &nbsp;
                    <?PHP if ($rooms[$id]['room_price'] == "") {  echo "ไม่ระบุ"; }else{ echo $rooms[$id]['room_price']; }  ?>

                    <a href="room.php?action=book&room_id=<?PHP echo $rooms[$id]['room_id']; ?>#book"
                        class="btn btn-orage text-uppercase js-scroll-trigger btn-lg" style=" margin-left:40">

                        จองเดียวนี้

                    </a>
                </h5>
                <p>

                    <?PHP echo $contact_us[0]['contact_us_sub_title']; ?>

                </p>
                <hr>
                <i class="fas fa-phone" style="font-size:20px"></i>

                <?PHP if ($rooms[$id]['room_facility_2'] == "") {
                            echo "ไม่ระบุ";
                        }else{
                            echo $rooms[$id]['room_facility_2'];
                        }  ?>

                <i class="fas fa-wifi" style="font-size:20px; margin-left:30; margin-top: 15; "></i>

                <?PHP if ($rooms[$id]['room_facility_1'] == "") {
                            echo "ไม่ระบุ";
                        }else{
                            echo $rooms[$id]['room_facility_1'];
                        }  ?>

                <br>
                <br>
                <h4 class="font-weight-light;" style="margin-top: 25;">

                    รายละเอียดห้อง

                </h4>
                <div class="col-2">
                    <hr style="border-top: 2px solid #f47322">
                </div>
                <i class="fas fa-home" style="font-size:15px; margin-top: 15; "></i>

                <?PHP if ($rooms[$id]['room_size'] == "") {
                            echo "ไม่ระบุ";
                        }else{
                            echo $rooms[$id]['room_size'];
                        }  ?>

                <br>
                <i class="fa fa-users" style="font-size:15px; margin-top: 15; "></i>

                <?PHP if ($rooms[$id]['room_detail_1'] == "") {
                            echo "ไม่ระบุ";
                        }else{
                            echo $rooms[$id]['room_detail_1'];
                        }  ?>

                <br>
                <br>
                <i class="fa fa-circle" style="font-size:7px; margin-top: 15; "></i>

                <?PHP if ($rooms[$id]['room_detail_1'] == "") {
                            echo "ไม่ระบุ";
                        }else{
                            echo $rooms[$id]['room_detail_1'];
                        }  ?>

                <br>
                <i class="fa fa-circle" style="font-size:7px; margin-top: 15; "></i>

                <?PHP if ($rooms[$id]['room_detail_3'] == "") {
                            echo "ไม่ระบุ";
                        }else{
                            echo $rooms[$id]['room_detail_3'];
                        }  ?>

            </div>
        </div>
    </div>
</div>
<br>
<br>
<br>