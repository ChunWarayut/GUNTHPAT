<h1>ระบบจัดการข่าวสาร</h1>
<h2>เพิ่ม ลบ เเก้ไข ข่าวสาร</h2>
<div align=right>
  <a class="button" href="?content=news&action=insert">
    เพิ่มผู้ดูเเล
  </a>
</div>
<table>
  <thead>
    <tr>
      <th>#</th>
      <th> หัวข้อข่าว </th>  
      <th>รายละเอียดข่าว</th>
      <th>เเก้ไข</th>
     
    </tr>
  </thead>
  <tbody>
    <?php 
    for($i=0; $i < count($news); $i++){
    ?>
    <tr>
      <td><?php echo $i+1; ?></td>
      <td class="text-left"><?php echo $news[$i]['news_name']; ?>  </td>
      <td class="text-left"><?php echo $news[$i]['news_detail']; ?></td>
      <td>
        <a href="?content=news&action=update&id=<?php echo $news[$i]['news_id'];?>" style="font-size: 20px;">
          <i class="fa fa-pencil-square-o" aria-hidden="true" ></i>
        </a> 
      </td>
    </tr>
    <?php } ?>
  </tbody>
</table>
