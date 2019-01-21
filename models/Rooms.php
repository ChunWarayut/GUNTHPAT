<?php
require_once("BaseModel.php");

class Rooms extends BaseModel{
    
    function __construct(){
        if(!static::$db){
            static::$db = mysqli_connect($this->host, $this->username, $this->password, $this->db_name);
            mysqli_set_charset(static::$db,"utf8");
        }
    }

    function getRooms() {
        $sql = " SELECT *
        FROM `tb_room`
        LEFT JOIN tb_room_type ON tb_room.room_type_id = tb_room_type.room_type_id 
        WHERE 1
        ORDER BY tb_room.room_id
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
}
?>