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
<div class="text-center" id="image_fixed">
    <?php for ($i = 0; $i < count($gallery); ++$i) {
    // code...?>
    <img src="
            <?php
           echo $pathImgGallery.$gallery[$i]['gallery_img']; ?>
        "
        class="img-fluid" style="margin:-0.5%" width="400em" alt="">
    <?php
} ?>
</div>
<style>
/* fixed height img */
#image_fixed {
    width: auto;
    height: 30em;
    overflow: hidden;
}
</style>