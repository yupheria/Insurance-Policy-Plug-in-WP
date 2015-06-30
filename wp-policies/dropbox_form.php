<br />
<div>
<form method="POST">
Dropbox Email: <input type="text" name="dropbox_user" id="dropbox_user" value="<?php echo $current_user->dropbox_user?>" />    
Dropbox Password: <input type="password" name="dropbox_pass" id="dropbox_pass" value="<?php echo $current_user->dropbox_pass?>"/>
<input type="submit" value="Save" name="save_dropbox">
</form>
</div>
<br />
<div>
<form method="POST">
SkyDrive Email: <input type="text" name="skydrive_user" id="skydrive_user" value="<?php echo $current_user->skydrive_user?>" />    
SkyDrive Password: <input type="password" name="skydrive_pass" id="skydrive_pass" value="<?php echo $current_user->skydrive_pass?>"/>
<input type="submit" value="Save" name="save_skydrive">
</form>
</div>
<br />
<form method="POST" enctype="multipart/form-data">
<input type="file" name="file" /><br><br>
<input type="submit" value="Upload the file to my Dropbox!" />
<input style="display:none" type="text" name="dest" value="shared" />
<br />