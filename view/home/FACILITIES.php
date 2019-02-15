<style>
.slide-detail {
    position: absolute;
    top: 30%;
    max-width: 100%;
    z-index: 999;
    /* margin-left: -90 */
}
</style>


<section class="facilities" style="margin-top: -350; ">

    <?php for ($i = 0; $i <2; ++$i) {
    ?>
    <div class="slide-item" style="position:relative;">
        <div class="slide-detail" style="padding-left: 200px; padding-right: 50px; width:100%;">
            <div class="row">
                <div class="col-lg-4" style="padding-left: 200px">
                    <h3 class="facilities-header"><?php echo $facilities[$i]['facilities_name'];?></h3>
                    <p class="text" style="color: #ffffff;"><?php echo $facilities[$i]['facilities_detail'];?></p>
                </div>

                <div class="col-lg-5" style="margin-top: -100;">
                    <img style=" width: 800; height: 400px; object-fit: cover;"
                        src="<?php echo $pathImgFacilities.$facilities[$i]['facilities_img']; ?>" class="img-fluid"
                        alt="">
                </div>
                <div class="col-lg-2">
                    <div class="  border border-warning" width="100" height="100"
                        style="border-color: #f47322!important; border-warning: #ffffff; padding-top: 10%; padding-bottom: 30%">
                        &nbsp;&nbsp;&nbsp;<i class='fas fa-concierge-bell' style='font-size:24px; color: #f47322;'></i>
                        <p class="text" style="color: #ffffff;">
                            &nbsp;&nbsp;Delichious <br>
                            &nbsp;&nbsp;Foods <br>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div style="background-color: #000;">
            <img style=" width: 100%; height: 500px; object-fit: cover; opacity: 0.3;"
                src="<?php echo $pathImgFacilities.$facilities[$i]['facilities_img']; ?>">
        </div>
    </div>

    <?php
} ?>

</section>
<script type="text/javascript">
$(document).on('ready', function() {
    $(".facilities").slick({
        arrows: false,
        dots: false,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 2500,
    });
});
</script>