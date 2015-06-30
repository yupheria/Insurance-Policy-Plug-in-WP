<?php foreach ($result as $row) {
        $last_name = $row->last_name;
        $first_name = $row->first_name;
        break;
} ?>
<form name="form1" method="post" action="">
    <table width="709">
        <tr> <td width="322"><?php echo $last_name." ".$first_name;?></td>
        <td width="375">
           <input type="submit" name="add_notes_button" id="add_notes_button" value="Add Notes">
            <input type="submit" name="print_notes_button" id="print_notes_button" value="Print Notes">
            <input type="submit" name="exit" id="exit" value="Exit"> 
        </td>
        </tr>
        <tr>
          <td>Display from 
          <input name="filter_from" type="text" id="filter_from" value="<?php if($from){echo $from;}else{echo date("d-m-Y",strtotime("-30 days"));}?>" size="15" /> 
          to 
          <input name="filter_to" type="text" id="filter_to" value="<?php if($to){echo $to;}else{echo date("d-m-Y");}?>" size="15" /></td>
          <td><input type="submit" name="note_apply" id="note_apply" value="Apply" />
          <input type="submit" name="note_reset" id="note_reset" value="Reset" /></td>
        </tr> 
        </table>
  
</form>
<table width="200" border="0" class="widefat">
  <tr>
    <th scope="col">Timestamp</th>
    <th scope="col">Notes</th>
  </tr>
  <?php foreach ($result as $row) : ?>
  <tr>
    <td width="200px"><?php echo date('d-m-Y - h:ia',strtotime($row->time_stamp));?></td>
    <td><?php echo $row->notes;?></td>
  </tr>
  <?php endforeach;?>
</table>

