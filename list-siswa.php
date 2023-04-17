<?php include("config.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>List Siswa Mendaftar | SMK Coding</title>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="icon" type="image/x-icon" href="assets/images/favicon.png">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/fontawesome.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/animate.css">
  <link rel="stylesheet" href="assets/css/custom.css">
</head>
<body>
  <header class="header-area header-sticky">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <a href="index.html" class="logo">
              <img src="assets/images/logo.png" alt="SMK Coding" style="max-width: 200px;">
            </a>
          </nav>
        </div>
      </div>
    </div>
  </header>
  <main>
    <section class="hero-section" style="margin-top: 130px;">
      <div class="container" >
        <div class="row">
          <div class="col-12">
          <style>
            .gradient-text {
                background: -webkit-linear-gradient(purple, #8E24AA);
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
                font-size: 36px;
                font-weight: bold;
            }
            </style>
            <h1 class="gradient-text">Siswa yang Sudah Mendaftar</h1>
            <a href="form-daftar.php" class="btn btn-primary btn-lg mt-4">(+) Tambah Baru</a>
          </div>
        </div>
      </div>
    </section>
    <section class="table-section">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Alamat</th>
                  <th>Jenis Kelamin</th>
                  <th>Agama</th>
                  <th>Sekolah Asal</th>
                  <th>Tindakan</th>
                </tr>
              </thead>
              <tbody>

        <?php
        $sql = "SELECT * FROM calon_siswa";
        $query = mysqli_query($db, $sql);

        while($siswa = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$siswa['id']."</td>";
            echo "<td>".$siswa['nama']."</td>";
            echo "<td>".$siswa['alamat']."</td>";
            echo "<td>".$siswa['jenis_kelamin']."</td>";
            echo "<td>".$siswa['agama']."</td>";
            echo "<td>".$siswa['sekolah_asal']."</td>";

            echo "<td>";
    
            echo "<a class='btn-edit' href='form-edit.php?id=".$siswa['id']."'>Edit</a>";
            echo "<a class='btn-delete' href='hapus.php?id=".$siswa['id']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>

    </tbody>
    </table>

    <div class="d-flex justify-content-end">
        <p>Total Siswa: <?php echo mysqli_num_rows($query) ?></p>
    </div>

    </body>
</html>