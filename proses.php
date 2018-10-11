<?php
include 'connect.php';

 	if(isset($_POST['input'])){
	$NIM = $_POST['NIM'];
	$Nama = $_POST['Nama'];
	$JenisKelamin = $_POST['JenisKelamin'];
	$Fakultas = $_POST['Fakultas'];
	$Hobi = $_POST['Hobi'];
	$Alamat = $_POST['Alamat'];
	$Password = $_POST['Password'];
	$Kelas = $_POST['Kelas'];

	$sql = "INSERT INTO dataa (NIM,Nama,JenisKelamin,Fakultas,Hobi,Alamat,Kelas,Password) values ('$NIM','$Nama','$Password','$JenisKelamin','$Fakultas','$Hobi','$Alamat','$Kelas')";
	if (mysqli_query($con, $sql)){
		echo "<center>Database sudah masuk</center>";
		echo "<a href = 'login.php'>klik</a>";
	}else{
		echo "ERROR";
	}
}
?>