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

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/tooplate-gymso-style.css">

    <title>FORM TABEL</title>
  </head>
  <body data-spy="scroll" data-target="#navbarNav" data-offset="50">
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="tabel.php"><img src="images/logo.png" alt="" width="70px" class="d-inline-block align-text-top">
            <a href="tabel.php" class="nav_logo"> 
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
                        <a href="#about" class="nav-link smoothScroll">About</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="schedule section" id="tabel">
        <div class="container">
            <div class="row">
                            <?php
                            include "koneksi.php";
                            $query=mysqli_query($koneksi, "SELECT * FROM user ORDER BY NIS ASC")or die(mysqli_error());
                            
                            $jumlah = mysqli_num_rows($query);
                            ?>
                
                <?php if ($jumlah > 0)  { ?>
                  <div class="col-lg-12 col-12 text-center">
                   <h2 class="text-white" data-aos="fade-up" data-aos-delay="200">TABEL PESERTA UKK</h2>
                </div>
                    <table class="table table-bordered table-responsive schedule-table" data-aos="fade-up" data-aos-delay="300">
                        <thead class="thead-light">
                            <th>No</th>
                            <th>NIS</th>
                            <th>Nama</th>
                            <th>NIK</th>
                            <th>Jenis Kelamin</th>
                            <th>Kelas</th>
                            <th>Jurusan</th>
                            <th>Aksi</th>
                        </thead>
                        <?php
                        $j=0;
                        while ($row=mysqli_fetch_array($query)) {
                            echo "<tr><td>";
                            echo $j+1;
                            echo "</td>";
                            echo "<td style='color:white'>";
                            echo $row["NIS"];
                            echo "</td>";
                            echo "<td style='color:white'>";
                            echo $row["Nama"];
                            echo "</td>";
                            echo "<td style='color:white'>";
                            echo $row["NIK"];
                            echo "</td>";
                            echo "<td style='color:white'>";
                            echo $row["Gender"];
                            echo "</td>";
                            echo "<td style='color:white'>";
                            echo $row["kelas"];
                            echo "</td>";
                            echo "<td style='color:white'>";
                            echo $row["Jurusan"];
                            echo "</td>";
                            echo "<td>";
                            echo "<a href='edit.php?id=".$row['id']."' class=\"btn btn-warning btn-sm\" style=\"color: white\">Edit</a>
                            <a href='delete.php?id=".$row['id']."' class=\"btn btn-danger btn-sm\" onclick=\"return confirm('Yakin ingin menghapus data ini')\">Hapus</a>";
                            $j++; }
                            echo "</td>";
                            echo "</tbody>";
                            echo "</table>";
                          } else {
                            echo "
                            <div class='col-lg-12 col-12 text-center'>
                               <h2 class='text-white' data-aos='fade-up' data-aos-delay='200'>Tidak Ada Data</h2>
                            </div>";
                          }
                        ?>
                            <tr>
                                <td><a href="index.php" class="btn custom-btn btn-sm mt-3" style="background-color: orange" data-aos="fade-up" data-aos-delay="200">Kembali</a>
                                <td><a href="add.php" class="btn custom-btn bg-color mt-3" data-aos="fade-up" data-aos-delay="200">Tambah Data</a>
                                </td>
                                </td>
                            </tr>
                        </div>
                    </div>
               </div>
     </section>

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