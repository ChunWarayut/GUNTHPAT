
<h1> Gallery  Titlle</h1>

<h2> แก้ไข Sub Title</h2>
<hr>
<form  id="form_target" role="form" method="post" action="index.php?content=gallery&action=edit_head">
    <div class="row">
            <div class="col-lg-12">
<button type="submit" name="" id="" class="btn btn-warning btn-xs float-right"  btn-block>แก้ไข</button>
                <div class="form-group">
                    <label> </label>
                    <!-- <button type="submit" name="" id="" class="btn btn-warning btn-xs float-right"  btn-block>แก้ไข</button> -->
                    <textarea class="form-control " id="gallery_head_sub_title" name="gallery_head_sub_title"
                        rows="6"><?PHP echo $gallery_head[0]['gallery_head_sub_title'];?></textarea>
                </div>
            </div>
<!-- <button type="submit" name="" id="" class="btn btn-warning btn-xs float-right"  btn-block>แก้ไข</button> -->
            <div class="col-lg-6">
            </div>
    </div>
</form>
<hr>


<div class="row">
    <div class="col-lg-6">
        <h1> Gallery page</h1>
        <h2> ข้อมูลรายการ Gallery ต่าง ๆ</h2>
    </div>
    <div class="col-lg-6">
        <a href="?content=gallery&action=insert" class="btn btn-primary float-right">เพิ่มข้อมูล</a>
    </div>
</div>


<table>
    <thead>
        <tr>
            <th width="10">#</th>
            <th width="100">Image</th>
            <th width="100">Name</th>
            <th width="100"> Type</th>
            <th width="10"></th>
            <th width="10"></th>
            <th width="10"></th>
        </tr>
    </thead>
    <?PHP 
    for ($i=0; $i < count($gallery); $i++) { 
        # code...
        
    ?>
    <tr>

        <td>
            <?PHP echo $i+1;  ?>
        </td>

        <td>
            <img src="<?PHP echo $img_path . $gallery[$i]['gallery_img'];  ?> " class="img-fluid "
                width="200px" alt="">
        </td>

        <td class="text-left">
            <?PHP echo $gallery[$i]['gallery_name'];  ?>
        </td>

        <td class="text-left">
            <?PHP echo  $gallery[$i]['gallery_type_name'];  ?>
        </td>

        <td>
            <a href="?content=gallery&action=edit&id=<?PHP echo $i;  ?>&type=<?PHP echo  $gallery[$i]['gallery_type_id'];?>">
                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
            </a>

        </td>

        <td>
            <a href="?content=gallery&action=recommened&id=<?PHP echo $gallery[$i]['gallery_id'];?>&recommened=0">
                <?PHP #endregion
            if ($gallery[$i]['gallery_recommened'] == 1) {
                ?>
                <i class="fa fa-star" aria-hidden="true"></i>
            </a>
            <?PHP        
            }else{
           
                ?>
            <a href="?content=gallery&action=recommened&id=<?PHP echo $gallery[$i]['gallery_id'];  ?>&recommened=1">
                <i class="fa fa-star-o" aria-hidden="true"></i>
            </a>
            <?PHP
            }
            ?>

        </td>


        <td>
            <a class="text-danger" href="?content=gallery&action=delete&id=<?PHP echo  $gallery[$i]['gallery_id'];?>">
                <i class="fa fa-window-close" aria-hidden="true"></i>
            </a>
        </td>

    </tr>
    </tbody>
    <?PHP 
    }
    ?>
</table>