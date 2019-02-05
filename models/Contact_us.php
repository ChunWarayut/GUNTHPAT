<?php
require_once("BaseModel.php");

class Contact_us extends BaseModel{
    
    function __construct(){
        if(!static::$db){
            static::$db = mysqli_connect($this->host, $this->username, $this->password, $this->db_name);
            mysqli_set_charset(static::$db,"utf8");
        }
    }

    function getContact_us() {
        $sql = " SELECT *
        FROM `tb_contact_us`
        WHERE 1
        ORDER BY tb_contact_us.contact_us_id
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

    function deleteContact_us($contact_us_id) {
        $sql = "DELETE 
        FROM `tb_contact_us` 
        WHERE `tb_contact_us`.`contact_us_id` = '$contact_us_id'
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
    
    function editContact_us($contact_us_id,$data = []) {
        $data['contact_us_title']=mysqli_real_escape_string(static::$db,$data['contact_us_title']);
        $data['contact_us_sub_title']=mysqli_real_escape_string(static::$db,$data['contact_us_sub_title']);
        $data['contact_us_facebook']=mysqli_real_escape_string(static::$db,$data['contact_us_facebook']);
        $data['contact_us_tel']=mysqli_real_escape_string(static::$db,$data['contact_us_tel']);
        $data['contact_us_address']=mysqli_real_escape_string(static::$db,$data['contact_us_address']);
        $data['contact_us_address_1']=mysqli_real_escape_string(static::$db,$data['contact_us_address_1']);
        $data['contact_us_address_2']=mysqli_real_escape_string(static::$db,$data['contact_us_address_2']);
        $data['contact_us_address_3']=mysqli_real_escape_string(static::$db,$data['contact_us_address_3']);
        $data['contact_us_address_4']=mysqli_real_escape_string(static::$db,$data['contact_us_address_4']);
        $data['contact_us_fax']=mysqli_real_escape_string(static::$db,$data['contact_us_fax']);
        $data['contact_us_email']=mysqli_real_escape_string(static::$db,$data['contact_us_email']);
        $data['contact_us_carry_title']=mysqli_real_escape_string(static::$db,$data['contact_us_carry_title']);
        $data['contact_us_carry_detail']=mysqli_real_escape_string(static::$db,$data['contact_us_carry_detail']);
        $data['contact_us_taxi_title']=mysqli_real_escape_string(static::$db,$data['contact_us_taxi_title']);
        $data['contact_us_taxi_detail']=mysqli_real_escape_string(static::$db,$data['contact_us_taxi_detail']);
        $data['contact_us_car_titel']=mysqli_real_escape_string(static::$db,$data['contact_us_car_titel']);
        $data['contact_us_car_detail']=mysqli_real_escape_string(static::$db,$data['contact_us_car_detail']);
        $data['contact_us_map']=mysqli_real_escape_string(static::$db,$data['contact_us_map']);
        $data['contact_us_img']=mysqli_real_escape_string(static::$db,$data['contact_us_img']);

        $sql = "UPDATE `tb_contact_us` 
        SET `contact_us_title` = '".$data['contact_us_title']."', 
         `contact_us_sub_title` = '".$data['contact_us_sub_title']."', 
         `contact_us_facebook` = '".$data['contact_us_facebook']."', 
         `contact_us_tel` = '".$data['contact_us_tel']."', 
         `contact_us_address` = '".$data['contact_us_address']."', 
         `contact_us_address_1` = '".$data['contact_us_address_1']."', 
         `contact_us_address_2` = '".$data['contact_us_address_2']."', 
         `contact_us_address_3` = '".$data['contact_us_address_3']."',  
         `contact_us_address_4` = '".$data['contact_us_address_4']."',  
         `contact_us_fax` = '".$data['contact_us_fax']."', 
         `contact_us_email` = '".$data['contact_us_email']."', 
         `contact_us_carry_title` = '".$data['contact_us_carry_title']."', 
         `contact_us_carry_detail` = '".$data['contact_us_carry_detail']."', 
         `contact_us_taxi_title` = '".$data['contact_us_taxi_title']."', 
         `contact_us_taxi_detail` = '".$data['contact_us_taxi_detail']."', 
         `contact_us_car_titel` = '".$data['contact_us_car_titel']."', 
         `contact_us_taxi_detail` = '".$data['contact_us_taxi_detail']."', 
         `contact_us_car_detail` = '".$data['contact_us_car_detail']."', 
         `contact_us_map` = '".$data['contact_us_map']."',
         `contact_us_img` = '".$data['contact_us_img']."'
        WHERE `tb_contact_us`.`contact_us_id` = '$contact_us_id'
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

    function addContact_us($data = []) {
        $data['contact_us_title ']=mysqli_real_escape_string(static::$db,$data['contact_us_title ']);
        $data['contact_us_sub_title']=mysqli_real_escape_string(static::$db,$data['contact_us_sub_title']);
        $data['contact_us_facebook']=mysqli_real_escape_string(static::$db,$data['contact_us_facebook']);
        $data['contact_us_tel']=mysqli_real_escape_string(static::$db,$data['contact_us_tel']);
        $data['contact_us_address']=mysqli_real_escape_string(static::$db,$data['contact_us_address']);
        $data['contact_us_address_1']=mysqli_real_escape_string(static::$db,$data['contact_us_address_1']);
        $data['contact_us_address_2']=mysqli_real_escape_string(static::$db,$data['contact_us_address_2']);
        $data['contact_us_address_3']=mysqli_real_escape_string(static::$db,$data['contact_us_address_3']);
        $data['contact_us_address_4']=mysqli_real_escape_string(static::$db,$data['contact_us_address_4']);
        $data['contact_us_fax']=mysqli_real_escape_string(static::$db,$data['contact_us_fax']);
        $data['contact_us_email']=mysqli_real_escape_string(static::$db,$data['contact_us_email']);
        $data['contact_us_carry_title']=mysqli_real_escape_string(static::$db,$data['contact_us_carry_title']);
        $data['contact_us_carry_detail']=mysqli_real_escape_string(static::$db,$data['contact_us_carry_detail']);
        $data['contact_us_taxi_title']=mysqli_real_escape_string(static::$db,$data['contact_us_taxi_title']);
        $data['contact_us_taxi_detail']=mysqli_real_escape_string(static::$db,$data['contact_us_taxi_detail']);
        $data['contact_us_car_titel']=mysqli_real_escape_string(static::$db,$data['contact_us_car_titel']);
        $data['contact_us_car_detail']=mysqli_real_escape_string(static::$db,$data['contact_us_car_detail']);
        $data['contact_us_map']=mysqli_real_escape_string(static::$db,$data['contact_us_map']);

        $sql = "INSERT INTO `tb_contact_us` (`contact_us_id`, `contact_us_title`, `contact_us_sub_title`, `contact_us_facebook`, `contact_us_tel`, 
        `contact_us_address`, 
        `contact_us_address_1`, 
        `contact_us_address_2`, 
        `contact_us_address_3`, 
        `contact_us_address_4`, 
        `contact_us_fax`, `contact_us_email`, `contact_us_carry_title`, `contact_us_carry_detail`, `contact_us_taxi_title`, `contact_us_taxi_detail`, `contact_us_car_titel`, `contact_us_car_detail`, `contact_us_map`) 
        VALUES (
            NULL, 
            '".$data['contact_us_title']."', 
            '".$data['contact_us_sub_title']."' ,
            '".$data['contact_us_facebook']."' ,
            '".$data['contact_us_tel']."' ,
            '".$data['contact_us_address']."' ,
            '".$data['contact_us_address_1']."' ,
            '".$data['contact_us_address_2']."' ,
            '".$data['contact_us_address_3']."' ,
            '".$data['contact_us_address_4']."' ,
            '".$data['contact_us_fax']."' ,
            '".$data['contact_us_email']."' ,
            '".$data['contact_us_carry_title']."' ,
            '".$data['contact_us_carry_detail']."' ,
            '".$data['contact_us_taxi_title']."' ,
            '".$data['contact_us_taxi_detail']."' ,
            '".$data['contact_us_car_titel']."' ,
            '".$data['contact_us_car_detail']."' ,
            '".$data['contact_us_map']."' 
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