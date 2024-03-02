<?php
include "koneksi.php";
$nama = $_POST['Nama'];
$NIK = $_POST['NIK'];
$NIS = $_POST['NIS'];
$Gender = $_POST['Gender'];
$kelas = $_POST['kelas'];
$Jurusan = $_POST['Jurusan'];

$query=mysqli_query($koneksi, "INSERT INTO user (Nama, NIK, NIS, Gender, kelas, Jurusan)
	VALUES ('$nama','$NIK','$NIS','$Gender','$kelas','$Jurusan')") or die (mysqli_error());
if ($query) {
?>
<script language="JavaScript">
	document.location='tabel.php'</script>
<?php
 }
?>