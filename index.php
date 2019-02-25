<?PHP
if(isset($_COOKIE['language'])){
    $lng = $_COOKIE['language'];
}
$menu = 'index';
?>
<html>
    <head>
        <?PHP require_once('view/header.inc.php'); ?>
        <link href="template/frontend/css/style.css" rel="stylesheet">
        <link href="template/frontend/css/menu.css" rel="stylesheet">
        <link href="template/frontend/css/slide.css" rel="stylesheet">
    </head>
    <body>
        <?PHP require_once('view/menu.inc.php');?>
        <?PHP require_once('view/slide.inc.php');?>
        <?PHP require_once('view/home/index.inc.php');?>
        <?PHP require_once('view/footer.inc.php'); ?>
    </body>
<html>