<?PHP
require_once('view/menu.inc.php');
?>
<style>
.gal-item {
    overflow: hidden;
    padding: 8px;
}

.gal-item .box {
    height: 100%;
    overflow: hidden;
}

.box img {
    height: 100%;
    width: 100%;
    object-fit: cover;
}
</style>
<div class="container">
    <header class="text-center">
        <h1>Mesonry Image gallery</h1>
    </header>
    <?PHP for ($i=0; $i < count($gallery); $i= $i + 10) { 

?>
    <div class="row">
        <div class="col-md-12 col-sm-12 co-xs-12 gal-item">
            <div class="row h-200">
                <!-- ----------------------------------------------------------------------------------- -->
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