<form name="form1" method="post" action="">
  <table width="1224" border="0">
    <tr>
      <td width="114">Sort By:</td>
      <td width="97">Filter By:</td>
      <td width="110">Company Name:</td>
      <td width="132"><input name="textfield" type="text" id="textfield" value="<?php echo $company?>" size="16" /></td>
      <td width="121">Renewal Month:</td>
      <td width="37"><input name="textfield2" type="text" id="textfield2" value="<?php if($renewal1 != null){echo $renewal1;} else {echo "1";}?>" size="5" /></td>
      <td width="583" colspan="3" rowspan="2"><input type="submit" name="search" id="search_button" value="Search" />
        <input type="submit" name="reset" id="reset_button" value="Reset" />
        <!--<input type="submit" name="print" id="print" value="Print Result"/>-->
        <!--<a href="?page=print_policy_list" target="_blank">Print</a>-->
      <input type="submit" name="print_search_button" id="print_search_button" value="Print" />
      <input type="submit" name="print_search_button_word" id="print_search_button_word" value="Word" /></td>
    </tr>
    <tr>
      <td height="24"><select name="select" id="select">
        <option <?php if($sort == 'last_name'){echo 'selected';}?> value="last_name">Last Name</option>
        <!--<option <?php //if($sort == 'first_name'){echo 'selected';}?> value="first_name">First Name</option>-->
        <option <?php if($sort == 'type'){echo 'selected';}?> value="type">Product/Type</option>
        <option <?php if($sort == 'renewal'){echo 'selected';}?> value="renewal">Renewal</option>
      </select></td>
      <td><input name="textfield4" type="text" id="textfield4" value="<?php echo $name?>" size="16" /></td>
      <td>Product/Type:</td>
      <td><select name="select2" id="select2">
        <option <?php if($product_type == 'All'){echo 'selected';}?> value="All">All</option>
        <option <?php if($product_type == 'Disability'){echo 'selected';}?> value="Disability">Disability</option>
        <option <?php if($product_type == 'Fire'){echo 'selected';}?> value="Fire">Fire</option>
        <option <?php if($product_type == 'Health'){echo 'selected';}?> value="Health">Health</option>
        <option <?php if($product_type == 'Investment'){echo 'selected';}?> value="Investment">Investment</option>
        <option value="Savings">Savings</option>
        <option <?php if($product_type == 'Life/Risk'){echo 'selected';}?> value="Life/Risk">Life/Risk</option>
        <option <?php if($product_type == 'Medical'){echo 'selected';}?> value="Medical">Medical</option>
        <option <?php if($product_type == 'Mortgage'){echo 'selected';}?> value="Mortgage">Mortgage</option>
        <option <?php if($product_type == 'Superannuation'){echo 'selected';}?> value="Superannuation">Superannuation</option>
      </select></td>
      <td><div align="right">to</div></td>
      <td><input name="textfield3" type="text" id="textfield3" value="<?php if($renewal2 != null){echo $renewal2;} else {echo "12";}?>" size="5" /></td>
    </tr>
  </table>
</form>

