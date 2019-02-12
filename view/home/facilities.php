
<!-- FACILITIES -->
<div class=""
    style="background-image: url('img_upload/facilities/blogger-336371_1920.jpg');
-webkit-filter: blur(0.5px);
filter: blur(0.5px);
">
<div class="container"   style="margin-top: -160; ">
    <div class="row" style="padding-top: 10%; padding-bottom: 10%">
        <div class="col-md-1">

        </div>

        <div class="col-md-4">
            <h3 class="text">
                <?php
           echo $facilities[0]['facilities_name'];
        ?>
            </h3>
            <p class="text" style="color: #ffffff;">
                <?php
           echo $facilities[0]['facilities_detail'];
        ?>
            </p>


        </div>

        <div class="col-md-4">
            <img src="
            <?php
           echo $pathImgFacilities.$facilities[0]['facilities_img'];
        ?>
        "
                class="img-fluid" alt="">
        </div>
        <div class="col-md-2">
            <div class="  border border-warning" width="200" height="200 "
                style="border-color: #f47322!important; border-warning: #ffffff; padding-top: 10%; padding-bottom: 30%">
                &nbsp;&nbsp;&nbsp;<i class='fas fa-concierge-bell' style='font-size:24px; color: #f47322;'></i>
                <p class="text" style="color: #ffffff;">
                &nbsp;&nbsp;Delichious <br>
                &nbsp;&nbsp;Foods <br>
                </p>
            </div>
        </div>

        <div class="col-md-1">
        </div>

        </div>
    </div>
</div>


