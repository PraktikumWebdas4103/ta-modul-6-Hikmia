<?php
include 'connect.php';
$NIM = $_POST['NIM']; 
$query = "SELECT * FROM postingan WHERE NIM = $NIM"; 
$hasil = mysqli_query($query);
$fetch  = mysqli_fetch_assoc($hasil);
?>

<form method="POST" action="edit.php">
<h2>FORM UPDATE</h2>
    <hr>
  <table border="4" cellpadding="2">
    <tr>
      <td>NIM</td>
      <td> : <input type="number" name="NIM"></td>
    </tr>
    <tr>
      <td>Password</td>
      <td>:
      <input type="Password" name="Password"></td>
    </tr>
    <tr>
      <td>Nama</td>
      <td>: <input type="text" name="Nama"></td>
    </tr>
    <tr>
      <td>Jenis Kelamin</td>
      <td>:
      <input type="radio" name="JenisKelamin" value="Perempuan">Perempuan</input><br>
      <input type="radio" name="JenisKelamin" value="Laki-Laki">Laki-Laki</input></td><br>
    </tr>
    <tr>
      <td>Kelas </td>
      <td>:
      <input type="radio" name="Kelas" value="D3MI41-03">D3MI41-03</input><br>
      <input type="radio" name="Kelas" value="D3MI41-04">D3MI41-04</input><br>
      <input type="radio" name="Kelas" value="D3MI41-02">D3MI41-02</input><br>
      <input type="radio" name="Kelas" value="D3MI41-01">D3MI41-01</input></td><br>
    </tr>
    <tr>
      <td>Fakultas</td>
      <td>: <select name="Fakultas">
        <option value="FTE">Fakultas Teknik Elektro</option>
        <option value="FIT">Fakultas Ilmu Terapan</option>
        <option value="FEB">Fakultas Ekonomi dan Bisnis</option>
        <option value="FKB">Fakultas Komunikasi dan Bisnis</option>
        <option value="FIK">Fakultas Industri Kreatif</option>
        <option value="FRI">Fakultas Rekayasa Industri</option>
        <option value="IF">Fakultas Informatika</option>
        </select> </td>
    </tr>
    <tr>
      <td>Hobi</td>
      <td>:
      <input type="checkbox" name="Hobi" value="Basket">Basket</input>
      <input type="checkbox" name="Hobi" value="Berenang">Berenang</input>
      <input type="checkbox" name="Hobi" value="Menggambar">Menggambar</input>
      <input type="checkbox" name="Hobi" value="Badminton">Badminton</input></td>
    </tr>
    <tr>
      <td>Alamat</td>
      <td> : <input type="text" name="Alamat"></td>
    </tr>
    <tr>
      <td>
      <input type="submit" name="input" value="input">
      </td>
    </tr>
  </table>
</form>
</center>
