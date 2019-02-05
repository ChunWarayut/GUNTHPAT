<?PHP
session_start();
if(!isset($_SESSION['administrator_user'])){
	require_once("modules/login/views/index.inc.php"); 
}else{
	$login_user = $_SESSION['administrator_user'];
	if(!isset($_REQUEST['content'])){
		$_REQUEST['content'] = "home";
	}
	$content = $_REQUEST['content'];
}
if(!isset($login_user)){
	require_once("modules/login/views/index.inc.php"); 
}else{
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GANTHPAT PLACE</title>

    <link rel="icon" href="../template/backend/images/logo/logo.png " type="image/png">
    <link href="../template/backend/css/bootstrap.min.css" rel="stylesheet">
    <link href="../template/backend/css/simple-sidebar.css" rel="stylesheet">
    <link href="../template/backend/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <script src="../template/backend/js/jquery.min.js"></script>
    <script src="../template/backend/js/bootstrap.min.js"></script>

    
</head>

<body>

    <div id="wrapper" class="toggled">
        <?php require_once('views/header.inc.php') ?>
        <?php require_once('views/menu.inc.php') ?>
        <div id="page-content-wrapper">
            <?php require_once("views/body.inc.php"); ?>
        </div>
    </div>
    <script>
    function menu_toggle() {
        $("#wrapper").toggleClass("toggled");
    }
    </script>

</body>

</html>

<?PHP }?>