<?php
include "koneksi.php";
$id 	= $_GET['id'];

$query 	= mysqli_query($koneksi, "SELECT * FROM user WHERE id='$id'");
while ($row=mysqli_fetch_array($query)) {

echo "<html>";
echo "<body>";
echo "<font face='Tahoma' color='green' size='4'><b>EDIT DATA</B></font>";
echo "<table align='left'>";
echo "<form method=\"post\" action=\"update.php?id=$id\"enctype='multipart/form-data'>";
echo "<br>";
echo "<tr><td><font face='Tahoma' color='black' size='2'>nama</font></td><td>:</td><td><input type='text' name='nama' size='30' value=".$row['nama']."></td></tr>";
echo "<tr><td><font face='Tahoma' color='black' size='2'>Username</font></td><td>:</td><td><input type='text' name='username' size='30' value=".$row['username'].">
	</td></tr>";
echo "<tr><td><font face='Tahoma' color='black' size='2'>Password</font></td><td>:</td><td><input type='Password' name='password' size='30' value=".$row['password'].">
	</td></tr>";
echo "<tr><td><font face='Tahoma' color='black' size='2'>Level</font></td><td>:</td><td>
<select name='level'><option>".$row['level']."</option><option value='admin'>Admin</option><option value='pengurus'>Pengurus</option><option value='pegawai'>Pegawai</option></select>
</td></tr>";
echo "<tr><td></td><td></td><td><font size='3'><input type='submit' name='submit' value='UPDATE'/> <a href='halaman_admin.php' style='text-decoration: none'>BACK</a></font></td></tr>";
echo "</table></form></body></html>";
}
?>