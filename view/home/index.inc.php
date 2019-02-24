<?PHP 
$menu = "index";
$path = "view/home/";

$pathImg = "img_upload/rooms/";
require_once('models/RoomsModel.php');
$rooms_model = new Rooms;
$rooms = $rooms_model -> getRoomsRecommened();

$pathImgFacilities = "img_upload/facilities/";
require_once('models/FacilitiesModel.php');
$facilities_model = new Facilities;
$facilities = $facilities_model -> getfacilities()  ;

$pathImgGallery = "img_upload/gallery/";
require_once('models/GalleryModel.php');
$gallery_model = new Gallery;
$gallery = $gallery_model -> getgallery() ;
$gallery_head = $gallery_model -> getgalleryHead();


require_once('models/Contact_usModel.php');
$contact_us_model = new Contact_us;
$contact_us = $contact_us_model -> getContact_us();



// echo "<pre>";
// print_r($contact_us)  ;
// echo "</pre>";



require_once($path . 'room.inc.php');
require_once($path . 'facilities.inc.php');
require_once($path . 'gallery.inc.php');

?>
