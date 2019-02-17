<!--  OUR GALLERY  -->
<style>
.home-gallery-title {
    padding-top: 8%; padding-bottom: 3%; margin-top: 0
}

@media (max-width: 767px) {
.home-gallery-title {
    margin-top: 0;
}

}
</style>
<div class="container">
    <div class="text-center">
        <i class="far fa-images" style="font-size:60px"></i>
        <h1>
            <span>OUR</span> <span style="color: #f47322;">GALLERY</span>
        </h1>
        <p>
            <span class="text" ><?php echo $gallery_head[0]['gallery_head_sub_title']; ?></span>
        </p>
    </div>
</div>

<div class="container-fluid px-0 no-padding gallery-show">

    <div class="text-center" id="image_fixed">
        <div class="row" mx-0>
            <?php for ($i = 0; $i < count($gallery); ++$i) {
                // code...?>
        <div class="col-6 col-xs-6 col-sm-6 col-md-4 col-lg-4 col-xl-2 no-padding">
            <img src="<?php echo $pathImgGallery.$gallery[$i]['gallery_img']; ?>"class="img-fluid w-100" style="margin:-0.5%" width="100%" alt="">
    </div>
    
    <?php
} ?>
</div>
</div>
</div>


<div class="gallery-slide">

<section class="slide-galery" >
    <?php for ($i=0; $i < count($gallery); $i++) {    ?>
    <img class="img-fluid" style=" width: 100px; height: 200px; object-fit: cover;"
        src="<?PHP echo $pathImgGallery . $gallery[$i]['gallery_img']?>">
    <?php } ?>
</section>

</div>


<script type="text/javascript">
$(document).on('ready', function() {
    $(".slide-galery").slick({
        arrows: false,
        dots: false,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 2500,
    });
});
</script>




<style>
/* fixed height img */
#image_fixed {
    width: auto;
    height: 420px;
    overflow: hidden;
}
.no-padding {
  padding-left: 0;
  padding-right: 0;
}

.gallery-slide {
    display: none;
}
.gallery-show {
    display: inherit;
    padding-left: 150px; 
    padding-right: 150px;
}
@media (max-width: 768px) {
    /* fixed height img */
    #image_fixed {
        width: auto;
        height: 500px;
        overflow: hidden;
    }
    .no-padding {
    padding-left: 0;
    padding-right: 0;
    }
    
}
@media (max-width: 739px) {
    /* fixed height img */
    #image_fixed {
        width: auto;
        height: 500px;
        overflow: hidden;
    }
    .no-padding {
    padding-left: 0;
    padding-right: 0;
    }
    
    .gallery-show {
        display: none;
    }
    .gallery-slide {
        display: inline;
        padding-top: 50;
        padding-bottom: 50;
    }
}
@media (max-width: 600px) {
    .gallery-slide {
        display: inline;
        padding-bottom: 50;
    }
}
</style>
