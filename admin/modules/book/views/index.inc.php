<?php
require_once('../models/BookModel.php');

$path = "modules/book/views/";

$book_model = new BookModel;

$book_id = $_GET['id'];

$book = $book_model ->getBook();
    
// print_r($book);
if(!isset($_GET['action'])){
    $book = $book_model ->getBook();
    
    print_r($book_id);
    require_once($path.'view.inc.php');


} else if( $_GET['action'] == "recommened") {
      
    $result = $book_model-> editBookRecommened($book_id, $_GET['recommened']);        

?>
<script>
window.location = "index.php?content=book"
</script>
<?PHP



} else if( $_GET['action'] == "delete") {
        
    $target_file = $target_dir . $_POST['book_img_o'];
    if (file_exists($target_file)) {
        unlink($target_file);
    }
    $result = $book_model-> deleteBook($_GET['id']);
    require_once($path.'view.inc.php');
    ?>
<script>
window.location = "index.php?content=book"
</script>
<?PHP


}else{  
    require_once($path.'view.inc.php');
}
?>