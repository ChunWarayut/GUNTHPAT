<?PHP
require_once('view/menu.inc.php');
?>
<style>
.gal-item {
    overflow: hidden;
    padding-top: 4px;
    padding-bottom: 8px;
}

.gal-item .box {
    /* height: 100%; */
    overflow: hidden;
}

.box img {
    /* height: 100%; */
    width: 100%;
    object-fit: cover;
}
</style>
<div class="container" style="">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
            <div class="text-left" style=" margin-left:150">
                <h1>
                    <span>
                        OUR
                    </span>
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

                <h4 class="font-weight-light">
                    <span>
                        GUNTHPAT PLACE
                    </span>
                </h4>
                    <span class="font-weight-light">
                        Gunthpat Place Luxurious apartment is located right behind Tesco-Lotus with the full safety
                        system building, surrounding with all convenience places such as THE MALL, Bangkok-Ratchasima
                        Hospital, Schools, Bank etc. Every room type is including 5’bed, 2 Tables, 1TV stand, TV,
                        Refrigerator, Closet, sink, bed light, etc,
                    </span>
            </div>
        </div>
    </div>
</div>
<div class="container" style="">

    <div class="text-center" style="">
        <h4>
            <span class="text">
                แสดงให้ฉันดู
            </span>
        </h4>
    </div>
</div>
<div class="container">

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
    <?PHP } ?>
</div>
<style>
@import url('https://fonts.googleapis.com/css?family=Kanit');

.text{
    font-family: 'Kanit', sans-serif;
}
</style>