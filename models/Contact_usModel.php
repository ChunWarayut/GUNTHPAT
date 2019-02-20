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
        if ($result = mysqli_query(static::$db,$sql, MYSQLI_USE_RESULT)) {
            $data = [];
            while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                $data[] = $row;
            }
            $result->close();
            return $data;
        }
    }

    function getContact_usByID($id){
        $sql = " SELECT * 
        FROM tb_contact_us
        WHERE contact_us_id = '$id' 
        ";

        if ($result = mysqli_query(static::$db,$sql, MYSQLI_USE_RESULT)) {
            $data;
            while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                $data = $row;
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
      
        $data['contact_us_title_th'] =mysqli_real_escape_string(static::$db,$data['contact_us_title_th']);
        $data['contact_us_sub_title_th'] =mysqli_real_escape_string(static::$db,$data['contact_us_sub_title_th']);
        $data['contact_us_title_en'] =mysqli_real_escape_string(static::$db,$data['contact_us_title_en']);
        $data['contact_us_sub_title_en'] =mysqli_real_escape_string(static::$db,$data['contact_us_sub_title_en']);
        $data['contact_us_facebook'] =mysqli_real_escape_string(static::$db,$data['contact_us_facebook']);
        $data['contact_us_tel'] =mysqli_real_escape_string(static::$db,$data['contact_us_tel']);
        $data['contact_us_address_th'] =mysqli_real_escape_string(static::$db,$data['contact_us_address_th']);
        $data['contact_us_address_1_th'] =mysqli_real_escape_string(static::$db,$data['contact_us_address_1_th']);
        $data['contact_us_address_2_th'] =mysqli_real_escape_string(static::$db,$data['contact_us_address_2_th']);
        $data['contact_us_address_3_th'] =mysqli_real_escape_string(static::$db,$data['contact_us_address_3_th']);
        $data['contact_us_address_en'] =mysqli_real_escape_string(static::$db,$data['contact_us_address_en']);
        $data['contact_us_address_1_en'] =mysqli_real_escape_string(static::$db,$data['contact_us_address_1_en']);
        $data['contact_us_address_2_en'] =mysqli_real_escape_string(static::$db,$data['contact_us_address_2_en']);
        $data['contact_us_address_3_en'] =mysqli_real_escape_string(static::$db,$data['contact_us_address_3_en']);
        $data['contact_us_address_4'] =mysqli_real_escape_string(static::$db,$data['contact_us_address_4']);
        $data['contact_us_fax'] =mysqli_real_escape_string(static::$db,$data['contact_us_fax']);
        $data['contact_us_email'] =mysqli_real_escape_string(static::$db,$data['contact_us_email']);
        $data['contact_us_carry_title_th'] =mysqli_real_escape_string(static::$db,$data['contact_us_carry_title_th']);
        $data['contact_us_carry_detail_th'] =mysqli_real_escape_string(static::$db,$data['contact_us_carry_detail_th']);
        $data['contact_us_taxi_title_th'] =mysqli_real_escape_string(static::$db,$data['contact_us_taxi_title_th']);
        $data['contact_us_taxi_detail_th'] =mysqli_real_escape_string(static::$db,$data['contact_us_taxi_detail_th']);
        $data['contact_us_car_titel_th'] =mysqli_real_escape_string(static::$db,$data['contact_us_car_titel_th']);
        $data['contact_us_car_detail_th'] =mysqli_real_escape_string(static::$db,$data['contact_us_car_detail_th']);
        $data['contact_us_carry_title_en'] =mysqli_real_escape_string(static::$db,$data['contact_us_carry_title_en']);
        $data['contact_us_carry_detail_en'] =mysqli_real_escape_string(static::$db,$data['contact_us_carry_detail_en']);
        $data['contact_us_taxi_title_en'] =mysqli_real_escape_string(static::$db,$data['contact_us_taxi_title_en']);
        $data['contact_us_taxi_detail_en'] =mysqli_real_escape_string(static::$db,$data['contact_us_taxi_detail_en']);
        $data['contact_us_car_titel_en'] =mysqli_real_escape_string(static::$db,$data['contact_us_car_titel_en']);
        $data['contact_us_car_detail_en'] =mysqli_real_escape_string(static::$db,$data['contact_us_car_detail_en']);
        $data['contact_us_map'] =mysqli_real_escape_string(static::$db,$data['contact_us_map']);
        $data['contact_us_map_latitude'] =mysqli_real_escape_string(static::$db,$data['contact_us_map_latitude']);
        $data['contact_us_map_longitude'] =mysqli_real_escape_string(static::$db,$data['contact_us_map_longitude']);
        $data['contact_us_img']=mysqli_real_escape_string(static::$db,$data['contact_us_img']);

        $sql = "UPDATE `tb_contact_us` 
        SET
         `contact_us_title_th` = '".$data['contact_us_title_th']."', 
         `contact_us_title_en` = '".$data['contact_us_title_en']."', 
         `contact_us_sub_title_th` = '".$data['contact_us_sub_title_th']."', 
         `contact_us_sub_title_en` = '".$data['contact_us_sub_title_en']."', 
         `contact_us_facebook` = '".$data['contact_us_facebook']."', 
         `contact_us_tel` = '".$data['contact_us_tel']."', 
         `contact_us_address_th` = '".$data['contact_us_address_th']."', 
         `contact_us_address_en` = '".$data['contact_us_address_en']."', 
         `contact_us_address_1_th` = '".$data['contact_us_address_1_th']."', 
         `contact_us_address_1_en` = '".$data['contact_us_address_1_en']."', 
         `contact_us_address_2_th` = '".$data['contact_us_address_2_th']."', 
         `contact_us_address_2_en` = '".$data['contact_us_address_2_en']."', 
         `contact_us_address_3_th` = '".$data['contact_us_address_3_th']."',  
         `contact_us_address_3_en` = '".$data['contact_us_address_3_en']."',  
         `contact_us_address_4` = '".$data['contact_us_address_4']."',  
         `contact_us_fax` = '".$data['contact_us_fax']."', 
         `contact_us_email` = '".$data['contact_us_email']."', 
         `contact_us_carry_title_th` = '".$data['contact_us_carry_title_th']."', 
         `contact_us_carry_title_en` = '".$data['contact_us_carry_title_en']."', 
         `contact_us_carry_detail_th` = '".$data['contact_us_carry_detail_th']."', 
         `contact_us_carry_detail_en` = '".$data['contact_us_carry_detail_en']."', 
         `contact_us_taxi_title_th` = '".$data['contact_us_taxi_title_th']."', 
         `contact_us_taxi_title_en` = '".$data['contact_us_taxi_title_en']."', 
         `contact_us_taxi_detail_th` = '".$data['contact_us_taxi_detail_th']."', 
         `contact_us_taxi_detail_en` = '".$data['contact_us_taxi_detail_en']."', 
         `contact_us_car_titel_th` = '".$data['contact_us_car_titel_th']."', 
         `contact_us_car_titel_en` = '".$data['contact_us_car_titel_en']."', 
         `contact_us_car_detail_th` = '".$data['contact_us_car_detail_th']."', 
         `contact_us_car_detail_en` = '".$data['contact_us_car_detail_en']."', 
         `contact_us_map` = '".$data['contact_us_map']."',
         `contact_us_map_latitude` = '".$data['contact_us_map_latitude']."',
         `contact_us_map_longitude` = '".$data['contact_us_map_longitude']."',
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


}
?>