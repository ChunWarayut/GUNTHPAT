<?php
require_once("BaseModel.php");

class Gallery extends BaseModel{
    
    function __construct(){
        if(!static::$db){
            static::$db = mysqli_connect($this->host, $this->username, $this->password, $this->db_name);
            mysqli_set_charset(static::$db,"utf8");
        }
    }

    function getgallery() {
        $sql = " SELECT *
        FROM `tb_gallery`
        LEFT JOIN tb_gallery_type ON tb_gallery.gallery_type_id = tb_gallery_type.gallery_type_id
        WHERE 1
        ORDER BY tb_gallery.gallery_id
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

    function getgalleryby($gallery_type_id) {
        if ($gallery_type_id == null || $gallery_type_id == "") {
            $rid = '1';
        }else {
            $rid = "tb_gallery.gallery_type_id = '$gallery_type_id'" ;
        }
        $sql = " SELECT *
        FROM `tb_gallery`
        LEFT JOIN tb_gallery_type ON tb_gallery.gallery_type_id = tb_gallery_type.gallery_type_id
        WHERE $rid
        ORDER BY tb_gallery.gallery_id
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

    function getgallerybyRoom($room_id) {
        if ($room_id == null || $room_id == "") {
            $rid = '1';
        }else {
            $rid = "tb_gallery.room_id = '$room_id'" ;
        }
        $sql = " SELECT *
        FROM `tb_gallery`
        LEFT JOIN tb_gallery_type ON tb_gallery.gallery_type_id = tb_gallery_type.gallery_type_id
        WHERE $rid
        ORDER BY tb_gallery.gallery_id
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


    
    function getgalleryHead() {
        $sql = " SELECT *
        FROM `tb_gallery_head`
        WHERE 1
        ORDER BY tb_gallery_head.gallery_head_id
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

        
    function editGalleryHead($gallery_head_id, $gallery_head_sub_title_th, $gallery_head_sub_title_en) {
        
        $sql = "UPDATE `tb_gallery_head` SET 
        `gallery_head_sub_title_th` = '$gallery_head_sub_title_th',
        `gallery_head_sub_title_en` = '$gallery_head_sub_title_en'
         WHERE `tb_gallery_head`.`gallery_head_id` = 1 
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
    
    
    function getGalleryRecommened() {
        $sql = " SELECT *
        FROM `tb_gallery`
        LEFT JOIN tb_gallery_type ON tb_gallery.gallery_type_id = tb_gallery_type.gallery_type_id 
        WHERE tb_gallery.gallery_recommened = 1
        ORDER BY tb_gallery.gallery_id
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

    function getGalleryType() {
        $sql = " SELECT * 
        FROM `tb_gallery_type` 
        WHERE 1
        ORDER BY tb_gallery_type.gallery_type_id
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

    function deleteGallery($gallery_id) {
        $sql = "DELETE 
        FROM `tb_gallery` 
        WHERE `tb_gallery`.`gallery_id` = '$gallery_id'
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
    
    
    function editGalleryRecommened($gallery_id,$gallery_recommened) {
      
        $sql = "UPDATE `tb_gallery` SET `gallery_recommened` = '$gallery_recommened' WHERE `tb_gallery`.`gallery_id` = '$gallery_id'
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
    function editGallery($gallery_id,$data = []) {
        $data['room_id']=mysqli_real_escape_string(static::$db,$data['room_id']);
        $data['gallery_name_th']=mysqli_real_escape_string(static::$db,$data['gallery_name_th']);
        $data['gallery_name_en']=mysqli_real_escape_string(static::$db,$data['gallery_name_en']);
        $data['gallery_img']=mysqli_real_escape_string(static::$db,$data['gallery_img']);
        $data['gallery_type_id']=mysqli_real_escape_string(static::$db,$data['gallery_type_id']);

        $sql = "UPDATE `tb_gallery` 
        SET `room_id` = '".$data['room_id']."', 
         `gallery_name_th` = '".$data['gallery_name_th']."', 
         `gallery_name_en` = '".$data['gallery_name_en']."', 
         `gallery_type_id` = '".$data['gallery_type_id']."', 
         `gallery_img` = '".$data['gallery_img']."'
        WHERE `tb_gallery`.`gallery_id` = '$gallery_id'
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

    function addGallery($data = []) {
        $data['room_id']=mysqli_real_escape_string(static::$db,$data['room_id']);
        $data['gallery_name_th']=mysqli_real_escape_string(static::$db,$data['gallery_name_th']);
        $data['gallery_name_en']=mysqli_real_escape_string(static::$db,$data['gallery_name_en']);
        $data['gallery_img']=mysqli_real_escape_string(static::$db,$data['gallery_img']);
        $data['gallery_type_id']=mysqli_real_escape_string(static::$db,$data['gallery_type_id']);

        $sql = "INSERT INTO `tb_gallery`(
            `gallery_id`, 
            `room_id`, 
            `gallery_name_th`, 
            `gallery_name_en`, 
            `gallery_img`, 
            `gallery_type_id`) 
            VALUES (
                NULL, 
                '".$data['room_id']."', 
                '".$data['gallery_name_th']."', 
                '".$data['gallery_name_en']."', 
                '".$data['gallery_img']."' ,
                '".$data['gallery_type_id']."'
                )
        
        
        ";
        // echo "<pre>";
        // print_r( $sql);
        // echo "</pre>";
        // echo $sql;
        if (mysqli_query(static::$db,$sql, MYSQLI_USE_RESULT)) {
            return 1;
        }else {
            return 0;
        }
    }


    
    function insertGalleryType($gallery_type_name_th, $gallery_type_name_en) {

        $sql = "INSERT INTO `tb_gallery_type`(`gallery_type_id`, 
        `gallery_type_name_th`,
        `gallery_type_name_en`
        ) VALUES (NULL,'$gallery_type_name_th', '$gallery_type_name_en')
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


    
    function editGalleryType($gallery_type_id, $gallery_type_name_th, $gallery_type_name_en) {
        $sql = "UPDATE `tb_gallery_type` 
        SET 
        `gallery_type_name_th` = '$gallery_type_name_th',
        `gallery_type_name_en` = '$gallery_type_name_en'
        WHERE `tb_gallery_type`.`gallery_type_id` = '$gallery_type_id'
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


    function deleteGalleryType($gallery_type_id) {
        $sql = "DELETE 
        FROM `tb_gallery_type` 
        WHERE `tb_gallery_type`.`gallery_type_id` = '$gallery_type_id'
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

    
}
?>