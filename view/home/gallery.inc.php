<!--  OUR GALLERY  -->
<div class="container">
    <div class="text-center">
        <i class="far fa-images" style="font-size:60px"></i>
        <h1>
            OUR <span><span>GALLERY</span></span>
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
            <div class="col-6 col-xs-6 col-sm-6 col-md-4 col-lg-4 col-xl-2 no-padding" onclick="Show('<?PHP echo $pathImgGallery . $gallery[$i]['gallery_img']?>');">
                <img src="<?php echo $pathImgGallery.$gallery[$i]['gallery_img']; ?>"class="img-fluid-gellery" alt="">
            </div>
            <?php } ?>
        </div>
    </div>
</div>


<div class="gallery-slide">
<?PHP
// for ($i=0; $i < count($gallery); $i= $i + 10) { 
for ($i=0; $i < 5; $i= $i + 10) { ?>
                <div class="gal-item">
                    <!-- ----------------------------------------------------------------------------------- -->
                    <div class="row">
                        <div class="col-4 col-4 co-12 gal-item">
                            <div class="row">
                                <?PHP if (!$gallery[$i]) {}else{?>
                                <div class="col-12 col-12 co-12 gal-item">
                                    <div class="box">
                                        <img src="<?PHP echo $pathImgGallery . $gallery[$i]['gallery_img']?>"
                                            class="img-ht img-fluid rounded " onclick="Show('<?PHP echo $pathImgGallery . $gallery[$i]['gallery_img']?>');">
                                    </div>
                                </div>
                                <?PHP }  ?>
                                <?PHP if (!$gallery[$i+1]) {}else{?>
                                <div class="col-12 col-12 co-12 gal-item">
                                    <div class="box">
                                        <img src="<?PHP echo $pathImgGallery . $gallery[$i+1]['gallery_img']?>"
                                            class="img-ht img-fluid rounded" onclick="Show('<?PHP echo $pathImgGallery . $gallery[$i+1]['gallery_img']?>');">
                                    </div>
                                </div>
                                <?PHP }  ?>
                            </div>
                        </div>
                        <?PHP if (!$gallery[$i+2]) {}else{?>
                        <div class="col-8 col-8 co-12 gal-item">
                            <div class="box">
                                <img src="<?PHP echo $pathImgGallery . $gallery[$i+2]['gallery_img']?>"
                                    class="img-ht img-fluid rounded" onclick="Show('<?PHP echo $pathImgGallery . $gallery[$i+2]['gallery_img']?>');">
                            </div>
                        </div>
                    </div>
                    <!-- ----------------------------------------------------------------------------------- -->
                    <?PHP }  ?>
                    
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
<div id="myModal" class="modal">

<!-- The Close Button -->
<!--   <span class="close">&times;</span> -->
<button type="button" class="close" data-dismiss="modal">&times;</button>

<!-- Modal Content (The Image) -->
<img class="modal-content" id="img01">

<!-- Modal Caption (Image Text) -->
<div id="caption"></div>
</div>
<script>
function Show(img) {
    $('#myModal').modal('show');
    document.getElementById("img01").src = img;
}

</script>
<style>/* Style the Image Used to Trigger the Modal */
#myImg {
  border-radius: 5px;
  cursor: pointer;
  transition: 0.3s;
}

#myImg:hover {opacity: 0.7;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 999; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (Image) */
.modal-content {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
}

/* Caption of Modal Image (Image Text) - Same Width as the Image */
#caption {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
  text-align: center;
  color: #ccc;
  padding: 10px 0;
  height: 150px;
}

/* Add Animation - Zoom in the Modal */
.modal-content, #caption { 
  animation-name: zoom;
  animation-duration: 0.6s;
}

@keyframes zoom {
  from {transform:scale(0)} 
  to {transform:scale(1)}
}

/* The Close Button */
.close {
  position: absolute;
  top: 15px;
  right: 35px;
  color: #f1f1f1;
  font-size: 40px;
  font-weight: bold;
  transition: 0.3s;
}

.close:hover,
.close:focus {
  color: #bbb;
  text-decoration: none;
  cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
  .modal-content {
    width: 100%;
  }
}
</style>
