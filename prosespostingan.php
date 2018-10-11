<?php
include 'connect.php';

 	if(isset($_POST['input'])){
	$NIM = $_POST['NIM'];
	$Judul = $_POST['Judul'];
	$Cerita = $_POST['Cerita'];
	$Foto = $_FILES['Foto']['name'];

	$sql = "INSERT INTO postingan (NIM,Judul,Cerita,Foto) values ('$NIM','$Judul','$Cerita','$Foto')";
	if (mysqli_query($con, $sql)){
		echo "<center>Database sudah masuk</center>";
	}else{
		echo "ERROR";
	}
}
?>