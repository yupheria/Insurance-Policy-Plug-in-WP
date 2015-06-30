<?php 
foreach($result as $row) :
?>
<form id="form1" name="form1" method="post" action="">
<?php $current_user = wp_get_current_user(); ?>
  <table width="855" height="406" border="0">
    <tr>
      <td colspan="2"><h2><a href="?page=edit_client&amp;user_id=<?php echo $user_id?>"><?php echo $row->last_name." ".$row->first_name;?></a></h2></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="7">------------------------------------------------------------------------------------------------------------------------------------------</td>
    </tr>
    <tr>
      <td><p><a href="?page=edit_client&user_id=<?php echo $user_id?>"></a>Client No.</p></td>
      <td><?php echo $_GET['user_id']?></td>
      <td width="140">&nbsp;</td>
      <td>Original Advisor:</td>
      <td><input name="textfield40" type="text" id="textfield40" value="<?php echo $row->original_advisor?>" size="20" readonly="readonly" /></td>
      <td>&nbsp;</td>
      <td width="202">&nbsp;</td>
    </tr>
    <tr>
      <td width="92">Owner</td>
      <td width="133"><input name="owner" type="text" id="owner" size="20" readonly="readonly" value="<?php echo $row->owner?>"/></td>
      <td>&nbsp;</td>
      <td>Current Advisor:</td>
      <td><input name="textfield41" type="text" id="textfield41" value="<?php echo $row->current_advisor?>" size="20" readonly="readonly" /></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Assign to:</td>
      <td><?php wp_dropdown_users( array('show' => 'display_name','selected'=>$row->assign_to,'name'=>'assignment'));?></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>Entry Age:</td>
      <td><input name="textfield28" type="text" id="textfield28" value="<?php echo $row->entry_age?>" size="20" /></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Company:</td>
      <td><input name="textfield6" type="text" id="textfield6" size="20" value="<?php echo $row->company?>"/></td>
      <td>&nbsp;</td>
      <td>Accept:</td>
      <td><div align="right">
        <select name="select9" id="select9">
          <option <?php if($row->accept == 'None'){ echo 'selected';}?> value="None" selected="selected">None</option>
          <option <?php if($row->accept == 'Med. Exam'){ echo 'selected';}?> value="Med. Exam">Med. Exam</option>
          <option <?php if($row->accept == 'Pers. Statement'){ echo 'selected';}?> value="Pers. Statement">Pers. Statement</option>
        </select>
      </div></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Policy No/Abr:</td>
      <td><input name="textfield7" type="text" id="textfield7" size="20" value="<?php echo $row->policy_number?>"/></td>
      <td><input name="textfield8" type="text" id="textfield8" value="<?php echo $row->policy_number2?>" size="20" /></td>
      <td>Smoker:</td>
      <td><div align="right">
        <select name="select7" id="select7">
          <option <?php if($row->smoker == 'No'){ echo 'selected';}?> value="No" selected="selected">No</option>
          <option <?php if($row->smoker == 'Yes'){ echo 'selected';}?> value="Yes">Yes</option>
        </select>
      </div></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="24">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>Status:</td>
      <td><div align="right">
        <select name="select10" id="select10">
          <option <?php if($row->status == 'Current'){ echo 'selected';}?> value="Current">Current</option>
          <option <?php if($row->status == 'Lapsed'){ echo 'selected';}?> value="Lapsed">Lapsed</option>
          <option <?php if($row->status == 'Matured'){ echo 'selected';}?> value="Matured">Matured</option>
          <option <?php if($row->status == 'New'){ echo 'selected';}?> value="New">New</option>
          <option <?php if($row->status == 'Overdue'){ echo 'selected';}?> value="Overdue">Overdue</option>
          <option <?php if($row->status == 'Surrendered'){ echo 'selected';}?> value="Surrendered">Surrendered</option>
        </select>
      </div></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="7">------------------------------------------------------------------------------------------------------------------------------------------</td>
    </tr>
    <tr>
      <td height="24">Product Benefit</td>
      <td><select name="select" id="select">
        <option <?php if($row->type == 'Disability'){ echo 'selected';}?> value="Disability" selected="selected">Disability</option>
        <option <?php if($row->type == 'Fire'){ echo 'selected';}?> value="Fire">Fire</option>
        <option <?php if($row->type == 'Health'){ echo 'selected';}?> value="Health">Health</option>
        <option <?php if($row->type == 'Investment'){ echo 'selected';}?> value="Investment">Investment</option>
        <option <?php if($row->type == 'Savings'){ echo 'selected';}?> value="Savings">Savings</option>
        <option <?php if($row->type == 'Life/Risk'){ echo 'selected';}?> value="Life/Risk">Life/Risk</option>
        <option <?php if($row->type == 'Medical'){ echo 'selected';}?> value="Medical">Medical</option>
        <option <?php if($row->type == 'Mortgage'){ echo 'selected';}?> value="Mortgage">Mortgage</option>
        <option <?php if($row->type == 'Superannuation'){ echo 'selected';}?> value="Superannuation">Superannuation</option>
      </select></td>
      <td>&nbsp;</td>
      <td>Commence:</td>
      <td><input name="textfield29" type="text" id="textfield29" value="<?php echo date('d-m-Y',strtotime($row->commence)) ?>" size="20" /></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Policy:</td>
      <td><input name="textfield9" type="text" id="textfield9" value="<?php echo $row->policy1?>" size="20" /></td>
      <td>&nbsp;</td>
      <td>Renewal Date:</td>
      <td><input name="textfield30" type="text" id="textfield30" size="20" value="<?php echo date('d-m-Y',strtotime($row->renewal)) ?>"/></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Benefits: </td>
      <td><input name="textfield3" type="text" id="textfield3" value="<?php echo $row->benefits?>" size="20" /></td>
      <td>&nbsp;</td>
      <td>Mature/Expire:</td>
      <td><input name="textfield25" type="text" id="textfield25" value="<?php echo date('d-m-Y',strtotime($row->expire1)) ?>" size="20" /></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Review</td>
      <td><input name="review_link" type="text" id="textfield" value="<?php echo $row->review_link?>" size="20" /></td>
      <td>&nbsp;</td>
      <td>Review Date:</td>
      <td><input name="textfield50" type="text" id="textfield50" value="<?php echo date('d-m-Y',strtotime($row->review)) ?>" size="20" /></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="7">------------------------------------------------------------------------------------------------------------------------------------------</td>
    </tr>
    <tr>
      <td>Rate/Sum Insured</td>
      <td>Yearly Premium</td>
      <td>Payment Freqeuncy:</td>
      <td>Premium Installment:</td>
      <td>% Fix/Var</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><input name="textfield12" type="text" id="textfield12" value="<?php echo $row->sum_insured?>" size="20" /></td>
      <td><input name="textfield19" type="text" id="textfield19" value="<?php echo $row->policy_amount1?>" size="20" /></td>
      <td><select name="select11" id="select11">
        <option <?php if($row->pay_freq == 'Fortnightly'){ echo 'selected';}?> value="Fortnightly" selected="selected">Fortnightly</option>
        <option <?php if($row->pay_freq == 'Half Yearly'){ echo 'selected';}?> value="Half Yearly">Half Yearly</option>
        <option <?php if($row->pay_freq == 'Monthly'){ echo 'selected';}?> value="Monthly">Monthly</option>
        <option <?php if($row->pay_freq == 'Quarterly'){ echo 'selected';}?> value="Quarterly">Quarterly</option>
        <option <?php if($row->pay_freq == 'Single Payment'){ echo 'selected';}?> value="Single Payment">Single Payment</option>
        <option <?php if($row->pay_freq == 'Weekly'){ echo 'selected';}?> value="Weekly">Weekly</option>
        <option <?php if($row->pay_freq == 'Yearly'){ echo 'selected';}?> value="Yearly">Yearly</option>
      </select></td>
      <td><input name="textfield22" type="text" id="textfield22" value="<?php echo $row->installment1?>" size="20" /></td>
      <td><select name="select2" id="select2">
        <option <?php if($row->policy_fr1 == 'F'){ echo 'selected';}?> value="F" selected="selected">F</option>
        <option <?php if($row->policy_fr1 == 'V'){ echo 'selected';}?> value="V">V</option>
      </select></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="7">------------------------------------------------------------------------------------------------------------------------------------------</td>
    </tr>
    <tr>
      <td>Scheme ID:</td>
      <td><input name="textfield32" type="text" id="textfield32" value="<?php echo $row->scheme1?>" size="20" /></td>
      <td><input name="textfield33" type="text" id="textfield33" value="<?php echo $row->sum_insured2?>" size="20" /></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Defer Period:</td>
      <td><input name="textfield15" type="text" id="textfield15" value="<?php echo $row->defer_period?>" size="20" /></td>
      <td>Excess:</td>
      <td><input name="textfield13" type="text" id="textfield13" value="<?php echo $row->excess?>" size="20" /></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Benefit Paid:</td>
      <td><input name="textfield16" type="text" id="textfield16" value="<?php echo $row->benefit_paid?>" size="20" /></td>
      <td>Loan Value:</td>
      <td><input name="textfield14" type="text" id="textfield14" value="<?php echo $row->loan_value?>" size="20" /></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="7">------------------------------------------------------------------------------------------------------------------------------------------</td>
    </tr>
    <tr>
      <td>Comm. 1st Yr:</td>
      <td><input name="textfield17" type="text" id="textfield17" value="<?php echo $row->comm_1_yr?>" size="20" /></td>
      <td>Paid:
        <select name="select5" id="select5">
          <option <?php if($row->paid1 == 'No'){ echo 'selected';}?> value="No" selected="selected">No</option>
          <option <?php if($row->paid1 == 'Yes'){ echo 'selected';}?> value="Yes">Yes</option>
        </select></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Comm. 2nd+ Yr:</td>
      <td><input name="textfield18" type="text" id="textfield18" value="<?php echo $row->comm_2_yr?>" size="20" /></td>
      <td>Paid:
        <select name="select6" id="select6">
          <option <?php if($row->paid2 == 'No'){ echo 'selected';}?> value="No">No</option>
          <option <?php if($row->paid2 == 'Yes'){ echo 'selected';}?> value="Yes">Yes</option>
        </select></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="7">------------------------------------------------------------------------------------------------------------------------------------------</td>
    </tr>
    <tr>
      <td>Comment:</td>
      <td colspan="4"><textarea name="textfield31" cols="90" rows="3" id="textfield31"><?php echo $row->comment?></textarea></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="7">------------------------------------------------------------------------------------------------------------------------------------------</td>
    </tr>
    <tr>
      <td colspan="7"><input type="submit" name="button" id="save_button" value="Save" />
        <input type="submit" name="button3" id="print_button" value="Print" />
        <input type="submit" name="print_button_word" id="print_button_word" value="Word" />
        <input type="submit" name="button4" id="delete_button" value="Delete" />
      <input type="submit" name="button2" id="exit_button" value="Exit" /></td>
    </tr>
  </table>
</form>
<?php endforeach;?>
