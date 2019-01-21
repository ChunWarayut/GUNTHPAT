<?php
date_default_timezone_set("Asia/Bangkok");
require_once('../models/Rooms.php');
require_once('../models/Room_Type.php');

$path = "modules/rooms/views/";
$img_path = "../img_upload/rooms/";

$rooms_model = new Rooms;
$room_type_model = new Room_Type;
$rooms = $rooms_model -> getRooms();
$room_type = $room_type_model -> getRoomType();

// echo "<pre>";
// print_r($rooms);
// echo "</pre>";
    require_once($path.'view.inc.php');
?>