<?php
echo '<table class="widefat"> 
            <thead>
            <tr>
                <th>Name</th>
                <th>Product</th>
                <th>Company</th>
                <th>Type</th>
                <th>Policy No</th>
                <th>Renewal</th>
                <th>Sum Insured</th>
                <th>Pay Freq</th>
                <th>Prem Instal</th>
                <th>Option</th>
           </tr>
           <tbody>';
            foreach($result as $row):
            echo '<tr>';
            echo '<td height="20"><a target="_blank" href="?page=edit_client&user_id='.$row->user_id.'">'.$row->last_name." ".$row->first_name.'</a></td>';
            echo '<td><a target="_blank" href="'.$_SERVER['PHP_SELF'].'?page=edit-policies&policy_id='.$row->policy_id.'&user_id='.$row->user_id.'">'.$row->type.'</a></td>';
            echo '<td>'.$row->company.'</td>';
            echo '<td>'.$row->type.'</td>';
            echo '<td>'.$row->policy_number.'</td>';
            echo '<td>'.date('d-m-Y',strtotime($row->renewal)).'</td>';
            echo '<td>'.$row->sum_insured.'</td>';
            echo '<td>'.$row->pay_freq.'</td>';
            echo '<td>'.$row->installment1.'</td>';
            echo '<td><a target="_blank" href="?page=add-policies&user_id='.$row->user_id.'"><img src="'.plugins_url('/img/add.jpg' , __FILE__).'" title="Add Policy" alt="Add Policy"></a>
                      <a href="?page=delete-policies&policy_id='.$row->policy_id.'&user_id='.$row->user_id.'"><img src="'.plugins_url('/img/delete.jpg' , __FILE__).'" title="Delete Policy" alt="Delete Policy"></a>
                      <a target="_blank" href="?page=print_policy_page&policy_id='.$row->policy_id.'&user_id='.$row->user_id.'"><img src="'.plugins_url('/img/print.jpg' , __FILE__).'" title="Print Policy" alt="Print Policy"></a>
                      <a href="?page=print_policy_page&policy_id='.$row->policy_id.'&user_id='.$row->user_id.'&mode=w"><img src="'.plugins_url('/img/word.jpg' , __FILE__).'" title="Print Policy" alt="Print Policy"></a>
                    </td>';
            echo '</tr>';
            endforeach;
            echo '</tbody>
           </thead>
              </table>';
?>