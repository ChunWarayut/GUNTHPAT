<?PHP
require_once('models/RoomsModel.php');
$rooms_model = new Rooms;
$rooms = $rooms_model -> getRooms();
$img_path_gallery = "img_upload/gallery/"; 
$img_path_room = "img_upload/rooms/"; 
$path = "modules/contact_us/views/";
$img_path = "../img_upload/contact_us/";
$detaillink = "action%3ddetail&id%3d";

require_once('models/Contact_usModel.php');
$contact_us_model = new Contact_us;
$contact_us = $contact_us_model -> getContact_us();


$pathImgGallery = "img_upload/gallery/";
require_once('models/GalleryModel.php');
$gallery_model = new Gallery;
$gallery = $gallery_model -> getgallery() ;

$gunthpatlink = "http://support.revelsoft.co.th/gunthpat/room.php?";

if(isset($_COOKIE['language'])){
    $lng = $_COOKIE['language'];
}
// if(isset($_COOKIE['roomId'])){ 
//     $roomId = $_COOKIE['roomId'];
// }

    if(!isset($_COOKIE['roomId'])){
        $roomId = "";
    }else{
        $roomId = $_COOKIE['roomId'];
    }

$menu = 'room';

require_once('models/PageModel.php'); 
$page_model = new PageModel;
$page = $page_model->getPageByID('3');

?>

<html>
<head>

    
    <?php if($roomId != ""){ ?>
        <meta property="og:url"           content="<?php echo $gunthpatlink,$detaillink,$roomId; ?>">
        <meta property="og:type"          content="website">
        <meta property="og:title"         content="<?php if($lng == "TH"){ echo $rooms[$roomId]['room_name_th']; }else{ echo $rooms[$roomId]['room_name_en'];} ?>">
        <meta property="og:description"   content="<?php if($lng == "TH"){ echo "ขนาดห้อง ",$rooms[$roomId]['room_size_th'],$rooms[$roomId]['room_detail_1_th']; }else{ echo "size ",$rooms[$roomId]['room_size_en']," ",$rooms[$roomId]['room_detail_1_en'];} ?>">
        <meta property="og:image"         content="<?php echo $img_path_room,$rooms[$roomId]['room_img'];?>">
    <?php }else{ ?>
        <meta property="og:type"          content="website">
        <meta property="og:title"         content="<?PHP if($lng == "TH"){ echo $page['page_title_th']; }else{ echo $page['page_title_en'];} ?>">
        <meta property="og:description"   content="<?PHP if($lng == "TH"){ echo $page['page_description_th']; }else{ echo $page['page_description_en']; } ?>">
    <?php } ?>

<?PHP require_once('view/header.inc.php'); ?>
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