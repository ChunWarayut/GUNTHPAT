    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a href="index.php" class="navbar-brand js-scroll-trigger "><img src="img_upload/logo/logo.png"
                    width="150px" class="img-icon float-right"></a>
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

    <!-- Header -->
    <style>
.carousel-item {
    height: 100vh;
    min-height: 300px;
    background: no-repeat center center scroll;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
}
    </style>

    <header>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">

                <!-- Slide One - Set the background image for this slide in the line below -->
                <div class="carousel-item active"
                    style="background-image: url('img_upload/slide/<?PHP echo $slide[0]['slide_img']; ?>')">

                    <div class="carousel-caption d-none d-md-block text-left">
                        <div class="row">
                            <div class="col-8">

                                <p>
                                    welcome to
                                </p>
                                <br>
                                <h3>
                                    <?PHP echo $slide[0]['slide_title']; ?>
                                </h3>
                                <p>
                                    <?PHP echo $slide[0]['slide_sub_title']; ?>
                                </p>
                                <br>
                                <p>
                                    <a href=" <?PHP echo $slide[0]['slide_link']; ?>">
                                        <img src="img_upload/slide/001.png" width="50px" alt=""> &nbsp;WATCH VIDEO
                                    </a>
                                </p>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>

                            </div>
                            <div class="col-4">
                                <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
                                    <div class="card-body">
                                        <input id="datepicker" width="276" />
                                        <script>
                                        $('#datepicker').datepicker({
                                            uiLibrary: 'bootstrap4'
                                        });
                                        </script>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <?PHP
for ($i=1; $i < count($slide); $i++) { 
    # code...

?>

                <!-- Slide Two - Set the background image for this slide in the line below -->
                <div class="carousel-item"
                    style="background-image: url('img_upload/slide/<?PHP echo $slide[$i]['slide_img']; ?>')">
                   
                    <div class="carousel-caption d-none d-md-block text-left">
                        <div class="row">
                            <div class="col-8">

                                <p>
                                    welcome to
                                </p>
                                <br>
                                <h3>
                                    <?PHP echo $slide[$i]['slide_title']; ?>
                                </h3>
                                <p>
                                    <?PHP echo $slide[$i]['slide_sub_title']; ?>
                                </p>
                                <br>
                                <p>
                                    <a href=" <?PHP echo $slide[$i]['slide_link']; ?>">
                                        <img src="img_upload/slide/001.png" width="50px" alt=""> &nbsp;WATCH VIDEO
                                    </a>
                                </p>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>

                            </div>
                            <div class="col-4">
                                <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
                                    <div class="card-body">
                                        <input id="datepicker" width="276" />
                                        <script>
                                        $('#datepicker').datepicker({
                                            uiLibrary: 'bootstrap4'
                                        });
                                        </script>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <?PHP }
?>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
    </header>