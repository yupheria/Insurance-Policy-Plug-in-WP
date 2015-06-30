<table width="1052" border="0" class="widefat">
    <tr>
      <th scope="col">Date</th>
      <th scope="col">Event</th>
      <th scope="col">Name</th>
      <th scope="col">Age</th>
      <th scope="col">Mobile</th>
      <th scope="col">Tel. Off</th>
      <th scope="col">Tel. Res</th>
      <th scope="col">City</th>
      <th scope="col">Income</th>
      <th scope="col">Occupation</th>
      <th scope="col">Email</th>
    </tr>
    <?php foreach($result as $row) :?>
    <tr>
      <td><?php echo date("d-m-Y",strtotime($row->mydate))?></td>
      <td><a target="_blank" href="?page=edit_client&user_id=<?php echo $row->user_id?>"><?php echo $row->event;?></a></td>
      <td><a target="_blank" href="?page=edit_client&user_id=<?php echo $row->user_id?>"><?php echo $row->last_name." ".$row->first_name;?></a></td>
      <td><?php echo $row->age?></td>
      <td><?php echo $row->tel_mobile?></td>
      <td><?php echo $row->tel_off?></td>
      <td><?php echo $row->tel_res?></td>
      <td><?php echo $row->city?></td>
      <td><?php echo $row->income?></td>
      <td><?php echo $row->occupation?></td>
      <td><a target="_blank" href="mailto:<?php echo $row->email?>"><?php echo $row->email?></a></td>
    </tr>
    <?php endforeach; ?>
    <?php foreach($result1 as $row) :?>
    <tr>
      <td><?php echo date("d-m-Y",strtotime($row->mydate))?></td>
      <td><a target="_blank" href="?page=edit_client&user_id=<?php echo $row->user_id?>"><?php echo $row->event;?></a></td>
      <td><a target="_blank" href="?page=edit_client&user_id=<?php echo $row->user_id?>"><?php echo $row->last_name." ".$row->first_name;?></a></td>
      <td><?php echo $row->age?></td>
      <td><?php echo $row->tel_mobile?></td>
      <td><?php echo $row->tel_off?></td>
      <td><?php echo $row->tel_res?></td>
      <td><?php echo $row->city?></td>
      <td><?php echo $row->income?></td>
      <td><?php echo $row->occupation?></td>
      <td><a target="_blank" href="mailto:<?php echo $row->email?>"><?php echo $row->email?></a></td>
    </tr>
    <?php endforeach; ?>
    <?php foreach($result2 as $row) :?>
    <tr>
      <td><?php echo date("d-m-Y",strtotime($row->mydate))?></td>
      <td><a target="_blank" href="?page=edit-policies&policy_id=<?php echo $row->policy_id?>&user_id=<?php echo $row->user_id?>"><?php echo $row->event;?></a></td>
      <td><a target="_blank" href="?page=edit_client&user_id=<?php echo $row->user_id?>"><?php echo $row->last_name." ".$row->first_name;?></a></td>
      <td><?php echo $row->age?></td>
      <td><?php echo $row->tel_mobile?></td>
      <td><?php echo $row->tel_off?></td>
      <td><?php echo $row->tel_res?></td>
      <td><?php echo $row->city?></td>
      <td><?php echo $row->income?></td>
      <td><?php echo $row->occupation?></td>
      <td><a target="_blank" href="mailto:<?php echo $row->email?>"><?php echo $row->email?></a></td>
    </tr>
    <?php endforeach; ?>
  </table>
