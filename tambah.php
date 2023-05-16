<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data</title>
	<link rel="stylesheet" href="gayatambah.css">
</head>
<body>
	<br/>
	<button type="button" class="btn btn-secondary btn-sm"><a href="halaman.php">KEMBALI</a></button>
	<br/>
	<br/>
	<h3>TAMBAH DATA MAHASISWA</h3>
	<form method="POST" action="tambah_aksi.php" onsubmit="return validateForm()">
		<table>
			<tr>
				<td>NIM</td>
				<td><input type="number" name="nim" id="nim"></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama" id="nama"></td>
			</tr>
			<tr>
				<td>Dosen</td>
				<td><input type="text" name="dosen" id="dosen"></td>
			</tr>
			<tr>
				<td>Status</td>
				<td>
					<input type="radio" name="status" value="Asprak" id="asprak"> Asprak
					<input type="radio" name="status" value="Praktikan" id="praktikan"> Praktikan
				</td>
			</tr>
			<tr>
				<td>Keterangan</td>
				<td>
					<input type="radio" name="ket" value="Hadir" id="hadir"> Hadir
					<input type="radio" name="ket" value="Alpha" id="alpha"> Alpha
				</td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>
		</table>
	</form>

	<script>
		function validateForm() {
			var nim = document.getElementById("nim").value;
			var nama = document.getElementById("nama").value;
			var dosen = document.getElementById("dosen").value;
			var asprak = document.getElementById("asprak").checked;
			var praktikan = document.getElementById("praktikan").checked;
			var hadir = document.getElementById("hadir").checked;
			var alpha = document.getElementById("alpha").checked;

			if (nim === "" || nama === "" || dosen === "" || !asprak && !praktikan || !hadir && !alpha) {
				alert("Harap lengkapi semua data!");
				return false;
			}
		}
	</script>
</body>
</html>
