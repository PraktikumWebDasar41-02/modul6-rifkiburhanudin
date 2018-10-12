<form method="post">
	nama : <input type="text" name="nama"><br>
	nim : <input type="text" name="nim"><br>
	<input type="submit" name="send" value="log">
</form>

<?php
if (isset($_POST['send'])) {
	session_start();
	$nama = $_POST['nama'];
	$nim = $_POST['nim'];

if ($nama = $_SESSION['nama'] || $nim == $_SESSION['nim']) {
	header("Location :3.php");

}else{
	echo "login eror";
}

}
  ?>