<!DOCTYPE html>
<html>
<?php
if(isset($_POST['submit'])){
	if(mail($_POST['to'],$_POST['subject'],$_POST['message'])){
		echo"mail sent";
	}
	else{
		echo"failed";
	}
}
?>
<form  method="POST">

to<input type='text' name='to'><br>
subject<input type='text' name='subject'><br>
message<input type='text' maxlength="250" name='message'><br>
<input type='submit' name='submit'>
</form>
</html>