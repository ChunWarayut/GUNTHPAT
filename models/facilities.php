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
        WHERE 1
        ORDER BY tb_facilities.facilities_id
        ";
        // echo "<pre>";
        // print_r($sql);
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

    function getfacilitiesHead() {
        $sql = " SELECT *
        FROM `tb_facilities_head`
        WHERE 1
        ORDER BY tb_facilities_head.facilities_head_id
        ";
        // echo "<pre>";
        // print_r($sql);
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
    
    function editFacilitiesHead($facilities_head_id, $facilities_head_sub_title) {
        
        $sql = "UPDATE `tb_facilities_head` SET `facilities_head_sub_title` = '$facilities_head_sub_title' WHERE `tb_facilities_head`.`facilities_head_id` = 1 
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
    
    function editFacilities($facilities_id,$data = []) {
        $data['facilities_name']=mysqli_real_escape_string(static::$db,$data['facilities_name']);
        $data['facilities_img']=mysqli_real_escape_string(static::$db,$data['facilities_img']);
        $data['facilities_detail']=mysqli_real_escape_string(static::$db,$data['facilities_detail']);

        $sql = "UPDATE `tb_facilities` 
        SET `facilities_name` = '".$data['facilities_name']."', 
         `facilities_img` = '".$data['facilities_img']."', 
         `facilities_detail` = '".$data['facilities_detail']."'
        WHERE `tb_facilities`.`facilities_id` = '$facilities_id'
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

        $sql = "INSERT INTO `tb_facilities` (`facilities_id`, `facilities_name`, `facilities_img`, `facilities_detail`)
        VALUES (
            NULL, 
            '".$data['facilities_name']."', 
            '".$data['facilities_img']."' ,
            '".$data['facilities_detail']."'
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