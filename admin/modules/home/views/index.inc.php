<?php
date_default_timezone_set("Asia/Bangkok");
require_once('../models/Recommend_rooms.php');

$path = "modules/home/views/";
$img_path = "../img_upload/recommended_rooms/";

$recommend_rooms_model = new Recommend_rooms;
$recommend_rooms = $recommend_rooms_model -> recommendRoom01();

// echo "<pre>";
// print_r($recommend_rooms);
// echo "</pre>";
    require_once($path.'view.inc.php');
?>