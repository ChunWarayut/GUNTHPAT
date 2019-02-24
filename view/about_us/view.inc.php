<div class="container" id="about_us" style=" padding-top: 8%; padding-bottom: 3%;
    margin-bottom: -200;">
    <div class="text-center" style=" padding-bottom: 10%">
        <h1>
            
                ABOUT
            
            <span class="text" style="color:#f47322; ">
                GUNTHPAT PLACE
            </span>
        </h1>
    </div>
    <div class=""style="background-image: url('<?php echo $pathImgAbout_us.$about_us[0]['about_us_img']; ?>'">
        <div class="text-center" style=" padding-top: 15%; padding-bottom: 15%">  
            <h1>
                <span class="text" style="color:#ffffff; ">
                    <?php if ($lng == TH) {  echo $about_us[0]['about_us_title_th'];}else{  echo $about_us[0]['about_us_title_en'];} ?>
                </span>
            </h1>
        </div>
    </div>
    <p class="text" style=" padding-top: 2%;">
        <?php if ($lng == TH) {  echo $about_us[0]['about_us_sub_title_th'];}else{  echo $about_us[0]['about_us_sub_title_en'];} ?>
    </p>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
