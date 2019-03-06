


<h1> Facilities Titlle</h1>

<h2> แก้ไข Sub Title</h2>
<hr>
<form  id="form_target" role="form" method="post" action="index.php?content=facilities&action=edit_head">   
<button type="submit" name="" id="" class="btn btn-warning btn-xs float-right"  btn-block>แก้ไข</button>         
    <div class="row">
    

            <div class="col-lg-6">
                <!-- <button type="submit" name="" id="" class="btn btn-warning btn-xs float-right"  btn-block>แก้ไข</button> -->
                <div class="form-group">
                    <label> </label>
                    <textarea class="form-control " id="facilities_head_sub_title_th" name="facilities_head_sub_title_th"rows="6"/><?PHP echo $facilities_head[0]['facilities_head_sub_title_th'];?></textarea>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label> </label>
                    <textarea class="form-control " id="facilities_head_sub_title_en" name="facilities_head_sub_title_en"rows="6"/><?PHP echo $facilities_head[0]['facilities_head_sub_title_en'];?></textarea>
                </div>
            </div>

            <div class="col-lg-6">
            </div>
    </div>
</form>
<hr>


<div class="row">
    <div class="col-lg-6">
        <h1> Facilities </h1>
        <h2> ข้อมูลบริการต่าง ๆ</h2>
    </div>

    <div class="col-lg-6">
        <a href="?content=facilities&action=insert" class="btn btn-primary float-right">เพิ่มข้อมูล</a>
    </div>
</div>

<table>
    <thead>
        <tr>
            <th width="12px">#</th>
            <th width="300px">Image</th>
            <th width="150px">Name TH</th>
            <th width="500px"> Detail TH</th>
            <th width="150px">Name EN</th>
            <th width="500px"> Detail EN</th>
            <th width="10px"></th>
            <th width="10px"></th>
        </tr>
    </thead>
    <?PHP 
    for ($i=0; $i < count($facilities); $i++) { 
        # code...
        
    ?>
    <tr>

        <td>
            <?PHP echo $i+1;  ?>
        </td>

        <td>
            <img src="<?PHP echo $img_path . $facilities[$i]['facilities_img'];  ?> " class="img-fluid " width="500px"
                alt="">
        </td>

        <td class="text-left">
            <?PHP echo $facilities[$i]['facilities_name_th'];  ?>
        </td>

        <td class="text-left">
            <?PHP echo  $facilities[$i]['facilities_detail_th'];  ?>
            <?PHP echo  $facilities[$i]['facilities_detail_1_th'];  ?>
            <?PHP echo  $facilities[$i]['facilities_detail_2_th'];  ?>
        </td>

        <td class="text-left">
            <?PHP echo $facilities[$i]['facilities_name_en'];  ?>
        </td>

        <td class="text-left">
            <?PHP echo  $facilities[$i]['facilities_detail_en'];  ?>
            <?PHP echo  $facilities[$i]['facilities_detail_1_en'];  ?>
            <?PHP echo  $facilities[$i]['facilities_detail_2_en'];  ?>
        </td>

        <td>
            <a href="?content=facilities&action=edit&id=<?PHP echo $i;  ?>">
                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
            </a>

        </td>

        <td>
            <a class="text-danger"
                href="?content=facilities&action=delete&id=<?PHP echo  $facilities[$i]['facilities_id'];?>">
                <i class="fa fa-window-close" aria-hidden="true"></i>
            </a>
        </td>

    </tr>
    </tbody>
    <?PHP 
    }
    ?>
</table>


<script>


CKEDITOR.replace("facilities_head_sub_title_th",{
		filebrowserBrowseUrl : '../template/backend/ckfinder/ckfinder.html',
		filebrowserImageBrowseUrl : '../template/backend/ckfinder/ckfinder.html?Type=Images',
		filebrowserFlashBrowseUrl : '../template/backend/ckfinder/ckfinder.html?Type=Flash',
		filebrowserUploadUrl : '../template/backend/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
		filebrowserImageUploadUrl : '../template/backend/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
		filebrowserFlashUploadUrl : '../template/backend/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
	}); 
    

CKEDITOR.replace("facilities_head_sub_title_en",{
		filebrowserBrowseUrl : '../template/backend/ckfinder/ckfinder.html',
		filebrowserImageBrowseUrl : '../template/backend/ckfinder/ckfinder.html?Type=Images',
		filebrowserFlashBrowseUrl : '../template/backend/ckfinder/ckfinder.html?Type=Flash',
		filebrowserUploadUrl : '../template/backend/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
		filebrowserImageUploadUrl : '../template/backend/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
		filebrowserFlashUploadUrl : '../template/backend/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
	}); 


</script>
