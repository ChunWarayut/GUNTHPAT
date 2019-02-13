<?php
require_once("BaseModel.php");

class News extends BaseModel{
    
    function __construct(){
        if(!static::$db){
            static::$db = mysqli_connect($this->host, $this->username, $this->password, $this->db_name);
            mysqli_set_charset(static::$db,"utf8");
        }
    }

    function getNews() {
        $sql = " SELECT *
        FROM `tb_news`
        WHERE 1
        ORDER BY tb_news.news_id
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

    function getNewsById($news_id) {
        $sql = " SELECT *
        FROM `tb_news`
        WHERE tb_news.news_id = '$news_id'
        ORDER BY tb_news.news_id
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

    function deleteNews($news_id) {
        $sql = "DELETE 
        FROM `tb_news` 
        WHERE `tb_news`.`news_id` = '$news_id'
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
    
    function editNews($news_id,$data = []) {
        $data['news_name']=mysqli_real_escape_string(static::$db,$data['news_name']);
        $data['news_detail']=mysqli_real_escape_string(static::$db,$data['news_detail']);
        $data['news_img']=mysqli_real_escape_string(static::$db,$data['news_img']);

        $sql = "UPDATE `tb_news` 
        SET `news_name` = '".$data['news_name']."', 
         `news_detail` = '".$data['news_detail']."',
         `news_img` = '".$data['news_img']."'
        WHERE `tb_news`.`news_id` = '$news_id'
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

    function addNews($data = []) {
        $data['news_name ']=mysqli_real_escape_string(static::$db,$data['news_name ']);
        $data['news_detail']=mysqli_real_escape_string(static::$db,$data['news_detail']);
        $data['news_img']=mysqli_real_escape_string(static::$db,$data['news_img']);

        $sql = "INSERT INTO `tb_news` (`news_id`, `news_name`, `news_detail`, `news_img`, `news_date`) 
        VALUES (
            NULL, 
            '".$data['news_name']."', 
            '".$data['news_detail']."'  , 
            '".$data['news_img']."'  , 
            CURRENT_TIMESTAMP 
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