<?php
	include "connect.php";
	?>
<form method="POST">
	<nav>
		<a href="Posting.php">Posting</a>
		<a href="DaftarPosting.php">Daftar Posting</a>
		<a href="SemuaPosting.php">Semua Posting</a>
		<a href="EditProfile.php">Edit Profile</a>
	</nav>
</form>
<?php
include 'form.php';
	if (isset($_POST['input'])) {
	$NIM = $_POST['NIM'];
	$Nama = $_POST['Nama'];
	$JenisKelamin = $_POST['JenisKelamin'];
	$Fakultas = $_POST['Fakultas'];
	$Hobi = $_POST['Hobi'];
	$Alamat = $_POST['Alamat'];
	$Password = $_POST['Password'];
	$Kelas = $_POST['Kelas'];
 	
 	$query = "UPDATE dataa SET NIM = '$NIM', Nama = '$Nama' , JenisKelamin = '$JenisKelamin',Fakultas = '$Fakultas'
 	,Hobi = '$Hobi', Alamat = '$Alamat' ,Password = '$Password' ,Kelas = '$Kelas' , WHERE NIM = '$NIM'" ;
 	$hasil = mysqli_query($query);

	if ($hasil) {
	echo "<h4> update data success </h4>";
	}
	}
?>