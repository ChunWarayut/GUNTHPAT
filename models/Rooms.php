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

    function getRoomsBy($room_id) {
        $sql = " SELECT
            *
            FROM
                `tb_room`
            LEFT JOIN 
                tb_gallery ON tb_room.room_id = tb_gallery.room_id
            WHERE
                tb_room.room_id = '$room_id'
                
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

    function getRoomsRecommened() {
        $sql = " SELECT *
        FROM `tb_room`
        LEFT JOIN tb_room_type ON tb_room.room_type_id = tb_room_type.room_type_id 
        WHERE tb_room.room_recommened = 1
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

    function deleteRooms($room_id) {
        $sql = "DELETE 
        FROM `tb_room` 
        WHERE `tb_room`.`room_id` = '$room_id'
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
    
    function editRoom($room_id,$data = []) {
        $data['room_img']=mysqli_real_escape_string(static::$db,$data['room_img']);
        $data['room_id']=mysqli_real_escape_string(static::$db,$data['room_id']);
        $data['room_name']=mysqli_real_escape_string(static::$db,$data['room_name']);
        $data['room_sub_title']=mysqli_real_escape_string(static::$db,$data['room_sub_title']);
        $data['room_type_id']=mysqli_real_escape_string(static::$db,$data['room_type_id']);
        $data['room_price']=mysqli_real_escape_string(static::$db,$data['room_price']);
        $data['room_amout']=mysqli_real_escape_string(static::$db,$data['room_amout']);
        $data['room_size']=mysqli_real_escape_string(static::$db,$data['room_size']);
        $data['room_detail_1']=mysqli_real_escape_string(static::$db,$data['room_detail_1']);
        $data['room_detail_2']=mysqli_real_escape_string(static::$db,$data['room_detail_2']);
        $data['room_detail_3']=mysqli_real_escape_string(static::$db,$data['room_detail_3']);
        $data['room_facility_1']=mysqli_real_escape_string(static::$db,$data['room_facility_1']);
        $data['room_facility_2']=mysqli_real_escape_string(static::$db,$data['room_facility_2']);

        $sql = "UPDATE `tb_room` 
        SET `room_img` = '".$data['room_img']."', 
        `room_name` = '".$data['room_name']."', 
        `room_sub_title` = '".$data['room_sub_title']."', 
        `room_type_id` = '".$data['room_type_id']."', 
        `room_price` = '".$data['room_price']."' ,
        `room_amout` = '".$data['room_amout']."' ,
        `room_size` = '".$data['room_size']."' ,
        `room_detail_1` = '".$data['room_detail_1']."' ,
        `room_detail_2` = '".$data['room_detail_2']."' ,
        `room_detail_3` = '".$data['room_detail_3']."' ,
        `room_facility_1` = '".$data['room_facility_1']."' ,
        `room_facility_2` = '".$data['room_facility_2']."' 
        WHERE `tb_room`.`room_id` = '$room_id'
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
    
    function editRoomRecommened($room_id,$room_recommened) {
      
        $sql = "UPDATE `tb_room` SET `room_recommened` = '$room_recommened' WHERE `tb_room`.`room_id` = '$room_id'
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

    function addRoom($data = []) {
        $data['room_img']=mysqli_real_escape_string(static::$db,$data['room_img']);
        $data['room_id']=mysqli_real_escape_string(static::$db,$data['room_id']);
        $data['room_name']=mysqli_real_escape_string(static::$db,$data['room_name']);
        $data['room_sub_title']=mysqli_real_escape_string(static::$db,$data['room_sub_title']);
        $data['room_type_id']=mysqli_real_escape_string(static::$db,$data['room_type_id']);
        $data['room_price']=mysqli_real_escape_string(static::$db,$data['room_price']);
        $data['room_amout']=mysqli_real_escape_string(static::$db,$data['room_amout']);
        $data['room_size']=mysqli_real_escape_string(static::$db,$data['room_size']);
        $data['room_detail_1']=mysqli_real_escape_string(static::$db,$data['room_detail_1']);
        $data['room_detail_2']=mysqli_real_escape_string(static::$db,$data['room_detail_2']);
        $data['room_detail_3']=mysqli_real_escape_string(static::$db,$data['room_detail_3']);
        $data['room_facility_1']=mysqli_real_escape_string(static::$db,$data['room_facility_1']);
        $data['room_facility_2']=mysqli_real_escape_string(static::$db,$data['room_facility_2']);

        $sql = "INSERT INTO `tb_room` 
        (`room_id`, 
        `room_type_id`, 
        `room_name`, 
        `room_sub_title`, 
        `room_price`, 
        `room_amout`, 
        `room_img`, 
        `room_size`, 
        `room_detail_1`, 
        `room_detail_2`, 
        `room_detail_3`, 
        `room_facility_1`, 
        `room_facility_2`) 
        VALUES (
            NULL, 
            '".$data['room_type_id']."', 
            '".$data['room_name']."', 
            '".$data['room_sub_title']."', 
            '".$data['room_price']."' ,
            '".$data['room_amout']."' ,
            '".$data['room_img']."', 
            '".$data['room_size']."' , 
            '".$data['room_detail_1']."' ,
            '".$data['room_detail_2']."' ,
            '".$data['room_detail_3']."' ,
            '".$data['room_facility_1']."' ,
            '".$data['room_facility_2']."' 
        )
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

}
?>