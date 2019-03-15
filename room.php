<?PHP
require_once('models/RoomsModel.php');
$rooms_model = new Rooms;
$rooms = $rooms_model -> getRooms();
$img_path_gallery = "img_upload/gallery/"; 
$img_path_room = "img_upload/rooms/"; 
$path = "modules/contact_us/views/";
$img_path = "../img_upload/contact_us/";


require_once('models/Contact_usModel.php');
$contact_us_model = new Contact_us;
$contact_us = $contact_us_model -> getContact_us();


$pathImgGallery = "img_upload/gallery/";
require_once('models/GalleryModel.php');
$gallery_model = new Gallery;
$gallery = $gallery_model -> getgallery() ;



if(isset($_COOKIE['language'])){
    $lng = $_COOKIE['language'];
}

if(isset($_GET['id'])){
    $roomId = $rooms_model->getRoomsByID($_GET['id']);
}

$menu = 'room';

require_once('models/PageModel.php'); 
$page_model = new PageModel;
$page = $page_model->getPageByID('3');

?>

<html>
<head>

<?PHP require_once('view/header.inc.php'); ?>

    
    <meta property="og:url"           content="<?php echo $contact_us[0]['contact_us_url']."room.php?id=".$_GET['id']; ?>">
    <meta property="og:type"          content="website">
    <meta property="og:title"         content="<?php echo $roomId[0]['room_name_en']; ?>">
    <meta property="og:description"   content="<?php echo "ขนาดห้อง ",$roomId[0]['room_size_th'],$roomId[0]['room_detail_1_th']; ?>">
    <meta property="og:image"         content="<?php echo $roomlink.$img_path_room.$roomId[0]['room_img'];?>">


    <link href="template/frontend/css/style.css" rel="stylesheet">
    <link href="template/frontend/css/menu.css" rel="stylesheet">
    <link href="template/frontend/css/slide.css" rel="stylesheet">
    <link href="template/frontend/css/room.css" rel="stylesheet">
    <link href="template/frontend/css/room-book.css" rel="stylesheet">
    <link href="template/frontend/css/footer.css" rel="stylesheet">
</head>
<body>
    <?PHP require_once('view/menu.inc.php');?>
    <?PHP require_once('view/slide.inc.php');?>
    <?PHP require_once('view/room/index.inc.php');?>
    <?PHP require_once('view/footer.inc.php'); ?>
</body>
<html>