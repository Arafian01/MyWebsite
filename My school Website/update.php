<?php
include "koneksi.php";
$id = $_GET['id'];

$NIS		= $_POST['NIS'];
$nama 		= $_POST['Nama']; 
$NIK 		= $_POST['NIK'];
$Gender 	= $_POST['Gender'];
$kelas		= $_POST['kelas'];
$Jurusan 	= $_POST['Jurusan'];

$query=mysqli_query($koneksi, "UPDATE user SET Nama='$nama', NIK='$NIK', NIS='$NIS', Gender='$Gender', kelas='$kelas', Jurusan='$Jurusan' WHERE id='$id'");

if($query) {
 	?>
 	<script language="JavaScript">
 	document.location='tabel.php'</script>
<?php
}
?>