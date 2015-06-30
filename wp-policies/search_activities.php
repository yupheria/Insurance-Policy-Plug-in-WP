<form name="form1" method="post" action="">
  <table width="836" border="0">
    <tr>
      <td width="38">Event</td>
      <td width="105"><select name="select" id="select">
        <option <?php if($sort == 'All'){echo 'selected';}?> value="All" selected>All</option>
        <option <?php if($sort == 'Next Call'){echo 'selected';}?> value="Next Call">Next Call</option>
        <option <?php if($sort == 'Birthday'){echo 'selected';}?> value="Birthday">Birthday</option>
        <option <?php if($sort == 'Renewals'){echo 'selected';}?> value="Renewals">Renewals</option>
      </select></td>
      <td width="51">Filter</td>
      <td width="269"><input class="inputDate" name="textfield" type="text" id="activity_from" size="15" value="<?php if($from){echo $from;} else {echo date('d-m-Y');}  ?>"> 
        to 
      <input class="inputDate" name="textfield2" type="text" id="activity_to" size="15"value="<?php if($to){echo $to;} else {echo date('d-m-Y', strtotime("+30 days"));}  ?>"></td>
      <td width="351"><input type="submit" name="button" id="search_button" value="Search">
      <input type="submit" name="button2" id="reset_button" value="Reset"></td>
    </tr>
  </table>
</form>
