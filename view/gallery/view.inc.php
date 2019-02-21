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

                    GUNTHPAT PLACE

                </h4>
                <span class=" gallery-detail">
                    Gunthpat Place Luxurious apartment is located right behind Tesco-Lotus with the full safety
                    system building, surrounding with all convenience places such as THE MALL, Bangkok-Ratchasima
                    Hospital, Schools, Bank etc. Every room type is including 5’bed, 2 Tables, 1TV stand, TV,
                    Refrigerator, Closet, sink, bed light, etc,
                </span>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="class row">
        <div class=" col-6">
            <div class="text-right">
                <h4>
                    แสดงให้ฉันดู
                </h4>
            </div>
        </div>
        <div class=" col-6">
            <select class="form-control"  style="border: 0px solid #ced4da; width: 150px; color: #f47322" id="room_id" name="room_id" value="<?PHP echo $room_id;?>">
                <?PHP for ($i=0; $i < count($rooms); $i++) { ?>
                <option value="<?PHP echo $rooms[$i]['room_id'];?>" <?PHP if ($room_id==$rooms[$i]['room_id']) {
                    echo 'selected' ; } ?>>
                    <?PHP echo $rooms[$i]['room_name'];?>
                </option>
                <?PHP 
                    }?>
            </select>
        </div>
    </div>
</div>
<div class="gallery-show ">

    <?PHP for ($i=0; $i < count($gallery); $i= $i + 10) { 

?>
    <div class="row">
        <div class="col-md-12 col-sm-12 co-xs-12 gal-item">
            <div class="row ">
                <!-- ----------------------------------------------------------------------------------- -->
                <div class="row">
                    <div class="col-md-4 col-sm-4 co-xs-12 gal-item">
                        <div class="row">
                            <?PHP if (!$gallery[$i]) {}else{?>
                            <div class="col-md-12 col-sm-12 co-xs-12 gal-item">
                                <div class="box">
                                    <img src="<?PHP echo $path_img . $gallery[$i]['gallery_img']?>"
                                        class="img-ht img-fluid rounded">
                                </div>
                            </div>
                            <?PHP }  ?>
                            <?PHP if (!$gallery[$i+1]) {}else{?>
                            <div class="col-md-12 col-sm-12 co-xs-12 gal-item">
                                <div class="box">
                                    <img src="<?PHP echo $path_img . $gallery[$i+1]['gallery_img']?>"
                                        class="img-ht img-fluid rounded">
                                </div>
                            </div>
                            <?PHP }  ?>
                        </div>
                    </div>
                    <?PHP if (!$gallery[$i+2]) {}else{?>
                    <div class="col-md-8 col-sm-8 co-xs-12 gal-item">
                        <div class="box">
                            <img src="<?PHP echo $path_img . $gallery[$i+2]['gallery_img']?>"
                                class="img-ht img-fluid rounded">
                        </div>
                    </div>
                </div>
                <!-- ----------------------------------------------------------------------------------- -->
                <?PHP }  ?>
                <div class="row">
                    <?PHP if (!$gallery[$i+3]) {}else{?>
                    <div class="col-md-6 col-sm-6 co-xs-12 gal-item">
                        <div class="box">
                            <img src="<?PHP echo $path_img . $gallery[$i+3]['gallery_img']?>"
                                class="img-ht img-fluid rounded">
                        </div>
                    </div>
                    <?PHP }  ?>
                    <?PHP if (!$gallery[$i+4]) {}else{?>
                    <div class="col-md-6 col-sm-6 co-xs-12 gal-item">
                        <div class="box">
                            <img src="<?PHP echo $path_img . $gallery[$i+4]['gallery_img']?>"
                                class="img-ht img-fluid rounded">
                        </div>
                    </div>
                    <?PHP }  ?>
                    <?PHP if (!$gallery[$i+5]) {}else{?>
                    <div class="col-md-6 col-sm-6 co-xs-12 gal-item">
                        <div class="box">
                            <img src="<?PHP echo $path_img . $gallery[$i+5]['gallery_img']?>"
                                class="img-ht img-fluid rounded">
                        </div>
                    </div>
                    <?PHP }  ?>
                    <div class="col-md-6 col-sm-6 co-xs-12 gal-item">
                        <div class="row">
                            <?PHP if (!$gallery[$i+6]) {}else{?>
                            <div class="col-md-6 col-sm-6 co-xs-12 gal-item">
                                <div class="box">
                                    <img src="<?PHP echo $path_img . $gallery[$i+6]['gallery_img']?>"
                                        class="img-ht img-fluid rounded">
                                </div>
                            </div>
                            <?PHP }  ?>
                            <?PHP if (!$gallery[$i+7]) {}else{?>
                            <div class="col-md-6 col-sm-6 co-xs-12 gal-item">
                                <div class="box">
                                    <img src="<?PHP echo $path_img . $gallery[$i+7]['gallery_img']?>"
                                        class="img-ht img-fluid rounded">
                                </div>
                            </div>
                            <?PHP }  ?>
                            <?PHP if (!$gallery[$i+8]) {}else{?>
                            <div class="col-md-6 col-sm-6 co-xs-12 gal-item">
                                <div class="box">
                                    <img src="<?PHP echo $path_img . $gallery[$i+8]['gallery_img']?>"
                                        class="img-ht img-fluid rounded">
                                </div>
                            </div>
                            <?PHP }  ?>
                            <?PHP if (!$gallery[$i+9]) {}else{?>
                            <div class="col-md-6 col-sm-6 co-xs-12 gal-item">
                                <div class="box">
                                    <img src="<?PHP echo $path_img . $gallery[$i+9]['gallery_img']?>"
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


<div class="gallery-slide">

    <section class="slide-galery">
        <?php for ($i=0; $i < count($gallery); $i++) {    ?>
        <img class="img-fluid" style=" width: 100px; height: 200px; object-fit: cover;"
            src="<?PHP echo $path_img . $gallery[$i]['gallery_img']?>">
        <?php } ?>
    </section>

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