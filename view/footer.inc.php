<?PHP

require_once('models/News.php');
$news_model = new News;
$news = $news_model -> getNews();
$img_path = "img_upload/news/";

// print_r($news);
?>


<div class="row text-white" style="background-color: #212529; padding-right: 3%;">

    <div class="col-xl-3 text-center align-self-center ">
        <div class="container">
            <img src="img_upload/logo/logo.png" class="img-fluid " width="400">
        </div>
    </div>

    <div class="col-xl-3" style="padding-top: 5%; padding-bottom: 5%">
        <div class="col-12 ">
            <div class="container">
                <h4>
                    <span class="text">
                        LASTEST NEWS
                    </span>
                </h4>
                <br>
                <?PHP #endregion
        for ($i=0; $i < 4; $i++) { 
            # code...
            ?>
                <p class="text">
                    <?PHP  echo    $news[$i]['news_name'];?>
                </p>
                <hr class="border-white">

                <?PHP  }?>
            </div>
        </div>

    </div>
    <div class="col-xl-3" style="padding-top: 5%; padding-bottom: 5%">
        <div class="container">
            <h4>
                <span class="text">
                    LASTEST NEWS
                </span>
            </h4>
            <br>
            <div class="row">
                <div class="container" id="image_footer_fixed">
                    <?PHP for ($i=0; $i < count($news); $i++) { 
                    # code...
                    ?>
                    <img src="
            <?PHP
           echo $img_path .  $news[$i]['news_img']; 
           ?>"
                        class="img-fluid" width="100px" height="100px" style=" max-width: 100%; height: 80;" alt="">
                    <?PHP } ?>
                </div>

            </div>
        </div>
    </div>
    <div class="col-xl-3 " style="padding-top: 5%; padding-bottom: 5%">
        <div class="container">
            <h4>
                <span class="text">
                    CONTACT US
                </span>
            </h4>
            <br>
            <span style="color: #f47322;">Address :</span>
            <p class="text">
                <?PHP 
            echo    $contact_us[0]['contact_us_address'];
            echo    $contact_us[0]['contact_us_address_1'];
            ?>
                <?PHP
            echo    $contact_us[0]['contact_us_address_2'];
            echo    $contact_us[0]['contact_us_address_3'];
            echo    $contact_us[0]['contact_us_address_4'];
            ?>
            </p>
            <span style="color: #f47322;">Call us :</span>
            <p class="text">
                <?PHP  echo    $contact_us[0]['contact_us_fax'];?>
            </p class="text">
            <span style="text color: #f47322;">Email us :</span>

            <p class="text">
                <?PHP  echo    $contact_us[0]['contact_us_email'];?>
            </p>
        </div>
    </div>
</div>

<style>
/* fixed height img */
#image_footer_fixed {
    width: auto;
    height: 15em;
    overflow: hidden;
}
</style>
<style>
@import url('https://fonts.googleapis.com/css?family=Kanit');

.text{
    font-family: 'Kanit', sans-serif;
}
</style>
<style>
@import url('https://fonts.googleapis.com/css?family=Kanit:200');

.text2{
    font-family: 'Kanit', sans-serif;
}
</style>