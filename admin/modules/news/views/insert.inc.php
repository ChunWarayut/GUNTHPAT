<h1>เพิ่มข่าวสาร</h1>
<div class="col-lg-6" align="right">

</div>

<form role="form" method="post" action="index.php?content=news&action=add" enctype="multipart/form-data">
    <div class="row">
            <div class="col-lg-12">
                <div class="form-group">
                    <label>หัวข้อ <font color="#F00"><b>*</b></font></label>
                    <input id="news_name" name="news_name" class="form-control" autocomplete="off">
                </div>
            </div>

            <div class="col-lg-12">
                <div class="form-group">
                    <label>รายละเอียด <font color="#F00"><b>*</b></font></label>
                    <input id="news_detail" name="news_detail" class="form-control" autocomplete="off">
                </div>
            </div>

        <!-- /.col-lg-9 (nested) -->
        <!-- /.row (nested) -->

        <div align="right">
            <button type="button" class="btn btn-default" onclick="window.location='?content=news';">ย้อนกลับ</button>
            <button type="reset" class="btn btn-primary">ล้างข้อมูล</button>
            <button type="submit" class="btn btn-success">บันทึกข้อมูล</button>
        </div>
</form>