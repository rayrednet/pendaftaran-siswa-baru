<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap"
    rel="stylesheet">
  <link rel="icon" type="image/x-icon" href="assets/images/favicon.png">

  <title>Pendaftaran Siswa Baru</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="assets/css/fontawesome.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/animate.css">
  <!--

-->
</head>

<body>

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="index.html" class="logo">
              <img src="assets/images/logo.png" alt="" style="max-width: 200px;">
            </a>
            <!-- ***** Logo End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <div class="main-banner" id="top">
    <div class="container">
      <div class="row">
        <div class="col-lg-7">
          <div class="caption header-text">
            <h6>Selamat Datang!</h6>
            <div class="line-dec"></div>
            <h4>Pendaftaran <em>Siswa Baru</em> SMK Coding <span>2023/2023</span></h4>
            <p>Sekolah yang siap membawa karir codingmu ke level selanjutnya! Dengan kami yang tingkatkan semangat dalam belajar dan menciptakan inovasi teknologi!</p>
            <div class="main-button scroll-to-section"><a href="form-daftar.php">Daftar Baru</a></div>
            <span>

            </span>
            <div class="second-button"><a href="list-siswa.php">Pendaftar</a></div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

  <?php if(isset($_GET['status'])): ?>
    <p>
        <?php
            if($_GET['status'] == 'sukses'){
                echo "Pendaftaran siswa baru berhasil!";
            } else {
                echo "Pendaftaran gagal!";
            }
        ?>
    </p>
    <?php endif; ?>
    
</body>
</html>