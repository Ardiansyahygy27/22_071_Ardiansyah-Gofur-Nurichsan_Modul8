
<!DOCTYPE html>
<html>
	<head>
		<title>Edit Data</title>
		<link rel="stylesheet" href="gayatambah.css">
	</head>
	<body>
	
		<br/>
		<button type="button" class=class="btn btn-secondary btn-sm"><a href="halaman.php">KEMBALI</a></button>
		<br/>
		<br/>
		<h3>EDIT DATA MAHASISWA</h3>
	
		<?php
		include 'koneksi.php';
		$id = $_GET['id'];
		$data = mysqli_query($koneksi,"SELECT * from mhs where id='$id'");
		while($d = mysqli_fetch_array($data)){
			?>
			<form name="editForm" method="post" action="update.php" onsubmit="return validateForm()">
				<table>
					<tr>			
						<td>NIM</td>
						<td>
							<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
							<input type="number" name="nim" value="<?php echo $d['nim']; ?>">
						</td>
					</tr>
					<tr>
						<td>Nama</td>
						<td><input type="text" name="nama" value="<?php echo $d['nama']; ?>"></td>
					</tr>
					<tr>
						<td>Dosen</td>
						<td><input type="text" name="dosen" value="<?php echo $d['dosen']; ?>"></td>
					</tr>
					<tr>
						<td>Status</td>
						<td>
							<input type="radio" name="status" value="Asprak"> Asprak 
							<input type="radio" name="status" value="Praktikan"> Praktikan
						</td>
					</tr>
					<tr>
						<td>Keterangan</td>
						<td>
							<input type="radio" name="ket" value="Hadir"> Hadir
							<input type="radio" name="ket" value="Alpha"> Alpha
						</td>	
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" value="SIMPAN"></td>
					</tr>		
				</table>
			</form>
			<?php 
		}
		?>
	
	<script>
		function validateForm() {
			var nim = document.forms["editForm"]["nim"].value;
			var nama = document.forms["editForm"]["nama"].value;
			var dosen = document.forms["editForm"]["dosen"].value;
			var status = document.querySelector('input[name="status"]:checked');
			var ket = document.querySelector('input[name="ket"]:checked');

			if (nim == "") {
				alert("NIM harus diisi");
				return false;
			}

			if (nama == "") {
				alert("Nama harus diisi");
				return false;
			}

			if (dosen == "") {
				alert("Dosen harus diisi");
				return false;
			}

			if (!status) {
				alert("Status harus dipilih");
				return false;
			}

			if (!ket) {
				alert("Keterangan harus dipilih");
				return false;
			}
		}
	</script>

	</body>
</html>
