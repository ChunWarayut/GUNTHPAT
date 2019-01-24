<?php
require_once("BaseModel.php");

class Recommend_rooms extends BaseModel{
    
    function __construct(){
        if(!static::$db){
            static::$db = mysqli_connect($this->host, $this->username, $this->password, $this->db_name);
            mysqli_set_charset(static::$db,"utf8");
        }
    }

    function recommendRoom01() {
        $sql = " SELECT *
        FROM `tb_recommend_rooms`
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
    

    function editRoom($recommend_id,$data = []) {
        $data['recommend_img']=mysqli_real_escape_string(static::$db,$data['recommend_img']);
        $data['recommend_id']=mysqli_real_escape_string(static::$db,$data['recommend_id']);
        $data['recommend_title']=mysqli_real_escape_string(static::$db,$data['recommend_title']);
        $data['recommend_sub_title']=mysqli_real_escape_string(static::$db,$data['recommend_sub_title']);
        $data['recommend_price']=mysqli_real_escape_string(static::$db,$data['recommend_price']);

        $sql = "UPDATE `tb_recommend_rooms` 
        SET `recommend_img` = '".$data['recommend_img']."', 
        `recommend_title` = '".$data['recommend_title']."', 
        `recommend_sub_title` = '".$data['recommend_sub_title']."', 
        `recommend_price` = '".$data['recommend_price']."' 
        WHERE `tb_recommend_rooms`.`recommend_id` = '$recommend_id'
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