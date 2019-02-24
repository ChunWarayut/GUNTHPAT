<?PHP 
$menu = "room";
require_once('view/menu.inc.php');
$path = "view/contact_us/";


$pathImgContact_us = "img_upload/contact_us/";
require_once('models/Contact_usModel.php');
$contact_us_model = new Contact_us;
require_once('models/ContactModel.php');
$contact_model = new Contact;
$contact_us = $contact_us_model -> getContact_us() ;
$contact_title = $contact_model -> getContactTitle() ;
$country = $contact_model -> getCountry() ;
$contact_type = $contact_model -> getContactType() ;
$countryTHA == 'THA';
// echo"<pre>";
// print_r($contact_type);
// echo"</pre>";

require_once('models/ContactModel.php');
$contact_model = new Contact;
$contact = $contact_model -> getContact();
$contact_head = $contact_model -> getContact_head();

// print_r($contact_head);
if (isset($_GET['action']) == "add"):

    if(isset($_POST['contact_title_id'])){
        $check = true;
        $data = [];
        $data['contact_id'] = trim($_POST['contact_id']);
        $data['contact_title_id'] = trim($_POST['contact_title_id']);
        $data['contact_firstname'] = trim($_POST['contact_firstname']);
        $data['contact_lastname'] = trim($_POST['contact_lastname']);
        $data['contact_email'] = trim($_POST['contact_email']);
        $data['contact_tel'] = trim($_POST['contact_tel']);
        $data['contact_country'] = trim($_POST['contact_country']);
        $data['contact_text'] = trim($_POST['contact_text']);
        $data['contact_type_id'] = trim($_POST['contact_type_id']);

        if($check == false){
            ?>  <script>  window.history.back(); </script>  <?php
        }else{
            $user = $contact_model->addContact($data);

            if($user){
                ?> 
                <script>
                    // window.location="contact_us.php?"
                </script> 
                <?php
            }else{
                ?>  
                <script> 
                    // window.history.back(); 
                </script> <?php
            }
        }
    }else{
        ?> <script> 
            // window.history.back(); 
        </script> <?php
    }
endif;




require_once($path . 'view.inc.php');
?>
