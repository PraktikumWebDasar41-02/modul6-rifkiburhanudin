<form method="post">
	REGISTRASI
 <br>
 Nama : <input type="text" name="nama"><br>
 Nim  : <input type="text" name="nim"><br>
 <input type="submit" name="submit" value="kirim"><br>

kelas : <br>
<input type="radio" name="kelas" value="4101">S1SI-41-01<br>
<input type="radio" name="kelas" value="4102">S1SI-41-02<br>
<input type="radio" name="kelas" value="4103">S1SI-41-03<br>
<input type="radio" name="kelas" value="4104">S1SI-41-04<br><br>

jenis kelamin : <br>
<input type="radio" name="jeniskel[]" value="Laki-Laki">laki-laki <br>
<input type="radio" name="jeniskel[]" value="Perempuan">Perempuan <br><br>

hobi : <br>
<input type="checkbox" name="hobi[]" value="sepak bola">sepak bola<br>
<input type="checkbox" name="hobi[]" value="volly">volly<br>
<input type="checkbox" name="hobi[]" value="basket">basket<br>
<input type="checkbox" name="hobi[]" value="renang">renang<br><br>

fakultas : <br>
<select name="fakultas">
<option>Pilih Fakultas</option>
<option value="FKB">FKB</option>
<option value="FRI">FRI</option>
<option value="FIF">FIF</option>
<option value="FIT">FIT</option>
</select> <br><br>

alamat : <br>
<textarea name="alamat"></textarea>

</form>

<?php
$konek = mysqli_connect("localhost", "root", "", "modul6");

if (isset($_POST['submit'])) {
	session_start();
	
	$nama = $_POST['nama'];
	$nim = $_POST['nim'];
	$kelas = $_POST['kelas'];
	$jenkel = $_POST['jeniskel'];
	$hobi = $_POST['hobi'];
	$fakultas = $_POST['fakultas'];
	$alamat = $_POST['alamat'];

	$databas = "INSERT INTO jurnal6 (nama,nim,kelas,jeniskel,hobi,fakultas,alamat) VALUES ('$nama', '$nim', '$kelas', 'jenkel', '$hobi', '$fakultas', '$alamat') ";
	$que = mysqli_query($konek, $databas);

if (strlen($nama)>=30) {
	echo "nama harus 35 karakter";
}else{
 echo "";
}

if (strlen($nim)!=10) {
	echo "nim anda salah";
}else{
   echo "";
}

if (strlen($kelas)==0) {
	echo "anda di kelas apa";
}else{
	echo "";
}

if (strlen($jenkel)==0) {
	echo "jenis kelamin anda";
}else{
	echo "";
}

if (strlen($hobi)==0) {
	echo "hobi anda";
}else{
	echo "";
}

if (strlen($fakultas)==0) {
	echo "fakultas kamu";
}else{
	echo "";
}

if (strlen($alamat)) {
	echo "alamat anda";
}else{
	echo "";
}


if ($que) {
	echo "Data bisa di simpan";
	header("Location: 2.php");

}else{
	echo "data tidak bisa di simpan";
}
$_SESSION['nim'] = $nim;
$_SESSION['nama'] = $nama;
}
?>