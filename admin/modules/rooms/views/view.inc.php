<div class="row">
    <div class="col-lg-6">
        <h1> Rooms page</h1>
        <h2> ข้อมูลห้องพัก</h2>
    </div>
    <!-- <div class="col-lg-6">
        <a href="?content=rooms&action=insert" class="btn btn-primary float-right">เพิ่มข้อมูลห้องพัก</a>
    </div> -->
</div>
<div class="row">
<div class="col-lg-6">
    <div class="row">
        <form id="form_target" role="form" method="post" action="index.php?content=rooms&action=insert_type">
            <button type="submit" name="" id="" class="button float-right" btn-block>เพิ่ม</button>
        </form>


        <table>
            <thead>
                <tr>
                    <th width="10">#</th>
                    <th width="80">Title TH</th>
                    <!-- <th width="80">Title EN</th> -->
                    <th width="10"></th>
                    <th width="10"></th>
                </tr>
            </thead>
            <?PHP 
    for ($i=0; $i < count($room_type); $i++) { 
        # code...
        
        ?>
            <tr>

                <td>
                    <?PHP echo $i+1;  ?>
                </td>

                <td class="text-left">
                    <?PHP echo $room_type[$i]['room_type_name_th'];  ?>
                </td>
<!-- 
                <td class="text-left">
                    <?PHP echo $room_type[$i]['room_type_name_en'];  ?>
                </td> -->

                <td>
                    <a href="?content=rooms&action=edit_type&id=<?PHP echo $i  ?>">
                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                    </a>
                </td>

                <td>
                    <a class="text-danger"
                        href="?content=rooms&action=delete_type&id=<?PHP echo $room_type[$i]['room_type_id']; ?>">
                        <i class="fa fa-window-close" aria-hidden="true"></i>
                    </a>
                </td>


            </tr>
            </tbody>
            <?PHP 
    }
    ?>
        </table>
    </div>
</div>

<div class="col-lg-6">
    <div class="row">
        <form id="form_target" role="form" method="post" action="index.php?content=rooms&action=insert_type">
            <button type="submit" name="" id="" class="button float-right" btn-block>เพิ่ม</button>
        </form>


        <table>
            <thead>
                <tr>
                    <th width="10">#</th>
                    <!-- <th width="80">Title TH</th> -->
                    <th width="80">Title EN</th>
                    <th width="10"></th>
                    <th width="10"></th>
                </tr>
            </thead>
            <?PHP 
    for ($i=0; $i < count($room_type); $i++) { 
        # code...
        
        ?>
            <tr>

                <td>
                    <?PHP echo $i+1;  ?>
                </td>
<!-- 
                <td class="text-left">
                    <?PHP echo $room_type[$i]['room_type_name_th'];  ?>
                </td> -->

                <td class="text-left">
                    <?PHP echo $room_type[$i]['room_type_name_en'];  ?>
                </td>

                <td>
                    <a href="?content=rooms&action=edit_type&id=<?PHP echo $i  ?>">
                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                    </a>
                </td>

                <td>
                    <a class="text-danger"
                        href="?content=rooms&action=delete_type&id=<?PHP echo $room_type[$i]['room_type_id']; ?>">
                        <i class="fa fa-window-close" aria-hidden="true"></i>
                    </a>
                </td>


            </tr>
            </tbody>
            <?PHP 
    }
    ?>
        </table>
    </div>
</div>

</div>

<hr>
    <div class="col-lg-12">
        <a href="?content=rooms&action=insert" class="btn btn-primary float-right">เพิ่มข้อมูลห้องพัก</a>
    </div>
<table>
    <thead>
        <tr>
            <th width="12px">#</th>
            <th width="300px">Image</th>
            <th width="300px">Name TH</th>
            <th width="300px">Name EN</th>
            <th width="300px">Type TH</th>
            <th width="300px">Type EN</th>
            <th width="50px">Price</th>
            <th width="50px"> Amout</th>
            <th width="500px"> Detail TH</th>
            <th width="500px"> Detail EN</th>
            <th width="500px"> Facility TH</th>
            <th width="500px"> Facility EN</th>
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
            <?PHP echo $rooms[$i]['room_name_th'];  ?>
        </td>
        <td class="text-left">
            <?PHP echo $rooms[$i]['room_name_en'];  ?>
        </td>

        <td class="text-left">
            <?PHP echo $rooms[$i]['room_type_name_th'];  ?>
        </td>
        <td class="text-left">
            <?PHP echo $rooms[$i]['room_type_name_en'];  ?>
        </td>


        <td class="text-right">
            <?PHP echo   number_format($rooms[$i]['room_price']);  ?>
        </td>

        <td class="text-right">
            <?PHP echo  $rooms[$i]['room_amout'];  ?>
        </td>


        <td class="text-left">
            -
            <?PHP echo $rooms[$i]['room_size_th'];  ?> <br>
            -
            <?PHP echo $rooms[$i]['room_detail_1_th'];  ?> <br>
            -
            <?PHP echo $rooms[$i]['room_detail_2_th'];  ?> <br>
            -
            <?PHP echo $rooms[$i]['room_detail_3_th'];  ?> <br>
        </td>

        <td class="text-left">
            -
            <?PHP echo $rooms[$i]['room_size_en'];  ?> <br>
            -
            <?PHP echo $rooms[$i]['room_detail_1_en'];  ?> <br>
            -
            <?PHP echo $rooms[$i]['room_detail_2_en'];  ?> <br>
            -
            <?PHP echo $rooms[$i]['room_detail_3_en'];  ?> <br>
        </td>


        <td class="text-left">
            -
            <?PHP echo $rooms[$i]['room_facility_1_th'];  ?> <br>
            -
            <?PHP echo $rooms[$i]['room_facility_2_th'];  ?>
        </td>

        <td class="text-left">
            -
            <?PHP echo $rooms[$i]['room_facility_1_en'];  ?> <br>
            -
            <?PHP echo $rooms[$i]['room_facility_2_en'];  ?>
        </td>



        <td>
            <a href="?content=rooms&action=edit&id=<?PHP echo $rooms[$i]['room_id'];?>&type=<?PHP echo $rooms[$i]['room_type_id'];  ?> ">
                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
            </a>
        </td>

        <td>
            <?PHP 
                    if ($rooms[$i]['room_recommened'] == 1) {
                        ?>
            <a href="?content=rooms&action=recommened&id=<?PHP echo $rooms[$i]['room_id'];?>&recommened=0">
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