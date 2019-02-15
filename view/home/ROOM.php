<link href="template/frontend/css/home_room.css" rel="stylesheet">
<br>
<br>
<?php
for ($i = 0; $i < count($rooms); ++$i) {
    if ($i % 2 == 0) {
        ?>
<div class="container list-one">
    <div class="row list-br">
        <div class="col-md-4 room-text">
            <div class="room-detail-text">
                <h1 class="text-left">
                    <?php  echo $i + 1; ?>
                </h1>
                <p class="text-left">
                    |
                </p>
                <h3 class="room-text-name">
                    <?php
            echo $rooms[$i]['room_name']; ?>
                </h3>
                <p>
                    <?php
            echo $rooms[$i]['room_sub_title']; ?>
                </p>
                <div class="container">
                    <div class="row">
                        <h4>$
                            <?php echo $rooms[$i]['room_price']; ?> / วัน </h4>
                        &nbsp; &nbsp; &nbsp;
                        <a href="room.php?action=detail&id=<?PHP echo $rooms[$i]['room_id']; ?>">
                            <button type="button" class="btn btn-primary text-uppercase js-scroll-trigger">
                                <span>
                                    ดูเพิ่มเติม
                                </span>
                            </button>
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


<br>
<br>
<br>
<br>
<br>
<br>
<?php
    } else {
        ?>

<div class="container list-two" >
    <div class="row list-br">
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
                <h1 class="text-left">
                    <?php  echo $i + 1; ?>
                </h1>
                <p class="text-left;">
                    |
                </p>
                <h3 class="room-text-name">
                    <?php
            echo $rooms[$i]['room_name']; ?>
                </h3>
                <p>
                    <?php
            echo $rooms[$i]['room_sub_title']; ?>
                </p>
                <div class="container">
                    <div class="row">
                        <h4>$
                            <?php echo $rooms[$i]['room_price']; ?> / วัน </h4>
                        &nbsp; &nbsp; &nbsp;
                        <a href="room.php?action=detail&id=<?PHP echo $rooms[$i]['room_id']; ?>">
                            <button type="button" class="btn btn-primary text-uppercase js-scroll-trigger">
                                <span>
                                    ดูเพิ่มเติม
                                </span>
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<?php
    } ?>



<?php
}
?>

<br>
<br>
<br>