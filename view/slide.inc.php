<?PHP
require_once('models/SlideModel.php');
$slide_model = new Slide;
$slide = $slide_model -> slideRoom01();

require_once('models/RoomsModel.php');
$rooms_model = new Rooms;
$rooms = $rooms_model -> getRooms();
?>



<script>
function search() {
    var room_id = $("#room_id").val();
    var book_person = $("#book_person").val();
    var book_date_start = $("#book_date_start").val();
    var book_date_end = $("#book_date_end").val();
        window.location = "room.php?action=book&room_id="+room_id+"&book_person="+book_person+"&book_date_start="+book_date_start+"&book_date_end="+book_date_end+"#book";

}
</script>


<div class="menu-slide-style">
    <section class="menu-slide">
        <?php for ($i = 0; $i < 1; ++$i) { ?>
            <div class="menu-slide-item"  >
                <div class="menu-slide-detail" >
                    <div class="row">
                        <div class="col-lg-12 menu-slide-title">
                        <h4 class="pb-4"><?php if ($lng == TH) {  echo "ยินดีต้อนรับเข้าสู่";   }else {  echo "Welcome To"; }  ?></h4>
                            <h1 class="pb-4"><?php if ($lng == TH) {  echo $slide[$i]['slide_title_th'];   }else {  echo $slide[$i]['slide_title_en'];  }  ?></h1>
                            <div class="menu-slide-content">
                                <h3 class="pb-4"><?php if ($lng == TH) {  echo $slide[$i]['slide_sub_title_th'];   }else {  echo $slide[$i]['slide_sub_title_en'];  }  ?></h3>
                                <div class="menu-slide-video">
                                <a class="btn" href="<?php echo $slide[$i]['slide_link']; ?>">
                                    <span style="display: flex;align-items: center;"><i class="far fa-play-circle" style="font-size:100px;" ></i> <span class="h2 pl-2 m-0" style=""> Watch Video </span></span>
                                </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-slide-color" >
                    <img style=" width: 100%; height: 900px; object-fit: cover;" src="img_upload/slide/<?php echo $slide[$i]['slide_img']; ?>">
                </div>
            </div>
        <?php } ?>
    </section>

    <div class="row m-0 justify-content-end menu-slide-popup">
        <div class="col-xl-9 col-lg-9 col-md-8 bg-pop-color">
            <div class="menu-slide-popup-input"><?php if ($lng == TH) {  echo "วันเข้าพัก";   }else { echo "Arrival Date";  }  ?>
                <input class="form-control" id = "book_date_start" name="book_date_start">
            </div>
            <div class="menu-slide-popup-input"><?php if ($lng == TH) {  echo "วันที่ออก";   }else { echo "Depature Dates";  }  ?>
                <input class="form-control" id = "book_date_end" name="book_date_end">
            </div>
            <div class="row menu-slide-popup-input">
                <div class="col-lg-6"><?php if ($lng == TH) {  echo "จำนวนท่าน";   }else { echo "Persons";  }  ?>
                    <input class="form-control" type="number" autocomplete="off" id="book_person" name="book_person">
                </div>
                <div class="col-lg-6"><?php if ($lng == TH) {  echo "ห้อง";   }else { echo "Room";  }  ?>
                    <select class="form-control" id="room_id" name="room_id">
                        <?PHP for ($j=0; $j < count($rooms); $j++) { ?>
                            <option value="<?PHP echo $rooms[$j]['room_id'];?>">
                                <?php if ($lng == TH) {  echo $rooms[$j]['room_name_th'];   }else { echo $rooms[$j]['room_name_en'];  }  ?>
                            </option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class="col-lg-12 menu-slide-popup-input">
                <button onclick="search();" class="btn btn-orange text-uppercase js-scroll-trigger btn-block">
                <?php if ($lng == TH) { echo "จองเดียวนี้"; }else { echo "BOOK NOW"; } ?>
                </button>
            </div> 
        </div>
    </div>


</div>
<script type="text/javascript">
$(document).on('ready', function() {
    $(".menu-slide").slick({
        arrows: false,
        dots: false,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 2500,
    });
});
</script>