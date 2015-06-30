<table class="widefat"> 
            <thead>
            <tr>
              <th colspan="5"><h2 align="left">Client List</h2></th>
              <th>&nbsp;</th>
              <th>&nbsp;</th>
              <th>&nbsp;</th>
              <th><?php 
			  $user = wp_get_current_user();
			  echo $user->display_name;
			  ?></th>
              </tr>
            <tr>
              <th colspan="9"><?php for($i=0;$i<260;$i++) {echo '-';}?></th>
              </tr>
            <tr>
                <th><strong>Name</strong></th>
                <th><strong>DOB</strong></th>
                <th><strong>Known As</strong></th>
                <th><strong>Postal Address</strong></th>
                <th><strong>Residential Address</strong></th>
                <th><strong>Suburb</strong></th>
                <th><strong>City</strong></th>
                <th><strong>Income</strong></th>
                <th><strong>Province/State</strong></th>
              </tr>
           <tbody>
               <?php foreach($result as $row):?>
               <tr>
                   <td><?php echo $row->last_name." ".$row->first_name?></td>
                   <td><?php echo date('d-m-Y',strtotime($row->DOB))?></td>
                   <td><?php echo $row->know_as?></td>
                   <td><?php echo $row->postal_address?></td>
                   <td><?php echo $row->res_address?></td>
                   <td><?php echo $row->suburb?></td>
                   <td><?php echo $row->city?></td>
                   <td><?php echo $row->income?></td>
                   <td><?php echo $row->province?></td>
               </tr>
               <?php endforeach;?>
               <tr>
                 <td colspan="9"><?php for($i=0;$i<260;$i++) {echo '-';}?></td>
               </tr>
               
           </tbody>
</table>