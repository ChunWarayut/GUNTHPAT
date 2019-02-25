<div class="row">
    <div class="col-lg-6">
        <h1> Contact Us page</h1>
        <h2> ข้อมูล Title</h2>
    </div>
    <div class="col-lg-6">
        <!-- <a href="?content=contact_us&action=delete&id=0" class="btn btn-primary float-right">ลบข้อมูล  </a> -->
        <a href="?content=contact_us&action=edit&id=0" class="btn btn-primary float-right">แก้ไขข้อมูล </a>
        <!-- <a href="?content=contact_us&action=insert" class="btn btn-primary float-right">เพิ่มข้อมูล  </a> -->
    </div>
</div>



<div class="row ">

    <div class="col-lg-2">
        <div class="form-group" align="center">
            <img id="_img" width="400"
                src="<?PHP 
        if ($contact_us[$id]['contact_us_img'] != "" || $contact_us[$id]['contact_us_img'] != null) { 
            echo $img_path . $contact_us[$id]['contact_us_img']; 
            } else {
                echo $img_path . 'default.png';
            }  ?> "
                class="img-fluid" alt="">

        </div>

        <div class="form-group">
            <label> Map Latitude <font color="#F00"><b>*</b></font></label>
            <input readonly id="contact_us_map_latitude" name="contact_us_map_latitude" class="form-control"
                value="<?PHP echo $contact_us[$id]['contact_us_map_latitude'];?>" />
            <p class="help-block">Example : 14.9763853</p>
        </div>



        <div class="form-group">
            <label> Map Longitude<font color="#F00"><b>*</b></font></label>
            <input readonly id="contact_us_map_longitude" name="contact_us_map_longitude" class="form-control"
                value="<?PHP echo $contact_us[$id]['contact_us_map_longitude'];?>" />
            <p class="help-block">Example : 102.0680571</p>
        </div>


    </div>
    <div class="col-lg-10">
        <div class="row">
            <div class="col-lg-2">
                <div class="form-group">
                    <label> Title TH<font color="#F00"><b>*</b></font></label>
                    <input readonly id="contact_us_title_en" name="contact_us_title_en" class="form-control"
                        value="<?PHP echo $contact_us[$id]['contact_us_title_en'];?>" />
                    <p class="help-block">Example : ...</p>
                </div>
            </div>

            <div class="col-lg-2">
                <div class="form-group">
                    <label> Title EN<font color="#F00"><b>*</b></font></label>
                    <input readonly id="contact_us_title_en" name="contact_us_title_en" class="form-control"
                        value="<?PHP echo $contact_us[$id]['contact_us_title_en'];?>" />
                    <p class="help-block">Example : ...</p>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="form-group">
                    <label> Facebook <font color="#F00"><b>*</b></font></label>
                    <input readonly id="contact_us_facebook" name="contact_us_facebook" class="form-control"
                        value="<?PHP echo $contact_us[$id]['contact_us_facebook'];?>" />
                    <p class="help-block">Example : ...</p>
                </div>
            </div>

            <div class="col-lg-2">
                <div class="form-group">
                    <label> Tel <font color="#F00"><b>*</b></font></label>
                    <input readonly id="contact_us_tel" name="contact_us_tel" class="form-control"
                        value="<?PHP echo $contact_us[$id]['contact_us_tel'];?>" />
                    <p class="help-block">Example : ...</p>
                </div>
            </div>

            <div class="col-lg-2">
                <div class="form-group">
                    <label> Fax <font color="#F00"><b>*</b></font></label>
                    <input readonly id="contact_us_fax" name="contact_us_fax" class="form-control"
                        value="<?PHP echo $contact_us[$id]['contact_us_fax'];?>" />
                    <p class="help-block">Example : ...</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label> Sub Title TH <font color="#F00"><b>*</b></font></label>
                    <textarea readonly id="contact_us_sub_title_th" name="contact_us_sub_title_th" class="form-control"
                        value="<?PHP echo $contact_us[$id]['contact_us_sub_title_th'];?>"
                        rows="5"><?PHP echo $contact_us[$id]['contact_us_sub_title_th'];?></textarea>
                    <p class="help-block">Example : ...</p>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="form-group">
                    <label> Sub Title EN<font color="#F00"><b>*</b></font></label>
                    <textarea readonly id="contact_us_sub_title_en" name="contact_us_sub_title_en" class="form-control"
                        value="<?PHP echo $contact_us[$id]['contact_us_sub_title_en'];?>"
                        rows="5"><?PHP echo $contact_us[$id]['contact_us_sub_title_en'];?></textarea>
                    <p class="help-block">Example : ...</p>
                </div>
            </div>

            <div class="col-lg-2">
                <div class="form-group">
                    <label> Address TH<font color="#F00"><b>*</b></font></label>
                    <input readonly id="contact_us_address_th" name="contact_us_address_th" class="form-control"
                        value="<?PHP echo $contact_us[$id]['contact_us_address_th'];?>" />
                    <p class="help-block">Example : ...</p>
                </div>
            </div>

            <div class="col-lg-2">
                <div class="form-group">
                    <label> Address 1 TH<font color="#F00"><b>*</b></font></label>
                    <input readonly id="contact_us_address_1_th" name="contact_us_address_1_th" class="form-control"
                        value="<?PHP echo $contact_us[$id]['contact_us_address_1_th'];?>" />
                    <p class="help-block">Example : ...</p>
                </div>
            </div>

            <div class="col-lg-2">
                <div class="form-group">
                    <label> Address 2 TH<font color="#F00"><b>*</b></font></label>
                    <input readonly id="contact_us_address_2_th" name="contact_us_address_2_th" class="form-control"
                        value="<?PHP echo $contact_us[$id]['contact_us_address_2_th'];?>" />
                    <p class="help-block">Example : ...</p>
                </div>
            </div>

            <div class="col-lg-2">
                <div class="form-group">
                    <label> Address 3 TH<font color="#F00"><b>*</b></font></label>
                    <input readonly id="contact_us_address_3_th" name="contact_us_address_3_th" class="form-control"
                        value="<?PHP echo $contact_us[$id]['contact_us_address_3_th'];?>" />
                    <p class="help-block">Example : ...</p>
                </div>
            </div>

            <div class="col-lg-1">
                <div class="form-group">
                    <label> Address 4 TH <font color="#F00"><b>*</b></font></label>
                    <input readonly id="contact_us_address_4" name="contact_us_address_4" class="form-control"
                        value="<?PHP echo $contact_us[$id]['contact_us_address_4'];?>" />
                    <p class="help-block">Example : ...</p>
                </div>
            </div>


            <div class="col-lg-3">
                <div class="form-group">
                    <label> Email <font color="#F00"><b>*</b></font></label>
                    <input readonly id="contact_us_email" name="contact_us_email" class="form-control"
                        value="<?PHP echo $contact_us[$id]['contact_us_email'];?>" />
                    <p class="help-block">Example : ...</p>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="form-group">
                    <label> Address EN<font color="#F00"><b>*</b></font></label>
                    <input readonly id="contact_us_address_en" name="contact_us_address_en" class="form-control"
                        value="<?PHP echo $contact_us[$id]['contact_us_address_en'];?>" />
                    <p class="help-block">Example : ...</p>
                </div>
            </div>

            <div class="col-lg-2">
                <div class="form-group">
                    <label> Address 1 EN<font color="#F00"><b>*</b></font></label>
                    <input readonly id="contact_us_address_1_en" name="contact_us_address_1_en" class="form-control"
                        value="<?PHP echo $contact_us[$id]['contact_us_address_1_en'];?>" />
                    <p class="help-block">Example : ...</p>
                </div>
            </div>

            <div class="col-lg-2">
                <div class="form-group">
                    <label> Address 2 EN<font color="#F00"><b>*</b></font></label>
                    <input readonly id="contact_us_address_2_en" name="contact_us_address_2_en" class="form-control"
                        value="<?PHP echo $contact_us[$id]['contact_us_address_2_en'];?>" />
                    <p class="help-block">Example : ...</p>
                </div>
            </div>

            <div class="col-lg-2">
                <div class="form-group">
                    <label> Address 3 EN<font color="#F00"><b>*</b></font></label>
                    <input readonly id="contact_us_address_3_en" name="contact_us_address_3_en" class="form-control"
                        value="<?PHP echo $contact_us[$id]['contact_us_address_3_en'];?>" />
                    <p class="help-block">Example : ...</p>
                </div>
            </div>

        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <div class="row">

                <div class="col-lg-12">
                    <div class="form-group">
                        <label> Carry Title TH<font color="#F00"><b>*</b></font></label>
                        <input readonly id="contact_us_carry_title_th" name="contact_us_carry_title_th"
                            class="form-control" value="<?PHP echo $contact_us[$id]['contact_us_carry_title_th'];?>" />
                        <p class="help-block">Example : ...</p>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="form-group">
                        <label> Carry Detail TH<font color="#F00"><b>*</b></font></label>
                        <textarea readonly id="contact_us_carry_detail_th" name="contact_us_carry_detail_th"
                            class="form-control" value="<?PHP echo $contact_us[$id]['contact_us_carry_detail_th'];?>"
                            rows="5"> <?PHP echo $contact_us[$id]['contact_us_carry_detail_th'];?> </textarea>
                        <p class="help-block">Example : ...</p>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="form-group">
                        <label> Taxi Title TH<font color="#F00"><b>*</b></font></label>
                        <input readonly id="contact_us_taxi_title_th" name="contact_us_taxi_title_th"
                            class="form-control" value="<?PHP echo $contact_us[$id]['contact_us_taxi_title_th'];?>" />
                        <p class="help-block">Example : ...</p>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="form-group">
                        <label> Taxi Detai TH<font color="#F00"><b>*</b></font></label>
                        <textarea readonly id="contact_us_taxi_detail_th" name="contact_us_taxi_detail_th"
                            class="form-control" value="<?PHP echo $contact_us[$id]['contact_us_taxi_detail_th'];?>"
                            rows="5"> <?PHP echo $contact_us[$id]['contact_us_taxi_detail_th'];?> </textarea>
                        <p class="help-block">Example : ...</p>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="form-group">
                        <label> Car Title TH<font color="#F00"><b>*</b></font></label>
                        <input readonly id="contact_us_car_titel_th" name="contact_us_car_titel_th" class="form-control"
                            value="<?PHP echo $contact_us[$id]['contact_us_car_titel_th'];?>" />
                        <p class="help-block">Example : ...</p>
                    </div>
                </div>

                <div class="col-lg-12    ">
                    <div class="form-group">
                        <label> Car Detail TH<font color="#F00"><b>*</b></font></label>
                        <textarea readonly id="contact_us_car_detail_th" name="contact_us_car_detail_th"
                            class="form-control" value="<?PHP echo $contact_us[$id]['contact_us_car_detail_th'];?>"
                            rows="5"> <?PHP echo $contact_us[$id]['contact_us_car_detail_th'];?> </textarea>
                        <p class="help-block">Example : ...</p>
                    </div>
                </div>

            </div>
        </div>
        <div class="col-lg-6">
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label> Carry Title EN<font color="#F00"><b>*</b></font></label>
                        <input readonly id="contact_us_carry_title_en" name="contact_us_carry_title_en"
                            class="form-control" value="<?PHP echo $contact_us[$id]['contact_us_carry_title_en'];?>" />
                        <p class="help-block">Example : ...</p>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="form-group">
                        <label> Carry Detail EN<font color="#F00"><b>*</b></font></label>
                        <textarea readonly id="contact_us_carry_detail_en" name="contact_us_carry_detail_en"
                            class="form-control" value="<?PHP echo $contact_us[$id]['contact_us_carry_detail_en'];?>"
                            rows="5"> <?PHP echo $contact_us[$id]['contact_us_carry_detail_en'];?> </textarea>
                        <p class="help-block">Example : ...</p>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="form-group">
                        <label> Taxi Title EN<font color="#F00"><b>*</b></font></label>
                        <input readonly id="contact_us_taxi_title_en" name="contact_us_taxi_title_en"
                            class="form-control" value="<?PHP echo $contact_us[$id]['contact_us_taxi_title_en'];?>" />
                        <p class="help-block">Example : ...</p>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="form-group">
                        <label> Taxi Detai EN<font color="#F00"><b>*</b></font></label>
                        <textarea readonly id="contact_us_taxi_detail_en" name="contact_us_taxi_detail_en"
                            class="form-control" value="<?PHP echo $contact_us[$id]['contact_us_taxi_detail_en'];?>"
                            rows="5"> <?PHP echo $contact_us[$id]['contact_us_taxi_detail_en'];?> </textarea>
                        <p class="help-block">Example : ...</p>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="form-group">
                        <label> Car Title EN<font color="#F00"><b>*</b></font></label>
                        <input readonly id="contact_us_car_titel_en" name="contact_us_car_titel_en" class="form-control"
                            value="<?PHP echo $contact_us[$id]['contact_us_car_titel_en'];?>" />
                        <p class="help-block">Example : ...</p>
                    </div>
                </div>

                <div class="col-lg-12   ">
                    <div class="form-group">
                        <label> Car Detail EN<font color="#F00"><b>*</b></font></label>
                        <textarea readonly id="contact_us_car_detail_en" name="contact_us_car_detail_en"
                            class="form-control" value="<?PHP echo $contact_us[$id]['contact_us_car_detail_en'];?>"
                            rows="5"> <?PHP echo $contact_us[$id]['contact_us_car_detail_en'];?> </textarea>
                        <p class="help-block">Example : ...</p>
                    </div>
                </div>

            </div>
        </div>
        <div class="col-lg-12">
            <div class="form-group">
                <label> Map <font color="#F00"><b>*</b></font></label>
                <input readonly id="contact_us_map" name="contact_us_map" class="form-control"
                    value="<?PHP echo $contact_us[$id]['contact_us_map'];?>" />
                <p class="help-block">Example : ...</p>
            </div>
        </div>

    </div>
</div>


<fieldset class="gllpLatlonPicker" style="height: auto;">
    <div class="gllpMap" style="width: 138.5em;  height: 70em;">Google Maps</div>
    <!-- <div class="gllpMap" style="width: 100%; height: 80%;">Google Maps</div> -->
    <input readonly type="text" class="gllpLatitude form-control" name="contact_us_map_latitude"
        value="<?PHP echo $contact_us[0]['contact_us_map_latitude']; ?>" hidden />
    <input readonly type="text" class="gllpLongitude form-control" name="contact_us_map_longitude"
        value="<?PHP echo $contact_us[0]['contact_us_map_longitude']; ?>" hidden />
    <input readonly type="hidden" class="gllpZoom" value="14" />
</fieldset>

<script src="https://maps-api-ssl.google.com/maps/api/js?key=AIzaSyBPYt_mZGd-2iotzhpiZKw1_GpZ6H9w3vs&sensor=false">
</script>
<script src="../template/map/js/jquery-gmaps-latlon-picker.js"></script>