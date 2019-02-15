<?php

// // หน้าระบบจัดการผู้ดูเเลระบบ
// if($content=="user"){ 
//     require_once("modules/user/views/index.inc.php"); 
// }

// ติดต่อเรา
 if($content=="contact_us"){
    require_once("modules/contact_us/views/index.inc.php"); 
}
// ติดต่อ
 if($content=="contact"){
    require_once("modules/contact/views/index.inc.php"); 
}

// ระบบจัดการข่าวสาร
else if($content=="article"){
    require_once("modules/article/views/index.inc.php"); 
}
// ระบบจอง
else if($content=="book"){
    require_once("modules/book/views/index.inc.php"); 
}

// ระบบห้องพัก
else if($content=="rooms"){
    require_once("modules/rooms/views/index.inc.php"); 
}

// ระบบบริการ
else if($content=="facilities"){
    require_once("modules/facilities/views/index.inc.php"); 
}

// อัลบั้ม
else if($content=="gallery"){
    require_once("modules/gallery/views/index.inc.php"); 
}

// เกี่ยวกับเรา
else if($content=="about_us"){
    require_once("modules/about_us/views/index.inc.php"); 
}

//  หน้าระบบจัดการผู้ดูเเลระบบ
else if($content=="user"){
    require_once("modules/user/views/index.inc.php"); 
}

//  ข่าวสาร
else if($content=="news"){
    require_once("modules/news/views/index.inc.php"); 
}

// หน้าหลัก
else if($content=="home"){
    require_once("modules/home/views/index.inc.php"); 
}
?>