<div class="header">
    <div class="row">
        <div class="col-1">
            <a href="index.php"><img src="img_upload/logo/logo.png" width="300px" class="img-responsive"></a>

        </div>
        <div class="col-11">
            <div class="header-panel">
            
        <br>
                <span class="right" style="padding-right: 2%;"><i class="fa fa-mobile right" aria-hidden="true">
                        <?php echo $contact_us[0]['contact_us_tel']?></i> </span>

            </div>
            <br>
            <br>

            <nav class="navbar navbar-expand-lg navbar-light">

                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="navbar-collapse collapse " id="navbarSupportedContent">
                    <ul class="nav navbar-nav layout-menu">

                    </ul>
                    <ul class="nav navbar-nav ml-auto layout-menu">
                        <li class="nav-item <?php if($menu == 'index'){ echo 'active'; }?>">
                            <a class="nav-link" href="index.php">
                                <h5>
                                    <?php  echo "HOME";?>
                                    </h3>
                            </a>
                        </li>
                        <li class="nav-item <?php if($menu == 'room'){ echo 'active'; }?>">
                            <a class="nav-link" href="room.php">
                                <h5>
                                    <?php  echo "ROOM";?>
                                    </h3>
                            </a>
                        </li>
                        <li class="nav-item <?php if($menu == 'facilities'){ echo 'active'; }?>">
                            <a class="nav-link" href="facilities.php">
                                <h5>
                                    <?php  echo "FACILITIES";?>
                                    </h3>
                            </a>
                        </li>
                        <li class="nav-item <?php if($menu == 'gallery'){ echo 'active'; }?>">
                            <a class="nav-link" href="gallery.php">
                                <h5>
                                    <?php  echo "GALLERY";?>
                                    </h3>
                            </a>
                        </li>
                        <li class="nav-item <?php if($menu == 'about_us'){ echo 'active'; }?>">
                            <a class="nav-link" href="about_us.php">
                                <h5>
                                    <?php  echo "ABOUT US";  ?>
                                    </h3>
                            </a>
                        </li>
                        <li class="nav-item <?php if($menu == 'contact_us'){ echo 'active'; }?>">
                            <a class="nav-link" href="contact_us.php">
                                <h5>
                                    <?php  echo "CONTACT US"; ?>
                                    </h3>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>

    </div>
</div>