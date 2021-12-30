<!DOCTYPE html>
<html>
<head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>    
<title>Pendaftaran Siswa Baru | SMK Coding</title>
</head>

<body>
    <main>
        <div class="container py-4">

        <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
            <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
            <span class="fs-4" style="color:#0F4187">SMK CODING</span>
        </a>

        <ul class="nav nav-pills">
            <li class="nav-item"><a href="#" class="nav-link active" aria-current="page">Home</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Features</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Pricing</a></li>
            <li class="nav-item"><a href="#" class="nav-link">FAQs</a></li>
            <li class="nav-item"><a href="#" class="nav-link">About</a></li>
        </ul>
        </header>



            <?php if(isset($_GET['status'])): ?>
                <p>
                    <?php
                        if($_GET['status'] == 'sukses'){
                            echo "<div class=\"alert alert-success mt-4\" role=\"alert\">";
                            echo "Pendaftaran siswa baru berhasil!";
                            echo "</div>";
                            

                        } 

                        else if($_GET['status'] == 'suksesedit'){
                            echo "<div class=\"alert alert-success mt-4\" role=\"alert\">";
                            echo "edit data siswa berhasil!";
                            echo "</div>";
                            

                        } 

                        else {
                            echo "<div class=\"alert alert-danger mt-4\" role=\"alert\">";
                        echo "gagal , Silahkan coba kembali !";
                        echo "</div>";
                        }
                    ?>
                 </p>
             <?php endif; ?>

            <div class="p-5 mb-4 rounded-3" style="background-color:#F5F9FF">
                <div class="container py-5 d-flex">
                    <div class="col-md-6" style="margin-top:10%">
                        <h1 class="display-5 fw-bold" style="color:#0F4187">Selamat Datang!</h1><br>
                        <p class="fs-4">Pendaftaran mahasiswa didik  SMK CODING tahun ajaran 2021/2022 dibuka mulai dari 
                           tanggal <b>1 Desember 2021</b> hingga <b>31 Desember 2021</b>. <br>
                        </p>
                        <p class="fs-5" style="color:#F9747F"><b>Jangan sampai terlambat.</b></p>
                    </div>
                    <div class="cold-md-4">
                        <img src="./images/illustration.png" alt="">
                    </div>
                </div>
            </div>

            <div class="row align-items-md-stretch">
                    <center><h1 class="my-5" style="color:#296DCD">Our Features</h1></center>
                    <div class="col-md-6">
                    <div class="h-100 p-5 border rounded-3" style="background-color:#F5F9FF">
                        <i class="fas fa-user-plus"></i><h2>Form Pendaftaran</h2>
                        <p>Klik disini untuk melakukan pendaftaran baru</p>
                        <a href="form-daftar.php" class="btn btn-outline-secondary" type="button">Klik disini</a>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="h-100 p-5 border rounded-3" style="background-color:#F5F9FF">
                    <h2>List Pendaftar</h2>
                    <p>klik disini untuk melihat jumlah serta data pendaftar</p>
                    <a href="list-siswa.php" class="btn btn-outline-secondary" type="button">Klik disini</a>
                    </div>
                </div>
             </div>
        </div>
    </main>

   

</body>
<div class="container my-5">
  <!-- Footer -->
  <footer
          class="text-center text-lg-start text-white"
          style="background-color: #45526e"
          >
    <!-- Grid container -->
    <div class="container p-4 pb-0">
      <!-- Section: Links -->
      <section class="">
        <!--Grid row-->
        <div class="row">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">
              SMK CODING
            </h6>
            <p>
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley.
            </p>
          </div>
          <!-- Grid column -->

          <hr class="w-100 clearfix d-md-none" />

          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">Features</h6>
            <p>
              <a class="text-white">Create New Student</a>
            </p>
            <p>
              <a class="text-white">Update Data Student </a>
            </p>
            <p>
              <a class="text-white">Delete Data Student</a>
            </p>
            <p>
              <a class="text-white">Bootstrap Angular</a>
            </p>
          </div>
          <!-- Grid column -->

          <hr class="w-100 clearfix d-md-none" />

          <hr class="w-100 clearfix d-md-none" />

          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
            <p><i class="fas fa-home mr-3"></i> New York, NY 10012, US</p>
            <p><i class="fas fa-envelope mr-3"></i> info@gmail.com</p>
            <p><i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
            <p><i class="fas fa-print mr-3"></i> + 01 234 567 89</p>
          </div>
          <!-- Grid column -->
        </div>
        <!--Grid row-->
      </section>
      <!-- Section: Links -->

      <hr class="my-3">

      <!-- Section: Copyright -->
      <section class="p-3 pt-0">
        <div class="row d-flex align-items-center">
          <!-- Grid column -->
          <div class="col-md-7 col-lg-8 text-center text-md-start">
            <!-- Copyright -->
            <div class="p-3">
              © 2020 Copyright:
              <a class="text-white" href="./"
                 >SMK CODING</a
                >
            </div>
            <!-- Copyright -->
          </div>
        </div>
      </section>
      <!-- Section: Copyright -->
    </div>
    <!-- Grid container -->
  </footer>
  <!-- Footer -->
</div>
</html>