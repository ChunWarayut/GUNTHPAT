<?PHP
require_once('view/menu.inc.php');
?>
<div class="container" id="gallery">
    <div class="row gallery-title">
        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
            <div class="text-left gallery-header">
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


<div class="gallery-slide" id="getGallerySlide">

</div>


<script type="text/javascript">

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
        $("#getGallerySlide").html(data);
    });
}
</script>