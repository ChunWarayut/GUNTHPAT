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
<div class="container-fluid gallery-show">
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
  <?PHP for ($i=0; $i < 5; $i= $i + 10) { ?>
    <div class="gal-item">
      <div class="row">
        <div class="col-4 col-4 co-12 gal-item">
          <div class="row">
            <?PHP if (!$gallery[$i]) {}else{?>
              <div class="col-12 col-12 co-12 gal-item">
                <div class="box">
                  <img src="<?PHP echo $pathImgGallery . $gallery[$i]['gallery_img']?>" class="img-ht img-fluid rounded " onclick="Show('<?PHP echo $pathImgGallery . $gallery[$i]['gallery_img']?>');">
                </div>
              </div>
            <?PHP }  ?>
            <?PHP if (!$gallery[$i+1]) {}else{?>
              <div class="col-12 col-12 co-12 gal-item">
                <div class="box">
                  <img src="<?PHP echo $pathImgGallery . $gallery[$i+1]['gallery_img']?>" class="img-ht img-fluid rounded" onclick="Show('<?PHP echo $pathImgGallery . $gallery[$i+1]['gallery_img']?>');">
                </div>
              </div>
            <?PHP }  ?>
          </div>
        </div>
        <?PHP if (!$gallery[$i+2]) {}else{?>
          <div class="col-8 col-8 co-12 gal-item">
            <div class="box">
              <img src="<?PHP echo $pathImgGallery . $gallery[$i+2]['gallery_img']?>" class="img-ht img-fluid rounded" onclick="Show('<?PHP echo $pathImgGallery . $gallery[$i+2]['gallery_img']?>');">
            </div>
          </div>
        <?PHP }  ?>
      </div>
    </div><!---->
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

</style>
