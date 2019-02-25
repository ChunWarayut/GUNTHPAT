<div class="row">
    <div class="col-lg-6">
        <h1> Contact page</h1>

    </div>

</div>


<hr>

<div class="row">
    <div class="col-lg-4">
        <form id="form_target" role="form" method="post" action="index.php?content=contact&action=edit_head">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-6">
                            <h2> เพิ่ม แก้ไข ข้อมูล </h2>
                        </div>
                        <div class="col-lg-6">
                            <button type="submit" name="" id="" class="btn btn-warning btn-xs float-right"
                                btn-block>แก้ไข</button>
                        </div>
                    </div>
                    <div class="form-group">
                        <label> </label>
                        <!-- <button type="submit" name="" id="" class="btn btn-warning btn-xs float-right"  btn-block>แก้ไข</button> -->
                        <textarea class="form-control " id="contact_head_detail_en" name="contact_head_detail_en" rows="5"><?PHP echo $contact_head[0]['contact_head_detail_en'];?></textarea>
                        <textarea class="form-control " id="contact_head_detail_th" name="contact_head_detail_th" rows="5"><?PHP echo $contact_head[0]['contact_head_detail_th'];?></textarea>
                    </div>
                    <!-- <button type="submit" name="" id="" class="btn btn-warning btn-xs float-right" btn-block>แก้ไข</button> -->
                </div>
            </div>
        </form>
    </div>
    <div class="col-lg-4">
        <div class="row">
            <div class="col-lg-6">
                <h2> ข้อมูลชื่อเรื่อง</h2>
            </div>
            <div class="col-lg-6">
                <form id="form_target" role="form" method="post" action="index.php?content=contact&action=insert_title">
                    <button type="submit" name="" id="" class="button float-right"
                        btn-block>เพิ่ม</button>
                </form>
            </div>
        </div>


        <table>
            <thead>
                <tr>
                    <th width="10">#</th>
                    <th width="80">Title</th>
                    <th width="10"></th>
                    <th width="10"></th>
                </tr>
            </thead>
            <?PHP 
    for ($i=0; $i < count($contact_title); $i++) { 
        # code...
        
        ?>
            <tr>

                <td>
                    <?PHP echo $i+1;  ?>
                </td>

                <td class="text-left">
                    <?PHP echo $contact_title[$i]['contact_title_name_th'];  ?>
                    <?PHP echo $contact_title[$i]['contact_title_name_en'];  ?>
                </td>
                <td>
                    <a href="?content=contact&action=edit_title&id=<?PHP echo $i  ?>">
                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                    </a>
                </td>
                
                <td>
                    <a class="text-danger" href="?content=contact&action=delete_title&id=<?PHP echo $contact_title[$i]['contact_title_id']; ?>">
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
    <div class="col-lg-4">
        <div class="row">
            <div class="col-lg-6">
                <h2> ข้อมูลประเภทของคำถาม </h2>
            </div>
            <div class="col-lg-6">
                <form id="form_target" role="form" method="post" action="index.php?content=contact&action=insert_type">
                    <button type="submit" name="" id="" class="button float-right"
                        btn-block>เพิ่ม</button>
                </form>
            </div>
        </div>

        <table>
            <thead>
                <tr>
                    <th width="10">#</th>
                    <th width="80">Title</th>
                    <th width="10"></th>
                    <th width="10"></th>
                </tr>
            </thead>
            <?PHP 
    for ($i=0; $i < count($contact_type); $i++) { 
        # code...
        
        ?>
            <tr>

                <td>
                    <?PHP echo $i+1;  ?>
                </td>

                <td class="text-left">
                    <?PHP echo $contact_type[$i]['contact_type_name_th'];  ?>
                    <?PHP echo $contact_type[$i]['contact_type_name_en'];  ?>
                </td>
                <td>
                    <a href="?content=contact&action=edit_type&id=<?PHP echo $i  ?>">
                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                    </a>
                </td>

                <td>
                    <a class="text-danger" href="?content=contact&action=delete_type&id=<?PHP echo $contact_type[$i]['contact_type_id'];  ?>">
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


<hr>

<h2> ข้อมูลรายการ Contact ต่าง ๆ</h2>
<table>
    <thead>
        <tr>
            <th width="10">#</th>
            <th width="100">Title</th>
            <th width="150">Name</th>
            <th width="150">Type</th>
            <th width="100"> Email</th>
            <th width="100"> Tel</th>
            <th width="100"> Country</th>
            <th width="300"> Text</th>
        </tr>
    </thead>
    <?PHP 
    for ($i=0; $i < count($contact); $i++) { 
        # code...
        
    ?>
    <tr>

        <td>
            <?PHP echo $i+1;  ?>
        </td>


        <td class="text-left">
            <?PHP echo $contact[$i]['contact_title_name_th'];  ?>
            <?PHP echo $contact[$i]['contact_title_name_en'];  ?>
        </td>

        <td class="text-left">
            <?PHP echo $contact[$i]['contact_firstname'];  ?>
            <?PHP echo $contact[$i]['contact_lastname'];  ?>
        </td>

        <td class="text-left">
            <?PHP echo  $contact[$i]['contact_type_name_th'];  ?>
            <?PHP echo  $contact[$i]['contact_type_name_en'];  ?>
        </td>

        <td class="text-left">
            <?PHP echo  $contact[$i]['contact_email'];  ?>
        </td>

        <td class="text-left">
            <?PHP echo  $contact[$i]['contact_tel'];  ?>
        </td>

        <td class="text-left">
            <?PHP echo  $contact[$i]['ct_nameTHA'];  ?>
        </td>

        <td class="text-left">
            <?PHP echo  $contact[$i]['contact_text'];  ?>
        </td>


    </tr>
    </tbody>
    <?PHP 
    }
    ?>
</table>