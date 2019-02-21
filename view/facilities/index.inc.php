<?PHP 
$menu = "facilities";
require_once('view/menu.inc.php');

$path = "view/facilities/";

$pathImgFacilities = "img_upload/facilities/";
require_once('models/FacilitiesModel.php');
$facilities_model = new Facilities;
$facilities = $facilities_model -> getfacilities() ;

$facilities_head = $facilities_model -> getfacilitiesHead() ;

// echo "<pre>";
// print_r($facilities);
// echo"</pre>";
require_once($path . 'view.inc.php')
?>
