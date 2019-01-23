<div class="row">
    <div class="col-lg-6">
        <h1> Facilities page</h1>
        <h2> ข้อมูลบริการต่าง ๆ</h2>
    </div>
    <div class="col-lg-6">
        <a href="?content=facilities&action=insert" class="btn btn-primary float-right">เพิ่มข้อมูลห้องพัก</a>
    </div>
</div>
<table>
    <thead>
        <tr>
            <th width="12px">#</th>
            <th width="300px">Image</th>
            <th width="150px">Name</th>
            <th width="500px"> Detail</th>
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
            <img src="<?PHP echo $img_path . $facilities[$i]['facilities_img'];  ?> " class="img-fluid "
                width="500px" alt="">
        </td>

        <td class="text-left">
            <?PHP echo $facilities[$i]['facilities_name'];  ?>
        </td>

        <td class="text-left">
            <?PHP echo  $facilities[$i]['facilities_detail'];  ?>
        </td>

        <td>
            <a href="?content=facilities&action=edit&id=<?PHP echo $i;  ?>">
                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
            </a>

        </td>

        <td>
            <a class="text-danger" href="?content=facilities&action=delete&id=<?PHP echo  $facilities[$i]['facilities_id'];?>">
                <i class="fa fa-window-close" aria-hidden="true"></i>
            </a>
        </td>

    </tr>
    </tbody>
    <?PHP 
    }
    ?>
</table>