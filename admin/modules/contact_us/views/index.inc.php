<?php
date_default_timezone_set("Asia/Bangkok");
require_once('../models/Contact_usModel.php');

$path = "modules/contact_us/views/";
$img_path = "../img_upload/contact_us/";

$contact_us_model = new Contact_us;
$contact_us = $contact_us_model -> getContact_us();

// echo "<pre>";
// print_r($contact_us);
// echo "</pre>";

// echo "<pre>";
// print_r($);
// echo "</pre>";


$type =($_GET['type']);
$id =($_GET['id']);
// ECHO "<PRE>";
// print_r( $Contact_us);
// ECHO "</PRE>";

    if( !isset($_GET['action']) ) {
        $id =0;
        require_once($path.'view.inc.php');
    } else if( $_GET['action'] == "delete") {
        $result = $contact_us_model-> deleteContact_us($id);
        require_once($path.'view.inc.php');
        ?>
<script>
    window.location = "index.php?content=contact_us"
</script>
<?PHP
    } else if( $_GET['action'] == "insert") {
    if(isset($_POST['contact_us_sub_title'])){
        $check = true;
        $data = [];
        $data['contact_us_title'] = $_POST['contact_us_title'];
        $data['contact_us_sub_title'] = $_POST['contact_us_sub_title'];
        $data['contact_us_facebook'] = $_POST['contact_us_facebook'];
        $data['contact_us_tel'] = $_POST['contact_us_tel'];
        $data['contact_us_address'] = $_POST['contact_us_address'];
        $data['contact_us_address_1'] = $_POST['contact_us_address_1'];
        $data['contact_us_address_2'] = $_POST['contact_us_address_2'];
        $data['contact_us_address_3'] = $_POST['contact_us_address_3'];
        $data['contact_us_address_4'] = $_POST['contact_us_address_4'];
        $data['contact_us_fax'] = $_POST['contact_us_fax'];
        $data['contact_us_email'] = $_POST['contact_us_email'];
        $data['contact_us_carry_title'] = $_POST['contact_us_carry_title'];
        $data['contact_us_carry_detail'] = $_POST['contact_us_carry_detail'];
        $data['contact_us_taxi_title'] = $_POST['contact_us_taxi_title'];
        $data['contact_us_taxi_detail'] = $_POST['contact_us_taxi_detail'];
        $data['contact_us_car_titel'] = $_POST['contact_us_car_titel'];
        $data['contact_us_car_detail'] = $_POST['contact_us_car_detail'];
        $data['contact_us_map'] = $_POST['contact_us_map'];


        $target_dir = "../img_upload/contact_us/";

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
        //-----------------ฟังก์ชั่นสุ่มตัวเลข----------------
        $numrand = (mt_rand());
        //-----------------------------------------------
        if($_FILES['contact_us_img']['name'] == ""){
             $data['contact_us_img'] = $_POST['contact_us_img_o'];
        }else {
            //---------เอาชื่อไฟล์เก่าออกให้เหลือแต่นามสกุล----------
            $type = strrchr($_FILES['contact_us_img']['name'],".");
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
            }else if ($_FILES["contact_us_img"]["size"] > 5000000) {
                $error_msg = "ขอโทษด้วย. ไฟล์ของคุณต้องมีขนาดน้อยกว่า 5 MB.";
                $check = false;
            }else if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" ) {
                $error_msg = "ขอโทษด้วย. ระบบสามารถอัพโหลดไฟล์นามสกุล JPG, JPEG, PNG & GIF เท่านั้น.";
                $check = false;
            }else if (move_uploaded_file($_FILES["contact_us_img"]["tmp_name"], $target_file)) {
                //-----------------------------------
                $data['contact_us_img'] = $date.$newname;
                //-----------------------------------
                if( $_POST['contact_us_img_o'] != null){
                    $target_file = $target_dir . $_POST['contact_us_img_o'];
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
           
            $result = $contact_us_model-> addContact_us($data);
           
            if($result){
                ?>
<script>
    window.location = "index.php?content=contact_us"
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
               
    if(isset($_POST['contact_us_id'])){
        $check = true;
        $data = [];
        $data['contact_us_title_th'] = $_POST['contact_us_title_th'];
        $data['contact_us_sub_title_th'] = $_POST['contact_us_sub_title_th'];
        $data['contact_us_title_en'] = $_POST['contact_us_title_en'];
        $data['contact_us_sub_title_en'] = $_POST['contact_us_sub_title_en'];
        $data['contact_us_facebook'] = $_POST['contact_us_facebook'];
        $data['contact_us_tel'] = $_POST['contact_us_tel'];
        $data['contact_us_address_th'] = $_POST['contact_us_address_th'];
        $data['contact_us_address_1_th'] = $_POST['contact_us_address_1_th'];
        $data['contact_us_address_2_th'] = $_POST['contact_us_address_2_th'];
        $data['contact_us_address_3_th'] = $_POST['contact_us_address_3_th'];
        $data['contact_us_address_en'] = $_POST['contact_us_address_en'];
        $data['contact_us_address_1_en'] = $_POST['contact_us_address_1_en'];
        $data['contact_us_address_2_en'] = $_POST['contact_us_address_2_en'];
        $data['contact_us_address_3_en'] = $_POST['contact_us_address_3_en'];
        $data['contact_us_address_4'] = $_POST['contact_us_address_4'];
        $data['contact_us_fax'] = $_POST['contact_us_fax'];
        $data['contact_us_email'] = $_POST['contact_us_email'];
        $data['contact_us_carry_title_th'] = $_POST['contact_us_carry_title_th'];
        $data['contact_us_carry_detail_th'] = $_POST['contact_us_carry_detail_th'];
        $data['contact_us_taxi_title_th'] = $_POST['contact_us_taxi_title_th'];
        $data['contact_us_taxi_detail_th'] = $_POST['contact_us_taxi_detail_th'];
        $data['contact_us_car_titel_th'] = $_POST['contact_us_car_titel_th'];
        $data['contact_us_car_detail_th'] = $_POST['contact_us_car_detail_th'];
        $data['contact_us_carry_title_en'] = $_POST['contact_us_carry_title_en'];
        $data['contact_us_carry_detail_en'] = $_POST['contact_us_carry_detail_en'];
        $data['contact_us_taxi_title_en'] = $_POST['contact_us_taxi_title_en'];
        $data['contact_us_taxi_detail_en'] = $_POST['contact_us_taxi_detail_en'];
        $data['contact_us_car_titel_en'] = $_POST['contact_us_car_titel_en'];
        $data['contact_us_car_detail_en'] = $_POST['contact_us_car_detail_en'];
        $data['contact_us_map'] = $_POST['contact_us_map'];
        $data['contact_us_map_latitude'] = $_POST['contact_us_map_latitude'];
        $data['contact_us_map_longitude'] = $_POST['contact_us_map_longitude'];


        $target_dir = "../img_upload/contact_us/";

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
        //-----------------ฟังก์ชั่นสุ่มตัวเลข----------------
        $numrand = (mt_rand());
        //-----------------------------------------------
        if($_FILES['contact_us_img']['name'] == ""){
             $data['contact_us_img'] = $_POST['contact_us_img_o'];
        }else {
            //---------เอาชื่อไฟล์เก่าออกให้เหลือแต่นามสกุล----------
            $type = strrchr($_FILES['contact_us_img']['name'],".");
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
            }else if ($_FILES["contact_us_img"]["size"] > 5000000) {
                $error_msg = "ขอโทษด้วย. ไฟล์ของคุณต้องมีขนาดน้อยกว่า 5 MB.";
                $check = false;
            }else if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" ) {
                $error_msg = "ขอโทษด้วย. ระบบสามารถอัพโหลดไฟล์นามสกุล JPG, JPEG, PNG & GIF เท่านั้น.";
                $check = false;
            }else if (move_uploaded_file($_FILES["contact_us_img"]["tmp_name"], $target_file)) {
                //-----------------------------------
                $data['contact_us_img'] = $date.$newname;
                //-----------------------------------
                if( $_POST['contact_us_img_o'] != null){
                    $target_file = $target_dir . $_POST['contact_us_img_o'];
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
           
            $result = $contact_us_model-> editContact_us($_POST['contact_us_id'],$data);
           
            if($result){
                ?>
<script>
    window.location = "index.php?content=contact_us"
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