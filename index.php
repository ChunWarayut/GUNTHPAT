<?PHP
if(isset($_COOKIE['language'])){
    $lng = $_COOKIE['language'];
}

?>
<html>
    <head>
        <link href="template/frontend/css/home.css" rel="stylesheet">
        <?PHP require_once('view/header.inc.php'); ?>
    </head>
    <body>
        <?PHP require_once('view/home/index.inc.php');?>
        <?PHP require_once('view/footer.inc.php'); ?>
    </body>
<html>