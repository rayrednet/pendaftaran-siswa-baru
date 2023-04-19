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
            <a href="index.php" class="logo">
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
            <p>Sekolah yang siap membawa karir codingmu ke level selanjutnya! Dengan kami mari tingkatkan semangat dalam belajar dan menciptakan inovasi teknologi!</p>
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
  <?php
    $status = $_GET['status'];
    $message = '';
    $style = '';
    
    if($status == 'sukses'){
      $message = 'Pendaftaran siswa baru berhasil!';
      $style = 'background-color: #d4edda; color: #155724; border-color: #c3e6cb; padding: .75rem 1.25rem; margin-bottom: 1rem; border: 1px solid transparent; border-radius: .25rem;';
    } else {
      $message = 'Pendaftaran gagal!';
      $style = 'background-color: #f8d7da; color: #721c24; border-color: #f5c6cb; padding: .75rem 1.25rem; margin-bottom: 1rem; border: 1px solid transparent; border-radius: .25rem;';
    }
  ?>
  <div style="<?php echo $style; ?>">
    <?php echo $message; ?>
  </div>
<?php endif; ?>

    
</body>
</html>