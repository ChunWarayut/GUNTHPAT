<?php
require_once('models/Rooms.php');

$menu = 'room';
$path = 'view/room/';

$rooms_model = new Rooms;
$rooms = $rooms_model -> getRooms();
$img_path_gallery = "img_upload/gallery/"; 
$img_path_room = "img_upload/rooms/"; 
// print_r($rooms);


if( $_GET['action'] == "detail") {
    $id = ($_GET['id']-1);
    $roomBy = $rooms_model -> getRoomsBy($id);
    require_once($path.'detail.inc.php');
} else if( $_GET['action'] == "book") {
    $id = ($_GET['id']-1);
    $roomBy = $rooms_model -> getRoomsBy($id);
    
    if(isset($_POST['contact_title_id'])){
        $check = true;
        $data = [];
        $data['contact_id'] = trim($_POST['contact_id']);
        $data['contact_title_id'] = trim($_POST['contact_title_id']);
        $data['contact_firstname'] = trim($_POST['contact_firstname']);
        $data['contact_lastname'] = trim($_POST['contact_lastname']);
        $data['contact_email'] = trim($_POST['contact_email']);
        $data['contact_tel'] = trim($_POST['contact_tel']);
        $data['contact_country'] = trim($_POST['contact_country']);
        $data['contact_text'] = trim($_POST['contact_text']);
        $data['contact_type_id'] = trim($_POST['contact_type_id']);

        if($check == false){
            ?>  <script>  window.history.back(); </script>  <?php
        }else{
            $user = $contact_model->addContact($data);

            if($user){
                ?> 
                <script>
                    // window.location="contact_us.php?"
                </script> 
                <?php
            }else{
                ?>  
                <script> 
                    // window.history.back(); 
                </script> <?php
            }
        }
    }else{
        ?> <script> 
            // window.history.back(); 
        </script> <?php
    }
    
    require_once($path.'book.inc.php');
}else{
require_once $path.'view.inc.php';
}
?>
