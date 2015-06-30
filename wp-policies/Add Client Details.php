<form name="form1" method="post" action="">
  <table width="938" border="0">
    <tr>
      <td colspan="5">Last Name
        <input tabindex="3" name="textfield3" type="text" id="textfield3" size="16" />        
        Title
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
      </select>        
        First Name
        <input tabindex="4" name="textfield4" type="text" id="textfield4" size="16" />      
        Client ID
        <input name="textfield" type="text" id="textfield" size="16" readonly="readonly" /></td>
    </tr>
    <tr>
      <td colspan="5">-----------------------------------------------------------------------------------------------------------------------------------------------------------</td>
    </tr>
    <tr>
      <td width="190">Known as</td>
      <td width="164"><input tabindex="5" name="textfield5" type="text" id="textfield5" size="16" /></td>
      <td>Client/Prospect</td>
      <td><div align="right">
        <select tabindex="30" name="select4" id="select4">
          <option <?php if($row->client_prospect == 'Prospect'){echo 'selected';}?> value="Prospect">Prospect</option>
          <option <?php if($row->client_prospect == 'Client'){echo 'selected';}?> value="Client">Client</option>
          <option <?php if($row->client_prospect == 'Supplier'){echo 'selected';}?> value="Supplier">Supplier</option>
        </select>
      </div></td>
      <td width="336">&nbsp;</td>
    </tr>
    <tr>
      <td>Date of Birth</td>
      <td><input tabindex="6" class="inputDate" name="textfield6" type="text" id="birthday" value="<?php echo date("d-m-Y");?>" size="16" /></td>
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
      <td><input name="textfield14" type="text" id="textfield14" size="10" readonly="readonly" /></td>
      <td>Smoker</td>
      <td><div align="right">
        <select tabindex="32" name="select6" id="select6">
          <option <?php if($row->smoker == 'No'){echo 'selected';}?> value="No" selected="selected">No</option>
          <option <?php if($row->smoker == 'Yes'){echo 'selected';}?> value="Yes">Yes</option>
        </select>
      </div></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Marital Status</td>
      <td><select tabindex="8" name="select" id="select">
        <option <?php if($row->marital_status == 'Married'){echo 'selected';}?> value="Married">Married</option>
        <option <?php if($row->marital_status == 'Partner'){echo 'selected';}?> value="Partner">Partner</option>
        <option <?php if($row->marital_status == 'Single'){echo 'selected';}?> value="Single" >Single</option>
        <option <?php if($row->marital_status == 'Widowed'){echo 'selected';}?> value="Widowed">Widowed</option>
        <option <?php if($row->marital_status == 'Divorced/Separated'){echo 'selected';}?> value="Divorced/Separated">Divorced/Separated</option>
      </select></td>
      <td>Status</td>
      <td><div align="right">
        <select tabindex="31" name="select5" id="select5">
          <option <?php if($row->status == 'Active'){echo 'selected';}?> value="Active">Active</option>
          <option <?php if($row->status == 'Growth'){echo 'selected';}?> value="Growth">Growth</option>
          <option  <?php if($row->status == 'Passive'){echo 'selected';}?> value="Passive">Passive</option>
        </select>
      </div></td>
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
      <td>Partner</td>
      <td><input tabindex="7" name="textfield7" type="text" id="textfield7" size="16" /></td>
      <td>Date of Birth</td>
      <td><input class="inputDate" name="textfield8" type="text" id="birthday2" value="<?php echo date("d-m-Y");?>" size="16" /></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Age</td>
      <td><input name="textfield15" type="text" id="textfield15" size="10" readonly="readonly" /></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="5">-----------------------------------------------------------------------------------------------------------------------------------------------------------</td>
    </tr>
    <tr>
      <td>Postal Address</td>
      <td><input tabindex="21" name="textfield22" type="text" id="textfield22" size="25" /></td>
      <td width="108">Tel. Area</td>
      <td width="118"><input tabindex="15" name="textfield16" type="text" id="textfield16" size="16" /></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Residential Address</td>
      <td><input tabindex="23" name="textfield24" type="text" id="textfield24" size="25" /></td>
      <td>Work</td>
      <td><input tabindex="16" name="textfield17" type="text" id="textfield17" size="16" /></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Suburb</td>
      <td><input tabindex="24" name="textfield25" type="text" id="client_suburb" size="16" /></td>
      <td>Home</td>
      <td><input tabindex="17" name="textfield18" type="text" id="textfield18" size="16" /></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>City</td>
      <td><input tabindex="25" name="textfield26" type="text" id="client_city" size="16" /></td>
      <td>Mobile</td>
      <td><input tabindex="18" name="textfield19" type="text" id="textfield19" size="16" /></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Province/State</td>
      <td><input tabindex="26" name="textfield27" type="text" id="client_province" size="16" /></td>
      <td>Fax</td>
      <td><input tabindex="19" name="textfield20" type="text" id="textfield20" size="16" /></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Post Code</td>
      <td><input tabindex="22" name="textfield23" type="text" id="textfield23" size="16" /></td>
      <td>Instant Messaging</td>
      <td><input tabindex="37" name="im" type="text" id="client_province2" size="16" /></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Email</td>
      <td><input tabindex="20" name="textfield21" type="text" id="textfield21" size="25" /></td>
      <td width="108">&nbsp;</td>
      <td width="118">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Website</td>
      <td><input tabindex="38" name="website" type="text" id="client_province3" size="25" /></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="5">-----------------------------------------------------------------------------------------------------------------------------------------------------------</td>
    </tr>
    <tr>
      <td>Employment Status</td>
      <td><select tabindex="10" name="select2" id="select2">
        <option <?php if($row->employment_status == 'Unkown'){echo 'selected';}?> value="Unkown">Unkown</option>
        <option <?php if($row->employment_status == 'Self-Employed'){echo 'selected';}?> value="Self-Employed">Self-Employed</option>
        <option <?php if($row->employment_status == 'Employed'){echo 'selected';}?> value="Employed">Employed</option>
        <option <?php if($row->employment_status == 'Retired'){echo 'selected';}?> value="Retired">Retired</option>
      </select></td>
      <td><input tabindex="33" name="checkbox" type="checkbox" id="checkbox" value="1" <?php if($row->birthday == 1){echo 'checked';}?> />
        Birthday</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Occupational Cat</td>
      <td><input tabindex="11" name="textfield9" type="text" id="textfield9" size="16" /></td>
      <td><input tabindex="34" name="checkbox2" type="checkbox" id="checkbox2" value="1" <?php if($row->newsletter == 1){echo 'checked';}?> />
        Newsletter</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Work Place</td>
      <td><input tabindex="12" name="textfield11" type="text" id="textfield11" size="16" /></td>
      <td><input tabindex="35" name="checkbox3" type="checkbox" id="checkbox3" value="1" <?php if($row->xmas_card == 1){echo 'checked';}?> />
        Xmas Card</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Yearly Income</td>
      <td><input tabindex="9" name="textfield10" type="text" id="yearly_income" size="16" /></td>
      <td><input tabindex="36" name="checkbox4" type="checkbox" id="checkbox4" value="1" <?php if($row->calendar == 1){echo 'checked';}?> />
        Calendar</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Hobbies &amp; Interests</td>
      <td colspan="2"><input tabindex="27" name="textfield28" type="text" id="textfield28" size="33" /></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="5">-----------------------------------------------------------------------------------------------------------------------------------------------------------</td>
    </tr>
    <tr>
      <td>Last Call</td>
      <td><input tabindex="13" name="textfield12" type="text" class="inputDate" id="last_call" value="<?php echo date("d-m-Y");?>" size="16" /></td>
      <td>Reason</td>
      <td colspan="2"><textarea tabindex="14" name="textarea" id="textarea" cols="44" rows="2"></textarea></td>
    </tr>
    <tr>
      <td>Next Call</td>
      <td><input tabindex="28" name="textfield13" type="text" class="inputDate" id="next_call" value="<?php echo date("d-m-Y");?>" size="16" /></td>
      <td>Reason</td>
      <td colspan="2"><textarea tabindex="29" name="textarea2" id="textarea2" cols="44" rows="2"></textarea></td>
    </tr>
    <tr>
      <td colspan="5">-----------------------------------------------------------------------------------------------------------------------------------------------------------</td>
    </tr>
    <tr>
      <td height="21"><input type="submit" name="button" id="save_button" value="Save" />
      <input type="submit" name="button2" id="exit_button" value="Exit" /></td>
      <td height="21">&nbsp;</td>
      <td height="21">&nbsp;</td>
      <td height="21">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
</form>
