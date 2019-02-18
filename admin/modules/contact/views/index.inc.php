<?php
date_default_timezone_set("Asia/Bangkok");
require_once('../models/ContactModel.php');

$path = "modules/contact/views/";
$img_path = "../img_upload/contact/";

$contact_model = new Contact;
$contact = $contact_model -> getContact();
$contact_head = $contact_model -> getContact_head();
$contact_title = $contact_model -> getContactTitle();
$contact_type = $contact_model -> getContactType();


// echo "<pre>";
// print_r($contact_type);
// echo "</pre>";


$type =($_GET['type']);
$id =($_GET['id']);
// ECHO "<PRE>";
// print_r( $contact);
// ECHO "</PRE>";

$target_dir = "../img_upload/contact/";

    //---------------------ฟังก์ชั่นวันที่------------------------------------
    date_default_timezone_set("Asia/Bangkok");
    $d1=date("d");
    $d2=date("m");
    $d3=date("Y");
    $d4=date("H");
    $d5=date("i");
    $d6=date("s");
    $date="$d1$d2$d3$d4$d5$d6";
    //---------------------------------------------------------------------

if( !isset($_GET['action']) ) {
    require_once($path.'view.inc.php');
} else if( $_GET['action'] == "delete") {
    $result = $contact_model-> deleteContact($id);
    require_once($path.'view.inc.php');
    ?>
<script>
window.location = "index.php?content=contact"
</script>
<?PHP
} else if( $_GET['action'] == "delete_title") {
    $result = $contact_model-> deleteContactTitle($id);
    require_once($path.'view.inc.php');
    ?>
<script>
window.location = "index.php?content=contact"
</script>
<?PHP
} else if( $_GET['action'] == "delete_type") {
    $result = $contact_model-> deleteContactType($id);
    require_once($path.'view.inc.php');
    ?>
<script>
window.location = "index.php?content=contact"
</script>
<?PHP

} else if( $_GET['action'] == "edit_head") {
    $result = $contact_model-> editContact_head(1, $_POST['contact_head_detail_th'], $_POST['contact_head_detail_en']);
    require_once($path.'view.inc.php');
    ?>
<script>
window.location = "index.php?content=contact"
</script>
<?PHP

} else if( $_GET['action'] == "insert_title") {
    // echo $_POST['contact_title_name'];
if(isset($_POST['contact_title_name_th'])){
    $check = true;
    if($check == false){ ?>
<script>
alert('<?php echo $error_msg; ?>');
window.history.back();
</script>
<?php
        
    }else{
        
        $result = $contact_model-> insertContactTitle($_POST['contact_title_name_th'], $_POST['contact_title_name_en']);
        
        if($result){
            ?>
<script>
window.location = "index.php?content=contact"
</script>
<?php
            }else{
                ?>
<script>
window.history.back();
</script>
<?php
            }
        }
    }else{
        require_once($path . 'insert.inc.php');
    }

} else if( $_GET['action'] == "insert_type") {
    // echo $_POST['contact_type_name'];
if(isset($_POST['contact_type_name_th'])){
    $check = true;
    if($check == false){ ?>
<script>
alert('<?php echo $error_msg; ?>');
window.history.back();
</script>
<?php
        
    }else{
        
        $result = $contact_model-> insertContactType($_POST['contact_type_name_th'], $_POST['contact_type_name_en']);
        
        if($result){
            ?>
<script>
window.location = "index.php?content=contact"
</script>
<?php
            }else{
                ?>
<script>
window.history.back();
</script>
<?php
            }
        }
    }else{
        require_once($path . 'insert_type.inc.php');
    }

} else if( $_GET['action'] == "edit_title") {
if(isset($_POST['contact_title_id'])){
    $check = true;
    if($check == false){ ?>
<script>
alert('<?php echo $error_msg; ?>');
window.history.back();
</script>
<?php
    }else{
        $result = $contact_model-> editContactTitle($_POST['contact_title_id'],$_POST['contact_type_name_th'],$_POST['contact_type_name_en']);
        if($result){
            ?>
<script>
window.location = "index.php?content=contact"
</script>
<?php }else{    ?>
<script>
window.history.back();
</script>
<?php  }
    }
    }else{
        require_once($path . 'edit.inc.php');
    }
} else if( $_GET['action'] == "edit_type") {
if(isset($_POST['contact_type_id'])){
    $check = true;
    if($check == false){ ?>
<script>
alert('<?php echo $error_msg; ?>');
window.history.back();
</script>
<?php
    }else{
        $result = $contact_model-> editContactType($_POST['contact_type_id'],$_POST['contact_type_name_th'],$_POST['contact_type_name_en']);
        if($result){
            ?>
<script>
window.location = "index.php?content=contact"
</script>
<?php }else{    ?>
<script>
window.history.back();
</script>
<?php  }
    }
    }else{
        require_once($path . 'edit_type.inc.php');
    }
}
?>