<?php
date_default_timezone_set("Asia/Bangkok");
require_once('../models/About_us.php');

$path = "modules/about_us/views/";
$img_path = "../img_upload/about_us/";
$target_dir = "../img_upload/about_us/";

$about_us_model = new About_us;
$about_us = $about_us_model -> getAbout_us();
$id =($_GET['id']);

// echo "<pre>";
// print_r($about_us);
// echo "</pre>";



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


    if( !isset($_GET['action']) ) {
        require_once($path.'view.inc.php');
    } else if( $_GET['action'] == "edit") {
        
    if(isset($_POST['about_us_id'])){
        $check = true;
        $data = [];
        $data['about_us_id'] = $_POST['about_us_id'];
        $data['about_us_title'] = $_POST['about_us_title'];
        $data['about_us_sub_title'] = $_POST['about_us_sub_title'];

        //------------------ฟังชั่นแก้ไขรูป--------------------
        if($_FILES['about_us_img']['name'] == ""){
            $data['about_us_img'] = $_POST['img_about_us_o'];
        }else {
            //---------เอาชื่อไฟล์เก่าออกให้เหลือแต่นามสกุล----------
            $type = strrchr($_FILES['about_us_img']['name'],".");
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
                $error_msg =  "Sorry, file already exists.";
                $check = false;
            }else if ($_FILES["about_us_img"]["size"] > 5000000) {
                $error_msg = "Sorry, your file is too large.";
                $check = false;
            }else if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" ) {
                $error_msg = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                $check = false;
            }else if (move_uploaded_file($_FILES["about_us_img"]["tmp_name"], $target_file)) {

                //-----------------------------------
                $data['about_us_img'] = $date.$newname;
                //-----------------------------------

                $target_file = $target_dir . $_POST["img_about_us_o"];
                if($_POST["img_about_us_o"] != 'default.png'){
                    if (file_exists($target_file)) {
                        unlink($target_file);
                    }
                }
            } else {
                $error_msg =  "Sorry, there was an error uploading your file.";
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
            $result = $about_us_model-> editRoom($_POST['about_us_id'],$data);

            if($result){
                ?>
<script>
window.location = "index.php?content=about_us"
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