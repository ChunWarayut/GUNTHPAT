
<section class="facilities" >
    <?php for ($i = 0; $i < count($facilities); ++$i) {
    ?>
    <div class="facilities-slide-item" >
        <div class="facilities-detail">
            <div class="row">
            <div class="col-lg-4 col-md-12 facilities-detail-titel  ">
                    <span class="h3 p-0">
                    <span class="p-0">
                        <?php if ($lng == TH) {  echo $facilities[$i]['facilities_name_th'];   }else {  echo $facilities[$i]['facilities_name_en'];  }  ?>
                    </span>
                    </span>
                    <p><?php if ($lng == TH) {  echo $facilities[$i]['facilities_detail_th'];}else{ echo $facilities[$i]['facilities_detail_en'];}?></p>
                </div>
                <div class="col-lg-5 col-md-8 col-sm-9 col-8 facilities-detail-image">
                        <img src="<?php echo $pathImgFacilities.$facilities[$i]['facilities_img']; ?>" class="img-fluid">
                </div>
                <div class="col-lg-3 col-md-4 col-sm-3 col-4 facilities-detail-flood">
                    <a class="btn" >
                        <span class="h3 p-0 m-0"><span ><i class="fas fa-concierge-bell"></i></span></span>
                        <p>
                            <?php if ($lng == TH) {  echo $facilities[$i]['facilities_detail_1_th'];}else{ echo $facilities[$i]['facilities_detail_1_en'];}?>
                        </p>
                        <p>
                            <?php if ($lng == TH) {  echo $facilities[$i]['facilities_detail_2_th'];}else{ echo $facilities[$i]['facilities_detail_2_en'];}?> 
                        </p>
                    </a>
                </div>
            </div>
        </div>  
        <div class="facilities-slide-bg">
            <img class="facilities-bg" style=" " src="<?php echo $pathImgFacilities.$facilities[$i]['facilities_img']; ?>">
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