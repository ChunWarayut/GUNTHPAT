
<form id="form_target" role="form" method="post" action="index.php?content=rooms&action=edit_type" enctype="multipart/form-data">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-lg-6">
                    <h1>
                        หน้าแก้ไขข้อมูล 
                        <?PHP echo $room_type[$id]['room_type_name'];  ?>
                    </h1>
                </div>
                <div class="col-lg-6">

                    <button type="submit" class="btn btn-primary float-right">แก้ไข</button>
                </div>
            </div>
        </div>
        <div class="card-body">
            <input type="hidden" id="room_type_id" name="room_type_id" value="<?php echo  $room_type[$id]['room_type_id']; ?>" />

            <div class="col-12">

            </div>
            <div class="row ">
               
                <div class="col-lg-12">
                    <div class="row">

                        <div class="col-lg-12">
                            <div class="form-group">
                                <label> Title  <font color="#F00"><b>*</b></font></label>
                                <input id="room_type_name_th" name="room_type_name_th" class="form-control" value="<?PHP echo $room_type[$id]['room_type_name_th'];?>" />
                                <p class="help-block">Example : Title </p>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="form-group">
                                <label> Title  <font color="#F00"><b>*</b></font></label>
                                <input id="room_type_name_en" name="room_type_name_en" class="form-control" value="<?PHP echo $room_type[$id]['room_type_name_en'];?>" />
                                <p class="help-block">Example : Title </p>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

        </div>
    </div>


</form>