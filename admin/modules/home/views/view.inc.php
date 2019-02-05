<h1>Slide</h1>
<h2>เเก้ไข Slide</h2>

<table>
    <thead>
        <tr>
            <th width="12px">#</th>
            <th width="100px">Image</th>
            <th width="100px">Title</th>
            <th width="500px">Sub Title</th>
            <th width="50px">ลิงค์</th>
            <th width="50px"></th>
        </tr>
    </thead>
    <?PHP 
        for ($i=0; $i < count($slide); $i++) { 
    ?>
    <tbody>
        <tr>
            <td>
                <?PHP echo $slide[$i]['slide_id'];  ?>
            </td>
            <td>
                <img src="<?PHP echo $img_path . $slide[$i]['slide_img'];  ?> "
                    class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}"
                    width="200px" alt="">
            </td>
            <td>
                <?PHP echo $slide[$i]['slide_title'];  ?>
            </td>
            <td class="text-left">
                <?PHP echo  $slide[$i]['slide_sub_title'];  ?>
            </td>
            </td>
            <td class="text-left">
                <?PHP echo $slide[$i]['slide_link'];  ?>
            </td>
            <td>
                <a href="?content=home&action=edit&id=<?PHP echo $i  ?>">
                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                </a>
            </td>
        </tr>
    </tbody>
    <?PHP 
        }  
    ?>
</table>

<br>
<hr />
<br>