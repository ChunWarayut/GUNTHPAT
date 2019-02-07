<?php
date_default_timezone_set("Asia/Bangkok");
require_once('../models/Slide.php');

$path = "modules/home/views/";
$img_path = "../img_upload/slide/";
$target_dir = "../img_upload/slide/";

$slide_model = new Slide;
$slide = $slide_model -> slideRoom01();
$id = isset($_GET['id']);

// echo "<pre>";
// print_r($slide);
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
        
    if(isset($_POST['slide_id'])){
        $check = true;
        $data = [];
        $data['slide_id'] = $_POST['slide_id'];
        $data['slide_title'] = $_POST['slide_title'];
        $data['slide_sub_title'] = $_POST['slide_sub_title'];
        $data['slide_link'] = $_POST['slide_link'];

        //------------------ฟังชั่นแก้ไขรูป--------------------
        if($_FILES['slide_img']['name'] == ""){
            $data['slide_img'] = $_POST['img_slide_o'];
        }else {
            //---------เอาชื่อไฟล์เก่าออกให้เหลือแต่นามสกุล----------
            $type = strrchr($_FILES['slide_img']['name'],".");
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
            }else if ($_FILES["slide_img"]["size"] > 5000000) {
                $error_msg = "Sorry, your file is too large.";
                $check = false;
            }else if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" ) {
                $error_msg = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                $check = false;
            }else if (move_uploaded_file($_FILES["slide_img"]["tmp_name"], $target_file)) {

                //-----------------------------------
                $data['slide_img'] = $date.$newname;
                //-----------------------------------

                $target_file = $target_dir . $_POST["img_slide_o"];
                if($_POST["img_slide_o"] != 'default.png'){
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
            $result = $slide_model-> editRoom($_POST['slide_id'],$data);

            if($result){
                ?>
<script>
window.location = "index.php?content=home"
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