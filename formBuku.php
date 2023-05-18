
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard - Library</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.php" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">E-Library</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->
  </header><!-- End Header -->

 
   <!-- ======= Sidebar ======= -->
   <aside id="sidebar" class="sidebar">

<ul class="sidebar-nav" id="sidebar-nav">

  <li class="nav-item">
    <a class="nav-link collapsed" href="index.php">
      <i class="bi bi-grid"></i>
      <span>Dashboard</span>
    </a>
  </li><!-- End Dashboard Nav -->

  <li class="nav-heading">Form</li>

  <li class="nav-item">
    <a class="nav-link collapsed" href="formAnggota.php">
      <i class="bi bi-file-earmark-person"></i>
      <span>Form Anggota</span>
    </a>
  </li><!-- End Profile Page Nav -->

  <li class="nav-item">
    <a class="nav-link" href="formBuku.php">
      <i class="bi bi-file-earmark-person"></i>
      <span>Form Buku</span>
    </a>
  </li><!-- End Profile Page Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" href="formPeminjaman.php">
      <i class="bi bi-file-earmark-person"></i>
      <span>Form Peminjaman</span>
    </a>
  </li><!-- End Profile Page Nav -->
  
  <li class="nav-heading">Data</li>
  <li class="nav-item">
    <a class="nav-link  collapsed" href="dt_anggota.php?page=daftar-data">
      <i class="bi bi-question-circle"></i>
      <span>Data Anggota</span>
    </a>
  </li><!-- End F.A.Q Page Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" href="dt_buku.php?page=daftar-data">
      <i class="bi bi-envelope"></i>
      <span>Data Buku</span>
    </a>
  </li><!-- End Contact Page Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" href="dt_peminjaman.php?page=daftar-data">
      <i class="bi bi-card-list"></i>
      <span>Data Peminjaman</span>
    </a>
  </li><!-- End Register Page Nav -->

</ul>

</aside><!-- End Sidebar-->
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Form Data Buku</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">Form Buku</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section d-flex align-items-center justify-content-between">
      <div class="row">
        <div class="col-lg-7">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Form Buku</h5>

               <!-- Vertical Form -->
               <form class="row g-3" name="form" method="POST" action="proses.php">
              <input type="hidden" name="aksi" value="tambah-buku"/>
                <div class="col-12">
                  <label for="inputNanme4" class="form-label">Judul Buku</label>
                  <input type="text" name="judul_buku"class="form-control" id="inputNanme4">
                </div>
                <div class="col-12">
                  <label for="inputNanme4" class="form-label">Penulis</label>
                  <input type="text" name="penulis" class="form-control" id="inputNanme4">
                </div>
                <div class="col-12">
                  <label for="inputNanme4" class="form-label">Tahun</label>
                  <input type="text" name="tahun" class="form-control" id="inputNanme4">
                </div>
                <div class="col-12">
                  <label for="inputNanme4" class="form-label">Penerbit</label>
                  <input type="text" name="penerbit" class="form-control" id="inputNanme4">
                </div>
                <div class="text-center">
                  <button type="submit" name="simpan" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form><!-- Vertical Form -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

 <!-- ======= Footer ======= -->
 <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Made by <strong><span>Alya and Anis</span></strong>. with <i class="bi bi-heart-fill"></i>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>