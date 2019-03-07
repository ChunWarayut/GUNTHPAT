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

$roomlink = "http://support.revelsoft.co.th/gunthpat/room.php?id=";

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