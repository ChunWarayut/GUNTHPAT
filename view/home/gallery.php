<!--  OUR GALLERY  -->
<div class="container" style=" padding-top: 8%; padding-bottom: 3%">
    <div class="text-center">
        <i class="far fa-images" style="font-size:60px"></i>
        <h1>
            <span>OUR</span> <span style="color: #f47322;">GALLERY</span>
        </h1>
        <p>
            <span><?php echo $gallery_head[0]['gallery_head_sub_title']; ?></span>
        </p>
    </div>
</div>
<div class="container-fluid px-0 no-padding">

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
</style>