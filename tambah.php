<!DOCTYPE html>
<html>
<head>
	<title>Testing CRUD</title>
</head>
<body>
	<h2>Simple CR<s>U</s>D</h2>
	
	<p><a href="index.php">Beranda</a> / <a href="tambah.php">Tambah Data</a></p>
	
	<h3>Tambah Biodata</h3>
	
	<form action="tambah-proses.php" method="post">
		<table cellpadding="3" cellspacing="0">
			<!-- <tr>
				<td>Id</td>
				<td>:</td>
				<td><input type="text" name="id" required></td>
			</tr> -->
			<tr>
				<td>Nama Lengkap</td>
				<td>:</td>
				<td><input type="text" name="nama" size="30" required></td>
			</tr>
			<tr>
				<td>Kode Pos</td>
				<td>:</td>
				<td><input type="text" name="kodepos" size="30" required></td>
			</tr>
			<tr>
				<td>Nomor Telepon</td>
				<td>:</td>
				<td><input type="text" name="nomortelepon" size="30" required></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td></td>
				<td><input type="submit" name="tambah" value="Tambah"></td>
			</tr>
		</table>
	</form>
</body>
</html>