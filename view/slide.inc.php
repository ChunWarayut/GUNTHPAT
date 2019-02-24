<link href="template/frontend/css/slide.css" rel="stylesheet">
<?PHP
require_once('models/SlideModel.php');
$slide_model = new Slide;
$slide = $slide_model -> slideRoom01();

require_once('models/RoomsModel.php');
$rooms_model = new Rooms;
$rooms = $rooms_model -> getRooms();
?>
<div class="menu-slide-style">
<section class="menu-slide">

    <?php for ($i = 0; $i < count($slide); ++$i) {
    ?>
    <div class="menu-slide-item"  >
        <div class="menu-slide-detail" >
            <div class="row">
                <div class="col-lg-7 menu-slide-title" style="position: relative;">
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
                    <h3 class="menu-header"><?php if ($lng == TH) {  echo $menu[$i]['slide_name_th'];   }else {  echo $menu[$i]['slide_name_en'];  }  ?>  </h3>
                    <p class="text" style="color: #ffffff;"><?php if ($lng == TH) {  echo $menu[$i]['slide_detail_th'];}else{ echo $menu[$i]['slide_detail_en'];}?></p>
                </div>
            </div>
        </div>
        <div style="background-color: #000;">
            <img style=" width: 100%; height: 900px; object-fit: cover;" src="img_upload/slide/<?php echo $slide[$i]['slide_img']; ?>">
        </div>
    </div>

    <?php
} ?>
</section>

<div class="row m-0 justify-content-end menu-slide-popup" style="">
<div class="col-lg-4 col-12 p-2" style="background-color: #00000036;width: 80%; ">
    <div class="p-2">Arrival Date
        <input input class="form-control" id = "book_date_start" name="book_date_start" style="background-color: #00000078; border: 0.5px solid #ffffff45; color :fff; ">
    </div>
    <div class="p-2">Depature Date
        <input class="form-control" id = "book_date_end" name="book_date_end" style="background-color: #00000078; border: 0.5px solid #ffffff45; color :fff; ">
    </div>
    <div class="row p-2">
        <div class="col-lg-6">Persons
            <input class="form-control" type="number" autocomplete="off" id="book_person" name="book_person" style="background-color: #00000078; border: 0.5px solid #ffffff45; color :fff; ">
        </div>
        <div class="col-lg-6">Room
            <select class="form-control" id="room_id" name="room_id"  style="background-color: #00000078;solid #ffffff45; color :fff; ">
                <?PHP for ($j=0; $j < count($rooms); $j++) { ?>
                    <option value="<?PHP echo $rooms[$j]['room_id'];?>">
                        <?php if ($lng == TH) {  echo $rooms[$j]['room_name_th'];   }else { echo $rooms[$j]['room_name_en'];  }  ?>
                    </option>
                <?php } ?>
            </select>
        </div>
    </div>
    <div class="col-lg-12 p-2">
        <button onclick="search();" class="btn btn-orange text-uppercase js-scroll-trigger btn-block">
            BOOK NOW
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