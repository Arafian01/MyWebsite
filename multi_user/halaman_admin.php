<!DOCTYPE html>
<html>
<head>
	<title>Halaman admin </title>
	<link rel="stylesheet" type="text/css" href="n/style.css">
</head>
<body>
	<?php 
	session_start();

	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:index.php?pesan=gagal");
	}

	?>

	<nav>
		<div class="wrapper">
			<div class="logo"><a href="">Halaman Admin</a></div>
			<div class="menu">
				<ul>
					<li><a href="halaman_admin.php">Home</a></li>
					<li><a href="Add.php">Tambah Data</a></li>
					<li><a href="index.php">Logout</a></li>
				</ul>
			</div>
		</div>
	</nav>

	<div class="box">

		<p>Halo <b><?php echo $_SESSION['username']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['level']; ?></b>.</p>
	</div>

	<?php  
include "koneksi.php";
$query=mysqli_query($koneksi, "SELECT * FROM user")or die(mysqli_error());
$jumlah = mysqli_num_rows($query);

echo "<br><table border=\"0\" cellpadding=\"5\" bordercolor=\"blue\" bgcolor=\"white\">
<tr bgcolor='blue' height=\"30\"><font color='white'>
	<th align='center'><font color='white' face='Arial' size=2>No</font></th>
	<th align='center'><font color='white' face='Arial' size=2>Nama</font></th>
	<th align='center'><font color='white' face='Arial' size=2>Username</font></th>
	<th align='center'><font color='white' face='Arial' size=2>Password</font></th>
	<th align='center'><font color='white' face='Arial' size=2>Level</font></th>
	<th align='center'><font color='white' face='Arial' size=2>Ubah?</font></th>
</tr>";
$j=0;
while ($row=mysqli_fetch_array($query)) {
	echo "<tr><td align='left' bgcolor='#657FFF'>";
	echo "<font face='Arial' size=1>";
	echo $j+1;
	echo "</font>";
	echo "</td>";
	echo "<td align='left' bgcolor='#E8D3DF'>";
	echo "<font face='Arial' size=1>";
	echo $row["nama"];
	echo "</font>";
	echo "</td>";
	echo "<td align='left' bgcolor='#E8D3DF'>";
	echo "<font face='Arial' size=1>";
	echo $row["username"];
	echo "</font>";
	echo "</td>";
	echo "<td align='left' bgcolor='#E8D3DF'>";
	echo "<font face='Arial' size=1>";
	echo $row["password"];
	echo "</font>";
	echo "</td>";
	echo "<td align='left' bgcolor='#E8D3DF'>";
	echo "<font face='Arial' size=1>";
	echo $row["level"];
	echo "</font>";
	echo "</td>";
	echo "<td align='left' bgcolor='#E8D3DF'>";
	echo "<a href='delete.php?id=".$row['id']."' style=\"text-decoration: none\" title=\"Hapus\"><font face='tahoma' size='1'>Hapus</font></a>
	<a href='edit.php?id=".$row['id']."' style=\"text-decoration:none\" title=\"Edit\"><font face='tahoma' size='1'>Edit</font></a>";
	$j++; }
	echo "</table>";
?>


</body>
</html>