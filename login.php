<?php 
include 'connect.php';
?>
<form method="POST">
	<center>
	<body>
	<table border="1">
		<tr>
	<td>NIM:</td>
	<td><input type="text" name="NIM"></td>
		</tr>
		<tr>
	<td>Password:</td>
	<td><input type="Password" name="Password"></td>
		</tr>
		<tr>
	<td><input type="Submit" name="submit" value="Login"></td>
		</tr>
	</table>
</form>

<?php
session_start();
	if(isset($_POST['submit'])){
	$NIM = $_POST['NIM'];
	$Password=md5($_POST['Password']);

	$data = mysqli_query($con, "SELECT * FROM dataa WHERE NIM = '$NIM' AND Password = '$Password' ");
	$baris = mysqli_num_rows($data);

	if (isset($baris)) {
		$_SESSION['NIM'] = $NIM;
		header("location:utama.php");
	}

}
?>