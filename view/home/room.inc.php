<link href="template/frontend/css/home-room.css" rel="stylesheet">
<?php
for ($i = 0; $i < count($rooms); ++$i) {
    if ($i % 2 == 0) {
        ?>
<div class="container list-one">
    <div class="row">
        <div class="col-md-4 room-text">
            <div class="room-detail-text">
                <span class="h2 text-left"><?php  echo $i + 1; ?></span>
                <p class="text-left">
                    |
                </p>
                <span class="h3 room-text-name"><?php if ($lng == TH) {  echo $rooms[$i]['room_name_th'];   }else { echo $rooms[$i]['room_name_en'];  }  ?> </span>
                <div class="room-text-detail">
                    <div class="text-content-room" style="overflow-wrap: break-word;">
                        <?php echo $rooms[$i]['room_sub_title']; ?>
                    </div>
                </div>
                <div class="row">
                    <div  class="col-12 justify-content-end d-flex align-items-center">
                        <span class="h4 m-0 mr-2">$ <?php echo $rooms[$i]['room_price']; ?> / วัน </span>
                        <a class="btn btn-orange" href="room.php?action=detail&id=<?PHP echo $rooms[$i]['room_id']; ?>">
                                    ดูเพิ่มเติม
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <img class="img-room-show"
                src="
            <?php
           echo $pathImg.$rooms[$i]['room_img']; ?>
        " class="img-fluid"
                alt="">
        </div>
    </div>
</div>
<?php
    } else {
        ?>

<div class="container list-two">
    <div class="row">
        <div class="col-md-8 order-2 order-md-1 ">
            <img class="img-room-show"
                src="
            <?php
           echo $pathImg.$rooms[$i]['room_img']; ?>
        " class="img-fluid"
                alt="">
        </div>
        <div class="col-md-4 order-1 order-md-2 room-text">
            <div class="room-detail-text">
                <span class="h2 text-left"><?php  echo $i + 1; ?></span>
                <p class="text-left">
                    |
                </p>
                <span class="h3 room-text-name"><?php echo $rooms[$i]['room_name']; ?></span>
                <div class="room-text-detail">
                    <div class="text-content-room" style="overflow-wrap: break-word;">
                        <?php echo $rooms[$i]['room_sub_title']; ?>
                    </div>
                </div>
                <div class="row">
                    <div  class="col-12 justify-content-end d-flex align-items-center">
                        <span class="h4 m-0 mr-2">$ <?php echo $rooms[$i]['room_price']; ?> / วัน </span>
                        <a class="btn btn-orange" href="room.php?action=detail&id=<?PHP echo $rooms[$i]['room_id']; ?>">
                                    ดูเพิ่มเติม
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<?php
    } ?>
<?php
}
?>