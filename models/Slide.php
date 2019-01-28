<?php
require_once("BaseModel.php");

class Slide extends BaseModel{
    
    function __construct(){
        if(!static::$db){
            static::$db = mysqli_connect($this->host, $this->username, $this->password, $this->db_name);
            mysqli_set_charset(static::$db,"utf8");
        }
    }

    function slideRoom01() {
        $sql = " SELECT *
        FROM `tb_slide`
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
    

    function editRoom($slide_id,$data = []) {
        $data['slide_img']=mysqli_real_escape_string(static::$db,$data['slide_img']);
        $data['slide_id']=mysqli_real_escape_string(static::$db,$data['slide_id']);
        $data['slide_title']=mysqli_real_escape_string(static::$db,$data['slide_title']);
        $data['slide_sub_title']=mysqli_real_escape_string(static::$db,$data['slide_sub_title']);
        $data['slide_link']=mysqli_real_escape_string(static::$db,$data['slide_link']);

        $sql = "UPDATE `tb_slide` 
        SET `slide_img` = '".$data['slide_img']."', 
        `slide_title` = '".$data['slide_title']."', 
        `slide_sub_title` = '".$data['slide_sub_title']."', 
        `slide_link` = '".$data['slide_link']."' 
        WHERE `tb_slide`.`slide_id` = '$slide_id'
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