<?php
require_once("BaseModel.php");

class Room_Type extends BaseModel{
    
    function __construct(){
        if(!static::$db){
            static::$db = mysqli_connect($this->host, $this->username, $this->password, $this->db_name);
            mysqli_set_charset(static::$db,"utf8");
        }
    }

    function getRoomType() {
        $sql = " SELECT *
        FROM `tb_room_type`
        ";
        // echo "<pre>";
        // print_r();
        // echo "</pre>";
        if ($result = mysqli_query(static::$db,$sql, MYSQLI_USE_RESULT)) {
            $data = [];
            while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                $data[] = $row;
            }
            $result->close();
            return $data;
        }
    }

    
    
    function insertRoomType($room_type_name_th, $room_type_name_en) {

        $sql = "INSERT INTO `tb_room_type`(`room_type_id`, 
        `room_type_name_th`,
        `room_type_name_en`
        ) VALUES (NULL,'$room_type_name_th', '$room_type_name_en')
        ";
        // echo "<pre>";
        // print_r( $sql);
        // echo "</pre>";

        if (mysqli_query(static::$db,$sql, MYSQLI_USE_RESULT)) {
            return 1;
        }else {
            return 0;
        }
    }


    
    function editRoomType($room_type_id, $room_type_name_th, $room_type_name_en) {
        $sql = "UPDATE `tb_room_type` 
        SET 
        `room_type_name_th` = '$room_type_name_th',
        `room_type_name_en` = '$room_type_name_en'
        WHERE `tb_room_type`.`room_type_id` = '$room_type_id'
        ";
        echo "<pre>";
        print_r( $sql);
        echo "</pre>";

        if (mysqli_query(static::$db,$sql, MYSQLI_USE_RESULT)) {
            return 1;
        }else {
            return 0;
        }
    }


    function deleteRoomType($room_type_id) {
        $sql = "DELETE 
        FROM `tb_room_type` 
        WHERE `tb_room_type`.`room_type_id` = '$room_type_id'
        ";
        // echo "<pre>";
        // print_r();
        // echo "</pre>";
       

        if (mysqli_query(static::$db,$sql, MYSQLI_USE_RESULT)) {
            return mysqli_insert_id(static::$db);
        }else {
            return 0;
        }
    }

}
?>