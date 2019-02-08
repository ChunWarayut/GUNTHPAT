
<!-- FACILITIES -->
<div class=""
    style="background-image: url('img_upload/facilities/blogger-336371_1920.jpg');
-webkit-filter: blur(0.5px);
filter: blur(0.5px);
">
<div class="container">
    <div class="row" style="padding-top: 10%; padding-bottom: 10%">
        <div class="col-md-1">

        </div>

        <div class="col-md-4">
            <h3>
                <?PHP
           echo $facilities[0]['facilities_name'];
        ?>
            </h3>
            <p style="color: #ffffff;">
                <?PHP
           echo $facilities[0]['facilities_detail'];
        ?>
            </p>


        </div>

        <div class="col-md-4">
            <img src="
            <?PHP
           echo $pathImgFacilities .  $facilities[0]['facilities_img']; 
        ?>
        "
                class="img-fluid" alt="">
        </div>
        <div class="col-md-2">
            <div class="  border border-warning" width="200" height="200 "
                style="border-warning: #ffffff; padding-top: 30%; padding-bottom: 30%">
                <p style="color: #ffffff;">
                Delichious <br>
                Foods <br>
                </p>
            </div>
        </div>

        <div class="col-md-1">
        </div>

        </div>
    </div>
</div>


