<div class="container" style="">

    <div class="text-center" style=" padding-bottom:8%">
        <h1>
            <span>
                CONTACT
            </span>
            <span style="color:#f47322; ">
                US
            </span>
        </h1>
    </div>

    <div class="row">

        <div class="col-lg-4">
            <img src=" <?PHP
                        echo $pathImgContact_us . $contact_us[0]['contact_us_img'];
                        ?>"
                style=" padding-bottom:8%"
                class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="">
        </div>

        <div class="col-lg-8" style="padding-bottom:8%;">
            <h4 class="font-weight-light">
                <span>
                    <?PHP echo $contact_us[0]['contact_us_title']; ?>
                </span>
            </h4>
            <p class="font-weight-light">
                <span>
                    <?PHP echo $contact_us[0]['contact_us_sub_title']; ?>
                </span>
            </p>
            <hr>
            <div class="container">
                <div class="row">
                    <div class="col-sm-auto">
                        <div class="row">
                            <div class="col-1">
                                <i class="fab fa-facebook-square" style="font-size:30px"></i> &nbsp;
                            </div>
                            <div class="col-10">
                                <a href="<?PHP echo $contact_us[0]['contact_us_facebook']; ?>">
                                    <p class="font-weight-light">
                                        <?PHP echo $contact_us[0]['contact_us_facebook']; ?>
                                    </p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-auto">
                        <div class="container">
                            <div class="row">
                                <i class="fas fa-phone-volume" style="font-size:30px"></i>&nbsp;
                                <a href="tel:<?PHP echo $contact_us[0]['contact_us_tel']; ?>">
                                    <p class="font-weight-light">
                                        <?PHP echo $contact_us[0]['contact_us_tel']; ?>
                                    </p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <p class="font-weight-light"><u>รายละเอีย</u>ดการติดต่อ</p>
            <div class="container">

                <div class="row">
                    <div class="col-1">
                        <i class="fas fa-map-marker" style="font-size:40px"></i>
                    </div>
                    <div class="col-auto">
                        <p class="font-weight-light"> &nbsp;
                            <?PHP echo $contact_us[0]['contact_us_address']; ?><br>
                            <?PHP echo $contact_us[0]['contact_us_address_1']; ?>
                            <?PHP echo $contact_us[0]['contact_us_address_2']; ?>
                            <?PHP echo $contact_us[0]['contact_us_address_3']; ?>
                            <?PHP echo $contact_us[0]['contact_us_address_4']; ?>
                        </p>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-auto">
                        <i class="fas fa-phone-volume" style="font-size:40px"></i>
                    </div>
                    <div class="col-auto">
                        <p class="font-weight-light"> &nbsp;
                            <?PHP echo $contact_us[0]['contact_us_fax']; ?>
                        </p>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-auto">
                        <i class="fas fa-envelope" style="font-size:40px"></i>
                    </div>
                    <div class="col-auto">
                        <a href="mailto:<?PHP echo $contact_us[0]['contact_us_email']; ?>">
                            <p class="font-weight-light"> &nbsp;
                                <?PHP echo $contact_us[0]['contact_us_email']; ?>
                            </p>
                        </a>
                    </div>
                </div>
                <br>
                <div class="container">
                    <div class="col">
                        <a href="" class="btn btn-primary text-uppercase js-scroll-trigger"
                            style="padding-left:8%; padding-right:8%"> ติดต่อเรา </a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="p-3 mb-2 bg-light text-dark">
        <div class="row">
            <div class="col-md-6">

                <h4>
                    <p class="font-weight-light">
                        <u>การเดินทางมา</u>ยังโรงแรม
                    </p>
                </h4>
                <div class="dropdown" style="padding-left:10%;padding-bottom:3%;">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        ดาวโหลดแผนที่
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Action</a>
                    </div>
                </div>


                <div id="accordion">
                    <div class="card">
                        <div class="card-header">
                            <a class="card-link" data-toggle="collapse" href="#collapseOne">
                                <?PHP echo $contact_us[0]['contact_us_carry_title']; ?>
                            </a>
                        </div>
                        <div id="collapseOne" class="collapse show bg-light text-dark" data-parent="#accordion">
                            <div class="card-body">
                                <?PHP echo $contact_us[0]['contact_us_carry_detail']; ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
                            <?PHP echo $contact_us[0]['contact_us_taxi_title']; ?>
                        </a>
                    </div>
                    <div id="collapseTwo" class="collapse  bg-light text-dark" data-parent="#accordion">
                        <div class="card-body">
                            <?PHP echo $contact_us[0]['contact_us_taxi_detail']; ?>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
                            <?PHP echo $contact_us[0]['contact_us_car_titel']; ?>
                        </a>
                    </div>
                    <div id="collapseThree" class="collapse  bg-light text-dark" data-parent="#accordion">
                        <div class="card-body">
                            <?PHP echo $contact_us[0]['contact_us_car_detail']; ?>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-6">
                <div style="">
                    <fieldset class="gllpLatlonPicker" style="margin: -14; height: 130%;">
                        <div class="gllpMap" style="width: 100%; height: 80%;">Google Maps</div>
                        <input type="text" class="gllpLatitude form-control" name="location_lat" value="14.9764223"
                            hidden />
                        <input type="text" class="gllpLongitude form-control" name="location_long" value="102.0701143"
                            hidden />
                        <input type="hidden" class="gllpZoom" value="14" />
                    </fieldset>
                </div>
            </div>
        </div>
    </div>


    <div class="container" style="padding-top:8%">
        <div class="row">

            <div class="col-md-6">
                <h4>
                    <p class="font-weight-light">
                        <u>พูดคุยกั</u>บเรา
                    </p>
                </h4>
                <p class="font-weight-light">
                    <?PHP echo $contact_head[0]['contact_head_detail']; ?>
                </p>
            </div>
            <div class="col-md-6">
                <form id="form_target" role="form" method="post" action="contact_us.php?&action=add">
                    <div class="row">
                        <div class="col-lg-6">
                            <label>ชื่อเรื่อง <font color="#F00"><b>*</b></font></label>
                            <select class="form-control  custom-select" id="contact_title_id" name="contact_title_id">
                                <?PHP for ($i=0; $i < count($contact_title); $i++) { ?>
                                <option selected value="<?PHP echo $contact_title[$i]['contact_title_id'];   ?>">
                                    <?PHP echo $contact_title[$i]['contact_title_name'];   ?>
                                </option>
                                <?PHP } ?>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <label>ชื่อ <font color="#F00"><b>*</b></font></label>
                            <input id="contact_firstname" name="contact_firstname" class="form-control"
                                autocomplete="off">
                        </div>
                        <div class="col-lg-6">
                            <label>นามสกุล <font color="#F00"><b>*</b></font></label>
                            <input id="contact_lastname" name="contact_lastname" class="form-control"
                                autocomplete="off">
                        </div>
                        <div class="col-lg-6">
                            <label>Email <font color="#F00"><b>*</b></font></label>
                            <input id="contact_email" name="contact_email" class="form-control" autocomplete="off">
                        </div>
                        <div class="col-lg-6">
                            <label>หมายลขโทรศัพท์ <font color="#F00"><b>*</b></font></label>
                            <input id="contact_tel" name="contact_tel" class="form-control" autocomplete="off">
                        </div>
                        <div class="col-lg-6">
                            <label>ประเทศ <font color="#F00"><b>*</b></font></label>
                            <select class="form-control  custom-select" id="contact_country" name="contact_country">
                                <option value="Afghanistan">Afghanistan</option>
                                <option value="Albania">Albania</option>
                                <option value="Algeria">Algeria</option>
                                <option value="American Samoa">American Samoa</option>
                                <option value="Andorra">Andorra</option>
                                <option value="Angola">Angola</option>
                                <option value="Anguilla">Anguilla</option>
                                <option value="Antarctica">Antarctica</option>
                                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                <option value="Argentina">Argentina</option>
                                <option value="Armenia">Armenia</option>
                                <option value="Aruba">Aruba</option>
                                <option value="Australia">Australia</option>
                                <option value="Austria">Austria</option>
                                <option value="Azerbaijan">Azerbaijan</option>
                                <option value="Bahamas">Bahamas</option>
                                <option value="Bahrain">Bahrain</option>
                                <option value="Bangladesh">Bangladesh</option>
                                <option value="Barbados">Barbados</option>
                                <option value="Belarus">Belarus</option>
                                <option value="Belgium">Belgium</option>
                                <option value="Belize">Belize</option>
                                <option value="Benin">Benin</option>
                                <option value="Bermuda">Bermuda</option>
                                <option value="Bhutan">Bhutan</option>
                                <option value="Bolivia">Bolivia</option>
                                <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                <option value="Botswana">Botswana</option>
                                <option value="Bouvet Island">Bouvet Island</option>
                                <option value="Brazil">Brazil</option>
                                <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                <option value="Brunei Darussalam">Brunei Darussalam</option>
                                <option value="Bulgaria">Bulgaria</option>
                                <option value="Burkina Faso">Burkina Faso</option>
                                <option value="Burundi">Burundi</option>
                                <option value="Cambodia">Cambodia</option>
                                <option value="Cameroon">Cameroon</option>
                                <option value="Canada">Canada</option>
                                <option value="Cape Verde">Cape Verde</option>
                                <option value="Cayman Islands">Cayman Islands</option>
                                <option value="Central African Republic">Central African Republic</option>
                                <option value="Chad">Chad</option>
                                <option value="Chile">Chile</option>
                                <option value="China">China</option>
                                <option value="Christmas Island">Christmas Island</option>
                                <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                <option value="Colombia">Colombia</option>
                                <option value="Comoros">Comoros</option>
                                <option value="Congo">Congo</option>
                                <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of
                                    The</option>
                                <option value="Cook Islands">Cook Islands</option>
                                <option value="Costa Rica">Costa Rica</option>
                                <option value="Cote D'ivoire">Cote D'ivoire</option>
                                <option value="Croatia">Croatia</option>
                                <option value="Cuba">Cuba</option>
                                <option value="Cyprus">Cyprus</option>
                                <option value="Czech Republic">Czech Republic</option>
                                <option value="Denmark">Denmark</option>
                                <option value="Djibouti">Djibouti</option>
                                <option value="Dominica">Dominica</option>
                                <option value="Dominican Republic">Dominican Republic</option>
                                <option value="Ecuador">Ecuador</option>
                                <option value="Egypt">Egypt</option>
                                <option value="El Salvador">El Salvador</option>
                                <option value="Equatorial Guinea">Equatorial Guinea</option>
                                <option value="Eritrea">Eritrea</option>
                                <option value="Estonia">Estonia</option>
                                <option value="Ethiopia">Ethiopia</option>
                                <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                <option value="Faroe Islands">Faroe Islands</option>
                                <option value="Fiji">Fiji</option>
                                <option value="Finland">Finland</option>
                                <option value="France">France</option>
                                <option value="French Guiana">French Guiana</option>
                                <option value="French Polynesia">French Polynesia</option>
                                <option value="French Southern Territories">French Southern Territories</option>
                                <option value="Gabon">Gabon</option>
                                <option value="Gambia">Gambia</option>
                                <option value="Georgia">Georgia</option>
                                <option value="Germany">Germany</option>
                                <option value="Ghana">Ghana</option>
                                <option value="Gibraltar">Gibraltar</option>
                                <option value="Greece">Greece</option>
                                <option value="Greenland">Greenland</option>
                                <option value="Grenada">Grenada</option>
                                <option value="Guadeloupe">Guadeloupe</option>
                                <option value="Guam">Guam</option>
                                <option value="Guatemala">Guatemala</option>
                                <option value="Guinea">Guinea</option>
                                <option value="Guinea-bissau">Guinea-bissau</option>
                                <option value="Guyana">Guyana</option>
                                <option value="Haiti">Haiti</option>
                                <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands
                                </option>
                                <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                                <option value="Honduras">Honduras</option>
                                <option value="Hong Kong">Hong Kong</option>
                                <option value="Hungary">Hungary</option>
                                <option value="Iceland">Iceland</option>
                                <option value="India">India</option>
                                <option value="Indonesia">Indonesia</option>
                                <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                                <option value="Iraq">Iraq</option>
                                <option value="Ireland">Ireland</option>
                                <option value="Israel">Israel</option>
                                <option value="Italy">Italy</option>
                                <option value="Jamaica">Jamaica</option>
                                <option value="Japan">Japan</option>
                                <option value="Jordan">Jordan</option>
                                <option value="Kazakhstan">Kazakhstan</option>
                                <option value="Kenya">Kenya</option>
                                <option value="Kiribati">Kiribati</option>
                                <option value="Korea, Democratic People's Republic of">Korea, Democratic People's
                                    Republic of</option>
                                <option value="Korea, Republic of">Korea, Republic of</option>
                                <option value="Kuwait">Kuwait</option>
                                <option value="Kyrgyzstan">Kyrgyzstan</option>
                                <option value="Lao People's Democratic Republic">Lao People's Democratic Republic
                                </option>
                                <option value="Latvia">Latvia</option>
                                <option value="Lebanon">Lebanon</option>
                                <option value="Lesotho">Lesotho</option>
                                <option value="Liberia">Liberia</option>
                                <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                <option value="Liechtenstein">Liechtenstein</option>
                                <option value="Lithuania">Lithuania</option>
                                <option value="Luxembourg">Luxembourg</option>
                                <option value="Macao">Macao</option>
                                <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former
                                    Yugoslav Republic of</option>
                                <option value="Madagascar">Madagascar</option>
                                <option value="Malawi">Malawi</option>
                                <option value="Malaysia">Malaysia</option>
                                <option value="Maldives">Maldives</option>
                                <option value="Mali">Mali</option>
                                <option value="Malta">Malta</option>
                                <option value="Marshall Islands">Marshall Islands</option>
                                <option value="Martinique">Martinique</option>
                                <option value="Mauritania">Mauritania</option>
                                <option value="Mauritius">Mauritius</option>
                                <option value="Mayotte">Mayotte</option>
                                <option value="Mexico">Mexico</option>
                                <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                                <option value="Moldova, Republic of">Moldova, Republic of</option>
                                <option value="Monaco">Monaco</option>
                                <option value="Mongolia">Mongolia</option>
                                <option value="Montenegro">Montenegro</option>
                                <option value="Montserrat">Montserrat</option>
                                <option value="Morocco">Morocco</option>
                                <option value="Mozambique">Mozambique</option>
                                <option value="Myanmar">Myanmar</option>
                                <option value="Namibia">Namibia</option>
                                <option value="Nauru">Nauru</option>
                                <option value="Nepal">Nepal</option>
                                <option value="Netherlands">Netherlands</option>
                                <option value="Netherlands Antilles">Netherlands Antilles</option>
                                <option value="New Caledonia">New Caledonia</option>
                                <option value="New Zealand">New Zealand</option>
                                <option value="Nicaragua">Nicaragua</option>
                                <option value="Niger">Niger</option>
                                <option value="Nigeria">Nigeria</option>
                                <option value="Niue">Niue</option>
                                <option value="Norfolk Island">Norfolk Island</option>
                                <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                <option value="Norway">Norway</option>
                                <option value="Oman">Oman</option>
                                <option value="Pakistan">Pakistan</option>
                                <option value="Palau">Palau</option>
                                <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                                <option value="Panama">Panama</option>
                                <option value="Papua New Guinea">Papua New Guinea</option>
                                <option value="Paraguay">Paraguay</option>
                                <option value="Peru">Peru</option>
                                <option value="Philippines">Philippines</option>
                                <option value="Pitcairn">Pitcairn</option>
                                <option value="Poland">Poland</option>
                                <option value="Portugal">Portugal</option>
                                <option value="Puerto Rico">Puerto Rico</option>
                                <option value="Qatar">Qatar</option>
                                <option value="Reunion">Reunion</option>
                                <option value="Romania">Romania</option>
                                <option value="Russian Federation">Russian Federation</option>
                                <option value="Rwanda">Rwanda</option>
                                <option value="Saint Helena">Saint Helena</option>
                                <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                <option value="Saint Lucia">Saint Lucia</option>
                                <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines
                                </option>
                                <option value="Samoa">Samoa</option>
                                <option value="San Marino">San Marino</option>
                                <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                <option value="Saudi Arabia">Saudi Arabia</option>
                                <option value="Senegal">Senegal</option>
                                <option value="Serbia">Serbia</option>
                                <option value="Seychelles">Seychelles</option>
                                <option value="Sierra Leone">Sierra Leone</option>
                                <option value="Singapore">Singapore</option>
                                <option value="Slovakia">Slovakia</option>
                                <option value="Slovenia">Slovenia</option>
                                <option value="Solomon Islands">Solomon Islands</option>
                                <option value="Somalia">Somalia</option>
                                <option value="South Africa">South Africa</option>
                                <option value="South Georgia and The South Sandwich Islands">South Georgia and The South
                                    Sandwich Islands</option>
                                <option value="South Sudan">South Sudan</option>
                                <option value="Spain">Spain</option>
                                <option value="Sri Lanka">Sri Lanka</option>
                                <option value="Sudan">Sudan</option>
                                <option value="Suriname">Suriname</option>
                                <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                <option value="Swaziland">Swaziland</option>
                                <option value="Sweden">Sweden</option>
                                <option value="Switzerland">Switzerland</option>
                                <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                <option value="Taiwan, Republic of China">Taiwan, Republic of China</option>
                                <option value="Tajikistan">Tajikistan</option>
                                <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                                <option selected value="Thailand">Thailand</option>
                                <option value="Timor-leste">Timor-leste</option>
                                <option value="Togo">Togo</option>
                                <option value="Tokelau">Tokelau</option>
                                <option value="Tonga">Tonga</option>
                                <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                <option value="Tunisia">Tunisia</option>
                                <option value="Turkey">Turkey</option>
                                <option value="Turkmenistan">Turkmenistan</option>
                                <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                <option value="Tuvalu">Tuvalu</option>
                                <option value="Uganda">Uganda</option>
                                <option value="Ukraine">Ukraine</option>
                                <option value="United Arab Emirates">United Arab Emirates</option>
                                <option value="United Kingdom">United Kingdom</option>
                                <option value="United States">United States</option>
                                <option value="United States Minor Outlying Islands">United States Minor Outlying
                                    Islands</option>
                                <option value="Uruguay">Uruguay</option>
                                <option value="Uzbekistan">Uzbekistan</option>
                                <option value="Vanuatu">Vanuatu</option>
                                <option value="Venezuela">Venezuela</option>
                                <option value="Viet Nam">Viet Nam</option>
                                <option value="Virgin Islands, British">Virgin Islands, British</option>
                                <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                <option value="Wallis and Futuna">Wallis and Futuna</option>
                                <option value="Western Sahara">Western Sahara</option>
                                <option value="Yemen">Yemen</option>
                                <option value="Zambia">Zambia</option>
                                <option value="Zimbabwe">Zimbabwe</option>
                            </select>
                        </div>
                        <div class="col-lg-6">
                            <label>ประเภทของคำถาม <font color="#F00"><b>*</b></font></label>
                            <select class="form-control  custom-select" id="contact_type_id" name="contact_type_id">
                                <option selected value="0">สำคัญ</option>
                                <option value="1">ด่วน</option>
                                <option value="2">เฉยๆ</option>
                                <option value="3">ปกติ</option>
                            </select>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label> ข้อความ <font color="#F00"><b>*</b></font></label>
                                <textarea class="form-control " id="contact_text" name="contact_text" rows="6">
                                </textarea>
                            </div>
                        </div>
                        <div class="col-lg-12" align="center">

                            <button type="submit" name="" id="" class="btn btn-primary btn-md" btn-block
                                style="width: 150px; text-align: center; margin:0 auto;">ส่ง</button>
                        </div>
                    </div>  
                </form>
            </div>
        </div>
    </div>

</div>



<script src="https://maps-api-ssl.google.com/maps/api/js?key=AIzaSyBPYt_mZGd-2iotzhpiZKw1_GpZ6H9w3vs&sensor=false">
</script>
<script src="template/map/js/jquery-gmaps-latlon-picker.js"></script>