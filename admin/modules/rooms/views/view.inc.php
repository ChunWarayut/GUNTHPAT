
<h1>Edit rooms page</h1>
<h2> หน้าแก้ไขข้อมูลห้องพัก</h2>

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
			<th width="50px"></th>
		</tr>
	</thead>
    <?PHP 
    for ($i=0; $i < count($rooms); $i++) { 
        # code...
        
    ?>
		<tr>
			<td>
			<?PHP echo $rooms[$i]['room_id'];  ?> 
			</td>
			<td>
				<img src="<?PHP echo $img_path . $rooms[$i]['room_img'];  ?> " class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" width="500px" alt="">
			</td>
			<td  class="text-left">
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
                - <?PHP echo $rooms[$i]['room_size'];  ?> <br>
                - <?PHP echo $rooms[$i]['room_detail_1'];  ?> <br>
                - <?PHP echo $rooms[$i]['room_detail_2'];  ?> <br>
                - <?PHP echo $rooms[$i]['room_detail_3'];  ?> <br>
			</td>

            
			<td class="text-left">
                - <?PHP echo $rooms[$i]['room_facility_1'];  ?> <br>
                - <?PHP echo $rooms[$i]['room_facility_2'];  ?> 
			</td>



			<td>
				<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
			</td>
		</tr>
	</tbody>
    <?PHP 
    }
    ?>
</table>
