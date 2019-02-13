<?php
require_once 'view/menu.inc.php';
?>

<div class="container">
    <div class="row" style="padding-bottom: 100;">
        <div class="col-md-6">
            <label class="text"> ชื่อ <font color="#F00"><b>*</b></font></label>
            <input id="book_firstname" name="book_firstname" class="form-control" autocomplete="off">
        </div>
        <div class="col-md-6">
            <label class="text"> นามสกุล <font color="#F00"><b>*</b></font></label>
            <input id="book_lastname" name="book_lastname" class="form-control" autocomplete="off">
        </div>
        <div class="col-md-6">
            <label class="text"> จำนวน <font color="#F00"><b>*</b></font></label>
            <input id="book_person" name="book_person" class="form-control" autocomplete="off">
        </div>
        <div class="col-md-6">
            <label class="text"> ห้อง <font color="#F00"><b>*</b></font></label>
            <input id="room_id" name="room_id" class="form-control" autocomplete="off">
        </div>
        <div class="col-md-3">
            <label class="text"> วันที่เข้าพัก <font color="#F00"><b>*</b></font></label>
            <input id="book_date_start" name="book_date_start" class="form-control" autocomplete="off">
        </div>
        <div class="col-md-3">
            <label class="text"> ถึงวันที่ <font color="#F00"><b>*</b></font></label>
            <input id="book_date_end" name="book_date_end" class="form-control" autocomplete="off">
        </div>
        <div class="col-md-6">
            <label class="text"> เบอร์โทรศัพท์ <font color="#F00"><b>*</b></font></label>
            <input id="book_tel" name="book_tel" class="form-control" autocomplete="off">
        </div>
        <div class="col-md-6">
            <label class="text">
                <font color="#FFFFFF"><b>*</b></font>
            </label>
            <a name="" id="" class="btn btn-primary form-control" href="#" role="button"> ย้อนกลับ </a>
        </div>
        <div class="col-md-6">
            <label class="text">
                <font color="#FFFFFF"><b>*</b></font>
            </label>
            <a name="" id="" class="btn btn-primary form-control" href="#" role="button"> ยืนยัน </a>
        </div>
    </div>
</div>