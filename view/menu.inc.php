<script>
	function setLanguage(lng){
		$.post( "controls/setLanguage.php", { lng: lng })
			.done(function( data ) {
                window.location.reload();
		});
	}
</script>

<?php 
    require_once('models/Contact_usModel.php');
    $img_path = "../img_upload/contact_us/";
    $contact_us_model = new Contact_us;
    $contact_us = $contact_us_model -> getContact_us();
?>
<div class="header-menu">
    <div class="text-right contact_header">
        <div class="contact_list">
            <span><span><i class="fas fa-mobile-alt" aria-hidden="true"></i></span><?php echo $contact_us[0]['contact_us_tel']; ?></span>
            <span><span><i class='fas fa-map-marker-alt'></i></span><?php if ($lng == TH) {  echo $contact_us[0]['contact_us_address_3_th'];}else { echo $contact_us[0]['contact_us_address_3_en'];  }  ?></span>
           
                <a onclick="setLanguage('EN')" class="right btn p-1 ml-5 <?php if($lng != "TH"){ echo "active-lng"; } ?>">
                    <span>EN</span></a>
                <a class="right">
                    <span>|</span>
                </a>
                <a onclick="setLanguage('TH')" class="right btn p-1 <?php if($lng == "TH"){ echo "active-lng"; } ?>">
                    <span>TH</span>
                </a>
         
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark" id="mainNav">
        <a href="index.php" class="navbar-brand"><img src="template/backend/images/logo/logo.png"
                width="130px" class="img-icon float-right"></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
            data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
            aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarResponsive">


            <ul class="navbar-nav text-center ml-auto">
                <li class="nav-item ">

                    <a class="nav-link <?php if($menu == 'index'){ echo 'active'; }?>" href="index.php">

                        <?php
                        if ($lng == TH) {
                            echo "หน้าหลัก";
                        }else {
                            echo "HOME";
                        }
                        ?>


                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if($menu == 'room'){ echo 'active'; }?>" href="room.php#room">

                    
                    <?php
                        if ($lng == TH) {
                            echo "ห้อง";
                        }else {
                            echo "ROOM";
                        }
                        ?>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link <?php if($menu == 'facilities'){ echo 'active'; }?>" href="facilities.php#facilities">

                    
                    <?php
                        if ($lng == TH) {
                            echo "บริการ";
                        }else {
                            echo "FACILITIES";
                        }
                        ?>


                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link <?php if($menu == 'gallery'){ echo 'active'; }?>" href="gallery.php#gallery">

                    <?php
                        if ($lng == TH) {
                            echo "อัลบั้ม";
                        }else {
                            echo "GALLERY";
                        }
                        ?>

                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link <?php if($menu == 'about_us'){ echo 'active'; }?>" href="about_us.php#about_us">

                    
                    <?php
                        if ($lng == TH) {
                            echo "เกี่ยวกับเรา";
                        }else {
                            echo "ABOUT US";
                        }
                        ?>

                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if($menu == 'contact_us'){ echo 'active'; }?>" href="contact_us.php#contact_us">

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
</div>

    <!-- Custom scripts for this template -->

