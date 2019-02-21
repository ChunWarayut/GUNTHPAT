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
    
    function editFacilitiesHead($facilities_head_id, $facilities_head_sub_title_th, $facilities_head_sub_title_en) {
        
        $sql = "UPDATE `tb_facilities_head` SET `facilities_head_sub_title_th` = '$facilities_head_sub_title_th', `facilities_head_sub_title_en` = '$facilities_head_sub_title_en' WHERE `tb_facilities_head`.`facilities_head_id` = 1 
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
        $data['facilities_img']=mysqli_real_escape_string(static::$db,$data['facilities_img']);
        $data['facilities_name_th']=mysqli_real_escape_string(static::$db,$data['facilities_name_th']);
        $data['facilities_detail_th']=mysqli_real_escape_string(static::$db,$data['facilities_detail_th']);
        $data['facilities_name_en']=mysqli_real_escape_string(static::$db,$data['facilities_name_en']);
        $data['facilities_detail_en']=mysqli_real_escape_string(static::$db,$data['facilities_detail_en']);
        $data['facilities_detail_1_th']=mysqli_real_escape_string(static::$db,$data['facilities_detail_1_th']);
        $data['facilities_detail_1_en']=mysqli_real_escape_string(static::$db,$data['facilities_detail_1_en']);
        $data['facilities_detail_2_th']=mysqli_real_escape_string(static::$db,$data['facilities_detail_2_th']);
        $data['facilities_detail_2_en']=mysqli_real_escape_string(static::$db,$data['facilities_detail_2_en']);

        $sql = "UPDATE `tb_facilities` 
        SET 
        `facilities_name_th` = '".$data['facilities_name_th']."', 
        `facilities_name_en` = '".$data['facilities_name_en']."', 
         `facilities_img` = '".$data['facilities_img']."', 
         `facilities_detail_th` = '".$data['facilities_detail_th']."',
         `facilities_detail_1_th` = '".$data['facilities_detail_1_th']."',
         `facilities_detail_1_en` = '".$data['facilities_detail_1_en']."',
         `facilities_detail_2_th` = '".$data['facilities_detail_2_th']."',
         `facilities_detail_2_en` = '".$data['facilities_detail_2_en']."',
         `facilities_detail_en` = '".$data['facilities_detail_en']."'
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
        $data['facilities_detail_1_th']=mysqli_real_escape_string(static::$db,$data['facilities_detail_1_th']);
        $data['facilities_detail_1_en']=mysqli_real_escape_string(static::$db,$data['facilities_detail_1_en']);
        $data['facilities_detail_2_th']=mysqli_real_escape_string(static::$db,$data['facilities_detail_2_th']);
        $data['facilities_detail_2_en']=mysqli_real_escape_string(static::$db,$data['facilities_detail_2_en']);


        $sql = "INSERT INTO `tb_facilities` (
            `facilities_id`, 
            `facilities_name_th`, 
            `facilities_name_en`, 
            `facilities_img`, 
            `facilities_detail_th`,
            `facilities_detail_en`,
            `facilities_detail_1_th`,
            `facilities_detail_1_en`,
            `facilities_detail_2_th`,
            `facilities_detail_2_en`
            )
        VALUES (
            NULL, 
            '".$data['facilities_name_th']."', 
            '".$data['facilities_name_en']."', 
            '".$data['facilities_img']."' ,
            '".$data['facilities_detail_th']."',
            '".$data['facilities_detail_en']."',
            '".$data['facilities_detail_1_th']."',
            '".$data['facilities_detail_1_en']."',
            '".$data['facilities_detail_2_th']."',
            '".$data['facilities_detail_2_en']."'
        )
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

}
?>