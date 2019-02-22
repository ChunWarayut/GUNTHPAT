<?PHP


if(isset($_COOKIE['language'])){
    $lng = $_COOKIE['language'];
}



?>
<html>
<head>
    <link href="template/frontend/css/gallery.css" rel="stylesheet">
    <?PHP require_once('view/header.inc.php'); ?>
</head>
<body>
    <?PHP require_once('view/gallery/index.inc.php');?>
    <?PHP require_once('view/footer.inc.php'); ?>
</body>
<html>