<table class="widefat"> 
            <thead>
            <tr>
                <th>Name</th>
                <th>DOB</th>
                <th>Age</th>
                <th>Area</th>
                <th>Tel. Off</th>
                <th>Tel. Res</th>
                <th>City</th>
                <th>Income</th>
                <th>Occupation</th>
                <th>Email</th>
                <th>Options</th>
           </tr>
           <tbody>
               <?php foreach($result as $row):?>
               <tr>
                   <td height="20"><a target="_blank" href="?page=edit_client&user_id=<?php echo $row->user_id?>"><?php echo $row->last_name." ".$row->first_name?></a></td>
             <td><?php echo date('d-m-Y',strtotime($row->DOB))?></td>
                   <td><?php echo $row->age?></td>
                   <td><?php echo $row->area?></td>
                   <td><?php echo $row->tel_off?></td>
                   <td><?php echo $row->tel_res?></td>
                   <td><?php echo $row->city?></td>
                   <td><?php echo $row->income?></td>
                   <td><?php echo $row->occupation?></td>
                   <td><a target="_blank" href="mailto:<?php echo $row->email?>"><?php echo $row->email?></a></td>
                   <td>
                       <a href="?page=delete_client&user_id=<?php echo $row->user_id?>"><img src="<?php echo plugins_url('/img/delete.jpg' , __FILE__) ?>" alt="Delete Client" title="Delete Client"></a>
                       <a target="_blank" href="?page=add-policies&user_id=<?php echo $row->user_id?>"><img src="<?php echo plugins_url('/img/add.jpg' , __FILE__) ?>" alt="Add Policy" title="Add Policy"></a>
                       <a href="?page=my-policies&user_id=<?php echo $row->user_id?>"><img src="<?php echo plugins_url('/img/edit.jpg' , __FILE__) ?>" alt="Display Policies" title="Display Policies"></a>
                       <a target="_blank" href="?page=print_client_page&user_id=<?php echo $row->user_id?>"><img src="<?php echo plugins_url('/img/print.jpg' , __FILE__) ?>" alt="Print Client" title="Print Client"></a>
                       <a href="?page=print_client_page&user_id=<?php echo $row->user_id?>&mode=w"><img src="<?php echo plugins_url('/img/word.jpg' , __FILE__) ?>" alt="Print Client" title="Print Client"></a></td>
               </tr>
               <?php endforeach;?>
           </tbody>
</table>
