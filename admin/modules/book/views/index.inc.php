<?php
require_once('../models/Book.php');

$path = "modules/book/views/";

$book_model = new BookModel;

$book_id = isset($_GET['id']);

$book = $book_model ->getBook();
    
print_r($book);
if(!isset($_GET['action'])){
    $book = $book_model ->getBook();
    
    print_r($book_id);
    require_once($path.'view.inc.php');
}else if ($_GET['action'] == 'delete'){
    $book = $book_model->deleteBook($book_id);
    ?>
<script>
window.location = "index.php?content=book"
</script>
<?php



}else{  
    require_once($path.'view.inc.php');
}
?>