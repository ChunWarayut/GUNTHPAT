<style>
.facilities-page-title {
    padding-bottom:8%;
    margin-top:50;
}
.facilities-page-header {
    padding-bottom:8%;
}
.facilities-page-title-img {
    padding-bottom:8%
}
.text-gunthpat {
    color:#f47322; 
}
.contact_us_sub_title{
    color:#000;
}
.contact-address{
    padding-bottom:8%
}
</style>
<div class="container" id="contact_us">

    <div class="text-center facilities-page-title" >
        <h1>
            
                CONTACT
            
            <span class="text-gunthpat" style="">
                US
            </span>
        </h1>
    </div>
</div>
<div class="container" style="">
    <div class="row">

        <div class="col-lg-4">
            <img src=" <?PHP
                        echo $pathImgContact_us . $contact_us[0]['contact_us_img'];
                        ?>"
               
                class="img-fluid facilities-page-title-img" alt="">
        </div>

        <div class="col-lg-8 facilities-page-header" style="">
            <h4>
                
                   <?php if ($lng == TH) {   echo $contact_us[0]['contact_us_title_th']; } else {    echo $contact_us[0]['contact_us_title_en'];   } ?>
                
            </h4>
            <p class="font-weight-light">
                <span class="contact_us_sub_title">
                    <?php if ($lng == TH) {   echo $contact_us[0]['contact_us_sub_title_th']; } else {    echo $contact_us[0]['contact_us_sub_title_en'];   } ?>
                </span>
            </p>
            <hr>
            <div class="container">
                <div class="row">
                    <div class="col-sm-auto">
                        <div class="row">
                            <div class="col-1">
                                <i class="fab fa-facebook-square" style="font-size:20px"></i> &nbsp;
                            </div>
                            <div class="col-10">
                                <span class="text2">
                                    <a href="<?PHP echo $contact_us[0]['contact_us_facebook']; ?>">
                                        <p class="contact_us_sub_title text-truncate">
                                            <?PHP echo $contact_us[0]['contact_us_facebook']; ?>
                                        </p>
                                    </a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-auto">
                        <div class="container">
                            <div class="row">
                                <i class="fas fa-phone-volume" style="font-size:20px"></i>&nbsp;
                                <span class="text2">
                                    <a href="tel:<?PHP echo $contact_us[0]['contact_us_tel']; ?>">
                                        <p class="contact_us_sub_title">
                                            <?PHP echo $contact_us[0]['contact_us_tel']; ?>
                                        </p>
                                </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <h4 class="font-weight-light;" style="margin-top: 25;">
               
                    รายละเอียดการติดต่อ
                
            </h4>
            <div class="col-2">
                <hr style="border-top: 2px solid #f47322">
            </div>
            <div class="container">

                <div class="row">
                    <div class="col-1">
                        <i class="fas fa-map-marker-alt" style="font-size:20px"></i>
                    </div>
                    <div class="col-auto">
                        <p>
                        <?php if ($lng == TH) {  ?>
                                <?PHP echo $contact_us[0]['contact_us_address_th']; ?><br>
                                <?PHP echo $contact_us[0]['contact_us_address_1_th']; ?>
                                <?PHP echo $contact_us[0]['contact_us_address_2_th']; ?>
                                <?PHP echo $contact_us[0]['contact_us_address_3_th']; ?>
                                <?PHP echo $contact_us[0]['contact_us_address_4']; ?>
                        <?PHP } else {?>

                            <?PHP echo $contact_us[0]['contact_us_address_en']; ?><br>
                                <?PHP echo $contact_us[0]['contact_us_address_1_en']; ?>
                                <?PHP echo $contact_us[0]['contact_us_address_2_en']; ?>
                                <?PHP echo $contact_us[0]['contact_us_address_3_en']; ?>
                                <?PHP echo $contact_us[0]['contact_us_address_4']; ?>

                      <?PHP }?>
                            </a>
                        </p>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-auto">
                        <i class="fas fa-phone-volume" style="font-size:20px"></i>
                    </div>
                    <div class="col-auto">
                        <p class="contact_us_sub_title"> &nbsp;
                            
                                <?PHP echo $contact_us[0]['contact_us_fax']; ?>
                           
                        </p>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-auto">
                        <i class="fas fa-envelope" style="font-size:20px"></i>
                    </div>
                    <div class="col-auto">
                        <a href="mailto:<?PHP echo $contact_us[0]['contact_us_email']; ?>">
                            <p class="contact_us_sub_title"> &nbsp;
                               
                                    <?PHP echo $contact_us[0]['contact_us_email']; ?>
                                
                            </p>
                        </a>
                    </div>
                </div>
                <br>
                <div class="container">
                    <div class="col">
                        <a href="#contact" class="btn btn-orage text-uppercase js-scroll-trigger"
                            style="padding-left:8%; padding-right:8%">
                            
                                ติดต่อเรา
                            </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="p-3 mb-2 bg-light text-dark">
    <div class="row">
        <div class="col-md-6 contact-address">

            <h4>
                <p class="text">
                    การเดินทางมายังโรงแรม
                </p>
            </h4>
            <div class="col-2">
                <hr style="border-top: 2px solid #f47322">
            </div>
            <div class="dropdown" style="padding-left:10%;padding-bottom:3%;">
                <a class="btn btn-secondary dropdown-toggle" href="<?PHP echo $contact_us[0]['contact_us_map']; ?>">
                  
                        
                            ดาวโหลดแผนที่
                         
                </a>
            </div>


            <div id="accordion">
                <div class="card">
                    <div class="card-header">
                        <a class="card-link" data-toggle="collapse" href="#collapseOne">
                            <span class="text">
                                <?PHP  if ($lng == TH) {  echo $contact_us[0]['contact_us_carry_title_th']; } else {  echo $contact_us[0]['contact_us_carry_title_en']; } ?>
                            </span>
                        </a>
                    </div>
                    <div id="collapseOne" class="collapse show bg-light text-dark" data-parent="#accordion">
                        <div class="card-body">
                            
                                <?PHP  if ($lng == TH) {  echo $contact_us[0]['contact_us_carry_detail_th'];} else {   echo $contact_us[0]['contact_us_carry_detail_en'];  } ?>
                            
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
                        <span class="text">
                            <?PHP  if ($lng == TH) {  echo $contact_us[0]['contact_us_taxi_title_th']; } else {  echo $contact_us[0]['contact_us_taxi_title_en']; } ?>
                        </span>
                    </a>
                </div>
                <div id="collapseTwo" class="collapse  bg-light text-dark" data-parent="#accordion">
                    <div class="card-body">
                        
                        <?PHP  if ($lng == TH) {  echo $contact_us[0]['contact_us_taxi_detail_th']; } else {  echo $contact_us[0]['contact_us_taxi_detail_en']; } ?>  
                        
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
                        <span class="text">
                        
                        <?PHP  if ($lng == TH) {  echo $contact_us[0]['contact_us_car_titel_th']; } else {  echo $contact_us[0]['contact_us_car_titel_en']; } ?>  
                        </span>
                    </a>
                </div>
                <div id="collapseThree" class="collapse  bg-light text-dark" data-parent="#accordion">
                    <div class="card-body">
                        
                    <?PHP  if ($lng == TH) {  echo $contact_us[0]['contact_us_car_detail_th']; } else {  echo $contact_us[0]['contact_us_car_detail_en']; } ?>  
                        
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div style="">
                <fieldset class="gllpLatlonPicker" style="margin: -14; height: auto;">
                    <div class="gllpMap" style="width: 100%;  height: 50%;">Google Maps</div>
                    <!-- <div class="gllpMap" style="width: 100%; height: 80%;">Google Maps</div> -->
                    <input type="text" class="gllpLatitude form-control" name="contact_us_map_latitude" value="<?PHP echo $contact_us[0]['contact_us_map_latitude']; ?>"
                        hidden />
                    <input type="text" class="gllpLongitude form-control" name="contact_us_map_longitude" value="<?PHP echo $contact_us[0]['contact_us_map_longitude']; ?>"
                        hidden />
                    <input type="hidden" class="gllpZoom" value="14" />
                </fieldset>
            </div>
        </div>
    </div>
