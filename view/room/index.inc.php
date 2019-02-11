<?php

$menu = 'room';
$path = 'view/room/';

if( $_GET['action'] == "detail") {
    require_once($path.'detail.inc.php');
}else{
require_once $path.'view.inc.php';
}
?>
