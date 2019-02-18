<?php
date_default_timezone_set("Asia/Bangkok");

require_once('../models/GalleryModel.php');

$path = "modules/gallery/views/";
$img_path = "../img_upload/gallery/";

$gallery_model = new Gallery;
$gallery = $gallery_model -> getGallery();
$gallery_head = $gallery_model -> getgalleryHead();
$gallery_type = $gallery_model -> getGalleryType();


require_once('../models/Rooms.php');
$rooms_model = new Rooms;
$rooms = $rooms_model -> getRooms();
// echo "<pre>";
// print_r($rooms[0]['room_id']);
// echo "</pre>";

// echo "<pre>";
// print_r($gallery);
// echo "</pre>";


$type =($_GET['type']);
$id =($_GET['id']);
// ECHO "<PRE>";
// print_r( $gallery);
// ECHO "</PRE>";

$target_dir = "../img_upload/gallery/";

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
        $target_file = $target_dir . $_POST['gallery_img_o'];
        if (file_exists($target_file)) {
            unlink($target_file);
        }
        $result = $gallery_model-> deleteGallery($id);
        require_once($path.'view.inc.php');
        ?>
<script>
window.location = "index.php?content=gallery"
</script>

<?PHP
    } else if( $_GET['action'] == "edit_head") {
        $result = $gallery_model-> editGalleryHead($id, $_POST['gallery_head_sub_title']);
        require_once($path.'view.inc.php');
        ?>
<script>
window.location = "index.php?content=gallery"
</script>
<?PHP
    } else if( $_GET['action'] == "recommened") {
      
            $result = $gallery_model-> editGalleryRecommened($id, $_GET['recommened']);        

        ?>
<script>
window.location = "index.php?content=gallery"
</script>
<?PHP
    } else if( $_GET['action'] == "insert") {
    if(isset($_POST['gallery_name'])){
        $check = true;
        $data = [];
        $data['gallery_id'] = $_POST['gallery_id'];
        $data['room_id'] = $_POST['room_id'];
        $data['gallery_name'] = $_POST['gallery_name'];
        $data['gallery_type_id'] = $_POST['gallery_type_id'];
        //-----------------ฟังก์ชั่นสุ่มตัวเลข----------------
        $numrand = (mt_rand());
        //-----------------------------------------------
        if($_FILES['gallery_img']['name'] == ""){
             $data['gallery_img'] = $_POST['gallery_img_o'];
        }else {
            //---------เอาชื่อไฟล์เก่าออกให้เหลือแต่นามสกุล----------
            $type = strrchr($_FILES['gallery_img']['name'],".");
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
            }else if ($_FILES["gallery_img"]["size"] > 5000000) {
                $error_msg = "ขอโทษด้วย. ไฟล์ของคุณต้องมีขนาดน้อยกว่า 5 MB.";
                $check = false;
            }else if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" ) {
                $error_msg = "ขอโทษด้วย. ระบบสามารถอัพโหลดไฟล์นามสกุล JPG, JPEG, PNG & GIF เท่านั้น.";
                $check = false;
            }else if (move_uploaded_file($_FILES["gallery_img"]["tmp_name"], $target_file)) {
                //-----------------------------------
                $data['gallery_img'] = $date.$newname;
                //-----------------------------------
                if( $_POST['gallery_img_o'] != null){
                    $target_file = $target_dir . $_POST['gallery_img_o'];
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
           
            $result = $gallery_model-> addGallery($data);
           
            if($result){
                ?>
<script>
window.location = "index.php?content=gallery"
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
               
    if(isset($_POST['gallery_id'])){
        $check = true;
        $data = [];
        $data['gallery_id'] = $_POST['gallery_id'];
        $data['room_id'] = $_POST['room_id'];
        $data['gallery_name'] = $_POST['gallery_name'];
        $data['gallery_type_id'] = $_POST['gallery_type_id'];
        $data['gallery_detail'] = $_POST['gallery_detail'];
        //-----------------ฟังก์ชั่นสุ่มตัวเลข----------------
        $numrand = (mt_rand());
        //-----------------------------------------------
        if($_FILES['gallery_img']['name'] == ""){
             $data['gallery_img'] = $_POST['gallery_img_o'];
        }else {
            //---------เอาชื่อไฟล์เก่าออกให้เหลือแต่นามสกุล----------
            $type = strrchr($_FILES['gallery_img']['name'],".");
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
            }else if ($_FILES["gallery_img"]["size"] > 5000000) {
                $error_msg = "ขอโทษด้วย. ไฟล์ของคุณต้องมีขนาดน้อยกว่า 5 MB.";
                $check = false;
            }else if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" ) {
                $error_msg = "ขอโทษด้วย. ระบบสามารถอัพโหลดไฟล์นามสกุล JPG, JPEG, PNG & GIF เท่านั้น.";
                $check = false;
            }else if (move_uploaded_file($_FILES["gallery_img"]["tmp_name"], $target_file)) {
                //-----------------------------------
                $data['gallery_img'] = $date.$newname;
                //-----------------------------------
                if( $_POST['gallery_img_o'] != null){
                    $target_file = $target_dir . $_POST['gallery_img_o'];
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
           
            $result = $gallery_model-> editGallery($_POST['gallery_id'],$data);
           
            if($result){
                ?>
<script>
window.location = "index.php?content=gallery"
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