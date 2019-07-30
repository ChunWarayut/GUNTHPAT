<div class="container pb-5" id="detail">
    <div class="text-center room-detail-style">
        <h1>
            <span class=""style="color:#000000;padding-top:5%;">
                <?PHP if ($roomByList[0]['room_name_th'] == "") {
                            echo "ไม่ระบุ";
                        }else{
                            if ($lng == TH) {  echo $roomByList[0]['room_name_th'];   }else { echo $roomByList[0]['room_name_en'];  } 
                        }  ?>
            </span>                        
        </h1>
    </div>
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
            <section class="slide-room-detail p-0">
                <?php for ($j = 0; $j < count($roomBy = $rooms_model -> getRoomsBy($roomByList[0]['room_id'])); ++$j) {    ?>
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
                    <?PHP if ($roomByList[0]['room_price_th'] == "") {  echo "ไม่ระบุ"; }else{ echo $roomByList[0]['room_price_th']; }  ?>

                    <a href="room.php?action=book&room_id=<?PHP echo $roomByList[0]['room_id']; ?>#book"
                        class="btn btn-orage text-uppercase js-scroll-trigger btn-lg room-btn-font ml-1">

                        <?PHP if ($lng == TH) {  echo "จองเดียวนี้"; } else {  echo "Book this one";  }?>
                    </a>
                </h5>
                <p>
                <?php if ($lng == TH) {  echo $roomByList[0]['room_sub_title_th'];   }else {   echo $roomByList[0]['room_sub_title_en'];  }  ?>
                </p>
                <hr>


                <h4 class="font-weight-light;" style="margin-top: 25;">


                <?PHP if ($lng == TH) {  echo "รายละเอียดห้อง"; } else {  echo "Room details";  }?>

                    

                </h4>
                <div class="col-2">
                    <hr style="border-top: 2px solid #f47322">
                </div>
                <i class="fas fa-home" style="font-size:15px; margin-top: 15; "></i>

                <?PHP if ($roomByList[0]['room_size_th'] == "") {
                            echo "ไม่ระบุ";
                        }else{
                            if ($lng == TH) {  echo $roomByList[0]['room_size_th'];   }else { echo $roomByList[0]['room_size_en'];  } 
                        }  ?>

                <br>
                <i class="fa fa-users" style="font-size:15px; margin-top: 15; "></i>

                <?PHP if ($roomByList[0]['room_detail_1_th'] == "") {
                            echo "ไม่ระบุ";
                        }else{
                            if ($lng == TH) {  echo $roomByList[0]['room_detail_1_th'];   }else { echo $roomByList[0]['room_detail_1_en'];  } 
                        }  ?>
                <br>
                <br>
                <i class="fa fa-circle" style="font-size:7px; margin-top: 15; "></i>

                <?PHP if ($roomByList[0]['room_detail_2_th'] == "") {
                            echo "ไม่ระบุ";
                        }else{
                            if ($lng == TH) {  echo $roomByList[0]['room_detail_2_th'];   }else { echo $roomByList[0]['room_detail_2_en'];  } 
                        }  ?>

                <br>
                <i class="fa fa-circle" style="font-size:7px; margin-top: 15; "></i>

                <?PHP if ($roomByList[0]['room_detail_3_th'] == "") {
                            echo "ไม่ระบุ";
                        }else{
                            if ($lng == TH) {  echo $roomByList[0]['room_detail_3_th'];   }else { echo $roomByList[0]['room_detail_3_en'];  } 
                        }  ?>
                <br>
                <i class="fa fa-circle" style="font-size:7px; margin-top: 15; "></i>

                <?PHP if ($roomByList[0]['room_facility_1_th'] == "") {
                            echo "ไม่ระบุ";
                        }else{
                            if ($lng == TH) {  echo $roomByList[0]['room_facility_1_th'];   }else { echo $roomByList[0]['room_facility_1_en'];  } 
                        }  ?>
                <br>
                <i class="fa fa-circle" style="font-size:7px; margin-top: 15; "></i>

                <?PHP if ($roomByList[0]['room_facility_2_th'] == "") {
                            echo "ไม่ระบุ";
                        }else{
                            if ($lng == TH) {  echo $roomByList[0]['room_facility_2_th'];   }else { echo $roomByList[0]['room_facility_2_en'];  } 
                        }  ?>
            </div>
        </div>
    </div>
</div>
