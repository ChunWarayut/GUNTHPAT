<?PHP 

$path_img = "img_upload/gallery/";
require_once('../models/GalleryModel.php');
$galleryBy_model = new Gallery;
$gallery = $galleryBy_model -> getgalleryby($_POST['gallery_type_id']) ;


for ($i=0; $i < count($gallery); $i= $i + 10) { ?>
        <div class="row">
            <div class="col-12 col-12 co-12 gal-item">
                <div class="row ">
                    <!-- ----------------------------------------------------------------------------------- -->
                    <div class="row">
                        <div class="col-4 col-4 co-12 gal-item">
                            <div class="row">
                                <?PHP if (!$gallery[$i]) {}else{?>
                                <div class="col-12 col-12 co-12 gal-item">
                                    <div class="box">
                                        <img src="<?PHP echo $path_img . $gallery[$i]['gallery_img']?>" 
                                            class="img-ht img-fluid rounded" onclick="Show('<?PHP echo $path_img . $gallery[$i]['gallery_img']?>');">
                                    </div>
                                </div>
                                <?PHP }  ?>
                                <?PHP if (!$gallery[$i+1]) {}else{?>
                                <div class="col-12 col-12 co-12 gal-item">
                                    <div class="box">
                                        <img src="<?PHP echo $path_img . $gallery[$i+1]['gallery_img']?>"
                                            class="img-ht img-fluid rounded" onclick="Show('<?PHP echo $path_img . $gallery[$i+1]['gallery_img']?>');">
                                    </div>
                                </div>
                                <?PHP }  ?>
                            </div>
                        </div>
                        <?PHP if (!$gallery[$i+2]) {}else{?>
                        <div class="col-8 col-8 co-12 gal-item">
                            <div class="box">
                                <img src="<?PHP echo $path_img . $gallery[$i+2]['gallery_img']?>"
                                    class="img-ht img-fluid rounded" onclick="Show('<?PHP echo $path_img . $gallery[$i+2]['gallery_img']?>');">
                            </div>
                        </div>
                    </div>
                    <!-- ----------------------------------------------------------------------------------- -->
                    <?PHP }  ?>
                    <div class="row">
                        <?PHP if (!$gallery[$i+3]) {}else{?>
                        <div class="col-6 col-6 co-12 gal-item">
                            <div class="box">
                                <img src="<?PHP echo $path_img . $gallery[$i+3]['gallery_img']?>"
                                    class="img-ht img-fluid rounded" onclick="Show('<?PHP echo $path_img . $gallery[$i+3]['gallery_img']?>');">
                            </div>
                        </div>
                        <?PHP }  ?>
                        <?PHP if (!$gallery[$i+4]) {}else{?>
                        <div class="col-6 col-6 co-12 gal-item">
                            <div class="box">
                                <img src="<?PHP echo $path_img . $gallery[$i+4]['gallery_img']?>"
                                    class="img-ht img-fluid rounded" onclick="Show('<?PHP echo $path_img . $gallery[$i+4]['gallery_img']?>');">
                            </div>
                        </div>
                        <?PHP }  ?>
                        <?PHP if (!$gallery[$i+5]) {}else{?>
                        <div class="col-6 col-6 co-12 gal-item">
                            <div class="box">
                                <img src="<?PHP echo $path_img . $gallery[$i+5]['gallery_img']?>"
                                    class="img-ht img-fluid rounded" onclick="Show('<?PHP echo $path_img . $gallery[$i+5]['gallery_img']?>');">
                            </div>
                        </div>
                        <?PHP }  ?>
                        <div class="col-6 col-6 co-12 gal-item">
                            <div class="row">
                                <?PHP if (!$gallery[$i+6]) {}else{?>
                                <div class="col-6 col-6 co-12 gal-item">
                                    <div class="box">
                                        <img src="<?PHP echo $path_img . $gallery[$i+6]['gallery_img']?>"
                                            class="img-ht img-fluid rounded" onclick="Show('<?PHP echo $path_img . $gallery[$i+6]['gallery_img']?>');">
                                    </div>
                                </div>
                                <?PHP }  ?>
                                <?PHP if (!$gallery[$i+7]) {}else{?>
                                <div class="col-6 col-6 co-12 gal-item">
                                    <div class="box">
                                        <img src="<?PHP echo $path_img . $gallery[$i+7]['gallery_img']?>"
                                            class="img-ht img-fluid rounded" onclick="Show('<?PHP echo $path_img . $gallery[$i+7]['gallery_img']?>');">
                                    </div>
                                </div>
                                <?PHP }  ?>
                                <?PHP if (!$gallery[$i+8]) {}else{?>
                                <div class="col-6 col-6 co-12 gal-item">
                                    <div class="box">
                                        <img src="<?PHP echo $path_img . $gallery[$i+8]['gallery_img']?>"
                                            class="img-ht img-fluid rounded" onclick="Show('<?PHP echo $path_img . $gallery[$i+8]['gallery_img']?>');">
                                    </div>
                                </div>
                                <?PHP }  ?>
                                <?PHP if (!$gallery[$i+9]) {}else{?>
                                <div class="col-6 col-6 co-12 gal-item">
                                    <div class="box">
                                        <img src="<?PHP echo $path_img . $gallery[$i+9]['gallery_img']?>"
                                            class="img-ht img-fluid rounded" onclick="Show('<?PHP echo $path_img . $gallery[$i+9]['gallery_img']?>');">
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
    