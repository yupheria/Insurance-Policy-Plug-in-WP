<table width="700" border="0">
      <?php
      foreach($result as $row):?>
    <tr>
        <td width="207"><h3 align="center"><strong>Client Detail Report</strong></h3></td>
        <td colspan="2"><h2>&nbsp;</h2></td>
        <td width="221"><?php 
			  $user = wp_get_current_user();
			  echo $user->display_name;
			  ?></td>
  </tr>
    <tr>
      <td colspan="4"><?php for($i=0;$i<170;$i++) {echo '-';}?></td>
    </tr>
    <tr>
      <td><h3><?php echo $row->last_name?></h3></td>
      <td width="105"><h3><?php echo $row->title." ".$row->first_name?></h3></td>
      <td width="149"><strong>Client</strong></td>
      <td><?php echo $_GET['user_id']?></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><strong>Known as</strong></td>
      <td><?php echo $row->known_as?></td>
      <td><strong>Client/Prospect:</strong></td>
      <td><?php echo $row->client_prospect?></td>
    </tr>
    <tr>
      <td><strong>Date of Birth</strong></td>
      <td><?php echo date('d-m-Y',strtotime($row->DOB)) ?></td>
      <td><strong>Gender</strong></td>
      <td><?php echo $row->gender?></td>
    </tr>
    <tr>
      <td><strong>Age</strong></td>
      <td><?php echo $row->age?></td>
      <td><strong>Smoker</strong></td>
      <td><?php echo $row->smoker?></td>
    </tr>
    <tr>
      <td><strong>Marital Status</strong></td>
      <td><?php echo $row->marital_status?></td>
      <td><strong>Status</strong></td>
      <td><?php echo $row->status?></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><strong>Partner</strong></td>
      <td><?php echo $row->partner?></td>
      <td><strong>Date of Birth</strong></td>
      <td><?php echo date('d-m-Y',strtotime($row->partner_dob)) ?></td>
    </tr>
    <tr>
      <td><strong>Age</strong></td>
      <td><?php echo $row->partner_age?></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="4"><?php for($i=0;$i<170;$i++) {echo '-';}?></td>
    </tr>
    <tr>
      <td><strong>Postal Address</strong></td>
      <td><?php echo $row->postal_address?></td>
      <td><strong>Tel. Area</strong></td>
      <td><?php echo $row->area?></td>
    </tr>
    <tr>
      <td><strong>Residential Address</strong></td>
      <td><?php echo $row->res_address?></td>
      <td><strong>Work</strong></td>
      <td><?php echo $row->tel_off?></td>
    </tr>
    <tr>
      <td><strong>Suburb</strong></td>
      <td><?php echo $row->suburb?></td>
      <td><strong>Home</strong></td>
      <td><?php echo $row->tel_res?></td>
    </tr>
    <tr>
      <td><strong>City</strong></td>
      <td><?php echo $row->city?></td>
      <td><strong>Mobile</strong></td>
      <td><?php echo $row->tel_mobile?></td>
    </tr>
    <tr>
      <td><strong>Province/State</strong></td>
      <td><?php echo $row->province?></td>
      <td><strong>Fax</strong></td>
      <td><?php echo $row->fax?></td>
    </tr>
    <tr>
      <td><strong>Post Code</strong></td>
      <td><?php echo $row->post_code?></td>
      <td><strong>Instant Messaging</strong></td>
      <td><?php echo $row->im?></td>
    </tr>
    <tr>
      <td><strong>Email</strong></td>
      <td colspan="3"><?php echo $row->email?></td>
    </tr>
    <tr>
      <td><strong>Website</strong></td>
      <td colspan="3"><?php echo $row->website?></td>
    </tr>
    <tr>
      <td height="21" colspan="4"><?php for($i=0;$i<170;$i++) {echo '-';}?></td>
    </tr>
    <tr>
      <td><strong>Employment Status</strong></td>
      <td><?php echo $row->employment_status?></td>
      <td>Xmas Card</td>
      <td><input name="checkbox3" type="checkbox" id="checkbox3" value="1" <?php if($row->xmas_card == 1){echo 'checked';}?> /></td>
    </tr>
    <tr>
      <td><strong>Occupational Category</strong></td>
      <td><?php echo $row->occupation?></td>
      <td>Calendar</td>
      <td><input name="checkbox4" type="checkbox" id="checkbox4" value="1" <?php if($row->calendar == 1){echo 'checked';}?> /></td>
    </tr>
    <tr>
      <td><strong>Work Place</strong></td>
      <td><?php echo $row->work_place?></td>
      <td>Birthday</td>
      <td><input name="checkbox3" type="checkbox" id="checkbox4" value="1" <?php if($row->birthday == 1){echo 'checked';}?> /></td>
    </tr>
    <tr>
      <td><strong>Yearly Income</strong></td>
      <td><?php echo $row->income?></td>
      <td>Newsletter</td>
      <td><input name="checkbox3" type="checkbox" id="checkbox3" value="1" <?php if($row->newsletter == 1){echo 'checked';}?> /></td>
    </tr>
    <tr>
      <td><strong>Hobbies &amp; Interests</strong></td>
      <td colspan="3"><?php echo $row->hobby_interest?></td>
    </tr>
    <tr>
      <td colspan="4"><?php for($i=0;$i<170;$i++) {echo '-';}?></td>
    </tr>
    <tr>
      <td height="21"><strong>Last Call</strong></td>
      <td><strong>Reason</strong></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="21"><?php echo date('d-m-Y',strtotime($row->last_call)) ?></td>
      <td colspan="3"><?php echo $row->last_reason?></td>
    </tr>
    <tr>
      <td height="21"><strong>Next Call</strong></td>
      <td><strong>Reason</strong></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="21"><?php echo date('d-m-Y',strtotime($row->next_call)) ?></td>
      <td colspan="3"><?php echo $row->next_reason?></td>
    </tr>
    <?php endforeach;?>
  </table>