<?PHP
require_once('view/menu.inc.php');
?>
<div class="container gallery" id="gallery">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
            <div class="gallery-header">
                <h1>
                    OUR
                    <span style="color:#f47322; ">
                        GALLERY
                    </span>
                </h1>
                <p class="text-right">
                    <span>

                    </span>
                </p>
            </div>
        </div>
        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
            <div class="" style="padding-bottom:8%;">

                <h4>

                    <?php if ($lng == TH) { echo $gallery_head[0]['gallery_head_title_th'];   }else {   echo $gallery_head[0]['gallery_head_title_en'];   }  ?>

                </h4>
                <span class=" gallery-detail">
                    <?php if ($lng == TH) { echo $gallery_head[0]['gallery_head_sub_title_th'];   }else {   echo $gallery_head[0]['gallery_head_sub_title_en'];   }  ?>
                </span>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <form action="gallery.php?action=search" id="form_target" role="form" method="post">
        <div class="class row">
            <div class=" col-5">
                <div class="text-right">
                    <h4>
                        <?php if ($lng == TH) { echo  "แสดงให้ฉันดู"; }else {   echo "Show me";  }  ?>
                    </h4>
                </div>
            </div>
            <div class=" col-2">
                <select class="form-control" style="border: 0px solid #ced4da; width: 150px; color: #f47322"
                    id="gallery_type_id" name="gallery_type_id" value="<?PHP echo $gallery_type_id;?>" onchange="getGallery(this)">
                    <option value="">
                        <?php if ($lng == TH) { echo  "ทั้งหมด"; }else {   echo " Show All";  }  ?>
                    </option>
                    <?PHP for ($i=0; $i < count($gallery_type); $i++) { ?>
                    <!-- formaction="gallery.php?id=<?PHP echo $gallery_type[$i]['gallery_type_id'];?>" -->
                    <option value="<?PHP echo $gallery_type[$i]['gallery_type_id'];?>" <?PHP if ($gallery_type_id==$gallery_type[$i]['gallery_type_id']) {
                        echo 'selected' ; } ?>>
                        <?php if ($lng == TH) {    echo $gallery_type[$i]['gallery_type_name_th']; }else {   echo $gallery_type[$i]['gallery_type_name_en']; }  ?>
                    </option>
                    <?PHP 
                    }?>
                </select>
            </div>
            <div class=" col-2">
                <!-- <button type="submit" class="btn btn-primary ">search</button> -->
            </div>
        </div>
    </form>
</div>

<div class="gallery-show " id="galleryBY">
</div>


<div class="gallery-slide" id="galleryBYSlide">
<!-- 
    <section class="slide-galery">
        <?php for ($i=0; $i < count($gallery); $i++) {    ?>
        <img class="img-fluid" style=" width: 100px; height: 200px; object-fit: cover;"
            src="<?PHP echo $path_img . $gallery[$i]['gallery_img']?>">
        <?php } ?>
    </section> -->

</div>
<!-- The Modal -->
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

$(document).on('ready', function() {
    getGallery(this.value = "");
    $(".slide-galery").slick({
        arrows: false,
        dots: false,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 2500,
    });
});

function getGallery(id) {
    var gallery_type_id = id.value;
    $.post("controls/getGallery.php", {
        'gallery_type_id': gallery_type_id
    }, function(data) {
        $("#galleryBY").html(data);
    });
    getGallerySlide(id)
}
function getGallerySlide(id) {
    var gallery_type_id = id.value;
    $.post("controls/getGallerySlide.php", {
        'gallery_type_id': gallery_type_id
    }, function(data) {
        $("#galleryBYSlide").html(data);
    });
}
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