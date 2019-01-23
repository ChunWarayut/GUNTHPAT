<div class="row">
    <div class="col-lg-6">
        <h1> Gallary page</h1>
        <h2> ข้อมูลรายการ Gallary ต่าง ๆ</h2>
    </div>
    <div class="col-lg-6">
        <a href="?content=gallary&action=insert" class="btn btn-primary float-right">เพิ่มข้อมูลห้องพัก</a>
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
        </tr>
    </thead>
    <?PHP 
    for ($i=0; $i < count($gallary); $i++) { 
        # code...
        
    ?>
    <tr>

        <td>
            <?PHP echo $i+1;  ?>
        </td>

        <td>
            <img src="<?PHP echo $img_path . $gallary[$i]['gallary_img'];  ?> " class="img-fluid "
                width="200px" alt="">
        </td>

        <td class="text-left">
            <?PHP echo $gallary[$i]['gallary_name'];  ?>
        </td>

        <td class="text-left">
            <?PHP echo  $gallary[$i]['gallary_type_name'];  ?>
        </td>

        <td>
            <a href="?content=gallary&action=edit&id=<?PHP echo $i;  ?>&type=<?PHP echo  $gallary[$i]['gallary_type_id'];?>">
                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
            </a>

        </td>

        <td>
            <a class="text-danger" href="?content=gallary&action=delete&id=<?PHP echo  $gallary[$i]['gallary_id'];?>">
                <i class="fa fa-window-close" aria-hidden="true"></i>
            </a>
        </td>

    </tr>
    </tbody>
    <?PHP 
    }
    ?>
</table>