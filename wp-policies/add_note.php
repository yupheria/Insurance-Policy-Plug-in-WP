<?php foreach($result as $row){
	echo "<h3>".$row->last_name." ".$row->first_name."</h3>";
}?>
<form name="form1" method="post" action="">
  <p>
    <textarea name="textarea" id="textarea" cols="45" rows="5"></textarea>
  </p>
  <p>
    <input type="submit" name="add_note_button" id="add_notes_button" value="Add Note">
    <input type="submit" name="cancel" id="exit" value="Exit">
  </p>
</form>
