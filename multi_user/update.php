<?php
include "koneksi.php";
$id = $_GET['id'];

$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
$level = $_POST['level'];

$query=mysqli_query($koneksi, "UPDATE user SET nama='$nama', username='$username', password='$password', level='$level' WHERE id='$id'");

if($query) {
	?>
	<script language="JavaScript">
	document.location='halaman_admin.php'</script>
	<?php
}
?>