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
            <div class=" col-6 text-right">
                    <h4 class="p-0 m-0">
                        <?php if ($lng == TH) { echo  "แสดงให้ฉันดู"; }else {   echo "Show me";  }  ?>
                    </h4>
            </div>
            <div class=" col-6 text-left">
                <select class="" style="border: 0px solid #ced4da; width: 150px; color: #f47322"
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

<div class="modal" id="imgshow" tabindex="-1" role="dialog">
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
}

function Show(img) {
    console.log(img);
        $('#imgshow').modal('show');
        document.getElementById("img01").src = img;
    }

</script>