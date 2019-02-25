<?PHP
$pathImgGallery = "img_upload/gallery/";
require_once('models/GalleryModel.php');
$gallery_model = new Gallery;
$gallery = $gallery_model -> getgallery() ;


if(isset($_COOKIE['language'])){
    $lng = $_COOKIE['language'];
}



?>
<html>
<head>
    <link href="template/frontend/css/facilities.css" rel="stylesheet">
    <?PHP require_once('view/header.inc.php'); ?>
</head>
<body>
        <?PHP require_once('view/menu.inc.php');?>
        <?PHP require_once('view/slide.inc.php');?>
    <?PHP require_once('view/facilities/index.inc.php');?>
    <?PHP require_once('view/footer.inc.php'); ?>
</body>
<html>