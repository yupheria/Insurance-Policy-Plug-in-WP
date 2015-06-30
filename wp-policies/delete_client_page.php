
<form id="form1" name="form1" method="post" action="">

<table class="widefat"> 
            <thead>
            <tr>
                <th>Name</th>
                <th>DOB</th>
                <th>Age</th>
                <th>Area</th>
                <th>Tel. Off</th>
                <th>Tel. Res</th>
                <th>Fax</th>
                <th>City</th>
                <th>Income</th>
                <th>Occupation</th>
                <th>Email</th>
           </tr>
           <tbody>
               <?php foreach($result as $row):?>
               <tr>
                   <td><a href="?page=edit_client&user_id=<?php echo $row->user_id?>"><?php echo $row->last_name." ".$row->first_name?></a></td>
                   <td><?php echo date('d-m-Y',strtotime($row->DOB))?></td>
                   <td><?php echo $row->age?></td>
                   <td><?php echo $row->area?></td>
                   <td><?php echo $row->tel_off?></td>
                   <td><?php echo $row->tel_res?></td>
                   <td><?php echo $row->fax?></td>
                   <td><?php echo $row->city?></td>
                   <td><?php echo $row->income?></td>
                   <td><?php echo $row->occupation?></td>
                   <td><?php echo $row->email?></td>
               </tr>
               <?php endforeach;?>
           </tbody>
</table>
<input type="submit" name="button" id="button" value="Delete" />
<input type="submit" name="button2" id="button2" value="Exit" />
</form>
