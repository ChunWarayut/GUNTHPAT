<?php
if(isset($_POST['lng'])){
    setcookie('language', $_POST['lng'] , time() + (86400 * 30), "/");
}else{
    setcookie('language', "EN" , time() + (86400 * 30), "/");
}
?>