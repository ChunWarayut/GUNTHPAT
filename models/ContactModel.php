<?php
require_once("BaseModel.php");

class Contact extends BaseModel{
    
    function __construct(){
        if(!static::$db){
            static::$db = mysqli_connect($this->host, $this->username, $this->password, $this->db_name);
            mysqli_set_charset(static::$db,"utf8");
        }
    }

    
    function deleteContact($contact_id) {
        $sql = "DELETE 
        FROM `tb_contact` 
        WHERE `tb_contact`.`contact_id` = '$contact_id'
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
    
    function deleteContactType($contact_type_id) {
        $sql = "DELETE 
        FROM `tb_contact_type` 
        WHERE `tb_contact_type`.`contact_type_id` = '$contact_type_id'
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
    
    function deleteContactTitle($contact_title_id) {
        $sql = "DELETE 
        FROM `tb_contact_title` 
        WHERE `tb_contact_title`.`contact_title_id` = '$contact_title_id'
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
    

    function editContact_head($contact_head_id, $contact_head_detail_th, $contact_head_detail_en) {
        $sql = "UPDATE `tb_contact_head` 
        SET 
        `contact_head_detail_th` = '$contact_head_detail_th',
        `contact_head_detail_en` = '$contact_head_detail_en'
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

    function editContactTitle($contact_title_id, $contact_title_name_th, $contact_title_name_en) {
        $sql = "UPDATE `tb_contact_title` 
        SET 
        `contact_title_name_th` = '$contact_title_name_th',
        `contact_title_name_en` = '$contact_title_name_en'
        WHERE `tb_contact_title`.`contact_title_id` = '$contact_title_id'
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

    function editContactType($contact_type_id, $contact_type_name_th, $contact_type_name_en) {
        $sql = "UPDATE `tb_contact_type` 
        SET 
        `contact_type_name_th` = '$contact_type_name_th',
        `contact_type_name_en` = '$contact_type_name_en'
        WHERE `tb_contact_type`.`contact_type_id` = '$contact_type_id'
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

    


    function getContact() {
        $sql = " SELECT * FROM `tb_contact` 
        LEFT JOIN tb_contact_title ON tb_contact.contact_title_id = tb_contact_title.contact_title_id 
        LEFT JOIN tb_country ON tb_contact.contact_country = tb_country.ct_code
        LEFT JOIN tb_contact_type ON tb_contact.contact_type_id = tb_contact_type.contact_type_id
        WHERE 1 ORDER BY tb_contact.contact_id
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

    function getCountry() {
        $sql = " SELECT *
        FROM `tb_country`
        WHERE 1
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
    
    function getContactTitle() {
        $sql = " SELECT *
        FROM `tb_contact_title`
        WHERE 1
        ORDER BY tb_contact_title.contact_title_id
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

    function getContactType() {
        $sql = " SELECT *
        FROM `tb_contact_type`
        WHERE 1
        ORDER BY tb_contact_type.contact_type_id
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
        $data['contact_type_id']=mysqli_real_escape_string(static::$db,$data['contact_type_id']);


        $sql = "INSERT INTO `tb_contact`(`contact_id`, `contact_title_id`, `contact_firstname`, `contact_lastname`, `contact_email`, `contact_tel`, `contact_country`, `contact_type_id`, `contact_text`)
            VALUES (
                NULL, 
                '".$data['contact_title_id']."', 
                '".$data['contact_firstname']."' ,
                '".$data['contact_lastname']."' ,
                '".$data['contact_email']."' ,
                '".$data['contact_tel']."' ,
                '".$data['contact_country']."' ,
                '".$data['contact_type_id']."' ,
                '".$data['contact_text']."'
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

    function insertContactTitle($contact_title_name_th, $contact_title_name_en) {

        $sql = "INSERT INTO `tb_contact_title`(
            `contact_title_id`, 
            `contact_title_name_th`,
            `contact_title_name_en`
        
        ) VALUES (NULL,'$contact_title_name_th', '$contact_title_name_en')
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

    function insertContactType($contact_type_name_th, $contact_type_name_en) {

        $sql = "INSERT INTO `tb_contact_type`(`contact_type_id`, 
        `contact_type_name_th`,
        `contact_type_name_en`
        ) VALUES (NULL,'$contact_type_name_th', '$contact_type_name_en')
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