</div>


<div class="container"id="contact" style="padding-top:8%">
    <div class="row">

        <div class="col-md-6">
            <h4>
                <p class="text">
                <?php if ($lng == TH) {  echo  "พูดคุยกับเรา";} else { echo "Talk to us"; }?>
                </p>
            </h4>
            <div class="col-2">
                <hr style="border-top: 2px solid #f47322">
            </div>
            <p class="text">
                <?php if ($lng == TH) {  echo $contact_head[0]['contact_head_detail_th'];  } else{  echo $contact_head[0]['contact_head_detail_en'];  } ?>
            </p>
        </div>
        <div class="col-md-6">
            <form id="form_target" role="form" method="post" action="contact_us.php?&action=add">
                <div class="row">
                    <div class="col-lg-6">
                        <label class="text"><?php if ($lng == TH) {echo "ชื่อเรื่อง";} else { echo "Title";} ?>  <font color="#F00"><b>*</b></font></label>
                        <select class="form-control  custom-select" id="contact_title_id" name="contact_title_id">
                            <?PHP for ($i=0; $i < count($contact_title); $i++) { ?>
                            <option selected value="<?PHP echo $contact_title[$i]['contact_title_id'];   ?>">
                                <?PHP echo $contact_title[$i]['contact_title_name'];   ?>
                            </option>
                            <?PHP } ?>
                        </select>
                    </div>
                </div>
                <div class="row" >
                    <div class="col-lg-6">
                        <label class="text"> <?php if ($lng == TH) {echo "ชื่อ";} else { echo "Firstname";} ?> <font color="#F00"><b>*</b></font></label>
                        <input id="contact_firstname" name="contact_firstname" class="form-control" autocomplete="off">
                    </div>
                    <div class="col-lg-6">
                        <label class="text"><?php if ($lng == TH) {echo "นามสกุล";} else { echo "Lastname";} ?> <font color="#F00"><b>*</b></font></label>
                        <input id="contact_lastname" name="contact_lastname" class="form-control" autocomplete="off">
                    </div>
                    <div class="col-lg-6">
                        <label class="text">Email <font color="#F00"><b>*</b></font></label>
                        <input id="contact_email" name="contact_email" class="form-control" autocomplete="off">
                    </div>
                    <div class="col-lg-6">
                        <label class="text">  <?php if ($lng == TH) {echo "หมายลขโทรศัพท์";} else { echo "Tel";} ?> <font color="#F00"><b>*</b></font></label>
                        <input id="contact_tel" name="contact_tel" class="form-control" autocomplete="off">
                    </div>
                    <div class="col-lg-6">
                        <label class="text">  <?php if ($lng == TH) {echo "ประเทศ";} else { echo "Country";} ?> <font color="#F00"><b>*</b></font></label>
                        <select class="form-control  custom-select" id="contact_country" name="contact_country">
                            <?PHP for ($i=0; $i < count($country); $i++) { 
                                # code...
                            ?>
                            <option value="<?PHP echo $country[$i]['ct_code'];?>">
                                <?PHP if ($lng == TH) {
                                    echo $country[$i]['ct_nameTHA'];
                                }else{
                                    echo $country[$i]['ct_nameENG'];
                                } ?>
                            </option>
                            <?PHP } ?>
                        </select>
                    </div>
                    <div class="col-lg-6">
                        <label class="text"> <?php if ($lng == TH) {echo "ประเภทของคำถาม";}else{ echo "Type";}?><font color="#F00"><b>*</b></font></label>
                        <select class="form-control  custom-select" id="contact_type_id" name="contact_type_id">
                            <?PHP for ($i=0; $i < count($contact_type); $i++) { 
                                # code...
                            ?>
                            <option value="<?PHP echo $contact_type[$i]['contact_type_id'];?>">
                                <?PHP echo $contact_type[$i]['contact_type_name'];?>
                            </option>
                            <?PHP } ?>
                        </select>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="text"> <?php if ($lng == TH) {echo "ข้อความ";} else { echo "Massenger";} ?><font color="#F00"><b>*</b></font></label>
                            <textarea class="form-control " id="contact_text" name="contact_text" rows="6"></textarea>
                        </div>
                    </div>
                    <div class="col-lg-12" align="center">

                        <button type="submit" name="" id="" class="btn btn-orage btn-md" btn-block
                            style="width: 150px; text-align: center; margin:0 auto;">
                            
                            <?php if ($lng == TH) { echo "ส่ง";}else{ echo "send"; }   ?>
                            </button>
                    </div>
                </div>  
            </form>
        </div>
    </div>
</div>





<script src="https://maps-api-ssl.google.com/maps/api/js?key=AIzaSyBPYt_mZGd-2iotzhpiZKw1_GpZ6H9w3vs&sensor=false">
</script>
<script src="template/map/js/jquery-gmaps-latlon-picker.js"></script>