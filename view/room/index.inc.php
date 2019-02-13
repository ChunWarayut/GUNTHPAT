<?php

$menu = 'room';
$path = 'view/room/';
require_once('models/Rooms.php');
$rooms_model = new Rooms;
$rooms = $rooms_model -> getRooms();
$img_path_gallery = "img_upload/gallery/"; 
$img_path_room = "img_upload/rooms/"; 
// print_r($rooms);
require_once('models/BookModel.php');
$book_model = new BookModel;
// $book = $book_model -> getBook();
// print_r($book);


if( $_GET['action'] == "detail") {
    $id = ($_GET['id']);
    $roomBy = $rooms_model -> getRoomsBy($id);
    require_once($path.'detail.inc.php');
} else if( $_GET['action'] == "book") {
    $id = ($_GET['id']);
    $room_id = $_GET['id'];

    $roomBy = $rooms_model -> getRoomsBy($id);
    
    if(isset($_POST['book_id'])){
        $room_id = $_GET['id'];
        $check = true;
        $data = [];
        $data['book_firstname'] = trim($_POST['book_firstname']);
        $data['book_lastname'] = trim($_POST['book_lastname']);
        $data['book_person'] = trim($_POST['book_person']);
        $data['room_id'] = trim($_POST['room_id']);
        $data['book_date_start'] = trim($_POST['book_date_start']);
        $data['book_date_end'] = trim($_POST['book_date_end']);
        $data['book_tel'] = trim($_POST['book_tel']);
        
        if($check == false){
            ?>  <script>
              window.history.back(); 
              </script>  <?php
        }else{
            $result = $book_model->insertBook($data);

            if($result){?> 
                <script>
                    window.location="room.php?"
                    alert('จองสำเร็จ');
                </script> <?php 
            } else { ?>  
                <script> 
                    window.history.back(); 
                    alert('จองล้มเหลว');
                </script> <?php
            }
        }
    }
    require_once($path.'book.inc.php');
}else{
require_once $path.'view.inc.php';
}
?>