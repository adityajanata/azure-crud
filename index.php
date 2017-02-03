<!DOCTYPE html>
<html>
<head>
	<title>Testing CRUD</title>
</head>
<body>
	<h2>Simple CR<s>U</s>D</h2>
	
	<p><a href="index.php">Beranda</a> / <a href="tambah.php">Tambah Data</a></p>
	
	<h3>Biodata</h3>
	
	<table cellpadding="5" cellspacing="0" border="1">
		<tr bgcolor="#CCCCCC">
			<th>ID</th>
			<th>Nama</th>
			<th>Kode Pos</th>
			<th>No. Telepon</th>
			<th>Action</th>
		</tr>
		
		<?php
		//include file koneksi ke database
		include("connect.php");
		
		//query ke database dg SELECT table siswa diurutkan berdasarkan NIS paling besar
		$query = mysql_query("SELECT * FROM biodata ORDER BY id DESC") or die(mysql_error());
		
		//cek, apakakah hasil query di atas mendapatkan hasil atau tidak (data kosong atau tidak)
		if(mysql_num_rows($query) == 0){	//ini artinya jika data hasil query di atas kosong
			
			//jika data kosong, maka akan menampilkan row kosong
			echo '<tr><td colspan="6">Tidak ada data!</td></tr>';
			
		}else{	//else ini artinya jika data hasil query ada (data diu database tidak kosong)
			
			//jika data tidak kosong, maka akan melakukan perulangan while
			$no = 1;	//membuat variabel $no untuk membuat nomor urut
			while($data = mysql_fetch_assoc($query)){	//perulangan while dg membuat variabel $data yang akan mengambil data di database
				
				//menampilkan row dengan data di database
				echo '<tr>';
					echo '<td>'.$no.'</td>';	//menampilkan nomor urut
					//echo '<td>'.$data['id'].'</td>';	//menampilkan data nis dari database
					echo '<td>'.$data['nama_peserta'].'</td>';	//menampilkan data nama lengkap dari database
					echo '<td>'.$data['kode_pos'].'</td>';	//menampilkan data kelas dari database
					echo '<td>'.$data['no_tlp'].'</td>';	//menampilkan data jurusan dari database
					echo '<td>Edit / <a href="hapus.php?id='.$data['id'].'" onclick="return confirm(\'Yakin?\')">Hapus</a></td>';	//menampilkan link edit dan hapus dimana tiap link terdapat GET id -> ?id=siswa_id
				echo '</tr>';
				
				$no++;	//menambah jumlah nomor urut setiap row
				
			}
			
		}
		?>
	</table>
</body>
</html>