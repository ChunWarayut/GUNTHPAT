<?php
require_once("BaseModel.php");

class BookModel extends BaseModel{
    
    function __construct(){
        if(!static::$db){
            static::$db = mysqli_connect($this->host, $this->username, $this->password, $this->db_name);
            mysqli_set_charset(static::$db,"utf8");
        }
    }

    function getBook() {
        $sql = " SELECT *
        FROM `tb_book`
        WHERE 1
        ORDER BY tb_book.book_id
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

    function deleteBook($book_id) {
        $sql = "DELETE 
        FROM `tb_book` 
        WHERE `tb_book`.`book_id` = '$book_id'
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
    
    function insertBook($data = []) {
        $data['book_firstname ']=mysqli_real_escape_string(static::$db,$data['book_firstname ']);
        $data['book_lastname']=mysqli_real_escape_string(static::$db,$data['book_lastname']);
        $data['book_person']=mysqli_real_escape_string(static::$db,$data['book_person']);
        $data['room_id ']=mysqli_real_escape_string(static::$db,$data['room_id ']);
        $data['book_date_start']=mysqli_real_escape_string(static::$db,$data['book_date_start']);
        $data['book_date_end']=mysqli_real_escape_string(static::$db,$data['book_date_end']);
        $data['book_tel']=mysqli_real_escape_string(static::$db,$data['book_tel']);

        $sql = "INSERT INTO `tb_book`(`book_id`, `book_firstname`, `book_lastname`, `book_person`, `room_id`, `book_date_start`, `book_date_end`, `book_tel`) 
        VALUES (
            NULL, 
            '".$data['book_firstname']."', 
            '".$data['book_lastname']."'  , 
            '".$data['book_person']."'  , 
            '".$data['room_id']."'  , 
            '".$data['book_date_start']."'  , 
            '".$data['book_date_end']."'  , 
            '".$data['book_tel']."'
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