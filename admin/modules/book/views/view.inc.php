<h1>ระบบจอง</h1>
<h2> จองห้องพัก </h2>
<!-- <div align=right>
    <a class="button" href="?content=book&action=insert">
        เพิ่ม
    </a>
</div> -->
<table>
    <thead>
        <tr>
            <th>#</th>
            <th> ชื่อ </th>
            <th> จำนวน </th>
            <th>ห้อง </th>
            <th>วันที่เข้าพัก </th>
            <th>ถึงวันที่ </th>
            <th> Tel </th>

        </tr>
    </thead>
    <tbody>
        <?php 
    for($i=0; $i < count($book); $i++){
    ?>
        <tr>
            <td><?php echo $i+1; ?></td>
            <td class="text-left">
            <?php echo $book[$i]['book_firstname']; ?> 
            <?php echo $book[$i]['book_lastname']; ?> 
            </td>
            <td class="text-left"><?php echo $book[$i]['book_person']; ?></td>
            <td class="text-left"><?php echo $book[$i]['room_name']; ?></td>
            <td class="text-left"><?php echo $book[$i]['book_date_start']; ?></td>
            <td class="text-left"><?php echo $book[$i]['book_date_end']; ?></td>
            <td class="text-left"><?php echo $book[$i]['book_tel']; ?></td>
            <!-- <td>
                <a href="?content=book&action=update&id=<?php echo $book[$i]['book_id'];?>" style="font-size: 20px;">
                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                </a>
            </td>
            <td>
                <a class="text-danger" href="?content=book&action=delete&id=<?PHP echo  $book[$i]['book_id'];?>">
                    <i class="fa fa-window-close" aria-hidden="true"></i>
                </a>
            </td> -->
        </tr>
        <?php } ?>
    </tbody>
</table>