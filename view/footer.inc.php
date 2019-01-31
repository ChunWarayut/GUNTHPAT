<?PHP

require_once('models/News.php');
$news_model = new News;
$news = $news_model -> getNews();
// print_r($news);
?>


<div class="row text-white" style="background-color: #212529; padding-left: 5%;">

    <div class="col-xl-3 align-self-center ">
    
        <img src="img_upload/logo/logo.png" class="img-responsive " width="300">
    </div>
    <div class="col-sm-3" style="padding-top: 5%; padding-bottom: 5%">
    <div class="col-10">
    
        <h4>
            <span>
                LASTEST NEWS
            </span>
        </h4>
        <br>
        <?PHP #endregion
        for ($i=0; $i < 3; $i++) { 
            # code...
        ?>
        <p class="text-truncate " >
        <?PHP  echo    $news[$i]['news_name'];?>
        </p>
        <hr class="border-white">

    <?PHP  }?>
    </div>

    </div>
    <div class="col-xl-3" style="padding-top: 5%; padding-bottom: 5%">
        <h4>
            <span>
                LASTEST NEWS
            </span>
        </h4>
        <br>
        <div class="row">
            <?PHP for ($i=0; $i < count($gallery) && $i<8; $i++) { 
            # code...
            ?>
            <img src="
            <?PHP
           echo $pathImgGallery .  $gallery[$i]['gallery_img']; 
           ?>
        "
                class="img-fluid" width="100px"  height="100px" style=" max-width: 100%; height: 80;"  alt="">
            <?PHP } ?>

        </div>
    </div>
    <div class="col-xl-2 " style="padding-top: 5%; padding-bottom: 5%">
        <h4>
            <span>
                CONTACT US
            </span>
        </h4>
        <br>
        <span style="color: #f47322;">Address :</span>
        <p>
        <?PHP 
            echo    $contact_us[0]['contact_us_address'];
            echo    $contact_us[0]['contact_us_address_1'];
            ?>
            <br>
            <?PHP
            echo    $contact_us[0]['contact_us_address_2'];
            echo    $contact_us[0]['contact_us_address_3'];
            echo    $contact_us[0]['contact_us_address_4'];
        ?>
        </p>
        <span style="color: #f47322;">Call us :</span>
        <p>
            <?PHP  echo    $contact_us[0]['contact_us_fax'];?>
        </p>
        <span style="color: #f47322;">Email us :</span>
        
        <p>
            <?PHP  echo    $contact_us[0]['contact_us_email'];?>
        </p>
    </div>
</div>