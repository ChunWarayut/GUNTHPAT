<?php
date_default_timezone_set("Asia/Bangkok");
require_once('../models/RoomsModel.php');
require_once('../models/Room_TypeModel.php');

$path = "modules/rooms/views/";
$img_path = "../img_upload/rooms/"; 

$pathImgGallery = "../img_upload/gallery/";
$rooms_model = new Rooms;
$room_type_model = new Room_Type;
$rooms = $rooms_model -> getRooms();
$room_type = $room_type_model -> getRoomType();

$rooms_totle_mo = $rooms_model -> getRoomsLast();
$rooms_totle = $rooms_totle_mo[0]['room_id'];

require_once('../models/GalleryModel.php');
$gallery_model = new Gallery;
$gallery = $gallery_model -> getgalleryby($_GET['id']) ;
// echo "<pre>";
// print_r($rooms);
// echo "</pre>";

// echo "<pre>";
// print_r($slide);
// echo "</pre>";


$type =($_GET['type']);
$id =($_GET['id']);
// ECHO "<PRE>";
// print_r( $rooms);
// ECHO "</PRE>";

$target_dir = "../img_upload/rooms/";

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
        
        $target_file = $target_dir . $_POST['room_img_o'];
        if (file_exists($target_file)) {
            unlink($target_file);
        }
        $result = $rooms_model-> deleteRooms($id);
        require_once($path.'view.inc.php');
        ?>
