<?php
date_default_timezone_set("Asia/Bangkok");
require_once('../models/FacilitiesModel.php');

$path = "modules/facilities/views/";
$img_path = "../img_upload/facilities/";

$facilities_model = new Facilities;
$facilities = $facilities_model -> getFacilities();
$facilities_head = $facilities_model -> getFacilitiesHead();

// echo "<pre>";
// print_r($facilities_head);
// echo "</pre>";

// echo "<pre>";
// print_r($);
// echo "</pre>";


$type =($_GET['type']);
$id =($_GET['id']);
// ECHO "<PRE>";
// print_r( $Facilities);
// ECHO "</PRE>";

$target_dir = "../img_upload/facilities/";

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
        
        $target_file = $target_dir . $_POST['facilities_img_o'];
        if (file_exists($target_file)) {
            unlink($target_file);
        }
        
        $result = $facilities_model-> deleteFacilities($id);
        require_once($path.'view.inc.php');
        ?>
<script>
window.location = "index.php?content=facilities"
</script>
<?PHP
    } else if( $_GET['action'] == "edit_head") {
        $result = $facilities_model-> editFacilitiesHead($id, $_POST['facilities_head_sub_title_th'], $_POST['facilities_head_sub_title_en']);
        require_once($path.'view.inc.php');
        ?>
<script>
window.location = "index.php?content=facilities"
</script>
<?PHP
    } else if( $_GET['action'] == "insert") {
    if(isset($_POST['facilities_name_th'])){
        $check = true;
        $data = [];
        $data['facilities_id'] = $_POST['facilities_id'];
        $data['facilities_name_th'] = $_POST['facilities_name_th'];
        $data['facilities_detail_th'] = $_POST['facilities_detail_th'];
        $data['facilities_name_en'] = $_POST['facilities_name_en'];
        $data['facilities_detail_en'] = $_POST['facilities_detail_en'];

        //-----------------ฟังก์ชั่นสุ่มตัวเลข----------------
        $numrand = (mt_rand());
        //-----------------------------------------------
        if($_FILES['facilities_img']['name'] == ""){
             $data['facilities_img'] = $_POST['facilities_img_o'];
        }else {
            //---------เอาชื่อไฟล์เก่าออกให้เหลือแต่นามสกุล----------
            $type = strrchr($_FILES['facilities_img']['name'],".");
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
            }else if ($_FILES["facilities_img"]["size"] > 5000000) {
                $error_msg = "ขอโทษด้วย. ไฟล์ของคุณต้องมีขนาดน้อยกว่า 5 MB.";
                $check = false;
            }else if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" ) {
                $error_msg = "ขอโทษด้วย. ระบบสามารถอัพโหลดไฟล์นามสกุล JPG, JPEG, PNG & GIF เท่านั้น.";
                $check = false;
            }else if (move_uploaded_file($_FILES["facilities_img"]["tmp_name"], $target_file)) {
                //-----------------------------------
                $data['facilities_img'] = $date.$newname;
                //-----------------------------------
                if( $_POST['facilities_img_o'] != null){
                    $target_file = $target_dir . $_POST['facilities_img_o'];
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
           
            $result = $facilities_model-> addFacilities($data);
           
            if($result){
                ?>
<script>
window.location = "index.php?content=facilities"
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
               
    if(isset($_POST['facilities_id'])){
        $check = true;
        $data = [];
        $data['facilities_id'] = $_POST['facilities_id'];
        $data['facilities_name_th'] = $_POST['facilities_name_th'];
        $data['facilities_detail_th'] = $_POST['facilities_detail_th'];
        $data['facilities_name_en'] = $_POST['facilities_name_en'];
        $data['facilities_detail_en'] = $_POST['facilities_detail_en'];
        //-----------------ฟังก์ชั่นสุ่มตัวเลข----------------
        $numrand = (mt_rand());
        //-----------------------------------------------
        if($_FILES['facilities_img']['name'] == ""){
             $data['facilities_img'] = $_POST['facilities_img_o'];
        }else {
            //---------เอาชื่อไฟล์เก่าออกให้เหลือแต่นามสกุล----------
            $type = strrchr($_FILES['facilities_img']['name'],".");
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
            }else if ($_FILES["facilities_img"]["size"] > 5000000) {
                $error_msg = "ขอโทษด้วย. ไฟล์ของคุณต้องมีขนาดน้อยกว่า 5 MB.";
                $check = false;
            }else if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" ) {
                $error_msg = "ขอโทษด้วย. ระบบสามารถอัพโหลดไฟล์นามสกุล JPG, JPEG, PNG & GIF เท่านั้น.";
                $check = false;
            }else if (move_uploaded_file($_FILES["facilities_img"]["tmp_name"], $target_file)) {
                //-----------------------------------
                $data['facilities_img'] = $date.$newname;
                //-----------------------------------
                if( $_POST['facilities_img_o'] != null){
                    $target_file = $target_dir . $_POST['facilities_img_o'];
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
           
            $result = $facilities_model-> editFacilities($_POST['facilities_id'],$data);
           
            if($result){
                ?>
<script>
window.location = "index.php?content=facilities"
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