
<!--  OUR GALLERY  -->
<div class="container" style=" padding-top: 8%; padding-bottom: 3%">
    <div class="text-center">
        <i class="fab fa-accessible-icon"></i>
        <h1>
            <span>OUR</span> <span style="color: #f47322;">GALLERY</span>
        </h1>
        <p>
            <span>asdasdasdasdasdasdasdasdasdasdasdsadsadasdasdasdasdasdasdasdasdasdasdasdsadasdasdasdasdasdasdasd</span>
            <span>asdasdasdasdasdasdassadasdasdasdasdasdasd</span>
        </p>
    </div>
</div>
<div class="text-center">
    <?PHP for ($i=0; $i < count($gallery); $i++) { 
        # code...
    ?>
    <img src="
            <?PHP
           echo $pathImgGallery .  $gallery[$i]['gallery_img']; 
        ?>
        "
        class="img-fluid" width="200px" alt="">
    <?PHP } ?>
</div>