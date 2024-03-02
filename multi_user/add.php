<html>
	<head>
		<meta http-equiv="Content-type" content="text/html; charset=UTF-8">
		<title>Tambah Data Baru</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
	<font face="Tahoma" color="green" size="2"><b><br>Masukan Data Baru</b></font>
		<form action="insert_data.php" method="POST">
			
			<table align="left">
				<tr>
					<td><font face="Tahoma" color="black" size="2">Nama</font></td>
					<td>:</td>
					<td><input type="text" name="nama" size="30"></td>
				</tr>

				<tr>
					<td><font face="Tahoma" color="black" size="2">Username</font></td>
					<td>:</td>
					<td><input type="text" name="username" size="30"></td>
				</tr>
				<tr>
					<td><font face="Tahoma" color="black" size="2">Password</font></td>
					<td>:</td>
					<td><input type="password" name="password" size="30"></td>
				</tr>

				<tr>
					<td><font face="Tahoma" color="black" size="2">Level</font></td>
					<td>:</td>
					<td><select class="form-control" name="level" id="combo1">
					<option value="">Pilih Level</option>
					<option value="admin">Admin</option>
					<option value="pengurus">Pengurus</option>
					<option value="pegawai">Pegawai</option>
					</select></td>
			    </tr>

				<tr>
					<td></td><td></td>
					<td><input type="submit" value="Add"><font face="Tahoma" color="green" size="2">
						<a href="halaman_admin.php" style="text-decoration: none">back</font></a>
					</td>
				</tr>
			</table>
		</form>
	</body>
</html>