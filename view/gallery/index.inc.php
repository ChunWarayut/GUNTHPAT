<?PHP 
$menu = "gallery";
$path = "view/gallery/";
$path_img = "img_upload/gallery/";


$pathImgGallery = "img_upload/gallery/";
require_once('models/GalleryModel.php');
$gallery_model = new Gallery;
$gallery = $gallery_model -> getgalleryby($_GET['id']) ;

$gallery_type = $gallery_model -> getGalleryType();
$gallery_head = $gallery_model -> getgalleryHead();
$gallery_type_id = $_POST['gallery_type_id'];

if( !isset($_GET['action']) ) {
    require_once($path.'view.inc.php');
} else if( $_GET['action'] == "search") {
    $gallery = $gallery_model -> getgalleryby($_POST['gallery_type_id']) ;
}

require_once($path . 'view.inc.php');
?>
