<?php
session_start();
// var_dump($_SESSION);

if (!isset($_SESSION['status'])) {
  header("location: login.php");
}

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="gaya.css">
  </head>
  <body style="background-color: #e0e1e2;">
    
    <nav class="navbar" style="background-color: #e3f2fd;" fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand logo" href="#">PBW</a>
        <p class="atas">Selamat Datang</p>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">PRAKTIKUM PBW A</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
              <li class="nav-item">
                <a class="nav-link" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Daftar Mahasiswa</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Informasi Tugas</a>
              </li>
            </ul>  
          </div>
          <form class="container-fluid justify-content-start keluar2">
            <button class="btn btn-danger me-2 keluar" type="button"><a  href="logout.php" target="blank">Logout</a></button>
          </form>
        </div>
      </div>
    </nav>
    
    <div class="judul">
      <h2>DAFTAR MAHASISWA</h2>
      <h2>PRAKTIKUM PEMROGRAMAN BERBASIS WEB</h2>
    </div>

    <div class="isi batas" style="background-color: white;">
        <table >
            <tr>
                <td>
                    <button type="button" class="btn btn-success"><a href="tambah.php">Tambah Data</a></button>
                    <button type="button" class="btn btn-danger"><a href="cetak.php">Cetak Laporan</a><ion-icon name="document-outline"></ion-icon></button>
                </td> 
                <td class="cari">
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit"><ion-icon name="search-outline"></ion-icon></button>
                    </form>
                </td> 
            </tr>
                 
        </table >
        <table >
              <tr>
                  <th>NO</th>
                  <th>NIM</th>
                  <th>Nama</th>
                  <th>Dosen</th>
                  <th>Status</th>
                  <th>Keterangan</th>
                  <th>Aksi</th>
              </tr>
              <?php 
              include 'koneksi.php';
              $no = 1;
              $data = mysqli_query($koneksi,"SELECT * from mhs");
              while($d = mysqli_fetch_array($data)){
                ?>
                <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $d['nim']; ?></td>
                  <td><?php echo $d['nama']; ?></td>
                  <td><?php echo $d['dosen']; ?></td>
                  <td><?php echo $d['status']; ?></td>
                  <td><?php echo $d['ket']; ?></td>
                  <td>
                    <button type="button" class="btn btn-secondary btn-sm"><a href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a></button>
                    <button type="button" class="btn btn-danger btn-sm"><a href="hapus.php?id=<?php echo $d['id']; ?>">HAPUS</a></button>
                  </td>
                </tr>
                <?php 
              }
              ?>
        </table>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  </body>
</html>