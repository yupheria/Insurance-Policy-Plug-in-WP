<form id="form1" name="form1" method="post" action="">
	<?php $current_user = wp_get_current_user(); ?>
  <table width="776" height="737" border="0">
    <tr>
      <td width="142"><input name="textfield" type="text" disabled="disabled" id="textfield" size="20"/></td>
      <td width="159"><input name="textfield2" type="text" disabled="disabled" id="textfield2" size="20"/></td>
      <td width="159">&nbsp;</td>
      <td width="167">&nbsp;</td>
      <td width="130">&nbsp;</td>
    </tr>
    <tr>
      <td height="24" colspan="2"><?php foreach($result as $row) {
	  echo "<h2>".$row->last_name." ".$row->first_name."</h2>";
	  }?></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Client No:</td>
      <td><?php echo $_REQUEST['user_id'];?></td>
      <td>&nbsp;</td>
      <td>Original Advisor:</td>
      <td><input name="textfield40" type="text" id="textfield40" value="<?php echo $current_user->user_login ?>" size="20" readonly="readonly" /></td>
    </tr>
    <tr>
      <td height="24">Owner</td>
      <td><input name="owner" type="text" id="owner" size="20" readonly="readonly" value="<?php foreach($result as $row) {
echo $row->last_name." ".$row->first_name;
}?>"/></td>
      <td>&nbsp;</td>
      <td>Current Advisor:</td>
      <td><input name="textfield41" type="text" id="textfield41" value="<?php echo $current_user->user_login ?>" size="20" readonly="readonly" /></td>
    </tr>
    <tr>
      <td>Assign to:</td>
      <td><?php wp_dropdown_users( array('show' => 'display_name','name'=>'assignment'));?></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>Entry Age:</td>
      <td><input name="textfield28" type="text" id="textfield28" value="0" size="20" /></td>
    </tr>
    <tr>
      <td>Company:</td>
      <td><input name="textfield6" type="text" id="textfield6" size="20"/></td>
      <td>&nbsp;</td>
      <td>Accept:</td>
      <td><div align="right">
        <select name="select9" id="select9">
          <option value="None" selected="selected">None</option>
          <option value="Med. Exam">Med. Exam</option>
          <option value="Pers. Statement">Pers. Statement</option>
        </select>
      </div></td>
    </tr>
    <tr>
      <td>Policy No/Abr:</td>
      <td><input name="textfield7" type="text" id="textfield7" size="20"/></td>
      <td><input name="textfield8" type="text" id="textfield8" size="20" /></td>
      <td>Smoker:</td>
      <td><div align="right">
        <select name="select7" id="select7">
          <option value="No" selected="selected">No</option>
          <option value="Yes">Yes</option>
        </select>
      </div></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>Status:</td>
      <td><div align="right">
        <select name="select10" id="select10">
          <option value="Current">Current</option>
          <option value="Lapsed">Lapsed</option>
          <option value="Matured">Matured</option>
          <option value="New" selected="selected">New</option>
          <option value="Overdue">Overdue</option>
          <option value="Surrendered">Surrendered</option>
        </select>
      </div></td>
    </tr>
    <tr>
      <td height="21" colspan="5">------------------------------------------------------------------------------------------------------------------------------------------</td>
    </tr>
    <tr>
      <td>Product Benefit</td>
      <td><select name="select" id="select">
        <option value="Disability" selected="selected">Disability</option>
        <option value="Fire">Fire</option>
        <option value="Health">Health</option>
        <option value="Investment">Investment</option>
        <option value="Savings">Savings</option>
        <option value="Life/Risk">Life/Risk</option>
        <option value="Medical">Medical</option>
        <option value="Mortgage">Mortgage</option>
        <option value="Superannuation">Superannuation</option>
      </select></td>
      <td>&nbsp;</td>
      <td>Commence:</td>
      <td><input name="textfield29" type="text" class="inputDate" id="textfield29" value="<?php echo date("d-m-Y");?>" size="20" /></td>
    </tr>
    <tr>
      <td>Policy:</td>
      <td><input name="textfield9" type="text" id="textfield9" size="20" /></td>
      <td>&nbsp;</td>
      <td>Renewal Date:</td>
      <td><input name="textfield30" type="text" class="inputDate" id="textfield30" value="<?php echo date("d-m-Y");?>" size="20"/></td>
    </tr>
    <tr>
      <td>Benefits:</td>
      <td><input name="textfield3" type="text" id="textfield3" size="20" /></td>
      <td>&nbsp;</td>
      <td>Mature/Expire:</td>
      <td><input name="textfield25" type="text" id="textfield25" value="<?php echo date("d-m-Y");?>" size="20" /></td>
    </tr>
    <tr>
      <td>Review</td>
      <td><input name="review_link" type="text" id="textfield" size="20" /></td>
      <td>&nbsp;</td>
      <td>Review Date:</td>
      <td><input name="textfield50" type="text" id="textfield50" value="<?php echo date("d-m-Y");?>" size="20" /></td>
    </tr>
    <tr>
      <td colspan="5">------------------------------------------------------------------------------------------------------------------------------------------</td>
    </tr>
    <tr>
      <td>Rate/Sum Insured</td>
      <td>Yearly Premium</td>
      <td>Payment Frequency:</td>
      <td>Premium Installment:</td>
      <td>% Fix/Var</td>
    </tr>
    <tr>
      <td><input name="textfield12" type="text" id="textfield12" value="0" size="20" /></td>
      <td><input name="textfield19" type="text" id="textfield19" value="0" size="20" /></td>
      <td><select name="select11" id="select11">
        <option value="Fortnightly" selected="selected">Fortnightly</option>
        <option value="Half Yearly">Half Yearly</option>
        <option value="Monthly">Monthly</option>
        <option value="Quarterly">Quarterly</option>
        <option value="Single Payment">Single Payment</option>
        <option value="Weekly">Weekly</option>
        <option value="Yearly">Yearly</option>
      </select></td>
      <td><input name="textfield22" type="text" id="textfield22" value="0" size="20" /></td>
      <td><select name="select2" id="select2">
        <option value="F" selected="selected">F</option>
        <option value="V">V</option>
      </select></td>
    </tr>
    <tr>
      <td colspan="5">------------------------------------------------------------------------------------------------------------------------------------------</td>
    </tr>
    <tr>
      <td>Scheme ID:</td>
      <td><input name="textfield32" type="text" id="textfield32" size="20" /></td>
      <td><input name="textfield33" type="text" id="textfield33" size="20" /></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Defer Period:</td>
      <td><input name="textfield15" type="text" id="textfield15" size="20" /></td>
      <td>Excess:</td>
      <td><input name="textfield13" type="text" id="textfield13" value="0" size="20" /></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Benefit Paid:</td>
      <td><input name="textfield16" type="text" id="textfield16" value="0" size="20" /></td>
      <td>Loan Value:</td>
      <td><input name="textfield14" type="text" id="textfield14" value="0" size="20" /></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Comm. 1st Yr:</td>
      <td><input name="textfield17" type="text" id="textfield17" size="20" /></td>
      <td>Paid:</td>
      <td><select name="select5" id="select5">
        <option value="No" selected="selected">No</option>
        <option value="Yes">Yes</option>
      </select></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Comm. 2nd+ Yr:</td>
      <td><input name="textfield18" type="text" id="textfield18" size="20" /></td>
      <td>Paid:</td>
      <td><select name="select6" id="select6">
        <option value="No" selected="selected">No</option>
        <option value="Yes">Yes</option>
      </select></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="5">------------------------------------------------------------------------------------------------------------------------------------------</td>
    </tr>
    <tr>
      <td>Comment:</td>
      <td colspan="4"><textarea name="textfield31" cols="90" rows="3" id="textfield31"></textarea></td>
    </tr>
    <tr>
      <td colspan="5">------------------------------------------------------------------------------------------------------------------------------------------</td>
    </tr>
    <tr>
      <td><input type="submit" name="save_button" id="save_button" value="Save" />
      <input type="submit" name="exit_button" id="exit_button" value="Exit" /></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
</form>
