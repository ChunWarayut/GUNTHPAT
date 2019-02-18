    <!-- Navigation -->

<script>
	function setLanguage(lng){
		$.post( "controls/setLanguage.php", { lng: lng })
			.done(function( data ) {
                window.location.reload();
		});
	}
</script>

    <link href="template/frontend/css/menu.css" rel="stylesheet">

    <div style="z-index: 50; position:relative; ">

        <div class="text-right contact_header">
            <div class="font-weight-light contact_list">
                <i class='fas fa-mobile-alt' ></i>&nbsp;&nbsp;
                <span class="text2; font-weight-light" style='color: #ffffff; '>
                    <a style="color: #ffffff;" href="tel:<?PHP echo $contact_us[0]['contact_us_tel']; ?>"><?PHP echo $contact_us[0]['contact_us_tel']; ?></a>
                </span>
                &nbsp;
                &nbsp;
                &nbsp;
                &nbsp;
                <i class='fas fa-map-marker-alt' style='font-size:15px; color: #f47322; '></i>&nbsp;&nbsp;
                <span class="text2" style='color: #ffffff; '>
                    <?PHP echo $contact_us[0]['contact_us_address_3']; ?>
                </span>

                &nbsp;
                &nbsp;
                &nbsp;
                &nbsp;
                <a onclick="setLanguage('EN')" class="right <?php if($lng != "TH"){ echo "active-lng"; } ?>"><span class="lng-icon hoverable " style="color: #ffffff;" >EN</span></a>
                <a class="right"><span class="lng-icon" style="width: 0.9em; color: #fff;">|</span></a>
                <a onclick="setLanguage('TH')" class="right <?php if($lng == "TH"){ echo "active-lng"; } ?>"><span class="lng-icon hoverable " style="color: #ffffff;" >TH</span></a>
            </div>
        </div>
    </div>
</div>
    <nav class="navbar navbar-expand-lg navbar-dark" style="
    z-index: 50; "
        id="mainNav">
        <a href="index.php" class="navbar-brand js-scroll-trigger "><img src="template/backend/images/logo/logo.png"
                width="130px" class="img-icon float-right"></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
            data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
            aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarResponsive">


            <ul class="navbar-nav text-uppercase ml-auto">
                <li class="nav-item <?php if($menu == 'index'){ echo 'active'; }?>">

                    <a class="nav-link" href="index.php">

                        <?php
                        if ($lng == TH) {
                            echo "หน้าหลัก";
                        }else {
                            echo "HOME";
                        }
                        ?>


                    </a>
                </li>
                <li class="nav-item <?php if($menu == 'room'){ echo 'active'; }?>">
                    <a class="nav-link" href="room.php#room">

                    
                    <?php
                        if ($lng == TH) {
                            echo "ห้อง";
                        }else {
                            echo "ROOM";
                        }
                        ?>
                    </a>
                </li>
                <li class="nav-item <?php if($menu == 'facilities'){ echo 'active'; }?>">
                    <a class="nav-link" href="facilities.php#facilities">

                    
                    <?php
                        if ($lng == TH) {
                            echo "บริการ";
                        }else {
                            echo "FACILITIES";
                        }
                        ?>


                    </a>
                </li>
                <li class="nav-item <?php if($menu == 'gallery'){ echo 'active'; }?>">
                    <a class="nav-link" href="gallery.php#gallery">

                    <?php
                        if ($lng == TH) {
                            echo "อัลบั้ม";
                        }else {
                            echo "GALLERY";
                        }
                        ?>

                    </a>
                </li>
                <li class="nav-item <?php if($menu == 'about_us'){ echo 'active'; }?>">
                    <a class="nav-link" href="about_us.php#about_us">

                    
                    <?php
                        if ($lng == TH) {
                            echo "เกี่ยวกับเรา";
                        }else {
                            echo "ABOUT US";
                        }
                        ?>

                    </a>
                </li>
                <li class="nav-item <?php if($menu == 'contact_us'){ echo 'active'; }?>">
                    <a class="nav-link" href="contact_us.php#contact_us">

                    <?php
                        if ($lng == TH) {
                            echo "ติดต่อเรา";
                        }else {
                            echo "CONTACT US";
                        }
                        ?>

                    </a>
                </li>
            </ul>
        </div>
    </nav>


    <!-- Custom scripts for this template -->
    <script src="template/frontend/js/agency.min.js"></script>
    <?PHP
require_once('slide.php');
?>
