<?PHP 
$menu = "about_us";
require_once('view/menu.inc.php');
$path = "view/about_us/";

$pathImgAbout_us = "img_upload/about_us/";
require_once('models/About_us.php');
$about_us_model = new About_us;
$about_us = $about_us_model -> getabout_us() ;


require_once('models/Facilities.php');
$facilities_model = new Facilities;
$facilities = $facilities_model -> getfacilities()  ;

$pathImgGallery = "img_upload/gallery/";
require_once('models/Gallery.php');
$gallery_model = new Gallery;
$gallery = $gallery_model -> getgallery() ;

// echo "<pre>";
// print_r($about_us);
// echo "</pre>";





require_once($path . 'view.inc.php');

require_once($path . 'FACILITIES.php');
require_once($path . 'GALLERY.php');
?>