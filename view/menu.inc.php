    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark" style="
    z-index: 50; "id="mainNav">
        <div class="container">
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

                            <?php  echo "HOME";?>

                        </a>
                    </li>
                    <li class="nav-item <?php if($menu == 'room'){ echo 'active'; }?>">
                        <a class="nav-link" href="room.php">

                            <?php  echo "ROOM";?>

                        </a>
                    </li>
                    <li class="nav-item <?php if($menu == 'facilities'){ echo 'active'; }?>">
                        <a class="nav-link" href="facilities.php">

                            <?php  echo "FACILITIES";?>

                        </a>
                    </li>
                    <li class="nav-item <?php if($menu == 'gallery'){ echo 'active'; }?>">
                        <a class="nav-link" href="gallery.php">

                            <?php  echo "GALLERY";?>

                        </a>
                    </li>
                    <li class="nav-item <?php if($menu == 'about_us'){ echo 'active'; }?>">
                        <a class="nav-link" href="about_us.php">

                            <?php  echo "ABOUT US";  ?>

                        </a>
                    </li>
                    <li class="nav-item <?php if($menu == 'contact_us'){ echo 'active'; }?>">
                        <a class="nav-link" href="contact_us.php">

                            <?php  echo "CONTACT US"; ?>

                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Custom scripts for this template -->
    <script src="template/frontend/js/agency.min.js"></script>
<?PHP
require_once('slide.php');
?>