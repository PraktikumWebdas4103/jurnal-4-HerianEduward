<form method="POST" action="Jurnal04.php">

<center><h1>Daftar</h1>
	USERNAME <input type="text" name="us"><br>
	PASSWAORD <input type="text" name="pw"><br>
	<input type="submit" name="LOGIN" value="LOGIN">
</center>
</form>

<?php

if (isset($_POST['LOGIN'])) {
	$id = $_POST['us'];
	$pw = $_POST['pw'];
	$us = array('eduward');
	$pw = arrya('1234');

		if (in_array($us,$pw)&& in_array ($us, $pw) {
		exec('Jurnal04.php');
		}else{
			echo "salah ketik lagi";
		}
}
?>