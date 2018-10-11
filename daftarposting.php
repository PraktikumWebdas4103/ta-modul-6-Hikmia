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
	session_start();
?>
	<center>
			<?php
				$NIM = $_SESSION['NIM'];
				$data = mysqli_query($con, "SELECT * FROM postingan WHERE NIM = '$NIM' ");

				while ($fetch = mysqli_fetch_assoc($data)) {

				echo "<table border=2>";
				echo 	"<tr>";
				echo 		"<th> NIM </th>";
				echo 		"<th> Judul </th>";
				echo 		"<th> Cerita </th>";
				echo 		"<th> Foto</th>";
				echo 	"</tr>";
				echo 	"<tr>";
				echo 		"<td>".$fetch['NIM']."</td>";
				echo 		"<td>".$fetch['Judul']. "</td>";
				echo 		"<td>".$fetch['Cerita']."</td>";
				echo 		"<td>".$fetch['Foto']."</td>";
				echo 	"</tr>";
				echo "</table>";
				}
			?>
	</center>
