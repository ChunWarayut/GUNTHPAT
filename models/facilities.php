<?php
require_once("BaseModel.php");

class Facilities extends BaseModel{
    
    function __construct(){
        if(!static::$db){
            static::$db = mysqli_connect($this->host, $this->username, $this->password, $this->db_name);
            mysqli_set_charset(static::$db,"utf8");
        }
    }

    function getfacilities() {
        $sql = " SELECT *
        FROM `tb_facilities`
        LEFT JOIN tb_facilities_type ON tb_facilities.facilities_id = tb_facilities_type.facilities_type_id
        WHERE 1
        ORDER BY tb_facilities.facilities_id
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

    function deleteFacilities($facilities_id) {
        $sql = "DELETE 
        FROM `tb_facilities` 
        WHERE `tb_facilities`.`facilities_id` = '$facilities_id'
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
    
    function editFacilities($facilities_id,$data = []) {
        $data['facilities_name']=mysqli_real_escape_string(static::$db,$data['facilities_name']);
        $data['facilities_img']=mysqli_real_escape_string(static::$db,$data['facilities_img']);
        $data['facilities_detail']=mysqli_real_escape_string(static::$db,$data['facilities_detail']);
        $data['facilities_type_id']=mysqli_real_escape_string(static::$db,$data['facilities_type_id']);

        $sql = "UPDATE `tb_room` 
        SET `facilities_name` = '".$data['facilities_name']."', 
        SET `facilities_img` = '".$data['facilities_img']."', 
        SET `facilities_detail` = '".$data['facilities_detail']."', 
        `facilities_type_id` = '".$data['facilities_type_id']."', 
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

    function addFacilities($data = []) {
        $data['facilities_name']=mysqli_real_escape_string(static::$db,$data['facilities_name']);
        $data['facilities_img']=mysqli_real_escape_string(static::$db,$data['facilities_img']);
        $data['facilities_detail']=mysqli_real_escape_string(static::$db,$data['facilities_detail']);
        $data['facilities_type_id']=mysqli_real_escape_string(static::$db,$data['facilities_type_id']);

        $sql = "INSERT INTO `tb_room` 
        (`facilities_id`, 
        `facilities_name`, 
        `facilities_type_id`, 
        `facilities_img`, 
        `facilities_detail`, 
        VALUES (
            NULL, 
            '".$data['facilities_id']."', 
            '".$data['facilities_name']."', 
            '".$data['facilities_type_id']."' ,
            '".$data['facilities_img']."' ,
            '".$data['facilities_detail']."', 
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