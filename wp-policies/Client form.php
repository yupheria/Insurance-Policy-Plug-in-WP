<table width="939" border="0">
      <?php
      foreach($result as $row):?>
    <tr>
      <td colspan="5">Last Name
      <input tabindex="3" name="textfield3" type="text" id="textfield3" value="<?php echo $row->last_name?>" size="16" />      Title
      <select tabindex="1" name="select7" id="select7">
        <option <?php if($row->title == 'Mr'){echo 'selected';}?> value="Mr">Mr</option>
        <option <?php if($row->title == 'Ms'){echo 'selected';}?> value="Ms">Ms</option>
        <option <?php if($row->title == 'Mrs'){echo 'selected';}?> value="Mrs">Mrs</option>
        <option <?php if($row->title == 'Miss'){echo 'selected';}?> value="Miss">Miss</option>
        <option <?php if($row->title == 'Dr'){echo 'selected';}?> value="Dr">Dr</option>
        <option <?php if($row->title == 'Sir'){echo 'selected';}?> value="Sir">Sir</option>
        <option <?php if($row->title == 'Lady'){echo 'selected';}?> value="Lady">Lady</option>
        <option <?php if($row->title == 'Rt. Hon'){echo 'selected';}?> value="Rt. Hon">Rt. Hon</option>
        <option <?php if($row->title == 'Lord'){echo 'selected';}?> value="Lord">Lord</option>
      </select>      First Name
      <input tabindex="4" name="textfield4" type="text" id="textfield4" value="<?php echo $row->first_name?>" size="16" />      Client ID
      <input name="textfield" type="text" id="textfield" value="<?php echo $_GET['user_id']?>" size="16" readonly="readonly" /></td>
    </tr>
    <tr>
      <td colspan="5">-----------------------------------------------------------------------------------------------------------------------------------------------------------</td>
    </tr>
    <tr>
      <td width="188">Known as</td>
      <td width="233"><input tabindex="5" name="textfield5" type="text" id="textfield5" value="<?php echo $row->known_as?>" size="16" /></td>
      <td width="166">Client/Prospect</td>
      <td width="117"><div align="right">
        <select tabindex="31" name="select4" id="select4">
          <option <?php if($row->client_prospect == 'Prospect'){echo 'selected';}?> value="Prospect">Prospect</option>
          <option value="Client" selected="selected" <?php if($row->client_prospect == 'Client'){echo 'selected';}?>>Client</option>
          <option <?php if($row->client_prospect == 'Supplier'){echo 'selected';}?> value="Supplier">Supplier</option>
        </select>
      </div></td>
      <td width="213">&nbsp;</td>
    </tr>
    <tr>
      <td>Date of Birth</td>
      <td><input tabindex="6" class="inputDate" name="textfield6" type="text" id="birthday" value="<?php echo date('d-m-Y',strtotime($row->DOB)) ?>" size="16" /></td>
      <td>Gender</td>
      <td><div align="right">
        <select tabindex="2" name="select3" id="select3">
          <option <?php if($row->gender == 'Male'){echo 'selected';}?> value="Male">Male</option>
          <option <?php if($row->gender == 'Female'){echo 'selected';}?> value="Female">Female</option>
        </select>
      </div></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Age</td>
      <td><input name="textfield14" type="text" id="textfield14" value="<?php echo $row->age?>" size="10" readonly="readonly" /></td>
      <td>Smoker</td>
      <td><div align="right">
        <select tabindex="33" name="select6" id="select6">
          <option <?php if($row->smoker == 'No'){echo 'selected';}?> value="No" selected="selected">No</option>
          <option <?php if($row->smoker == 'Yes'){echo 'selected';}?> value="Yes">Yes</option>
        </select>
      </div></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Marital Status</td>
      <td><select tabindex="9" name="select" id="select">
        <option <?php if($row->marital_status == 'Married'){echo 'selected';}?> value="Married">Married</option>
        <option <?php if($row->marital_status == 'Partner'){echo 'selected';}?> value="Partner">Partner</option>
        <option <?php if($row->marital_status == 'Single'){echo 'selected';}?> value="Single" >Single</option>
        <option <?php if($row->marital_status == 'Widowed'){echo 'selected';}?> value="Widowed">Widowed</option>
        <option <?php if($row->marital_status == 'Divorced/Separated'){echo 'selected';}?> value="Divorced/Separated">Divorced/Separated</option>
      </select></td>
      <td>Status</td>
      <td><div align="right">
        <select tabindex="32" name="select5" id="select5">
          <option value="Active" selected="selected" <?php if($row->status == 'Active'){echo 'selected';}?>>Active</option>
          <option value="Growth" <?php if($row->status == 'Growth'){echo 'selected';}?>>Growth</option>
          <option  <?php if($row->status == 'Passive'){echo 'selected';}?> value="Passive">Passive</option>
        </select>
      </div></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="5">&nbsp;</td>
    </tr>
    <tr>
      <td>Partner</td>
      <td><input tabindex="7" name="textfield7" type="text" id="textfield7" value="<?php echo $row->partner?>" size="16" /></td>
      <td>Date of Birth</td>
      <td><input tabindex="8" class="inputDate" name="textfield8" type="text" id="birthday2" value="<?php echo date('d-m-Y',strtotime($row->partner_dob)) ?>" size="16" /></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Age</td>
      <td><input name="textfield15" type="text" id="textfield15" value="<?php echo $row->partner_age?>" size="10" readonly="readonly" /></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="5">-----------------------------------------------------------------------------------------------------------------------------------------------------------</td>
    </tr>
    <tr>
      <td>Postal Address</td>
      <td><input tabindex="22" name="textfield22" type="text" id="textfield22" value="<?php echo $row->postal_address?>" size="25" /></td>
      <td>Tel. Area</td>
      <td><input tabindex="16" name="textfield16" type="text" id="textfield16" value="<?php echo $row->area?>" size="16" /></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Residential Address</td>
      <td><input tabindex="24" name="textfield24" type="text" id="textfield24" value="<?php echo $row->res_address?>" size="25" /></td>
      <td>Work</td>
      <td><input tabindex="17" name="textfield17" type="text" id="textfield17" value="<?php echo $row->tel_off?>" size="16" /></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Suburb</td>
      <td><input tabindex="25" name="textfield25" type="text" id="client_suburb" value="<?php echo $row->suburb?>" size="16" /></td>
      <td>Home</td>
      <td><input tabindex="18" name="textfield18" type="text" id="textfield18" value="<?php echo $row->tel_res?>" size="16" /></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>City</td>
      <td><input tabindex="26" name="textfield26" type="text" id="client_city" value="<?php echo $row->city?>" size="16" /></td>
      <td>Mobile</td>
      <td><input tabindex="19" name="textfield19" type="text" id="textfield19" value="<?php echo $row->tel_mobile?>" size="16" /></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Province/State</td>
      <td><input tabindex="27" name="textfield27" type="text" id="client_province" value="<?php echo $row->province?>" size="16" /></td>
      <td>Fax</td>
      <td><input tabindex="20" name="textfield20" type="text" id="textfield20" value="<?php echo $row->fax?>" size="16" /></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Post Code</td>
      <td><input tabindex="23" name="textfield23" type="text" id="textfield23" value="<?php echo $row->post_code?>" size="16" /></td>
      <td>Instant Messaging</td>
      <td><input tabindex="38" name="im" type="text" id="client_province2" size="16" value="<?php echo $row->im?>"/></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Email:</td>
      <td height="21" colspan="3"><input tabindex="21" name="textfield21" type="text" id="textfield21" value="<?php echo $row->email?>" size="25" /></td>
      <td height="21">&nbsp;</td>
    </tr>
    <tr>
      <td height="21">Website</td>
      <td colspan="3"><input tabindex="39" name="website" type="text" id="client_province3" size="25" value="<?php echo $row->website?>"/></td>
      <td width="213">&nbsp;</td>
    </tr>
    <tr>
      <td height="21" colspan="5">-----------------------------------------------------------------------------------------------------------------------------------------------------------</td>
    </tr>
    <tr>
      <td height="21">Employment Status</td>
      <td><select tabindex="11" name="select2" id="select2">
        <option <?php if($row->employment_status == 'Unkown'){echo 'selected';}?> value="Unkown">Unkown</option>
        <option <?php if($row->employment_status == 'Self-Employed'){echo 'selected';}?> value="Self-Employed">Self-Employed</option>
        <option <?php if($row->employment_status == 'Employed'){echo 'selected';}?> value="Employed">Employed</option>
        <option <?php if($row->employment_status == 'Retired'){echo 'selected';}?> value="Retired">Retired</option>
      </select></td>
      <td><input tabindex="34" name="checkbox" type="checkbox" id="checkbox" value="1" <?php if($row->birthday == 1){echo 'checked';}?> />
        Birthday</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="21">Occupational Cat</td>
      <td><input tabindex="12" name="textfield9" type="text" id="textfield9" value="<?php echo $row->occupation?>" size="16" /></td>
      <td><input tabindex="35" name="checkbox2" type="checkbox" id="checkbox2" value="1" <?php if($row->newsletter == 1){echo 'checked';}?> />
        Newsletter</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="21">Work Place</td>
      <td><input tabindex="13" name="textfield11" type="text" id="textfield11" value="<?php echo $row->work_place?>" size="16" /></td>
      <td><input tabindex="36" name="checkbox3" type="checkbox" id="checkbox3" value="1" <?php if($row->xmas_card == 1){echo 'checked';}?> />
        Xmas Card</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="21">Yearly Income</td>
      <td><input tabindex="10" name="textfield10" type="text" id="yearly_income" value="<?php echo $row->income?>" size="16" /></td>
      <td><input tabindex="37" name="checkbox4" type="checkbox" id="checkbox4" value="1" <?php if($row->calendar == 1){echo 'checked';}?> />
        Calendar</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="21">Hobbies &amp; Interests</td>
      <td colspan="3"><input tabindex="28" name="textfield28" type="text" id="textfield28" value="<?php echo $row->hobby_interest?>" size="33" /></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="21" colspan="5">-----------------------------------------------------------------------------------------------------------------------------------------------------------</td>
    </tr>
    <tr>
      <td height="21">Last Call</td>
      <td><input tabindex="14" name="textfield12" type="text" class="inputDate" id="last_call" value="<?php echo date('d-m-Y',strtotime($row->last_call)) ?>" size="16" /></td>
      <td>Reason</td>
      <td colspan="2"><textarea tabindex="15" name="textarea" id="textarea" cols="44" rows="2"><?php echo $row->last_reason?></textarea></td>
    </tr>
    <tr>
      <td height="21">Next Call</td>
      <td><input tabindex="29" name="textfield13" type="text" class="inputDate" id="next_call" value="<?php echo date('d-m-Y',strtotime($row->next_call)) ?>" size="16" /></td>
      <td>Reason</td>
      <td colspan="2"><textarea tabindex="30" name="textarea2" id="textarea2" cols="44" rows="2"><?php echo $row->next_reason?></textarea></td>
    </tr>
    <tr>
      <td height="21" colspan="5">-----------------------------------------------------------------------------------------------------------------------------------------------------------</td>
    </tr>
    <tr>
      <td height="21" colspan="5"><input type="submit" name="button" id="save_button" value="Save" />
        <input type="submit" name="button3" id="print_button" value="Print" />
        <input type="submit" name="print_button_word" id="print_button_word" value="Word" />
        <input type="submit" name="button4" id="delete_button" value="Delete" />
        <input type="submit" name="button2" id="exit_button" value="Exit" />
        <input type="submit" name="display_policies_button" id="display_policies_button" value="Display Policies" />
        <input type="submit" name="add_policy_button" id="add_policy_button" value="Add Policy" />
        <input type="submit" name="submit_ticket_button" id="submit_ticket_button" value="Submit Ticket" />
        </a>
      <input type="submit" name="view_notes_button" id="view_notes_button" value="View Notes" /></td>
    </tr>
    <?php endforeach;?>
  </table>