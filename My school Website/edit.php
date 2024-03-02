<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/aos.css">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/tooplate-gymso-style.css">

    <title>FORM EDIT DATA</title>
  </head>
  <body data-spy="scroll" data-target="#navbarNav" data-offset="50">
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="tabel.php"><img src="images/logo.png" alt="" width="70px" class="d-inline-block align-text-top">
            <a href="edit.php" class="nav_logo"> 
            <img src="/img/header/logo_warna_smk_jadi_PNG.png" alt=""></a></a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"aria-expanded="false"aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-lg-auto">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link smoothScroll">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="tabel.php" class="nav-link smoothScroll">Tabel Data</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

<?php
        include "koneksi.php";
    $id   = $_GET['id'];
        $query  =mysqli_query($koneksi, "SELECT * FROM user WHERE id='$id'")or die(mysqli_error());
    while ($row=mysqli_fetch_array($query)) {
  ?>

   <section class="schedule section" id="tabel">
      <div class="container">
        <div class="col-lg-12 col-12 text-center">
         <h2 class="text-white" data-aos="fade-up" data-aos-delay="200">F0RM EDIT DATA</h2>
        </div>
        <form action="update.php?id=<?php echo $id; ?>" method="POST" data-aos="fade-up" data-aos-delay="300">
          <div class="mb-3">
            <label for="nis" class="fs-4" style="color: white">NIS</label>
            <input type="number" class="form-control" id="nik" name="NIS" required value='<?php echo $row['NIS'] ?>'>
          </div>
          <div class="mb-3">
            <label for="nama" class="fs-4" style="color: white">Nama</label>
            <input type="text" class="form-control" id="nama" name="Nama" required value='<?php echo $row['Nama'] ?>'>
          </div>
          <div class="mb-3">
            <label for="nik" class="fs-4" style="color: white">NIK</label>
            <input type="number" class="form-control" id="nik" name="NIK" required value='<?php echo $row['NIK'] ?>'>
          </div>

          <div class="mb-3">
            <div class="container">
              <div class="row">
                <div class="row align-items-start">
                <div class="col">
                <label style="color: white" class="fs-4">Jenis Kelamin :</label>
                </div>
                <div class="col">
                    <?php
                      if ($row['Gender'] == 'Laki-Laki') {
                        ?><input class="form-check-input fs-5" type='radio' name='Gender' id='inlineRadio1' checked value="Laki-Laki">
                      <?php 
                      }else{
                        ?><input class="form-check-input fs-5" type='radio' name='Gender' id='inlineRadio1' value="Laki-Laki">
                      <?php
                      }
                    ?>
                <label class="form-check-label fs-5" for='inlineRadio1' style="color: white">Laki-Laki</label>
                </div>
                <div class="col">
                  <?php
                      if ($row['Gender'] == 'Perempuan') {
                        ?><input class="form-check-input fs-5" type='radio' name='Gender' id='inlineRadio2' checked value="Perempuan">
                      <?php 
                      }else{
                        ?><input class="form-check-input fs-5" type='radio' name='Gender' id='inlineRadio2' value="Perempuan">
                      <?php
                      }
                    ?>
                <label class="form-check-label fs-5" for='inlineRadio2' style="color: white">Perempuan</label>

              </div>
            </div>
          </div>
        </div>
          </div>
          <div class="mb-3">
            <label class="fs-4" style="color: white">Kelas</label>
            <select class='form-select form-select-lg mb-3' aria-label='.form-select-lg example' name='kelas'>
              <option <?php if ($row['kelas'] == 'X') { echo 'selected'; } ?> value='X'>X</option>
              <option <?php if ($row['kelas'] == 'XI') { echo 'selected'; } ?> value='XI'>XI</option>
              <option <?php if ($row['kelas'] == 'XII') { echo 'selected'; } ?> value='XII'>XII</option>
            </select>
          </div>
          <div class="mb-3">
            <label class="fs-4" style="color: white">Jurusan</label>
              <select class='form-select form-select-lg mb-3' aria-label='.form-select-lg example' name='Jurusan'>
            <option <?php if ($row['Jurusan'] == 'TKR') { echo 'selected'; } ?> value='TKR'>TKR</option>
            <option <?php if ($row['Jurusan'] == 'TKJ') { echo 'selected'; } ?> value='TKJ'>TKJ</option>
            <option <?php if ($row['Jurusan'] == 'RPL') { echo 'selected'; } ?> value='RPL'>RPL</option>
            <option <?php if ($row['Jurusan'] == 'OTKP') { echo 'selected'; } ?> value='OTKP'>OTKP</option>
            <option <?php if ($row['Jurusan'] == 'AKL') { echo 'selected'; } ?> value='AKL'>AKL</option>
            <option <?php if ($row['Jurusan'] == 'DPIB') { echo 'selected'; } ?> value='DPIB'>DPIB</option>
            <option <?php if ($row['Jurusan'] == 'SK') { echo 'selected'; } ?> value='SK'>SK</option>
          </select>
          </div>
          <tr>
              <a href="tabel.php" class="btn custom-btn btn-sm mt-3" style="background-color: orange" data-aos="fade-up" data-aos-delay="200">Kembali</a>
              <button type="submit" class="btn custom-btn bg-color mt-3" data-aos="fade-up" data-aos-delay="200">Simpan</button>
              </tr>
        </form>
    </section>
<?php } ?>

     <section class="contact section" id="about">

     <!-- FOOTER -->
     <footer class="site-footer">
          <div class="container">
               <div class="row">
                    <div class="mt-5 mt-lg-4 col-lg-4 col-md-6 col-12">
                        <h4>Tentang SMKN 1 KAWALI</h4>
                        <p>SMKN 1 Kawali merupakan sebuah SMK Negeri di kawasan Ciamis Utara yang mulai berdiri tahun 2004</p>
                    </div>
                    <div class="mt-5 mt-lg-4 col-lg-4 col-md-6 col-12">
                        <h4>Hubungi Kami</h4>
                        <p>Jl.Talagasari, No.35 Kawalimukti, Kawali Kabupaten Ciamis Jawa Barat 46252 smkn1kawali@gmail.com 
                        <p>(0265) 791 727-Central Office<p> 
                        <p>(0265) 791 727-fax</p>
                    </div>
                    <div class="mt-5 mt-lg-4 col-lg-4 col-md-6 col-12">
                        <ul class="social-icon">
                        <img src="images/smkbisa.png">
                        <h4>Sosial Media</h4>
                        <li></li>
                        <li><a href="https://youtube.com/SMKN1KawaliOfficial" class="fa fa-youtube"></a></li>
                        <li><a href="https://facebook.com/smkn1kawali" class="fa fa-facebook"></a></li>
                        <li><a href="https://twitter.com/@smkn1kawali" class="fa fa-twitter"></a></li>
                        <li><a href="https://instagram.com/smkn1kawali" class="fa fa-instagram"></a></li>
                        </ul>
                    </div>
               </div>
          </div>
     </footer>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-12 text-center">
                    <h7>©2021 SMKN 1 KAWALI.All right Reserved</h7>
                </div>
            </div>
        </div>
    </footer>
    </section>


     <!-- SCRIPTS -->
     <script src="js/jquery.min.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/aos.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/custom.js"></script>

  </body>
</html>