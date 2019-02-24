<?PHP
if(isset($_COOKIE['language'])){
    $lng = $_COOKIE['language'];
}

?>
<html>
    <head>
        <?PHP require_once('view/header.inc.php'); ?>
    </head>
    <body>
        <?PHP require_once('view/menu.inc.php');?>
        <?PHP require_once('view/slide.inc.php');?>
        <?PHP require_once('view/home/index.inc.php');?>
        <?PHP require_once('view/footer.inc.php'); ?>
    </body>
<html>