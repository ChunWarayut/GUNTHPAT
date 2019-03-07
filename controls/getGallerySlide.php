<?PHP 

$path_img = "img_upload/gallery/";
require_once('../models/GalleryModel.php');
$galleryBy_model = new Gallery;
$gallery = $galleryBy_model -> getgalleryby($_POST['gallery_type_id']) ;


for ($i=0; $i < 10; $i= $i + 10) { ?>

<div class="gal-item px-2">
    <!-- ----------------------------------------------------------------------------------- -->
    <div class="row">
        <div class="col-4 col-4 co-12 gal-item">
            <div class="row">
                <?PHP if (!$gallery[$i]) {}else{?>
                <div class="col-12 col-12 co-12 gal-item">
                    <div class="box">
                        <img src="<?PHP echo $path_img . $gallery[$i]['gallery_img']?>" class="img-ht img-fluid rounded"
                            onclick="Show('<?PHP echo $path_img . $gallery[$i]['gallery_img']?>');">
                    </div>
                </div>
                <?PHP }  ?>
                <?PHP if (!$gallery[$i+1]) {}else{?>
                <div class="col-12 col-12 co-12 gal-item">
                    <div class="box">
                        <img src="<?PHP echo $path_img . $gallery[$i+1]['gallery_img']?>"
                            class="img-ht img-fluid rounded"
                            onclick="Show('<?PHP echo $path_img . $gallery[$i+1]['gallery_img']?>');">
                    </div>
                </div>
                <?PHP }  ?>
            </div>
        </div>
        <?PHP if (!$gallery[$i+2]) {}else{?>
        <div class="col-8 col-8 co-12 gal-item">
            <div class="box">
                <img src="<?PHP echo $path_img . $gallery[$i+2]['gallery_img']?>" class="img-ht img-fluid rounded"
                    onclick="Show('<?PHP echo $path_img . $gallery[$i+2]['gallery_img']?>');">
            </div>
        </div>
    </div>
    <!-- ----------------------------------------------------------------------------------- -->
    <?PHP }  ?>
    
</div>


<?PHP } ?>
<div class="pb-5">
  <div id="slide-galery">
    <?php for ($i = 0; $i < count($gallery); ++$i) { ?>
      <div onclick="Show('<?PHP echo $path_img . $gallery[$i]['gallery_img']?>');">
        <img src="<?php echo $path_img.$gallery[$i]['gallery_img']; ?>"class="img-fluid-gellery" style="width: 100%;">
      </div>
    <?php } ?>
  </div>
</div>

<div id="myModal" class="modal">
    <!-- The Close Button -->
    <!--   <span class="close">&times;</span> -->
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <!-- Modal Content (The Image) -->
    <img class="modal-content" id="img01">
    <!-- Modal Caption (Image Text) -->
    <div id="caption"></div>
  </div>

<script type="text/javascript">
  $("#slide-galery").slick({
    dots: true,
    slidesToShow: 5,
    slidesToScroll: 1,
    arrows: false,
    dots: false,
    autoplay: true,
    autoplaySpeed: 2000,
    responsive: [
      {
        breakpoint: 1600,
        settings: {
          slidesToShow: 4,
          slidesToScroll: 1
        }
      },{
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  });
  function Show(img) {
        $('#myModal').modal('show');
        document.getElementById("img01").src = img;
    }
</script>