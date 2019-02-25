<style>
    section{
        padding-bottom: 5%;
    }
.facilities-slide-detail {
    position: absolute;
    top: 30%;
    max-width: 100%;
    z-index: 999;
    padding-left: 200px; 
    padding-right: 50px; 
    width:100%;
}
.facilities-slide-item{
    position:relative;
}
.home-facilities-top {
    margin-top: 100; 
}
.home-facilities-title {
    padding-left: 0px
}
.facilities-header{
    color: #f47322;
}
.room-header{
    color: #f47322;
}
.home-facilities-img{
    margin-top: -100;
    padding-top: 100; width: 400; object-fit: cover;
}
    .home-border-img{
        border-color: #f47322!important; 
        border-warning: #ffffff;
         padding-top: 10%; 
         padding-bottom: 30%
    }

@media (max-width: 991px) {

    .home-facilities-top {
        /* margin-top: 100;  */
    }
    .facilities-slide-detail{
        /* display: none; */
    }
    .facilities-header{
        margin-top: -100; 
    }
    .home-facilities-top {
        margin-top: 0; 
    }
    .home-facilities-title {
        padding-left: 0px
    }
    .home-facilities-img{
        margin-top: 0;
        padding-top: 0; width: 400; object-fit: cover;
    }
    .home-border-img{
        display: none; 
        border-color: #f47322!important; 
        border-warning: #ffffff;
         padding-top: 10%; 
         padding-bottom: 30%
    }
}
@media (max-width: 767px) {
    .home-facilities-top {
        margin-top: 100; 
    }
    .facilities-slide-detail{
        /* display: none; */
    padding-left: 50px; 
    padding-right: 50px; 
    }
    .facilities-header{
        margin-top: -100; 
    }
    .home-facilities-top {
        margin-top: 0; 
    }
    .home-facilities-title {
        padding-left: 0px
    }
    .home-facilities-img{
        margin-top: 0;
        padding-top: 0; width: 400; object-fit: cover;
    }
    .home-border-img{
        display: none; 
        border-color: #f47322!important; 
        border-warning: #ffffff;
         padding-top: 10%; 
         padding-bottom: 30%
    }
}
@media (max-width: 739px) {
    .home-facilities-top {
        margin-top: 100; 
    }
}
@media (max-width: 600px) {
    .home-facilities-top {
        margin-top: 100; 
    }
}
</style>


<section class="facilities" >

    <?php for ($i = 0; $i <2; ++$i) {
    ?>
    <div class="facilities-slide-item" >
        <div class="facilities-slide-detail" >
            <div class="row">
                <div class="col-lg-4 home-facilities-title" style="">
                    <h3 class="facilities-header"><?php if ($lng == TH) {  echo $facilities[$i]['facilities_name_th'];   }else {  echo $facilities[$i]['facilities_name_en'];  }  ?>  </h3>
                    <p class="text" style="color: #ffffff;"><?php if ($lng == TH) {  echo $facilities[$i]['facilities_detail_th'];}else{ echo $facilities[$i]['facilities_detail_en'];}?></p>
                </div>

                <div class="col-lg-5 home-facilities-img" style="">
                    <img style=""
                        src="<?php echo $pathImgFacilities.$facilities[$i]['facilities_img']; ?>" class="img-fluid"
                        alt="">
                </div>
                <div class="col-lg-2 home-border-img">
                    <div class="border border-warning " width="100" height="100"
                       >
                        &nbsp;&nbsp;&nbsp;<i class='fas fa-concierge-bell' style='font-size:24px; color: #f47322;'></i>
                        <p class="text" style="color: #ffffff;">
                            &nbsp;&nbsp;<?php if ($lng == TH) {  echo $facilities[$i]['facilities_detail_1_th'];}else{ echo $facilities[$i]['facilities_detail_1_en'];}?> <br>
                            &nbsp;&nbsp;<?php if ($lng == TH) {  echo $facilities[$i]['facilities_detail_2_th'];}else{ echo $facilities[$i]['facilities_detail_2_en'];}?>  <br>
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