<?php
require_once('../models/News.php');

$path = "modules/news/views/";

$news_model = new News;

$news_id = $_GET['id'];

if(!isset($_GET['action'])){
    $news = $news_model ->getNews();
    require_once($path.'view.inc.php');
}else if ($_GET['action'] == 'insert'){
    require_once($path.'insert.inc.php');
}else if ($_GET['action'] == 'update'){
    $news = $news_model->getNewsById($news_id);
        require_once($path.'update.inc.php');
}else if ($_GET['action'] == 'delete'){
    $news = $news_model->deleteNews($news_id);
    ?>
    <script>window.location="index.php?content=news"</script>
    <?php
}else if ($_GET['action'] == 'add'){
    if(isset($_POST['news_name'])){
        $check = true;
        $data = [];
        $data['news_detail'] = trim($_POST['news_detail']);
        $data['news_name'] = trim($_POST['news_name']);

        if($check == false){
            ?>  <script>  alert('<?php echo $error_msg; ?>'); window.history.back(); </script>  <?php
        }else{
            $news = $news_model->addNews($data);

            if($news){
                ?> <script>window.location="index.php?content=news"</script> <?php
            }else{
                ?>  <script> window.history.back(); </script> <?php
            }
        }
    }else{
        ?> <script> window.history.back(); </script> <?php
    }
}else if ($_GET['action'] == 'edit'){
    if(isset($_POST['news_id'])){
        $check = true;
        $data = [];
        $data['news_detail'] = trim($_POST['news_detail']);
        $data['news_name'] = trim($_POST['news_name']);

        if($check == false){
            ?>  <script>  alert('<?php echo $error_msg; ?>'); window.history.back(); </script>  <?php
        }else{
            $news = $news_model->editNews($_POST['news_id'],$data);

            if($news){
                ?> <script>window.location="index.php?content=news"</script> <?php
            }else{
                ?>  <script> window.history.back(); </script> <?php
            }
        }
    }else{
        ?> <script> window.history.back(); </script> <?php
    }
}else{  
    require_once($path.'view.inc.php');
}
?>