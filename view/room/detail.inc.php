<?php
require_once 'view/menu.inc.php';
?>
<div class="container">
    <div class="text-center room-detail-style" >
        <h1>
            <span class="text-black" style="color:#f47322; ">
                <?PHP if ($rooms[$id]['room_name'] == "") {
                    echo "ไม่ระบุ";
                }else{
                    echo $rooms[$id]['room_name'];
                }  ?>
        </h1>
    </div>
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
            <section class="slide-room-detail" >
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
                $(".slide").slick({
                    arrows: false,
                    dots: false,
                    infinite: true,
                    autoplay: true,
                    autoplaySpeed: 2500,
                });
            });
            </script>

        </div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
            <div class="text-top room-detail-thb" style="">
                <h5 style="">
                    <span class="text-black">
                        THB
                    </span>
                    <span class="text-black" style=" margin-left:40">
                        <?PHP if ($rooms[$id]['room_price'] == "") {
                            echo "ไม่ระบุ";
                        }else{
                            echo $rooms[$id]['room_price'];
                        }  ?>
                    </span>
                    <a href="room.php?action=book&room_id=<?PHP echo $rooms[$id]['room_id']; ?>" class="btn btn-primary text-uppercase js-scroll-trigger btn-lg" style=" margin-left:40">
                        <span class="text">
                            จองเดียวนี้
                        </span>
                    </a>
                </h5>
                <p class="font-weight-light ">
                    <span class="text-black">
                        <?PHP echo $contact_us[0]['contact_us_sub_title']; ?>
                    </span>
                </p>
                <hr>
                <i class="fas fa-phone" style="font-size:20px"></i>
                <span class="text-black">
                        <?PHP if ($rooms[$id]['room_facility_2'] == "") {
                            echo "ไม่ระบุ";
                        }else{
                            echo $rooms[$id]['room_facility_2'];
                        }  ?>
                </span>
                <i class="fas fa-wifi" style="font-size:20px; margin-left:30; margin-top: 15; "></i>
                <span class="text-black">
                        <?PHP if ($rooms[$id]['room_facility_1'] == "") {
                            echo "ไม่ระบุ";
                        }else{
                            echo $rooms[$id]['room_facility_1'];
                        }  ?>
                </span>
                <br>
                <br>
                <h4 class="font-weight-light;" style="margin-top: 25;">
                    <span class="text-black">
                        รายละเอียดห้อง
                    </span>
                </h4>
                <div class="col-2">
                    <hr style="border-top: 2px solid #f47322">
                </div>
                <i class="fas fa-home" style="font-size:15px; margin-top: 15; "></i>
                <span class="text-black">
                        <?PHP if ($rooms[$id]['room_size'] == "") {
                            echo "ไม่ระบุ";
                        }else{
                            echo $rooms[$id]['room_size'];
                        }  ?>
                </span>
                <br>
                <i class="fa fa-users" style="font-size:15px; margin-top: 15; "></i>
                <span class="text-black">
                        <?PHP if ($rooms[$id]['room_detail_1'] == "") {
                            echo "ไม่ระบุ";
                        }else{
                            echo $rooms[$id]['room_detail_1'];
                        }  ?>
                </span>
                <br>
                <br>
                <i class="fa fa-circle" style="font-size:7px; margin-top: 15; "></i>
                <span class="text-black">
                        <?PHP if ($rooms[$id]['room_detail_1'] == "") {
                            echo "ไม่ระบุ";
                        }else{
                            echo $rooms[$id]['room_detail_1'];
                        }  ?>
                </span>
                <br>
                <i class="fa fa-circle" style="font-size:7px; margin-top: 15; "></i>
                <span class="text-black">
                        <?PHP if ($rooms[$id]['room_detail_3'] == "") {
                            echo "ไม่ระบุ";
                        }else{
                            echo $rooms[$id]['room_detail_3'];
                        }  ?>
                </span>
            </div>
        </div>
    </div>
</div>
<br>
<br>
<br>