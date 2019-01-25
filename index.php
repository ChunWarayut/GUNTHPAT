<?PHP
require_once('models/Contact_us.php');

$path = "modules/contact_us/views/";
$img_path = "../img_upload/contact_us/";

$contact_us_model = new Contact_us;
$contact_us = $contact_us_model -> getContact_us();
// echo "<pre>";
// print_r($contact_us);
// echo "</pre>"; 
?>
<html>

<head>
    <?PHP require_once('view/header.inc.php'); ?>


    <link rel="stylesheet" href="template/frontend/css/home-style.css">
</head>

<body>

    <?PHP 
require_once('view/menu.inc.php');
?>
</body>
<html>