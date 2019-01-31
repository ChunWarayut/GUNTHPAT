<h1>เเก้ไขข้อมูลข่าวสาร</h1>
<form role="form" method="post" action="index.php?content=news&action=edit" enctype="multipart/form-data">
    <div class="row">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label> หัวข้อข่าว <font color="#F00"><b>*</b></font></label>
                        <input id="news_name" name="news_name" class="form-control"
                            value="<?php echo $news[0]['news_name']?>" autocomplete="off">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <label> รายละเอียดข่าว <font color="#F00"><b>*</b></font></label>
                        <input id="news_detail" name="news_detail" class="form-control"
                            value="<?php echo $news[0]['news_detail']?>" autocomplete="off">
                    </div>
                </div>
        </div>

    </div>

    <!-- /.row (nested) -->

    <div align="right">
        <input type="hidden" id="news_id" name="news_id" value="<?php echo $news[0]['news_id'] ?>" />
        <input type="hidden" id="news_image_o" name="news_image_o" value="<?php echo  $news[0]['news_image'] ?>" />
        <button type="button" class="btn btn-default" onclick="window.location='?content=news';">ย้อนกลับ</button>
        <button name="submit" type="submit" class="btn btn-success">บันทึกข้อมูล</button>
    </div>
</form>