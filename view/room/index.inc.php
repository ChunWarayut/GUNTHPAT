<?php

$menu = 'room';
$path = 'view/room/';
require_once('models/BookModel.php');
$book_model = new BookModel;

if(isset($_GET['id']) && (!isset($_GET['action']))){
    $id = $_GET['id'];
    $roomBy = $rooms_model -> getRoomsBy($id);
    $roomByList = $rooms_model -> getRoomsBy($id);
    // echo $id;

    require_once($path.'detail.inc.php');
} else if( $_GET['action'] == "book") {
    $id = ($_GET['id']);

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
                    alert('จองสำเร็จ');
                    window.location="room.php?"
                </script> <?php 
            } else { ?>  
                <script> 
                    alert('จองล้มเหลว');
                    window.history.back(); 
                </script> <?php
            }
        }
    }
    $room_id = $_GET['room_id'];
    $book_person = $_GET['book_person'];
    $book_date_start = $_GET['book_date_start'];
    $book_date_end = $_GET['book_date_end'];
    $room_by_id = $rooms_model -> getRoomsByID($room_id);
    require_once($path.'book.inc.php');
}else{
require_once $path.'view.inc.php';
}
?>