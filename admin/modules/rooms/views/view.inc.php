<div class="row">
    <div class="col-lg-6">
        <h1> Rooms page</h1>
        <h2> ข้อมูลห้องพัก</h2>
    </div>
    <div class="col-lg-6">
        <a href="?content=rooms&action=insert" class="btn btn-primary float-right">เพิ่มข้อมูลห้องพัก</a>
    </div>
</div>
<table>
    <thead>
        <tr>
            <th width="12px">#</th>
            <th width="300px">Image</th>
            <th width="300px">Name</th>
            <th width="300px">Type</th>
            <th width="50px">Price</th>
            <th width="50px"> Amout</th>
            <th width="500px"> Detail</th>
            <th width="500px"> Facility</th>
            <th width=""></th>
            <th width=""></th>
            <th width=""></th>
        </tr>
    </thead>
    <?PHP 
    for ($i=0; $i < count($rooms); $i++) { 
        # code...
        
    ?>
    <tr>
        <td>
            <?PHP echo $i+1;  ?>
        </td>
        <td>
            <img src="<?PHP echo $img_path . $rooms[$i]['room_img'];  ?> "
                class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}"
                width="500px" alt="">
        </td>
        <td class="text-left">
            <?PHP echo $rooms[$i]['room_name'];  ?>
        </td>

        <td class="text-left">
            <?PHP echo $rooms[$i]['room_type_name'];  ?>
        </td>


        <td class="text-right">
            <?PHP echo   number_format($rooms[$i]['room_price']);  ?>
        </td>

        <td class="text-right">
            <?PHP echo  $rooms[$i]['room_amout'];  ?>
        </td>


        <td class="text-left">
            -
            <?PHP echo $rooms[$i]['room_size'];  ?> <br>
            -
            <?PHP echo $rooms[$i]['room_detail_1'];  ?> <br>
            -
            <?PHP echo $rooms[$i]['room_detail_2'];  ?> <br>
            -
            <?PHP echo $rooms[$i]['room_detail_3'];  ?> <br>
        </td>


        <td class="text-left">
            -
            <?PHP echo $rooms[$i]['room_facility_1'];  ?> <br>
            -
            <?PHP echo $rooms[$i]['room_facility_2'];  ?>
        </td>



        <td>
            <a href="?content=rooms&action=edit&id=<?PHP echo $i;  ?>&type=<?PHP echo $rooms[$i]['room_type_id'];  ?> ">
                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
            </a>

        </td>

        <td>
            <a href="?content=rooms&action=recommened&id=<?PHP echo $rooms[$i]['room_id'];?>&recommened=0">
                <?PHP #endregion
            if ($rooms[$i]['room_recommened'] == 1) {
                ?>
                <i class="fa fa-star" aria-hidden="true"></i>
            </a>
            <?PHP        
            }else{
           
                ?>
            <a href="?content=rooms&action=recommened&id=<?PHP echo $rooms[$i]['room_id'];  ?>&recommened=1">
                <i class="fa fa-star-o" aria-hidden="true"></i>
            </a>
            <?PHP
            }
            ?>

        </td>

        <td>

            <a class="text-danger" href="?content=rooms&action=delete&id=<?PHP echo  $rooms[$i]['room_id'];?>">
                <i class="fa fa-window-close" aria-hidden="true"></i>
            </a>
        </td>
    </tr>
    </tbody>
    <?PHP 
    }
    ?>
</table>