<h3><?php 
foreach($result as $row){
	echo $row->last_name." ".$row->first_name;
	break;
}
?></h3>
<table width="358" border="0" class="widefat">
  <tr>
    <th scope="col">Name</th>
    <th scope="col">Notes</th>
    <th scope="col">Timestamp</th>
  </tr>
  <?php foreach ($result as $row) : ?>
  <tr>
    <td><?php echo $row->last_name." ".$row->first_name;?></td>
    <td><?php echo $row->notes;?></td>
    <td><?php echo date('d-m-Y - H:ia',strtotime($row->time_stamp));?></td>
  </tr>
  <?php endforeach;?>
</table>