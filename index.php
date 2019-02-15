<?PHP
require_once('models/Contact_us.php');
require_once('models/Slide.php');
$img_path = "../img_upload/contact_us/";
$contact_us_model = new Contact_us;
$contact_us = $contact_us_model -> getContact_us();
$slide_model = new Slide;
$slide = $slide_model -> slideRoom01();

?>
<html>
    <head>
        <link href="template/frontend/css/home.css" rel="stylesheet">
        <link href="template/frontend/css/room-book.css" rel="stylesheet">

        <?PHP require_once('view/header.inc.php'); ?>
    </head>
    <body>
        <?PHP require_once('view/home/index.inc.php');?>
        <?PHP require_once('view/footer.inc.php'); ?>
    </body>
<html>