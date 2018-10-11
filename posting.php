<form method="POST">
	<nav>
		<a href="Posting.php">Posting</a>
		<a href="DaftarPosting.php">Daftar Posting</a>
		<a href="SemuaPosting.php">Semua Posting</a>
		<a href="EditProfile.php">Edit Profile</a>
	</nav>
</form>
	<?php
	include 'connect.php';
	?>
	<form action="prosespostingan.php" method="POST" enctype="multipart/form-data">
	<table border="1" cellpadding="2">
	<h2>ASPIRASI MAHASISWA</h2>
	<tr>
		<td>NIM</td>
		<td> : <input type="number" name="NIM"></td>
	</tr>
	<tr>
		<td>Judul</td>
		<td>: <input type="text" name="Judul"></td>
	</tr>
	<tr>
		<td>Cerita Anda</td>
		<td>: <input type="textarea" name="Cerita"></td>
	</tr>
	<tr>
		<td>Masukkan Gambar</td>
		<td>: <input type="file" name="Foto"></td>
			
	</tr>
	<tr>
		<td><input type="submit" name="input" value="input"></td>
	</tr>
</form>
</table>
<?php
	if(isset($_POST['input'])){
		$jumlah = strlen($_POST['Cerita']);
		echo "Jumlah Kata :".$jumlah;
	}
?>