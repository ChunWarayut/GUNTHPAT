<div class="row">
    <div class="col-lg-6">
        <h1> Contact page</h1>
        <h2> ข้อมูลรายการ Contact ต่าง ๆ</h2>
    </div>

</div>


<form id="form_target" role="form" method="post" action="index.php?content=contact&action=edit_head">
    <div class="row">
        <button type="submit" name="" id="" class="btn btn-warning btn-xs float-right" btn-block>แก้ไข</button>
        <div class="col-lg-11">
            <div class="form-group">
                <label> </label>
                <!-- <button type="submit" name="" id="" class="btn btn-warning btn-xs float-right"  btn-block>แก้ไข</button> -->
                <textarea class="form-control " id="contact_head_detail" name="contact_head_detail" rows="6">
                        <?PHP echo $contact_head[0]['contact_head_detail'];?>
                    </textarea>
            </div>
        </div>
        <button type="submit" name="" id="" class="btn btn-warning btn-xs float-right" btn-block>แก้ไข</button>
        <div class="col-lg-6">
        </div>
    </div>
</form>
<hr>


<table>
    <thead>
        <tr>
            <th width="10">#</th>
            <th width="100">Title</th>
            <th width="200">Name</th>
            <th width="100"> Email</th>
            <th width="100"> Tel</th>
            <th width="100"> Country</th>
            <th width="1000"> Text</th>
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
            <?PHP echo $contact[$i]['contact_title_id'];  ?>
        </td>

        <td class="text-left">
            <?PHP echo $contact[$i]['contact_firstname'];  ?>
            <?PHP echo $contact[$i]['contact_lastname'];  ?>
        </td>

        <td class="text-left">
            <?PHP echo  $contact[$i]['contact_email'];  ?>
        </td>

        <td class="text-left">
            <?PHP echo  $contact[$i]['contact_tel'];  ?>
        </td>

        <td class="text-left">
            <?PHP echo  $contact[$i]['contact_country'];  ?>
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