<script>
window.location = "index.php?content=rooms"
</script>
<?PHP


} else if( $_GET['action'] == "delete_type") {
    $result = $room_type_model-> deleteRoomType($id);
    require_once($path.'view.inc.php');
    ?>
<script>
window.location = "index.php?content=rooms"
</script>
<?PHP

    } else if( $_GET['action'] == "insert_type") {
        // echo $_POST['room_type_name'];
        if(isset($_POST['room_type_id'])){
        $check = true;
        if($check == false){ ?>
    <script>
    alert('<?php echo $error_msg; ?>');
    window.history.back();
    </script>
    <?php
            
        }else{
            
            $result = $room_type_model-> insertRoomType($_POST['room_type_name_th'], $_POST['room_type_name_en']);
            
            if($result){
                ?>
    <script>
    window.location = "index.php?content=rooms"
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
            require_once($path . 'insert_type.inc.php');
        }

    } else if( $_GET['action'] == "edit_type") {
        if(isset($_POST['room_type_id'])){
            $check = true;
            if($check == false){ ?>
        <script>
        alert('<?php echo $error_msg; ?>');
        window.history.back();
        </script>
        <?php
            }else{
                $result = $room_type_model-> editRoomType($_POST['room_type_id'],$_POST['room_type_name_th'],$_POST['room_type_name_en']);
                if($result){
                    ?>
        <script>
        window.location = "index.php?content=rooms"
        </script>
        <?php }else{    ?>
        <script>
        window.history.back();
        </script>
        <?php  }
            }
            }else{
                require_once($path . 'edit_type.inc.php');
            }
        } else if( $_GET['action'] == "recommened") {
          
                $result = $room_model-> editRoomRecommened($id, $_GET['recommened']);        
    
            ?>
    <script>
    window.location = "index.php?content=rooms"
    </script>
    <?PHP
    } else if( $_GET['action'] == "recommened") {
      
            $result = $rooms_model-> editRoomRecommened($id, $_GET['recommened']);        

        ?>
<script>
// window.location = "index.php?content=rooms"
</script>
<?PHP
    } else if( $_GET['action'] == "insert") {
    if(isset($_POST['room_id'])){
        $check = true;
        $data = [];
        $data['room_id'] = $_POST['room_id'];
        $data['room_name_th'] = $_POST['room_name_th'];
        $data['room_sub_title_th'] = $_POST['room_sub_title_th'];
        $data['room_name_en'] = $_POST['room_name_en'];
        $data['room_sub_title_en'] = $_POST['room_sub_title_en'];
        $data['room_type_id'] = $_POST['room_type_id'];
        $data['room_price'] = $_POST['room_price'];
        $data['room_amout'] = $_POST['room_amout'];
        $data['room_img'] = $_POST['room_img'];
        $data['room_size_th'] = $_POST['room_size_th'];
        $data['room_detail_1_th'] = $_POST['room_detail_1_th'];
        $data['room_detail_2_th'] = $_POST['room_detail_2_th'];
        $data['room_detail_3_th'] = $_POST['room_detail_3_th'];
        $data['room_facility_1_th'] = $_POST['room_facility_1_th'];
        $data['room_facility_2_th'] = $_POST['room_facility_2_th'];
        $data['room_size_en'] = $_POST['room_size_en'];
        $data['room_detail_1_en'] = $_POST['room_detail_1_en'];
        $data['room_detail_2_en'] = $_POST['room_detail_2_en'];
        $data['room_detail_3_en'] = $_POST['room_detail_3_en'];
        $data['room_facility_1_en'] = $_POST['room_facility_1_en'];
        $data['room_facility_2_en'] = $_POST['room_facility_2_en'];

        //-----------------ฟังก์ชั่นสุ่มตัวเลข----------------
        $numrand = (mt_rand());
        //-----------------------------------------------
        if($_FILES['room_img']['name'] == ""){
             $data['room_img'] = $_POST['room_img_o'];
        }else {
            //---------เอาชื่อไฟล์เก่าออกให้เหลือแต่นามสกุล----------
            $type = strrchr($_FILES['room_img']['name'],".");
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
            }else if ($_FILES["room_img"]["size"] > 5000000) {
                $error_msg = "ขอโทษด้วย. ไฟล์ของคุณต้องมีขนาดน้อยกว่า 5 MB.";
                $check = false;
            }else if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" ) {
                $error_msg = "ขอโทษด้วย. ระบบสามารถอัพโหลดไฟล์นามสกุล JPG, JPEG, PNG & GIF เท่านั้น.";
                $check = false;
            }else if (move_uploaded_file($_FILES["room_img"]["tmp_name"], $target_file)) {
                //-----------------------------------
                $data['room_img'] = $date.$newname;
                //-----------------------------------
                if( $_POST['room_img_o'] != null){
                    $target_file = $target_dir . $_POST['room_img_o'];
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
           
            $result = $rooms_model-> addRoom($data);
           
            if($result){
                ?>
<script>
window.location = "index.php?content=rooms&action=edit&id=<?PHP echo $rooms_totle+1; ?>"
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
               
    if(isset($_POST['room_id'])){
        $check = true;
        $data = [];
        $data['room_id'] = $_POST['room_id'];
        $data['room_name_th'] = $_POST['room_name_th'];
        $data['room_sub_title_th'] = $_POST['room_sub_title_th'];
        $data['room_name_en'] = $_POST['room_name_en'];
        $data['room_sub_title_en'] = $_POST['room_sub_title_en'];
        $data['room_type_id'] = $_POST['room_type_id'];
        $data['room_price'] = $_POST['room_price'];
        $data['room_amout'] = $_POST['room_amout'];
        $data['room_img'] = $_POST['room_img'];
        $data['room_size_th'] = $_POST['room_size_th'];
        $data['room_detail_1_th'] = $_POST['room_detail_1_th'];
        $data['room_detail_2_th'] = $_POST['room_detail_2_th'];
        $data['room_detail_3_th'] = $_POST['room_detail_3_th'];
        $data['room_facility_1_th'] = $_POST['room_facility_1_th'];
        $data['room_facility_2_th'] = $_POST['room_facility_2_th'];
        $data['room_size_en'] = $_POST['room_size_en'];
        $data['room_detail_1_en'] = $_POST['room_detail_1_en'];
        $data['room_detail_2_en'] = $_POST['room_detail_2_en'];
        $data['room_detail_3_en'] = $_POST['room_detail_3_en'];
        $data['room_facility_1_en'] = $_POST['room_facility_1_en'];
        $data['room_facility_2_en'] = $_POST['room_facility_2_en'];

        //-----------------ฟังก์ชั่นสุ่มตัวเลข----------------
        $numrand = (mt_rand());
        //-----------------------------------------------
        if($_FILES['room_img']['name'] == ""){
             $data['room_img'] = $_POST['room_img_o'];
        }else {
            //---------เอาชื่อไฟล์เก่าออกให้เหลือแต่นามสกุล----------
            $type = strrchr($_FILES['room_img']['name'],".");
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
            }else if ($_FILES["room_img"]["size"] > 5000000) {
                $error_msg = "ขอโทษด้วย. ไฟล์ของคุณต้องมีขนาดน้อยกว่า 5 MB.";
                $check = false;
            }else if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" ) {
                $error_msg = "ขอโทษด้วย. ระบบสามารถอัพโหลดไฟล์นามสกุล JPG, JPEG, PNG & GIF เท่านั้น.";
                $check = false;
            }else if (move_uploaded_file($_FILES["room_img"]["tmp_name"], $target_file)) {
                //-----------------------------------
                $data['room_img'] = $date.$newname;
                //-----------------------------------
                if( $_POST['room_img_o'] != null){
                    $target_file = $target_dir . $_POST['room_img_o'];
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
           
            $result = $rooms_model-> editRoom($_POST['room_id'],$data);
           
            if($result){
                ?>
<script>
window.location = "index.php?content=rooms"
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
        // echo $_GET['id'];
        $img_path_room = "../img_upload/room/"; 
        $roomBy = $rooms_model -> getRoomsBy($_GET['id']);
        // print_r($roomBy);
        require_once($path . 'edit.inc.php');
    }
    
}
?>