<?php
require_once('../models/NewsModel.php');

$path = "modules/news/views/";

$news_model = new News;

$news_id = isset($_GET['id']);



$img_path = "../img_upload/news/";
$target_dir = "../img_upload/news/";

    //---------------------ฟังก์ชั่นวันที่------------------------------------
    date_default_timezone_set("Asia/Bangkok");
    $d1=date("d");
    $d2=date("m");
    $d3=date("Y");
    $d4=date("H");
    $d5=date("i");
    $d6=date("s");
    $date="$d1$d2$d3$d4$d5$d6";
    //---------------------------------------------------------------------


    
if(!isset($_GET['action'])){
    $news = $news_model ->getNews();
    require_once($path.'view.inc.php');
}else if ($_GET['action'] == 'insert'){
    require_once($path.'insert.inc.php');
}else if ($_GET['action'] == 'update'){
    $news_id = $_GET['id'];
    $news = $news_model->getNewsById($news_id);
    // print_r($news);
        require_once($path.'update.inc.php');
}else if ($_GET['action'] == 'delete'){
    $target_file = $target_dir . $_GET['news_img_o'];
    if (file_exists($target_file)) {
        unlink($target_file);
    }
    $news = $news_model->deleteNews($news_id);
    ?>
<script>
window.location = "index.php?content=news"
</script>
<?php
}else if ($_GET['action'] == 'add'){
    if(isset($_POST['news_id'])){
        $check = true;
        $data = [];
        $data['news_detail_th'] = trim($_POST['news_detail_th']);
        $data['news_detail_en'] = trim($_POST['news_detail_en']);
        $data['news_name_th'] = trim($_POST['news_name_th']);
        $data['news_name_en'] = trim($_POST['news_name_en']);

        
        //-----------------ฟังก์ชั่นสุ่มตัวเลข----------------
        $numrand = (mt_rand());
        //-----------------------------------------------
        if($_FILES['news_img']['name'] == ""){
             $data['news_img'] = $_POST['news_img_o'];
        }else {
            //---------เอาชื่อไฟล์เก่าออกให้เหลือแต่นามสกุล----------
            $type = strrchr($_FILES['news_img']['name'],".");
            //--------------------------------------------------
            //-----ตั้งชื่อไฟล์ใหม่โดยเอาเวลาไว้หน้าชื่อไฟล์เดิม---------
            $newname = $date.$numrand.$type;
            $path_copy=$path.$newname;
            $path_link=$target_dir.$newname;
            //-------------------------------------------------
            $target_file = $target_dir .$date.$newname;
             $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
            // Check if file already exists
            if (file_exists($target_file)) {
                $error_msg =  "ขอโทษด้วย. มีไฟล์นี้ในระบบแล้ว";
                $check = false;
            }else if ($_FILES["news_img"]["size"] > 5000000) {
                $error_msg = "ขอโทษด้วย. ไฟล์ของคุณต้องมีขนาดน้อยกว่า 5 MB.";
                $check = false;
            }else if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" ) {
                $error_msg = "ขอโทษด้วย. ระบบสามารถอัพโหลดไฟล์นามสกุล JPG, JPEG, PNG & GIF เท่านั้น.";
                $check = false;
            }else if (move_uploaded_file($_FILES["news_img"]["tmp_name"], $target_file)) {
                //-----------------------------------
                $data['news_img'] = $date.$newname;
                //-----------------------------------
                if( $_POST['news_img_o'] != null){
                    $target_file = $target_dir . $_POST['news_img_o'];
                    if (file_exists($target_file)) {
                        unlink($target_file);
                    }
                }
            } else {
                $error_msg =  "ขอโทษด้วย. ระบบไม่สามารถอัพโหลดไฟล์ได้.";
                $check = false;
            } 
        }
        //------------------------------------------------------------------------------

        if($check == false){
            ?>
<script>
window.history.back();
</script>
<?php
        }else{
            $news = $news_model->addNews($data);

            if($news){
                ?>
<script>
window.location = "index.php?content=news"
</script> <?php
            }else{
                ?> <script>
// window.history.back();
</script> <?php
            }
        }
    }else{
        ?> <script>
window.history.back();
</script>
<?php
    }
}else if ($_GET['action'] == 'edit'){
    if(isset($_POST['news_id'])){
        $check = true;
        $data = [];
        $data['news_detail_th'] = trim($_POST['news_detail_th']);
        $data['news_detail_en'] = trim($_POST['news_detail_en']);
        $data['news_name_th'] = trim($_POST['news_name_th']);
        $data['news_name_en'] = trim($_POST['news_name_en']);

        
        //-----------------ฟังก์ชั่นสุ่มตัวเลข----------------
        $numrand = (mt_rand());
        //-----------------------------------------------
        if($_FILES['news_img']['name'] == ""){
             $data['news_img'] = $_POST['news_img_o'];
        }else {
            //---------เอาชื่อไฟล์เก่าออกให้เหลือแต่นามสกุล----------
            $type = strrchr($_FILES['news_img']['name'],".");
            //--------------------------------------------------
            //-----ตั้งชื่อไฟล์ใหม่โดยเอาเวลาไว้หน้าชื่อไฟล์เดิม---------
            $newname = $date.$numrand.$type;
            $path_copy=$path.$newname;
            $path_link=$target_dir.$newname;
            //-------------------------------------------------
            $target_file = $target_dir .$date.$newname;
             $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
            // Check if file already exists
            if (file_exists($target_file)) {
                $error_msg =  "ขอโทษด้วย. มีไฟล์นี้ในระบบแล้ว";
                $check = false;
            }else if ($_FILES["news_img"]["size"] > 5000000) {
                $error_msg = "ขอโทษด้วย. ไฟล์ของคุณต้องมีขนาดน้อยกว่า 5 MB.";
                $check = false;
            }else if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" ) {
                $error_msg = "ขอโทษด้วย. ระบบสามารถอัพโหลดไฟล์นามสกุล JPG, JPEG, PNG & GIF เท่านั้น.";
                $check = false;
            }else if (move_uploaded_file($_FILES["news_img"]["tmp_name"], $target_file)) {
                //-----------------------------------
                $data['news_img'] = $date.$newname;
                //-----------------------------------
                if( $_POST['news_img_o'] != null){
                    $target_file = $target_dir . $_POST['news_img_o'];
                    if (file_exists($target_file)) {
                        unlink($target_file);
                    }
                }
            } else {
                $error_msg =  "ขอโทษด้วย. ระบบไม่สามารถอัพโหลดไฟล์ได้.";
                $check = false;
            } 
        }
        //------------------------------------------------------------------------------
        if($check == false){
            ?>
<script>
alert('<?php echo $error_msg; ?>');
window.history.back();
</script>
<?php
        }else{
            $news = $news_model->editNews($_POST['news_id'],$data);

            if($news){
                ?>
<script>
window.location = "index.php?content=news"
</script> <?php
            }else{
                ?> <script>
window.history.back();
</script> <?php
            }
        }
    }else{
        ?> <script>
window.history.back();
</script> <?php
    }
}else{  
    require_once($path.'view.inc.php');
}
?>