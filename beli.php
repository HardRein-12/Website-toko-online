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
    <div class="container">
        <h3>Input Data Pembeli</h3>
        <form action="data-customer.php" method="post">
            <label>Nama:</label>
            <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama" required>
            <label>Produk yang dibeli</label>
            <select name="pilih" class="form-control">
                <option value="javascript">E-Book Javascript</option>
                <option value="html">E-Book Html</option>
                <option value="css">E-Book CSS</option>
            </select>
            <label>E-Mail:</label>
            <input type="text" name="email" class="form-control" placeholder="ex: belibuku@mymail.com" required>
            <label>Konfirmasi Pembayaran:</label>
            <input type="file" name="foto" class="form-control">
            <p>*Konfirmasi pembayaran dalam bentuk foto maksimum ukuran 1Mb</p>
            <nav>
                <br><button type="submit" name="submit" class="btn btn-primary">Submit</button>
                <a href="index.php" class="btn btn-danger">Batal</a>
            </nav>
        </form>
    </div>
</body>