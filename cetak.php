<!DOCTYPE html>
<html>
	<head>
		<title>CETAK PRINT DATA MAHASISWA</title>
	</head>
	<body>
	
		<center>
	
			<h2>DATA MAHASISWA</h2>
			<h4>PRAKTIKUM PEMROGGRAMAN WEB</h4>
	
		</center>
	
		<?php 
		include 'koneksi.php';
		?>
	
		<table border="1" style="width: 100%">
			<tr>
				<th width="1%">No</th>
				<th>NIM</th>
				<th>Nama</th>
				<th>Dosen</th>
				<th>Status</th>
				<th width="5%">Keterangan</th>
			</tr>
			<?php 
			$no = 1;
			$sql = mysqli_query($koneksi,"SELECT * FROM mhs");
			while($data = mysqli_fetch_array($sql)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $data['nim']; ?></td>
				<td><?php echo $data['nama']; ?></td>
				<td><?php echo $data['dosen']; ?></td>
				<td><?php echo $data['status']; ?></td>
				<td><?php echo $data['ket']; ?></td>
			</tr>
			<?php 
			}
			?>
		</table>
	
		<script>
			window.print();
		</script>
	
	</body>
</html>