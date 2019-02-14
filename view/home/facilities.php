<style>
.slide-detail {
    position: absolute;
    top: 30%;
    max-width: 100%;
    z-index: 999;
    margin-left: -90
}
</style>


<section class="slide" style="margin-top: -350; ">

    <?php for ($i = 0; $i < count($slide); ++$i) {
    ?>
    <div class="slide-item">
        <div class="slide-detail" style="padding-left: 200px; padding-right: 50px; width: 100%; ">
            <!-- <div class="row" style="padding-top: 10%; padding-bottom: 10%">
            <div class="col-md-4">
                <h3 class="text"><?php echo $facilities[$i]['facilities_name'];?></h3>
                <p class="text" style="color: #ffffff;"><?php echo $facilities[$i]['facilities_detail'];?></p>
            </div>
            <div class="col-md-4">
                <img src="<?php echo $pathImgFacilities.$facilities[$i]['facilities_img']; ?>" class="img-fluid" alt="">
            </div>
            <div class="col-md-2">
                <div class="  border border-warning" width="500" height="500 "
                    style="border-color: #f47322!important; border-warning: #ffffff; padding-top: 10%; padding-bottom: 30%">
                    &nbsp;&nbsp;&nbsp;<i class='fas fa-concierge-bell' style='font-size:24px; color: #f47322;'></i>
                    <p class="text" style="color: #ffffff;">
                        &nbsp;&nbsp;Delichious <br>
                        &nbsp;&nbsp;Foods <br>
                    </p>
                </div>
            </div>
        </div> -->
            <div class="row">
                <div class="class col-lg-4">
                    <h3 class="text"><?php echo $facilities[$i]['facilities_name'];?></h3>
                    <p class="text" style="color: #ffffff;"><?php echo $facilities[$i]['facilities_detail'];?></p>
                </div>

                <div class="class col-lg-5" style="">
                    <img style=" width: 500; height: 500px; object-fit: cover;"
                        src="<?php echo $pathImgFacilities.$facilities[$i]['facilities_img']; ?>" class="img-fluid"
                        alt="">
                </div>
            </div>
        </div>
        <img style=" width: 100%; height: 500px; object-fit: cover;"
            src="<?php echo $pathImgFacilities.$facilities[$i]['facilities_img']; ?>">
    </div>

    <?php
} ?>

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