<?php
include "koneksi.php";
$id = $_GET['id'];

$query = "DELETE FROM user WHERE id = $id";
mysqli_query($koneksi, $query);

?>
<script language="JavaScript">
document.location='halaman_admin.php'</script>
<?php
?>