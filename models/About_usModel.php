<?php
require_once("BaseModel.php");

class About_us extends BaseModel{
    
    function __construct(){
        if(!static::$db){
            static::$db = mysqli_connect($this->host, $this->username, $this->password, $this->db_name);
            mysqli_set_charset(static::$db,"utf8");
        }
    }

    function getAbout_us() {
        $sql = " SELECT *
        FROM `tb_about_us`
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
    

    function editRoom($about_us_id,$data = []) {
        $data['about_us_img']=mysqli_real_escape_string(static::$db,$data['about_us_img']);
        $data['about_us_id']=mysqli_real_escape_string(static::$db,$data['about_us_id']);
        $data['about_us_title_en']=mysqli_real_escape_string(static::$db,$data['about_us_title_en']);
        $data['about_us_sub_title_en']=mysqli_real_escape_string(static::$db,$data['about_us_sub_title_en']);
        $data['about_us_title_th']=mysqli_real_escape_string(static::$db,$data['about_us_title_th']);
        $data['about_us_sub_title_th']=mysqli_real_escape_string(static::$db,$data['about_us_sub_title_th']);

        $sql = "UPDATE `tb_about_us` 
        SET `about_us_title_en` = '".$data['about_us_title_en']."', 
        `about_us_sub_title_en` = '".$data['about_us_sub_title_en']."',
        `about_us_title_th` = '".$data['about_us_title_th']."', 
        `about_us_sub_title_th` = '".$data['about_us_sub_title_th']."'
        WHERE `tb_about_us`.`about_us_id` = '$about_us_id'
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

    function editRoomImg($about_us_id,$data = []) {
        $data['about_us_img']=mysqli_real_escape_string(static::$db,$data['about_us_img']);
        $data['about_us_id']=mysqli_real_escape_string(static::$db,$data['about_us_id']);
        $data['about_us_title_en']=mysqli_real_escape_string(static::$db,$data['about_us_title_en']);
        $data['about_us_sub_title_en']=mysqli_real_escape_string(static::$db,$data['about_us_sub_title_en']);
        $data['about_us_title_th']=mysqli_real_escape_string(static::$db,$data['about_us_title_th']);
        $data['about_us_sub_title_th']=mysqli_real_escape_string(static::$db,$data['about_us_sub_title_th']);

        $sql = "UPDATE `tb_about_us` 
        SET `about_us_img` = '".$data['about_us_img']."', 
        `about_us_title_en` = '".$data['about_us_title_en']."', 
        `about_us_sub_title_en` = '".$data['about_us_sub_title_en']."',
        `about_us_title_th` = '".$data['about_us_title_th']."', 
        `about_us_sub_title_th` = '".$data['about_us_sub_title_th']."'
        WHERE `tb_about_us`.`about_us_id` = '$about_us_id'
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