<?PHP
require_once('models/Contact_usModel.php');
require_once('models/SlideModel.php');
$path = "modules/contact_us/views/";
$img_path = "../img_upload/contact_us/";
$contact_us_model = new Contact_us;
$contact_us = $contact_us_model -> getContact_us();
$slide_model = new Slide;
$slide = $slide_model -> slideRoom01();
$pathImgGallery = "img_upload/gallery/";
require_once('models/GalleryModel.php');
$gallery_model = new Gallery;
$gallery = $gallery_model -> getgallery() ;
?>
<html>
<head>
    <?PHP require_once('view/header.inc.php'); ?>
</head>
<body>
    <?PHP require_once('view/about_us/index.inc.php');?>
    <?PHP require_once('view/footer.inc.php'); ?>

</body>
<html>