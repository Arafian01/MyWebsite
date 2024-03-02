<?php
include "koneksi.php";
$nama = $_POST['nama'];
$username = $_POST['username'];
$pass = $_POST['password'];
$level = $_POST['level'];

$query=mysqli_query($koneksi, "INSERT INTO user(nama, username, password, level)
	VALUES ('$nama','$username','$pass','$level')") or die (mysqli_error());
if ($query) {
?>
<script language="JavaScript">
	document.location='halaman_admin.php'</script>
<?php
}
?>