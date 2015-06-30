
<table> 
            <tr>
              <td colspan="4"><h2>Policy List</h2></td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td><?php 
			  $user = wp_get_current_user();
			  echo $user->display_name;
			  ?></td>
            </tr>
            <tr>
              <td colspan="9"><?php for($i=0;$i<260;$i++) {echo '-';}?></td>
            </tr>
            <tr>
                <td><strong>Name</strong></td>
                <td><strong>Product</strong></td>
                <td><strong>Company</strong></td>
                <td><strong>Type</strong></td>
                <td><strong>Policy No</strong></td>
                <td><strong>Renewal</strong></td>
                <td><strong>Sum Insured</strong></td>
                <td><strong>Pay Freq</strong></td>
                <td><strong>Prem Instal</strong></td>
           </tr>
            <?php foreach($result as $row): ?>
            <tr>
            <td><?php echo $row->last_name." ".$row->first_name;?></td>
            <td><?php echo $row->type ?></td>
            <td><?php echo $row->company?></td>
            <td><?php echo $row->type?></td>
            <td><?php echo $row->policy_number?></td>
            <td><?php echo date('d-m-Y',strtotime($row->renewal))?></td>
            <td><?php echo $row->sum_insured?></td>
            <td><?php echo $row->pay_freq?></td>
            <td><?php echo $row->prem_install?></td>
           </tr>
            <?php endforeach; ?>      
            <tr>
              <td colspan="9"><?php for($i=0;$i<260;$i++) {echo '-';}?></td>
            </tr>       
              </table>
