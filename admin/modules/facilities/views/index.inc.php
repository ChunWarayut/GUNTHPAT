<?php
date_default_timezone_set("Asia/Bangkok");
require_once('../models/Facilities.php');
require_once('../models/Facilities_type.php');

$path = "modules/Facilities/views/";
$img_path = "../img_upload/Facilities/";

$Facilities_model = new Facilities;
$Facilities_type_model = new Facilities_Type;
$Facilities = $Facilities_model -> getFacilities();
$Facilities_type = $Facilities_type_model -> getFacilitiesType();

echo "<pre>";
print_r($Facilities);
echo "</pre>";

// echo "<pre>";
// print_r($recommend_Facilities);
// echo "</pre>";


$type = $_GET['type'];
$id = $_GET['id'];
// ECHO "<PRE>";
// print_r( $Facilities);
// ECHO "</PRE>";

$target_dir = "../img_upload/Facilities/";

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
        $result = $Facilities_model-> deleteRooms($id);
        require_once($path.'view.inc.php');
    } else if( $_GET['action'] == "insert") {
    if(isset($_POST['Facilities_id'])){
        $check = true;
        $data = [];
        $data['Facilities_id'] = $_POST['Facilities_id'];
        $data['Facilities_name'] = $_POST['Facilities_name'];
        $data['Facilities_type_id'] = $_POST['Facilities_type_id'];
        $data['Facilities_detail'] = $_POST['Facilities_detail'];

        //-----------------ฟังก์ชั่นสุ่มตัวเลข----------------
        $numrand = (mt_rand());
        //-----------------------------------------------
        if($_FILES['Facilities_img']['name'] == ""){
             $data['Facilities_img'] = $_POST['Facilities_img_o'];
        }else {
            //---------เอาชื่อไฟล์เก่าออกให้เหลือแต่นามสกุล----------
            $type = strrchr($_FILES['Facilities_img']['name'],".");
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
            }else if ($_FILES["Facilities_img"]["size"] > 5000000) {
                $error_msg = "ขอโทษด้วย. ไฟล์ของคุณต้องมีขนาดน้อยกว่า 5 MB.";
                $check = false;
            }else if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" ) {
                $error_msg = "ขอโทษด้วย. ระบบสามารถอัพโหลดไฟล์นามสกุล JPG, JPEG, PNG & GIF เท่านั้น.";
                $check = false;
            }else if (move_uploaded_file($_FILES["Facilities_img"]["tmp_name"], $target_file)) {
                //-----------------------------------
                $data['Facilities_img'] = $date.$newname;
                //-----------------------------------
                if( $_POST['Facilities_img_o'] != null){
                    $target_file = $target_dir . $_POST['Facilities_img_o'];
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
           
            $result = $Facilities_model-> addFacilities($data);
           
            if($result){
                ?>
<script>
    window.location = "index.php?content=Facilities"
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
               
    if(isset($_POST['Facilities_id'])){
        $check = true;
        $data = [];
        $data['Facilities_id'] = $_POST['Facilities_id'];
        $data['Facilities_name'] = $_POST['Facilities_name'];
        $data['Facilities_type_id'] = $_POST['Facilities_type_id'];
        $data['Facilities_detail'] = $_POST['Facilities_detail'];
        //-----------------ฟังก์ชั่นสุ่มตัวเลข----------------
        $numrand = (mt_rand());
        //-----------------------------------------------
        if($_FILES['Facilities_img']['name'] == ""){
             $data['Facilities_img'] = $_POST['Facilities_img_o'];
        }else {
            //---------เอาชื่อไฟล์เก่าออกให้เหลือแต่นามสกุล----------
            $type = strrchr($_FILES['Facilities_img']['name'],".");
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
            }else if ($_FILES["Facilities_img"]["size"] > 5000000) {
                $error_msg = "ขอโทษด้วย. ไฟล์ของคุณต้องมีขนาดน้อยกว่า 5 MB.";
                $check = false;
            }else if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" ) {
                $error_msg = "ขอโทษด้วย. ระบบสามารถอัพโหลดไฟล์นามสกุล JPG, JPEG, PNG & GIF เท่านั้น.";
                $check = false;
            }else if (move_uploaded_file($_FILES["Facilities_img"]["tmp_name"], $target_file)) {
                //-----------------------------------
                $data['Facilities_img'] = $date.$newname;
                //-----------------------------------
                if( $_POST['Facilities_img_o'] != null){
                    $target_file = $target_dir . $_POST['Facilities_img_o'];
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
           
            $result = $Facilities_model-> editFacilities($_POST['Facilities_id'],$data);
           
            if($result){
                ?>
<script>
window.location = "index.php?content=Facilities"
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