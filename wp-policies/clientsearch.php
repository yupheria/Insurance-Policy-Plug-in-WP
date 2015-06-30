<form name="form1" method="post" action="">
  <table width="1207" border="0">
    <tr>
      <td width="108">Sort By:</td>
      <td width="124">Filter By:</td>
      <td width="111">Birthday (month):</td>
      <td width="66">Youngest:</td>
      <td width="47">Oldest:</td>
      <td width="82">Min Income:</td>
      <td width="81">Max Income:</td>
      <td width="98">City:</td>
      <td width="452">&nbsp;</td>
    </tr>
    <tr>
      <td><select tabindex="1" name="select" id="select">
        <option <?php if($sort == 'last_name'){echo 'selected';}?> value="last_name" selected>Last Name</option>
        <option <?php if($sort == 'age'){echo 'selected';}?> value="age">Age</option>
        <option <?php if($sort == 'DOB'){echo 'selected';}?> value="DOB">Birthday</option>
        <option <?php if($sort == 'income'){echo 'selected';}?> value="income">Income</option>
        <option <?php if($sort == 'occupation'){echo 'selected';}?> value="occupation">Occupation</option>
        <option <?php if($sort == 'city'){echo 'selected';}?> value="city">City</option>
      </select></td>
      <td><input tabindex="2" name="textfield" type="text" id="textfield" value="<?php echo $last_name;?>" size="16" /></td>
      <td><input tabindex="3" name="textfield5" type="text" id="textfield5" value="<?php echo $month;?>" size="10" /></td>
      <td><input name="textfield2" type="text" id="textfield2" tabindex="4" value="<?php if($age1 != null){echo $age1;}else{echo '0';}?>" size="3" maxlength="3" /></td>
      <td><input name="textfield6" type="text" id="textfield6" tabindex="5" value="<?php if($age2 != null){echo $age2;}else{echo '120';}?>" size="3" maxlength="3" /></td>
      <td><input name="textfield3" type="text" id="textfield3" tabindex="6" value="<?php if($income1 != null){echo $income1;}else{echo '0';}?>" size="6" maxlength="6" /></td>
      <td><input name="textfield7" type="text" id="textfield7" tabindex="7" value="<?php if($income2 != null){echo $income2;}else{echo '9999999';}?>" size="6" maxlength="6" /></td>
      <td><input tabindex="8" name="textfield4" type="text" id="textfield4" value="<?php echo $city?>" size="16" /></td>
      <td><input tabindex="9" type="submit" name="button" id="search_button" value="Search">
        <input tabindex="10" type="submit" name="button2" id="reset_button" value="Reset">
        <!--<input type="submit" name="button3" id="button3" value="Print Result" />-->
       <!--<a target="_blank" href="?page=print_client_list">Print</a>-->
      <input tabindex="10" type="submit" name="print_search_button" id="print_search_button" value="Print" />
      <input tabindex="10" type="submit" name="print_search_button_word" id="print_search_button_word" value="Word" /></td>
    </tr>
  </table>
</form>
