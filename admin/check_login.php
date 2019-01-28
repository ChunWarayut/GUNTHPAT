<?php
session_start();
require_once('../models/UserModel.php');

$user_model = new UserModel;

if(isset($_POST['username']) && isset($_POST['password'])){
    if($_POST['username'] != '' && $_POST['password'] != ''){
        
        $login_user = $user_model->getLogin($_POST['username'],$_POST['password']);

        if($login_user['user_id'] > 0){
            $_SESSION['administrator_user'] = $login_user;
            echo "<script language=\"JavaScript\" type=\"text/javascript\"> window.parent.refresh();</script>";
        }else{
            echo "<script language=\"JavaScript\" type=\"text/javascript\"> window.parent.error();</script>";
        }
    }else{
        header("Location index.php");
    }
}else{
    header("Location index.php");
}
?>