<?php
require_once("BaseModel.php");

class Contact extends BaseModel{
    
    function __construct(){
        if(!static::$db){
            static::$db = mysqli_connect($this->host, $this->username, $this->password, $this->db_name);
            mysqli_set_charset(static::$db,"utf8");
        }
    }

    
    function getContact_head() {
        $sql = " SELECT *
        FROM `tb_contact_head`
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
    

    function editContact_head($contact_head_id, $contact_head_detail) {
        $sql = "UPDATE `tb_contact_head` 
        SET 
        `contact_head_detail` = '$contact_head_detail'
        WHERE `tb_contact_head`.`contact_head_id` = '$contact_head_id'
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

    function addContact($data = []) {
        $data['contact_title_id']=mysqli_real_escape_string(static::$db,$data['contact_title_id']);
        $data['contact_firstname']=mysqli_real_escape_string(static::$db,$data['contact_firstname']);
        $data['contact_lastname']=mysqli_real_escape_string(static::$db,$data['contact_lastname']);
        $data['contact_email']=mysqli_real_escape_string(static::$db,$data['contact_email']);
        $data['contact_tel']=mysqli_real_escape_string(static::$db,$data['contact_tel']);
        $data['contact_country']=mysqli_real_escape_string(static::$db,$data['contact_country']);
        $data['contact_text']=mysqli_real_escape_string(static::$db,$data['contact_text']);

        $sql = "INSERT INTO `tb_contact`(
            `contact_id`, 
            `contact_title_id`, 
            `contact_firstname`, 
            `contact_lastname`, 
            `contact_email`, 
            `contact_tel`, 
            `contact_country`, 
            `contact_text`) 
            VALUES (
                NULL, 
                '".$data['contact_title_id']."', 
                '".$data['contact_firstname']."' ,
                '".$data['contact_lastname']."' ,
                '".$data['contact_email']."' ,
                '".$data['contact_tel']."' ,
                '".$data['contact_country']."' ,
                '".$data['`contact_text`,']."'
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