<?php
require_once("BaseModel.php");

class PageModel extends BaseModel{

    function __construct(){
        if(!static::$db){
            static::$db = mysqli_connect($this->host, $this->username, $this->password, $this->db_name);
            mysqli_set_charset(static::$db,"utf8");
        }
    }

    function getPageBy(){
        $sql = " SELECT * 
        FROM tb_page 
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

    function getPageByID($id){
        $sql = " SELECT * 
        FROM tb_page 
        WHERE page_id = '$id' 
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

    function updatePageByID($id,$data = []){

        $data['page_title_th']=mysqli_real_escape_string(static::$db,$data['page_title_th']);
        $data['page_title_en']=mysqli_real_escape_string(static::$db,$data['page_title_en']);
        $data['page_tag_th']=mysqli_real_escape_string(static::$db,$data['page_tag_th']);
        $data['page_tag_en']=mysqli_real_escape_string(static::$db,$data['page_tag_en']);
        $data['page_description_th']=mysqli_real_escape_string(static::$db,$data['page_description_th']);
        $data['page_description_en']=mysqli_real_escape_string(static::$db,$data['page_description_en']);
        $sql = " UPDATE tb_page SET 
        page_title_th = '".$data['page_title_th']."',
        page_title_en = '".$data['page_title_en']."',
        page_tag_th = '".$data['page_tag_th']."',
        page_tag_en = '".$data['page_tag_en']."',
        page_description_th = '".$data['page_description_th']."',
        page_description_en = '".$data['page_description_en']."',
        updateby = '".$data['updateby']."',        
        lastupdate = NOW() 
        WHERE page_id = $id "; 

        if (mysqli_query(static::$db,$sql, MYSQLI_USE_RESULT)) {
            return 1;
        }else {
            return 0;
        }
    }

    function insertPage($data=[]){
        $sql = " INSERT INTO tb_page(
        page_title_th,
        page_title_en,
        page_tag_th,
        page_tag_en,
        page_description_th,
        page_description_en,
        addby, 
        adddate
        ) VALUES ('".
        mysqli_real_escape_string(static::$db,$data['page_title_th'])."','".
        mysqli_real_escape_string(static::$db,$data['page_title_en'])."','".
        mysqli_real_escape_string(static::$db,$data['page_tag_th'])."','".
        mysqli_real_escape_string(static::$db,$data['page_tag_en'])."','".
        mysqli_real_escape_string(static::$db,$data['page_description_th'])."','".
        mysqli_real_escape_string(static::$db,$data['page_description_en'])."','".
        $data['addby']."',
        NOW()) ";
        if (mysqli_query(static::$db,$sql, MYSQLI_USE_RESULT)) {
            return mysqli_insert_id(static::$db);
        }else {
            return 0;
        }
    }
}
?>