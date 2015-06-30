<form name="form1" method="post" action="">
  <?php
  if($_GET['page'] == 'edit_client') {
  include('Client form.php');
  }
  if($_GET['page'] == 'print_client_page') {
  include('Client print.php');
  }
  ?>
</form>

