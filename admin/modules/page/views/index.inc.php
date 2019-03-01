<?php
require_once('../models/PageModel.php');

$path = "modules/page/views/";

$page_model = new PageModel;

if(isset($_GET['id'])){
    $page_id = $_GET['id'];
}
if(!isset($_GET['action'])){
    $page = $page_model->getPageBy();
    require_once($path.'view.inc.php');
}else if ($_GET['action'] == 'update'){
        $page = $page_model->getPageByID($page_id);
    require_once($path.'update.inc.php');
}else if ($_GET['action'] == 'edit'){
    if(isset($_POST['page_id'])){
        $check = true;
        $data = [];
        $data['page_title_th'] = $_POST['page_title_th'];
        $data['page_title_en'] = $_POST['page_title_en'];
        $data['page_tag_th'] = $_POST['page_tag_th'];
        $data['page_tag_en'] = $_POST['page_tag_en'];
        $data['page_description_th'] = $_POST['page_description_th'];
        $data['page_description_en'] = $_POST['page_description_en'];
        $data['updateby'] = $login_user['user_id'];

        $result = $page_model->updatePageByID($_POST['page_id'],$data);

        if($result){
            ?> <script>window.location="index.php?content=page"</script> <?php
        }else{
            ?>  <script> window.history.back(); </script> <?php
        }
    }else{
        ?> <script> window.history.back(); </script> <?php
    }
}else{
    $page = $page_model->getPageBy();
    require_once($path.'view.inc.php');
}
?>