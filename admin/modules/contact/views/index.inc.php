<?php
date_default_timezone_set("Asia/Bangkok");
require_once('../models/Contact.php');

$path = "modules/contact/views/";
$img_path = "../img_upload/contact/";

$contact_model = new Contact;
$contact = $contact_model -> getContact();
$contact_head = $contact_model -> getContact_head();


// echo "<pre>";
// print_r($contact_head);
// echo "</pre>";


$type = isset($_GET['type']);
$id = isset($_GET['id']);
// ECHO "<PRE>";
// print_r( $contact);
// ECHO "</PRE>";

$target_dir = "../img_upload/contact/";

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
        $result = $contact_model-> deleteContact($id);
        require_once($path.'view.inc.php');
        ?>
<script>
window.location = "index.php?content=contact"
</script>
<?PHP
    } else if( $_GET['action'] == "edit_head") {
        $result = $contact_model-> editContact_head(1, $_POST['contact_head_detail']);
        require_once($path.'view.inc.php');
        ?>
<script>
window.location = "index.php?content=contact"
</script>
<?PHP

    } else if( $_GET['action'] == "edit") {
               
    if(isset($_POST['contact_id'])){
        $check = true;
        $data = [];
        $data['contact_id'] = $_POST['contact_id'];
        $data['contact_name'] = $_POST['contact_name'];
        $data['contact_type_id'] = $_POST['contact_type_id'];
        $data['contact_detail'] = $_POST['contact_detail'];
        //-----------------ฟังก์ชั่นสุ่มตัวเลข----------------
        $numrand = (mt_rand());
        //-----------------------------------------------
        if($_FILES['contact_img']['name'] == ""){
             $data['contact_img'] = $_POST['contact_img_o'];
        }else {
            //---------เอาชื่อไฟล์เก่าออกให้เหลือแต่นามสกุล----------
            $type = strrchr($_FILES['contact_img']['name'],".");
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
            }else if ($_FILES["contact_img"]["size"] > 5000000) {
                $error_msg = "ขอโทษด้วย. ไฟล์ของคุณต้องมีขนาดน้อยกว่า 5 MB.";
                $check = false;
            }else if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" ) {
                $error_msg = "ขอโทษด้วย. ระบบสามารถอัพโหลดไฟล์นามสกุล JPG, JPEG, PNG & GIF เท่านั้น.";
                $check = false;
            }else if (move_uploaded_file($_FILES["contact_img"]["tmp_name"], $target_file)) {
                //-----------------------------------
                $data['contact_img'] = $date.$newname;
                //-----------------------------------
                if( $_POST['contact_img_o'] != null){
                    $target_file = $target_dir . $_POST['contact_img_o'];
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
           
            $result = $contact_model-> editContact($_POST['contact_id'],$data);
           
            if($result){
                ?>
<script>
window.location = "index.php?content=contact"
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