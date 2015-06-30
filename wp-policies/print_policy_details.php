<?php
foreach($result as $row) :
?>
<?php $current_user = wp_get_current_user(); ?>
<form id="form1" name="form1" method="post" action="">
  <table width="647" height="653" border="0">
    <tr>
      <td colspan="2"><h2 align="center">Product Details Report</h2></td>
      <td></td>
      <td></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="21" colspan="5"><?php for($i=0;$i<170;$i++) {echo '-';}?></td>
    </tr>
    <tr>
      <td width="143"><h3><?php echo $row->last_name; ?></h3></td>
      <td width="117"><h3><?php echo $row->first_name; ?></h3></td>
      <td width="153">&nbsp;</td>
      <td width="144">&nbsp;</td>
      <td width="68">&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><strong>Client No.</strong></td>
      <td><?php echo $_GET['user_id']?></td>
      <td>&nbsp;</td>
      <td><strong>Original Advisor</strong></td>
      <td><?php echo $row->original_advisor?></td>
    </tr>
    <tr>
      <td><strong>Owner</strong></td>
      <td><?php echo $row->owner?></td>
      <td>&nbsp;</td>
      <td><strong>Current Advisor</strong></td>
      <td><?php echo $current_user->user_login ?></td>
    </tr>
    <tr>
      <td><strong>Assign to</strong></td>
      <td><?php echo get_userdata($row->assign_to)->display_name;?></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><strong>Entry Age</strong></td>
      <td><?php echo $row->entry_age?></td>
    </tr>
    <tr>
      <td><strong>Company</strong></td>
      <td><?php echo $row->company?></td>
      <td>&nbsp;</td>
      <td><strong>Accept</strong></td>
      <td><?php echo $row->accept ?></td>
    </tr>
    <tr>
      <td><strong>Policy No/Abr</strong></td>
      <td><?php echo $row->policy_number?></td>
      <td><?php echo $row->policy_number2?></td>
      <td><strong>Smoker</strong></td>
      <td><?php echo $row->smoker ?></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><strong>Status</strong></td>
      <td><?php echo $row->status ?></td>
    </tr>
    <tr>
      <td colspan="5"><?php for($i=0;$i<170;$i++) {echo '-';}?></td>
    </tr>
    <tr>
      <td><strong>Product Benefit</strong></td>
      <td><?php echo $row->type?></td>
      <td>&nbsp;</td>
      <td><strong>Commence</strong></td>
      <td><?php echo date('d-m-Y',strtotime($row->commence)) ?></td>
    </tr>
    <tr>
      <td><strong>Policy</strong></td>
      <td><?php echo $row->policy1?></td>
      <td>&nbsp;</td>
      <td><strong>Renewal Date</strong></td>
      <td><?php echo date('d-m-Y',strtotime($row->renewal)) ?></td>
    </tr>
    <tr>
      <td><strong>Benefits</strong></td>
      <td colspan="2"><?php echo $row->benefits?></td>
      <td><strong>Mature/Expire</strong></td>
      <td><?php echo date('d-m-Y',strtotime($row->expire1)) ?></td>
    </tr>
    <tr>
      <td><strong>Review</strong></td>
      <td><?php echo $row->review_link?></td>
      <td>&nbsp;</td>
      <td><strong>Review Date</strong></td>
      <td><?php echo date('d-m-Y',strtotime($row->review)) ?></td>
    </tr>
    <tr>
      <td colspan="5"><?php for($i=0;$i<170;$i++) {echo '-';}?></td>
    </tr>
    <tr>
      <td><strong>Rate/Sum Insured</strong></td>
      <td><strong>Yearly Premium</strong></td>
      <td><strong>Payment Freqency</strong></td>
      <td><strong>Premium Installment</strong></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><?php echo $row->sum_insured?></td>
      <td><?php echo $row->policy_amount1?></td>
      <td><?php echo $row->pay_freq?></td>
      <td><?php echo $row->installment1?></td>
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
      <td><strong>Scheme ID</strong></td>
      <td><?php echo $row->scheme1?></td>
      <td><?php echo $row->sum_insured2?></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><strong>Defer Period</strong></td>
      <td><?php echo $row->defer_period?></td>
      <td>&nbsp;</td>
      <td><strong>Excess</strong></td>
      <td><?php echo $row->excess?></td>
    </tr>
    <tr>
      <td><strong>Benefit Paid</strong></td>
      <td><?php echo $row->benefit_paid?></td>
      <td>&nbsp;</td>
      <td><strong>Loan Value</strong></td>
      <td><?php echo $row->loan_value?></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><strong>Comm. 1st Yr</strong></td>
      <td><?php echo $row->comm_1_yr?></td>
      <td><strong>Paid</strong></td>
      <td><?php echo $row->paid1?></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><strong>Comm. 2nd+ Yr</strong></td>
      <td><?php echo $row->comm_2_yr?></td>
      <td><strong>Paid</strong></td>
      <td><?php echo $row->paid2?></td>
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
      <td><strong>Comment</strong></td>
      <td colspan="4"><?php echo $row->comment?></td>
    </tr>
  </table>
</form>
<?php endforeach;?>