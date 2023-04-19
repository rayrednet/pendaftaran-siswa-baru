<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap"
    rel="stylesheet">
  <link rel="icon" type="image/x-icon" href="assets/images/favicon.png">

  <title>Formulir Pendaftaran Siswa Baru | SMK Coding</title>

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


    <style>
        body {
            font-family: Arial, sans-serif;
        }
        header {
            background-color: #008B8B;
            color: #fff;
            padding: 10px;
        }
        h3 {
            margin: 0;
            text-align: center;
        }
        form {
            margin: 150px auto;
            max-width: 500px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        fieldset {
            border: none;
            padding: 0;
            margin: 0;
        }
        label {
            display: block;
            margin-bottom: 10px;
        }
        input[type=text], textarea, select {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }
        input[type=radio] {
            margin-right: 5px;
        }
        input[type=submit] {
            background-color: #008B8B;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type=submit]:hover {
            background-color: #006666;
        }
        .error {
            color: #914dc9;
            margin-bottom: 10px;
        }
    </style>

    <header>
        <h4>Formulir Pendaftaran Siswa Baru</h4>
    </header>
<form action="proses-pendaftaran.php" method="POST">


<style>
.gradient-text {
  background: -webkit-linear-gradient(purple, #8E24AA);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  font-size: 36px;
  font-weight: bold;
}
</style>

<h1 class="gradient-text">Pendaftaran Siswa Baru SMK Coding 2023/2023</h1>

<script>
function validateForm() {
    // Get the values from the form fields
    var nama = document.forms["myForm"]["nama"].value;
    var alamat = document.forms["myForm"]["alamat"].value;
    var jenis_kelamin = document.forms["myForm"]["jenis_kelamin"].value;
    var agama = document.forms["myForm"]["agama"].value;
    var sekolah_asal = document.forms["myForm"]["sekolah_asal"].value;

    // Check if the fields are empty
    if (nama == "" || alamat == "" || jenis_kelamin == "" || agama == "" || sekolah_asal == "") {
        alert("Harap isi semua kolom");
        return false;
    }

    // If everything is filled out, submit the form
    return true;
}
</script>
<fieldset>
    <form name="myForm" onsubmit="return validateForm()">
        <p>
            <label for="nama">Nama: </label>
            <input type="text" name="nama" placeholder="Nama lengkap" required/>
        </p>
        <p>
            <label for="alamat">Alamat: </label>
            <textarea name="alamat" required ></textarea>
        </p>
        <p>
            <label for="jenis_kelamin">Jenis Kelamin: </label>
            <label><input type="radio" name="jenis_kelamin" value="laki-laki" required> Laki-laki</label>
            <label><input type="radio" name="jenis_kelamin" value="perempuan" required> Perempuan</label>
        </p>
        <p>
            <label for="agama">Agama: </label>
            <select name="agama" required>
                <option value="">Pilih agama</option>
                <option value="Islam">Islam</option>
                <option value="Kristen">Kristen</option>
                <option value="Katolik">Katolik</option>
                <option value="Hindu">Hindu</option>
                <option value="Budha">Budha</option>
                <option value="Atheis">Atheis</option>
            </select>
        </p>
        <p>
            <label for="sekolah_asal">Sekolah Asal: </label>
            <input type="text" name="sekolah_asal" placeholder="Nama sekolah" required/>
        </p>
        <p>
            <input type="submit" value="Daftar" name="daftar" class="button-purple" />
        </p>
    </form>
</fieldset>
</body> 
</html>