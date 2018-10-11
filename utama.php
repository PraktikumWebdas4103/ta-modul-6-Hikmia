<form action="" method="POST">
	<nav>
		<a href="Posting.php">Posting</a>
		<a href="DaftarPosting.php">Daftar Posting</a>
		<a href="SemuaPosting.php">Semua Posting</a>
		<a href="EditProfile.php">Edit Profile</a>
	</nav>
</form>
	<?php
	include 'connect.php';
	session_start();
?>
	<center>
			<?php
				$NIM = $_SESSION['NIM'];
				$data = mysqli_query($con, "SELECT * FROM dataa WHERE NIM = '$NIM' ");

				while ($fetch = mysqli_fetch_assoc($data)) {

				echo "<table border=2>";
				echo 	"<tr>";
				echo 		"<th> NIM </th>";
				echo 		"<th> Nama </th>";
				echo 		"<th> Kelas </th>";
				echo 		"<th> Fakultas</th>";
				echo 		"<th> Hobi </th>";
				echo 		"<th> Alamat </th>";
				echo 		"<th> JenisKelamin </th>";
				echo 	"</tr>";
				echo 	"<tr>";
				echo 		"<td>".$fetch['NIM']."</td>";
				echo 		"<td>".$fetch['Nama']. "</td>";
				echo 		"<td>".$fetch['Kelas']."</td>";
				echo 		"<td>".$fetch['Fakultas']."</td>";
				echo 		"<td>".$fetch['Hobi']."</td>";
				echo 		"<td>".$fetch['Alamat']."</td>";
				echo 		"<td>".$fetch['JenisKelamin']."</td>";
				echo 	"</tr>";
				echo "</table>";
				}
			?>
	</center>
