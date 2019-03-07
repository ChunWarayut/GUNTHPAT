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
<div class="pb-5" style="" >
  <div id="slide-galery">
    <?php for ($i = 0; $i < count($gallery); ++$i) { ?>
      <div onclick="Show('<?PHP echo $pathImgGallery . $gallery[$i]['gallery_img']?>');">
        <img src="<?php echo $pathImgGallery.$gallery[$i]['gallery_img']; ?>"class="img-fluid-gellery" style="width: 100%;">
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
