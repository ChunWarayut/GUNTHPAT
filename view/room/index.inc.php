<?php
require_once('models/Rooms.php');

$menu = 'room';
$path = 'view/room/';

$rooms_model = new Rooms;
$rooms = $rooms_model -> getRooms();
$img_path_gallery = "img_upload/gallery/"; 
$img_path_room = "img_upload/rooms/"; 
// print_r($rooms);


if( $_GET['action'] == "detail") {
    $roomBy = $rooms_model -> getRoomsBy($_GET['id']);
    // print_r($roomBy);
    // echo"555";
    
    $id = $_GET['id'];
    require_once($path.'detail.inc.php');
}else{
require_once $path.'view.inc.php';
}
?>
