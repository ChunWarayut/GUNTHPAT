    <style>
    .slide-detail {
        position: absolute;
        top: 30%;
        max-width: 100%;
        z-index: 999;
        margin-left: -90
    }
    </style>
<!-- FACILITIES -->
<div class=""style="background-image: url('img_upload/facilities/blogger-336371_1920.jpg');-webkit-filter: blur(0.5px);filter: blur(0.5px);">
    <div class="container">
        <section class="slide" style="margin-top: -350; ">
            <?php for ($i=0; $i < count($facilities); $i++) { ?>
                <div class="row" style="padding-top: 10%; padding-bottom: 10%">
                    <div class="col-md-4">
                        <h3 class="text"><?php echo $facilities[$i]['facilities_name'];?></h3>
                        <p class="text" style="color: #ffffff;"><?php echo $facilities[$i]['facilities_detail'];?></p>
                    </div>
                    <div class="col-md-4">
                        <img src="<?php echo $pathImgFacilities.$facilities[$i]['facilities_img']; ?>"  class="img-fluid" alt="">
                    </div>
                    <div class="col-md-2">
                        <div class="  border border-warning" width="200" height="200 "
                            style="border-color: #f47322!important; border-warning: #ffffff; padding-top: 10%; padding-bottom: 30%">
                            &nbsp;&nbsp;&nbsp;<i class='fas fa-concierge-bell' style='font-size:24px; color: #f47322;'></i>
                            <p class="text" style="color: #ffffff;">
                                &nbsp;&nbsp;Delichious <br>
                                &nbsp;&nbsp;Foods <br>
                            </p>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </section>
    </div>
</div>

</div>

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