<?PHP

require_once('models/GalleryModel.php');
$gallery_model = new Gallery;
$gallery = $gallery_model -> getgallery();
$img_path = "img_upload/gallery/";

// print_r($gallery);
?>


<div class="row text-white row-footer" style="background-color: #212529; ">

    <div class="col-xl-3 text-center align-self-center ">
        <div class="container">
            <img src="img_upload/logo/logo.png" class="img-fluid " width="400">
        </div>
    </div>

    <div class="col-xl-3 col-md-6" style="padding-top: 5%; padding-bottom: 5%">
        <div class="col-12">
            <div class="container">
                <h4>
                    <span class="text-header">
                        MENU
                    </span>
                </h4>
                <br>
                <!-- <?PHP #endregion
        for ($i=0; $i < 4; $i++) { 
            # code...
            ?>
                <p class="text-detail text-truncate ">
                <?php if ($lng == TH) {   echo    $gallery[$i]['news_name_th'];   }else { echo    $gallery[$i]['news_name_en'];  }  ?>
                </p>
                <hr class="border-white">

                <?PHP  }?> -->


                <a class="text-header nav-link " href="room.php#room">


                    <?php
                        if ($lng == TH) {
                            echo "ห้อง";
                        }else {
                            echo "ROOM";
                        }
                        ?>
                </a>


                <a class="text-header nav-link "
                    href="facilities.php#facilities">


                    <?php
                        if ($lng == TH) {
                            echo "บริการ";
                        }else {
                            echo "FACILITIES";
                        }
                        ?>


                </a>


                <a class="text-header nav-link"
                    href="gallery.php#gallery">

                    <?php
                        if ($lng == TH) {
                            echo "อัลบั้ม";
                        }else {
                            echo "GALLERY";
                        }
                        ?>

                </a>


                <a class="text-header nav-link "
                    href="about_us.php#about_us">


                    <?php
                        if ($lng == TH) {
                            echo "เกี่ยวกับเรา";
                        }else {
                            echo "ABOUT US";
                        }
                        ?>

                </a>


            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6" style="padding-top: 5%; padding-bottom: 5%">
        <div class="col-xl-12">
            <div class="container">
                <h4><span class="text-header">GALLERY</span></h4>
                <br>
                <div class="row">
                    <div class="container" id="image_footer_fixed">
                        <?PHP for ($i=0; $i < count($gallery); $i++) {# code...?>
                        <img src="<?PHP echo $img_path .  $gallery[$i]['gallery_img'];?>" class="img-fluid" width="100px"
                            height="100px" style=" max-width: 100%; height: 80;" alt="">
                        <?PHP } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3" style="padding-top: 5%; padding-bottom: 5%">
        <div class="col-xl-12">
            <div class="container">
                <h4><span class="text-header">CONTACT US</span></h4>
                <br>
                <div class="row">
                    <div class="col-md-8 col-lg-12">
                        <span class="text-header">Address :</span>
                        <p class="text-detail">
                            <?php if ($lng == TH) {   echo    $contact_us[0]['contact_us_address_th']; echo    $contact_us[0]['contact_us_address_1_th'];   }else { echo    $contact_us[0]['contact_us_address_en']; echo    $contact_us[0]['contact_us_address_1_en'];  }  ?>
                            <?php if ($lng == TH) {   echo    $contact_us[0]['contact_us_address_2_th']; echo    $contact_us[0]['contact_us_address_3_th']; echo    $contact_us[0]['contact_us_address_4_th'];   }else { echo    $contact_us[0]['contact_us_address_2_en']; echo    $contact_us[0]['contact_us_address_3_en']; echo    $contact_us[0]['contact_us_address_4_en'];  }  ?>

                        </p>
                    </div>
                    <div class="col-md-4 col-lg-12 col-sm-6 col-xs-6">
                        <span class="text-header">Call us :</span>
                        <p class="text-detail">
                            <?PHP  echo    $contact_us[0]['contact_us_fax'];?>
                        </p class="text">
                    </div>
                    <div class="col-md-4 col-lg-12 col-sm-6 col-xs-6">
                        <span class="text-header">Email us :</span>
                        <p class="text-detail">
                            <?PHP  echo    $contact_us[0]['contact_us_email'];?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>