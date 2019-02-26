<?PHP 

$path_img = "img_upload/gallery/";
require_once('../models/GalleryModel.php');
$galleryBy_model = new Gallery;
$gallery = $galleryBy_model -> getgalleryby($_POST['gallery_type_id']) ;

?>


<section class="slide-galery">
        <?php for ($i=0; $i < count($gallery); $i++) {    ?>
        <img class="img-fluid" style=" width: 100px; height: 200px; object-fit: cover;"
            src="<?PHP echo $path_img . $gallery[$i]['gallery_img']?>">
        <?php } ?>
</section>

<script type="text/javascript">

$(document).on('ready', function() {
    getGallery(this.value = "");
    $(".slide-galery").slick({
        arrows: false,
        dots: false,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 2500,
    });
});

</script>