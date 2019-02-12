<br>
<br>
<?php
for ($i = 0; $i < count($rooms); ++$i) {
    if ($i % 2 == 0) {
        ?>
<div class="container" style="margin-top: -250;">
    <div class="row" style="position: relative;padding-bottom: 10%">
        <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4" >
            <div style="bottom: 0;position: absolute;">
                <h1 class="text-left">
                    <?php  echo $i + 1; ?>
                </h1>
                <p class="text-left">
                    |
                </p>
                <h3>
                    <?php
            echo $rooms[$i]['room_name']; ?>
                </h3>
                <p class="text">
                    <?php
            echo $rooms[$i]['room_sub_title']; ?>
                </p>
                <div class="container">
                    <div class="row">
                        <h4 class="text">$
                            <?php echo $rooms[$i]['room_price']; ?> / วัน </h4>
                        &nbsp; &nbsp; &nbsp;<a href="" class="btn btn-primary text-uppercase js-scroll-trigger">
                        <span class="text">
                                เพิ่มเติม
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8">
            <img style=" width: 800px; height: 400px; object-fit: cover;"
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

<div class="container"  style="margin-top: -130; ">
    <div class="row" style="position: relative;padding-bottom: 15%">
        <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8">
            <img style=" width: 800px; height: 400px; object-fit: cover;"
                src="
            <?php
           echo $pathImg.$rooms[$i]['room_img']; ?>
        " class="img-fluid"
                alt="">
        </div>
        <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
            <div style="bottom: 0;position: absolute;">
                <h1 class="text-left">
                    <?php  echo $i + 1; ?>
                </h1>
                <p class="text-left;">
                    |
                </p>
                <h3>
                    <?php
            echo $rooms[$i]['room_name']; ?>
                </h3>
                <p class="text">
                    <?php
            echo $rooms[$i]['room_sub_title']; ?>
                </p>
                <div class="container">
                    <div class="row">
                        <h4 class="text">$
                            <?php echo $rooms[$i]['room_price']; ?> / วัน </h4>
                        &nbsp; &nbsp; &nbsp;<a href="" class="btn btn-primary text-uppercase js-scroll-trigger">
                        <span class="text">
                                เพิ่มเติม
                            </span>
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