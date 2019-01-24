<?php
date_default_timezone_set("Asia/Bangkok");
require_once('../models/Gallary.php');

$path = "modules/gallary/views/";
$img_path = "../img_upload/gallary/";

$gallary_model = new Gallary;
$gallary = $gallary_model -> getGallary();
$gallary_type = $gallary_model -> getGallaryType();

// echo "<pre>";
// print_r($gallary_type);
// echo "</pre>";

// echo "<pre>";
// print_r($gallary);
// echo "</pre>";


$type = $_GET['type'];
$id = $_GET['id'];
// ECHO "<PRE>";
// print_r( $gallary);
// ECHO "</PRE>";

$target_dir = "../img_upload/gallary/";

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

    if( !isset($_GET['action']) ) {
        require_once($path.'view.inc.php');
    } else if( $_GET['action'] == "delete") {
        $result = $gallary_model-> deleteGallary($id);
        require_once($path.'view.inc.php');
        ?>
<script>
window.location = "index.php?content=gallary"
</script>
<?PHP
    } else if( $_GET['action'] == "insert") {
    if(isset($_POST['gallary_name'])){
        $check = true;
        $data = [];
        $data['gallary_id'] = $_POST['gallary_id'];
        $data['gallary_name'] = $_POST['gallary_name'];
        $data['gallary_type_id'] = $_POST['gallary_type_id'];

        //-----------------ฟังก์ชั่นสุ่มตัวเลข----------------
        $numrand = (mt_rand());
        //-----------------------------------------------
        if($_FILES['gallary_img']['name'] == ""){
             $data['gallary_img'] = $_POST['gallary_img_o'];
        }else {
            //---------เอาชื่อไฟล์เก่าออกให้เหลือแต่นามสกุล----------
            $type = strrchr($_FILES['gallary_img']['name'],".");
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
            }else if ($_FILES["gallary_img"]["size"] > 5000000) {
                $error_msg = "ขอโทษด้วย. ไฟล์ของคุณต้องมีขนาดน้อยกว่า 5 MB.";
                $check = false;
            }else if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" ) {
                $error_msg = "ขอโทษด้วย. ระบบสามารถอัพโหลดไฟล์นามสกุล JPG, JPEG, PNG & GIF เท่านั้น.";
                $check = false;
            }else if (move_uploaded_file($_FILES["gallary_img"]["tmp_name"], $target_file)) {
                //-----------------------------------
                $data['gallary_img'] = $date.$newname;
                //-----------------------------------
                if( $_POST['gallary_img_o'] != null){
                    $target_file = $target_dir . $_POST['gallary_img_o'];
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
           
            $result = $gallary_model-> addGallary($data);
           
            if($result){
                ?>
<script>
window.location = "index.php?content=gallary"
</script>
<?php
            }else{
                ?>
<script>
window.history.back();
</script>
<?php
            }
        }
    }else{
        require_once($path . 'insert.inc.php');
    }
    
    } else if( $_GET['action'] == "edit") {
               
    if(isset($_POST['gallary_id'])){
        $check = true;
        $data = [];
        $data['gallary_id'] = $_POST['gallary_id'];
        $data['gallary_name'] = $_POST['gallary_name'];
        $data['gallary_type_id'] = $_POST['gallary_type_id'];
        $data['gallary_detail'] = $_POST['gallary_detail'];
        //-----------------ฟังก์ชั่นสุ่มตัวเลข----------------
        $numrand = (mt_rand());
        //-----------------------------------------------
        if($_FILES['gallary_img']['name'] == ""){
             $data['gallary_img'] = $_POST['gallary_img_o'];
        }else {
            //---------เอาชื่อไฟล์เก่าออกให้เหลือแต่นามสกุล----------
            $type = strrchr($_FILES['gallary_img']['name'],".");
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
            }else if ($_FILES["gallary_img"]["size"] > 5000000) {
                $error_msg = "ขอโทษด้วย. ไฟล์ของคุณต้องมีขนาดน้อยกว่า 5 MB.";
                $check = false;
            }else if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" ) {
                $error_msg = "ขอโทษด้วย. ระบบสามารถอัพโหลดไฟล์นามสกุล JPG, JPEG, PNG & GIF เท่านั้น.";
                $check = false;
            }else if (move_uploaded_file($_FILES["gallary_img"]["tmp_name"], $target_file)) {
                //-----------------------------------
                $data['gallary_img'] = $date.$newname;
                //-----------------------------------
                if( $_POST['gallary_img_o'] != null){
                    $target_file = $target_dir . $_POST['gallary_img_o'];
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
           
            $result = $gallary_model-> editGallary($_POST['gallary_id'],$data);
           
            if($result){
                ?>
<script>
window.location = "index.php?content=gallary"
</script>
<?php
            }else{
                ?>
<script>
window.history.back();
</script>
<?php
            }
        }
    }else{
        require_once($path . 'edit.inc.php');
    }
    
}
?>