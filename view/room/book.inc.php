<link href="template/frontend/css/room-book.css" rel="stylesheet">

<?php
require_once 'view/menu.inc.php';
?>

<div class="container" id="book">
    <div class="text-center book-title">
    <i class="far fa-edit" ></i>
   

    <?PHP if ($lng == TH) {  ?>
            <h1>
                รายละเอียด

            <span>
                การจอง
            </span>
        </h1>

    <?PHP } else { ?>
            <h1>
            Reservation 

            <span>
            details
            </span>
        </h1>

<?PHP } ?>

    </div>
</div>
<form action="room.php?action=book" method="post">

    <input type="hidden" id="book_id" name="book_id" value="" />
    <div class="container">
        <div class="row" style="padding-bottom: 100;">
            <div class="col-md-6">
                <label class="text"> <?php if ($lng == TH) {echo "ชื่อ";} else { echo "Firstname";} ?>  <font color="#F00"><b>*</b></font></label>
                <input id="book_firstname" name="book_firstname" class="form-control" autocomplete="off">
            </div>
            <div class="col-md-6">
                <label class="text"> <?php if ($lng == TH) {echo "นามสกุล";} else { echo "Lastname";} ?>  <font color="#F00"><b>*</b></font></label>
                <input id="book_lastname" name="book_lastname" class="form-control" autocomplete="off">
            </div>
            <div class="col-md-6">
                <label class="text"> <?php if ($lng == TH) {echo "จำนวน";} else { echo "Number";} ?>  <font color="#F00"><b>*</b></font></label>
                <input id="book_person" name="book_person" value="<?PHP echo $book_person;?>" class="form-control" autocomplete="off">
            </div>
            <div class="col-md-6">
                <label class="text"> <?php if ($lng == TH) {echo "ห้อง";} else { echo "Room";} ?>  <font color="#F00"><b>*</b></font></label>
                <select class="form-control  custom-select" id="room_id" name="room_id" value="<?PHP echo $room_id;?>">
                    <?PHP for ($i=0; $i < count($rooms); $i++) { ?>
                    <option  value="<?PHP echo $rooms[$i]['room_id'];?>" <?PHP if ($room_id == $rooms[$i]['room_id'])  { echo 'selected'; } ?>>
                        <?php if ($lng == TH) {  echo $rooms[$i]['room_name_th'];   }else { echo $rooms[$i]['room_name_en'];  }  ?>
                    </option>
                    <?PHP 
                    }?>
                </select>
            </div>

<!--        <div class="col-md-6">
                <label class="text"> ห้อง <font color="#F00"><b>*</b></font></label>
                <select class="form-control  custom-select" id="room_id" name="room_id" value="<?PHP echo $room_id;?>">
                    <?PHP if ($room_id == null || $room_id == "") {
                        # code...
                   for ($i=0; $i < count($rooms); $i++) { ?>
                    <option SELECTED value="<?PHP echo $rooms[$i]['room_id'];?>">
                        <?PHP echo $rooms[$i]['room_name'];?>
                    </option>
                    <?PHP 
                    }
                    }  else {  for ($i=0; $i < count($room_by_id); $i++) {?>
                    <option SELECTED value="<?PHP echo $room_by_id[0]['room_id'];?>">
                        <?PHP echo $room_by_id[0]['room_name'];?>
                    </option>
                    <?PHP }} ?>
                </select>
            </div> 
-->
            
            <div class="col-md-3">
                <label class="text"> <?php if ($lng == TH) {echo "วันที่เข้าพัก";} else { echo "Check in";} ?>  <font color="#F00"><b>*</b></font></label>
                <input id="calendar_start"   value="<?PHP echo $book_date_start;?>" name="book_date_start" class="form-control" autocomplete="off">
            </div>
            <div class="col-md-3">
                <label class="text"> <?php if ($lng == TH) {echo "ถึงวันที่";} else { echo "Check out";} ?>  <font color="#F00"><b>*</b></font></label>
                <input id="calendar_end"   value="<?PHP echo $book_date_end;?>" name="book_date_end" class="form-control" autocomplete="off">
            </div>
            <div class="col-md-6">
                <label class="text">  <?php if ($lng == TH) {echo "เบอร์โทรศัพท์";} else { echo "Tel";} ?> <font color="#F00"><b>*</b></font></label>
                <input id="book_tel" name="book_tel" class="form-control" autocomplete="off">
            </div>
            <div class="col-6">
                <label class="text">
                    <font color="#FFFFFF"><b>*</b></font>
                </label>
                <a name="" id="" class="btn btn-orage form-control " href="room.php" role="button"> ย้อนกลับ </a>
            </div>
            <div class="col-6">
                <label class="text">
                    <font color="#FFFFFF"><b>*</b></font>
                </label>
                <button class="btn btn-orage form-control " type="submit">
                    ยืนยัน
                </button>
            </div>
        </div>
    </div>
</form>
