<?PHP
if(isset($_COOKIE['language'])){
    $lng = $_COOKIE['language'];
}
$menu = 'index';




require_once('models/PageModel.php'); 
$page_model = new PageModel;
$page = $page_model->getPageByID('1');
// print_r($page);
?>

<html>
<head>






        <?PHP require_once('view/header.inc.php'); ?>
        <link href="template/frontend/css/style.css" rel="stylesheet">
        <link href="template/frontend/css/menu.css" rel="stylesheet">
        <link href="template/frontend/css/slide.css" rel="stylesheet">
        <link href="template/frontend/css/home-room.css" rel="stylesheet">
        <link href="template/frontend/css/home-facilities.css" rel="stylesheet">
        <link href="template/frontend/css/footer.css" rel="stylesheet">
    </head>
    <body>
        <?PHP require_once('view/menu.inc.php');?>
        <?PHP require_once('view/slide.inc.php');?>
        <?PHP require_once('view/home/index.inc.php');?>
        <?PHP require_once('view/footer.inc.php'); ?>
    </body>
<html>