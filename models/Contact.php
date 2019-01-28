<?php
require_once("BaseModel.php");

class Contact extends BaseModel{
    
    function __construct(){
        if(!static::$db){
            static::$db = mysqli_connect($this->host, $this->username, $this->password, $this->db_name);
            mysqli_set_charset(static::$db,"utf8");
        }
    }

    function getContact() {
        $sql = " SELECT *
        FROM `tb_contact`
        WHERE 1
        ORDER BY tb_contact.contact_id
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

    // function addContact($data = []) {
    //     $data['contact_name']=mysqli_real_escape_string(static::$db,$data['contact_name']);
    //     $data['contact_type_id']=mysqli_real_escape_string(static::$db,$data['contact_type_id']);
    //     $data['contact_img']=mysqli_real_escape_string(static::$db,$data['contact_img']);

    //     $sql = "INSERT INTO `tb_contact`(
    //         `contact_id`, 
    //         `contact_name`, 
    //         `contact_img`, 
    //         `contact_type_id`) 
    //         VALUES (
    //             NULL, 
    //             '".$data['contact_name']."', 
    //             '".$data['contact_img']."' ,
    //             '".$data['`contact_type_id`,']."'
    //             )
        
        
    //     ";
    //     echo "<pre>";
    //     print_r( $sql);
    //     echo "</pre>";

    //     if (mysqli_query(static::$db,$sql, MYSQLI_USE_RESULT)) {
    //         return 1;
    //     }else {
    //         return 0;
    //     }
    // }

}
?>