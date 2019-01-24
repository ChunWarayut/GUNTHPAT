<?php
date_default_timezone_set("Asia/Bangkok");
require_once('../models/Contact_us.php');

$path = "modules/contact_us/views/";
$img_path = "../img_upload/contact_us/";

$contact_us_model = new Contact_us;
$contact_us = $contact_us_model -> getContact_us();

// echo "<pre>";
// print_r($contact_us);
// echo "</pre>";

// echo "<pre>";
// print_r($);
// echo "</pre>";


$type = $_GET['type'];
$id = $_GET['id'];
// ECHO "<PRE>";
// print_r( $Contact_us);
// ECHO "</PRE>";

    if( !isset($_GET['action']) ) {
        require_once($path.'view.inc.php');
    } else if( $_GET['action'] == "delete") {
        $result = $contact_us_model-> deleteContact_us($id);
        require_once($path.'view.inc.php');
        ?>
<script>
    window.location = "index.php?content=contact_us"
</script>
<?PHP
    } else if( $_GET['action'] == "insert") {
    if(isset($_POST['contact_us_sub_title'])){
        $check = true;
        $data = [];
        $data['contact_us_title'] = $_POST['contact_us_title'];
        $data['contact_us_sub_title'] = $_POST['contact_us_sub_title'];
        $data['contact_us_facebook'] = $_POST['contact_us_facebook'];
        $data['contact_us_tel'] = $_POST['contact_us_tel'];
        $data['contact_us_address'] = $_POST['contact_us_address'];
        $data['contact_us_fax'] = $_POST['contact_us_fax'];
        $data['contact_us_email'] = $_POST['contact_us_email'];
        $data['contact_us_carry_title'] = $_POST['contact_us_carry_title'];
        $data['contact_us_carry_detail'] = $_POST['contact_us_carry_detail'];
        $data['contact_us_taxi_title'] = $_POST['contact_us_taxi_title'];
        $data['contact_us_taxi_detail'] = $_POST['contact_us_taxi_detail'];
        $data['contact_us_car_titel'] = $_POST['contact_us_car_titel'];
        $data['contact_us_car_detail'] = $_POST['contact_us_car_detail'];
        $data['contact_us_map'] = $_POST['contact_us_map'];


        if($check == false){
           
            ?>
<script>
    alert('<?php echo $error_msg; ?>');
    window.history.back();
</script>
<?php
          
        }else{
           
            $result = $contact_us_model-> addContact_us($data);
           
            if($result){
                ?>
<script>
    window.location = "index.php?content=contact_us"
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
    
    } else if( $_GET['action'] == "edit") {
               
    if(isset($_POST['contact_us_id'])){
        $check = true;
        $data = [];
        $data['contact_us_title'] = $_POST['contact_us_title'];
        $data['contact_us_sub_title'] = $_POST['contact_us_sub_title'];
        $data['contact_us_facebook'] = $_POST['contact_us_facebook'];
        $data['contact_us_tel'] = $_POST['contact_us_tel'];
        $data['contact_us_address'] = $_POST['contact_us_address'];
        $data['contact_us_fax'] = $_POST['contact_us_fax'];
        $data['contact_us_email'] = $_POST['contact_us_email'];
        $data['contact_us_carry_title'] = $_POST['contact_us_carry_title'];
        $data['contact_us_carry_detail'] = $_POST['contact_us_carry_detail'];
        $data['contact_us_taxi_title'] = $_POST['contact_us_taxi_title'];
        $data['contact_us_taxi_detail'] = $_POST['contact_us_taxi_detail'];
        $data['contact_us_car_titel'] = $_POST['contact_us_car_titel'];
        $data['contact_us_car_detail'] = $_POST['contact_us_car_detail'];
        $data['contact_us_map'] = $_POST['contact_us_map'];

        if($check == false){
           
            ?>
<script>
    alert('<?php echo $error_msg; ?>');
    window.history.back();
</script>
<?php
          
        }else{
           
            $result = $contact_us_model-> editContact_us($_POST['contact_us_id'],$data);
           
            if($result){
                ?>
<script>
    window.location = "index.php?content=contact_us"
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
        require_once($path . 'edit.inc.php');
    }
    
}
?>