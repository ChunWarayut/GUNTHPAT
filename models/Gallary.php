<?php
require_once("BaseModel.php");

class Gallary extends BaseModel{
    
    function __construct(){
        if(!static::$db){
            static::$db = mysqli_connect($this->host, $this->username, $this->password, $this->db_name);
            mysqli_set_charset(static::$db,"utf8");
        }
    }

    function getgallary() {
        $sql = " SELECT *
        FROM `tb_gallary`
        LEFT JOIN tb_gallary_type ON tb_gallary.gallary_type_id = tb_gallary_type.gallary_type_id
        WHERE 1
        ORDER BY tb_gallary.gallary_id
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

    function getGallaryType() {
        $sql = " SELECT * 
        FROM `tb_gallary_type` 
        WHERE 1
        ORDER BY tb_gallary_type.gallary_type_id
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

    function deleteGallary($gallary_id) {
        $sql = "DELETE 
        FROM `tb_gallary` 
        WHERE `tb_gallary`.`gallary_id` = '$gallary_id'
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
    
    function editGallary($gallary_id,$data = []) {
        $data['gallary_name']=mysqli_real_escape_string(static::$db,$data['gallary_name']);
        $data['gallary_type_id']=mysqli_real_escape_string(static::$db,$data['gallary_type_id']);
        $data['gallary_img']=mysqli_real_escape_string(static::$db,$data['gallary_img']);
        $data['gallary_detail']=mysqli_real_escape_string(static::$db,$data['gallary_detail']);

        $sql = "UPDATE `tb_gallary` 
        SET `gallary_name` = '".$data['gallary_name']."', 
         `gallary_type_id` = '".$data['gallary_type_id']."', 
         `gallary_img` = '".$data['gallary_img']."', 
         `gallary_detail` = '".$data['gallary_detail']."'
        WHERE `tb_gallary`.`gallary_id` = '$gallary_id'
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

    function addGallary($data = []) {
        $data['gallary_name']=mysqli_real_escape_string(static::$db,$data['gallary_name']);
        $data['gallary_type_id']=mysqli_real_escape_string(static::$db,$data['gallary_type_id']);
        $data['gallary_img']=mysqli_real_escape_string(static::$db,$data['gallary_img']);
        $data['gallary_detail']=mysqli_real_escape_string(static::$db,$data['gallary_detail']);

        $sql = "INSERT INTO `tb_gallary` 
        (`gallary_id`, 
        `gallary_name`, 
        `gallary_type_id`, 
        `gallary_img`, 
        `gallary_detail`)
        VALUES (
            NULL, 
            '".$data['gallary_name']."', 
            '".$data['`gallary_type_id`,']."', 
            '".$data['gallary_img']."' ,
            '".$data['gallary_detail']."'
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