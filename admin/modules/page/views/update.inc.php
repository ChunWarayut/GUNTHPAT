<script>
	function check(){
		var page_title_th = document.getElementById("page_title_th").value;
		var page_title_en = document.getElementById("page_title_en").value;
        var page_tag_th = document.getElementById("page_tag_th").value;
		var page_tag_en = document.getElementById("page_tag_en").value;
		var page_description_th = document.getElementById("page_description_th").value;
		var page_description_en = document.getElementById("page_description_en").value;

		page_title_th = $.trim(page_title_th);
        page_title_en = $.trim(page_title_en);
		page_tag_th = $.trim(page_tag_th);
        page_tag_en = $.trim(page_tag_en);
		page_description_th = $.trim(page_description_th);
		page_description_en = $.trim(page_description_en);

		if(page_title_th.length == 0){
			alert("กรุณากรอก Title TH");
			document.getElementById("page_title_th").focus();
			return false;
		}else if(page_tag_th.length == 0){
			alert("กรุณากรอก Keyword TH");
			document.getElementById("page_tag_th").focus();
			return false;
		}else if(page_description_th.length == 0){
			alert("กรุณากรอก Description TH");
			document.getElementById("page_description_th").focus();
			return false;
		}else if(page_title_en.length == 0){
			alert("กรุณากรอก Title EN");
			document.getElementById("page_title_en").focus();
			return false;
		}else if(page_tag_en.length == 0){
			alert("กรุณากรอก Keyword EN");
			document.getElementById("page_tag_en").focus();
			return false;
		}else if(page_description_en.length == 0){
			alert("กรุณากรอก Description EN");
			document.getElementById("page_description_en").focus();
			return false;
		}else{
			return true;
		}
	}
</script>

<h1>แก้ไขรายละเอียดหน้า</h1>
<div align="right">

</div>

<form role="form" method="post" onsubmit="return check();" action="index.php?content=page&action=edit&id=<?PHP echo $page_id; ?>" enctype="multipart/form-data">
    <div class="row">
        <div class="col-lg-4">
            <div class="form-group">
                <label>หน้า </label>
                <input id="page_name" name="page_name" class="form-control" value="<?php echo $page['page_name']?>" readonly>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label>Title TH <font color="#F00"><b>*</b></font></label>
                <input id="page_title_th" name="page_title_th" class="form-control" value="<?php echo $page['page_title_th']?>">
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <label>Title EN <font color="#F00"><b>*</b></font></label>
                <input id="page_title_en" name="page_title_en" class="form-control" value="<?php echo $page['page_title_en']?>">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label>Keyword TH<font color="#F00"><b>*</b></font></label>
                <input id="page_tag_th" name="page_tag_th" class="form-control" value="<?php echo $page['page_tag_th']?>">
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <label>Keyword EN<font color="#F00"><b>*</b></font></label>
                <input id="page_tag_en" name="page_tag_en" class="form-control" value="<?php echo $page['page_tag_en']?>">
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <label>Description TH<font color="#F00"><b>*</b></font></label>
                <textarea id="page_description_th" name="page_description_th" style="min-height:250px;" class="form-control"><?php echo $page['page_description_th']?></textarea>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <label>Description EN<font color="#F00"><b>*</b></font></label>
                <textarea id="page_description_en" name="page_description_en" style="min-height:250px;" class="form-control"><?php echo $page['page_description_en']?></textarea>
            </div>
        </div>
    </div>
    <div align="right">
        <input type="hidden" id="page_id" name="page_id" class="form-control" value="<?php echo $page['page_id']?>">
        <button type="button" class="btn btn-default" onclick="window.location='?content=page';" >ย้อนกลับ</button>
        <button type="reset" class="btn btn-primary">ล้างข้อมูล</button>
        <button type="submit" class="btn btn-success">บันทึกข้อมูล</button>
    </div>
</form>