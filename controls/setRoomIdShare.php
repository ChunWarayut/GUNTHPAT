<?php
if(isset($_POST['roomId'])){
    setcookie('roomId', $_POST['roomId'] , time() + (86400 * 30), "/");
}else{
    setcookie('roomId', "" , time() + (86400 * 30), "/");
}
?>