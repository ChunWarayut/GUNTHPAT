<!--  OUR GALLERY  -->

<link href="template/frontend/css/home-gallery.css" rel="stylesheet">

<div class="container">
    <div class="text-center">
        <i class="far fa-images" style="font-size:60px"></i>
        <h1>
            OUR <span>GALLERY</span>
        </h1>
        <p>
        <?php if ($lng == TH) { echo $gallery_head[0]['gallery_head_sub_title_th'];   }else {   echo $gallery_head[0]['gallery_head_sub_title_en'];   }  ?>          
        </p>
    </div>
</div>

<div class="container-fluid px-0  gallery-show p-0">
    <div class="text-center" id="image_fixed">
        <div class="row" mx-0>
            <?php for ($i = 0; $i < count($gallery); ++$i) { ?>
            <div class="col-6 col-xs-6 col-sm-6 col-md-4 col-lg-4 col-xl-2 no-padding">
                <img src="<?php echo $pathImgGallery.$gallery[$i]['gallery_img']; ?>"class="img-fluid-gellery" alt="">
            </div>
            <?php } ?>
        </div>
    </div>
</div>


<div class="gallery-slide">
<?PHP
// for ($i=0; $i < count($gallery); $i= $i + 10) { 
for ($i=0; $i < 20; $i= $i + 10) { ?>
        <div class="row">
            <div class="col-12 col-12 co-12 gal-item">
                <div class="row ">
                    <!-- ----------------------------------------------------------------------------------- -->
                    <div class="row">
                        <div class="col-4 col-4 co-12 gal-item">
                            <div class="row">
                                <?PHP if (!$gallery[$i]) {}else{?>
                                <div class="col-12 col-12 co-12 gal-item">
                                    <div class="box">
                                        <img src="<?PHP echo $pathImgGallery . $gallery[$i]['gallery_img']?>"
                                            class="img-ht img-fluid rounded">
                                    </div>
                                </div>
                                <?PHP }  ?>
                                <?PHP if (!$gallery[$i+1]) {}else{?>
                                <div class="col-12 col-12 co-12 gal-item">
                                    <div class="box">
                                        <img src="<?PHP echo $pathImgGallery . $gallery[$i+1]['gallery_img']?>"
                                            class="img-ht img-fluid rounded">
                                    </div>
                                </div>
                                <?PHP }  ?>
                            </div>
                        </div>
                        <?PHP if (!$gallery[$i+2]) {}else{?>
                        <div class="col-8 col-8 co-12 gal-item">
                            <div class="box">
                                <img src="<?PHP echo $pathImgGallery . $gallery[$i+2]['gallery_img']?>"
                                    class="img-ht img-fluid rounded">
                            </div>
                        </div>
                    </div>
                    <!-- ----------------------------------------------------------------------------------- -->
                    <?PHP }  ?>
                    <div class="row">
                        <?PHP if (!$gallery[$i+3]) {}else{?>
                        <div class="col-6 col-6 co-12 gal-item">
                            <div class="box">
                                <img src="<?PHP echo $pathImgGallery . $gallery[$i+3]['gallery_img']?>"
                                    class="img-ht img-fluid rounded">
                            </div>
                        </div>
                        <?PHP }  ?>
                        <?PHP if (!$gallery[$i+4]) {}else{?>
                        <div class="col-6 col-6 co-12 gal-item">
                            <div class="box">
                                <img src="<?PHP echo $pathImgGallery . $gallery[$i+4]['gallery_img']?>"
                                    class="img-ht img-fluid rounded">
                            </div>
                        </div>
                        <?PHP }  ?>
                        <?PHP if (!$gallery[$i+5]) {}else{?>
                        <div class="col-6 col-6 co-12 gal-item">
                            <div class="box">
                                <img src="<?PHP echo $pathImgGallery . $gallery[$i+5]['gallery_img']?>"
                                    class="img-ht img-fluid rounded">
                            </div>
                        </div>
                        <?PHP }  ?>
                        <div class="col-6 col-6 co-12 gal-item">
                            <div class="row">
                                <?PHP if (!$gallery[$i+6]) {}else{?>
                                <div class="col-6 col-6 co-12 gal-item">
                                    <div class="box">
                                        <img src="<?PHP echo $pathImgGallery . $gallery[$i+6]['gallery_img']?>"
                                            class="img-ht img-fluid rounded">
                                    </div>
                                </div>
                                <?PHP }  ?>
                                <?PHP if (!$gallery[$i+7]) {}else{?>
                                <div class="col-6 col-6 co-12 gal-item">
                                    <div class="box">
                                        <img src="<?PHP echo $pathImgGallery . $gallery[$i+7]['gallery_img']?>"
                                            class="img-ht img-fluid rounded">
                                    </div>
                                </div>
                                <?PHP }  ?>
                                <?PHP if (!$gallery[$i+8]) {}else{?>
                                <div class="col-6 col-6 co-12 gal-item">
                                    <div class="box">
                                        <img src="<?PHP echo $pathImgGallery . $gallery[$i+8]['gallery_img']?>"
                                            class="img-ht img-fluid rounded">
                                    </div>
                                </div>
                                <?PHP }  ?>
                                <?PHP if (!$gallery[$i+9]) {}else{?>
                                <div class="col-6 col-6 co-12 gal-item">
                                    <div class="box">
                                        <img src="<?PHP echo $pathImgGallery . $gallery[$i+9]['gallery_img']?>"
                                            class="img-ht img-fluid rounded">
                                    </div>
                                </div>
                                <?PHP }  ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <?PHP } ?>
    

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
