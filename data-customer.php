<!DOCTYPE html>
<html>
<head>
  <title>Olympic E-Book Shop</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
  <script src="js/jquery-3.5.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Olympic E-Book Shop</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="index.php">Beranda<span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="about.php">Tentang Kami</a>
      <a class="nav-item nav-link" href="cara.php">Tata Cara Pembayaran</a>
      <a class="nav-item nav-link" href="contact.php">Hubungi Kami</a>
    </div>
  </div>
</nav>

<?php 
// Include file koneksi ke database
include "koneksi.php";

// Menerima nilai dari kiriman form
$nama = $_POST["nama"];
$email = $_POST["email"];
$jenis = $_POST["pilih"];
$foto = $_POST["foto"];

// Query Input data kedalam tabel
$sql="INSERT INTO konfirmasi VALUES ('$nama','$jenis','$email')";

// Mengeksekusi perintah sql di atas
$hasil = mysqli_query($kon,$sql);

?>
<!-- Recheck apakah berhasil -->
<?php if($hasil) { ?>
    <h3 align="center">Terima Kasih Telah Membeli Produk Kami</h3>
    <p align="center">Link Download E-Book akan kami kirim melalui E-Mail</p>
<?php }else{ ?>
    <h3 align="center">Terima Kasih Telah Membeli Produk Kami</h3>
<?php } ?>

<a href="index.php" class="btn btn-primary"><i class="fa fa-angle-left"> Kembali</i></a>
</body>