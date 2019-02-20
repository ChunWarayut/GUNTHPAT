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
<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th width="100">Title</th>
                <th width="500">Sub Title</th>
            </tr>
        </thead>
        <tbody>
            <tr>


                <td class="text-center">
                    <?PHP echo $contact_us[0]['contact_us_title'];  ?><br><hr>
                   <img src="<?PHP echo $img_path . $contact_us[0]['contact_us_img'];  ?>" width="800px" alt=""> 
                </td>

                <td class="text-left">
                    <?PHP echo  $contact_us[0]['contact_us_sub_title'];  ?>
                </td>


            </tr>
        </tbody>

    </table>

</div>

<hr>
<h2> ข้อมูลติดต่อเรา</h2>
<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th width="100">Facebook</th>
                <th width="100">Tel</th>
                <th width="100">Fax</th>
                <th width="100">Email</th>
                <th width="100">Map </th>
            </tr>
        </thead>
        <tbody>
            <tr>

                <td class="text-left">
                    <?PHP echo  $contact_us[0]['contact_us_facebook'];  ?>
                </td>

                <td class="text-left">
                    <?PHP echo  $contact_us[0]['contact_us_tel'];  ?>
                </td>

                <td class="text-left">
                    <?PHP echo  $contact_us[0]['contact_us_fax'];  ?>
                </td>

                <td class="text-left">
                    <?PHP echo  $contact_us[0]['contact_us_email'];  ?>
                </td>


                <td>
                        <fieldset class="gllpLatlonPicker" style="height: auto;">
                            <div class="gllpMap" style="width: 40em;  height: 25em;">Google Maps</div>
                            <!-- <div class="gllpMap" style="width: 100%; height: 80%;">Google Maps</div> -->
                            <input type="text" class="gllpLatitude form-control" name="contact_us_map_latitude" value="<?PHP echo $contact_us[0]['contact_us_map_latitude']; ?>"
                                hidden />
                            <input type="text" class="gllpLongitude form-control" name="contact_us_map_longitude" value="<?PHP echo $contact_us[0]['contact_us_map_longitude']; ?>"
                                hidden />
                            <input type="hidden" class="gllpZoom" value="14" />
                        </fieldset>
                </td>


            </tr>
        </tbody>

    </table>

</div>
<hr>

<h2> ข้อมูลที่อยู่</h2>
<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th width="500">Address</th>

            </tr>
        </thead>
        <tbody>
            <tr>


                <td class="text-left">
                    <?PHP echo  $contact_us[0]['contact_us_address'];  ?>
                    <?PHP echo  $contact_us[0]['contact_us_address_1'];  ?>
                    <?PHP echo  $contact_us[0]['contact_us_address_2'];  ?>
                    <?PHP echo  $contact_us[0]['contact_us_address_3'];  ?>
                    <?PHP echo  $contact_us[0]['contact_us_address_4'];  ?>
                </td>

            </tr>
        </tbody>

    </table>
</div>
<hr>
<h2> ข้อมูลรถสาธารณะ</h2>

<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th width="100">Carry Titel</th>
                <th width="600">Carry Detail</th>
            </tr>
        </thead>
        <tbody>
            <tr>


                <td class="text-left">
                    <?PHP echo  $contact_us[0]['contact_us_carry_title'];  ?>
                </td>

                <td class="text-left">
                    <?PHP echo  $contact_us[0]['contact_us_carry_detail'];  ?>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<hr>
<h2> ข้อมูลรถแท็กซี่</h2>

<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th width="100">Taxi Titel</th>
                <th width="600">Taxi Detail</th>
            </tr>
        </thead>
        <tbody>
            <tr>

                <td class="text-left">
                    <?PHP echo  $contact_us[0]['contact_us_taxi_title'];  ?>
                </td>

                <td class="text-left">
                    <?PHP echo  $contact_us[0]['contact_us_taxi_detail'];  ?>
                </td>

            </tr>
        </tbody>
    </table>
</div>
<hr>
<h2> ข้อมูลรถโรงแรม</h2>

<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th width="100">Car Titel</th>
                <th width="600">Car Detail</th>
            </tr>
        </thead>
        <tbody>
            <tr>

                <td class="text-left">
                    <?PHP echo  $contact_us[0]['contact_us_car_titel'];  ?>
                </td>

                <td class="text-left">
                    <?PHP echo  $contact_us[0]['contact_us_car_detail'];  ?>
                </td>

            </tr>
        </tbody>
    </table>
</div>



<script src="https://maps-api-ssl.google.com/maps/api/js?key=AIzaSyBPYt_mZGd-2iotzhpiZKw1_GpZ6H9w3vs&sensor=false">
</script>
<script src="../template/map/js/jquery-gmaps-latlon-picker.js"></script>