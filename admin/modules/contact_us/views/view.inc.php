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


                <td class="text-left">
                    <?PHP echo $contact_us[0]['contact_us_title'];  ?>
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
                <th width="200">Map </th>
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


                <td class="text-left">
                    <?PHP echo  $contact_us[0]['contact_us_map'];  ?>
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