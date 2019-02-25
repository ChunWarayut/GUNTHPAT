<link href="template/frontend/css/slide.css" rel="stylesheet">

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

<div class="slide-item  px-5">
    <div class="slide-detail">
        <div class="row">
            <div class="col-lg-8 slide-title">
                <h4 class="pb-4">Welcome to</h4>
                <h1 class="pb-4">GUNTHPAT PLACE</h1>
                <div class="d-none d-lg-block">
                    <h3 class="pb-4">A place to experience and enjoy life</h3>
                    <div class="row">
                        <div class="col-12 d-flex align-items-center">
                            <i class="far fa-play-circle" style="color: #fff; font-size:100px;" ></i>
                            <span class="h2 px-3"> Watch Video</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4" style="background-color: #00000036 ">
                <div class="p-2"><?php if ($lng == TH) {  echo "วันเข้าพัก";   }else { echo "Arrival Date";  }  ?>
                    <input input class="form-control" id = "book_date_start" name="book_date_start" style="background-color: #00000078; border: 0.5px solid #ffffff45; color :fff; ">
                </div>
                <div class="p-2"><?php if ($lng == TH) {  echo "วันออก";   }else { echo "Depature Date";  }  ?>
                    <input class="form-control" id = "book_date_end" name="book_date_end" style="background-color: #00000078; border: 0.5px solid #ffffff45; color :fff; ">
                </div>
                <div class="row p-2">
                    <div class="col-lg-6"><?php if ($lng == TH) {  echo "จำนวนท่าน";   }else { echo "Persons";  }  ?>
                        <input class="form-control" type="number" autocomplete="off" id="book_person" name="book_person" style="background-color: #00000078; border: 0.5px solid #ffffff45; color :fff; ">
                    </div>
                    <div class="col-lg-6"><?php if ($lng == TH) {  echo "ห้อง";   }else { echo "Room";  }  ?>
                        <select class="form-control  custom-select" id="room_id" name="room_id"  style="background-color: #00000078;solid #ffffff45; color :fff; "><?PHP for ($i=0; $i < count($rooms); $i++) { ?>
                            <option value="<?PHP echo $rooms[$i]['room_id'];?>">
                            <?php if ($lng == TH) {  echo $rooms[$i]['room_name_th'];   }else { echo $rooms[$i]['room_name_en'];  }  ?>
                            </option> <?PHP } ?>
                            
                        </select>
                    </div>
                </div>
                <div class="row p-2">
                    <div class="class col-lg-12">
                        <button onclick="search();" class="btn btn-orange text-uppercase js-scroll-trigger btn-lg btn-block">
                                <?php if ($lng == TH) {  echo "จองเดียวนี้";   }else { echo "BOOK NOW";  }  ?>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <section class="slide" style="margin-top:-20em; ">
        <?php for ($i = 0; $i < count($slide); ++$i) {  ?>
            <img style=" width: 200px; height: 900px; object-fit: cover;"     src="img_upload/slide/<?php echo $slide[$i]['slide_img']; ?>">  
        <?PHP   } ?>
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