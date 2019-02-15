<link href="template/frontend/css/footer.css" rel="stylesheet">

<?PHP

require_once('models/News.php');
$news_model = new News;
$news = $news_model -> getNews();
$img_path = "img_upload/news/";

// print_r($news);
?>
<div style="padding:30;">

</div>

<div class="row text-white" style="background-color: #212529; padding-right: 3%;">

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
                        LASTEST NEWS
                    </span>
                </h4>
                <br>
                <?PHP #endregion
        for ($i=0; $i < 4; $i++) { 
            # code...
            ?>
                <p class="text-detail text-truncate ">
                    <?PHP  echo    $news[$i]['news_name'];?>
                </p>
                <hr class="border-white">

                <?PHP  }?>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6" style="padding-top: 5%; padding-bottom: 5%">
        <div class="col-xl-12">
            <div class="container">
                    <h4><span class="text-header">LASTEST NEWS</span></h4>
                    <br>
                    <div class="row">
                        <div class="container" id="image_footer_fixed"><?PHP for ($i=0; $i < count($news); $i++) {# code...?>
                            <img src="<?PHP echo $img_path .  $news[$i]['news_img'];?>"class="img-fluid" width="100px" height="100px" style=" max-width: 100%; height: 80;" alt=""><?PHP } ?>
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
                    <div class="col-md-8 col-lg-12" >
                        <span class="text-header">Address :</span>
                        <p class="text-detail">
                            <?PHP echo    $contact_us[0]['contact_us_address']; echo    $contact_us[0]['contact_us_address_1']; ?> 
                            <?PHP echo    $contact_us[0]['contact_us_address_2']; echo    $contact_us[0]['contact_us_address_3']; echo    $contact_us[0]['contact_us_address_4']; ?>
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
