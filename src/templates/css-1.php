<?php 
if (isset($_SESSION['username'])=== false) { //jika sessionnya salah atau tidak ada
  header("Location: ./login.php"); //ngarahin ke home kalau udah login
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Explorer</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
  <link rel="stylesheet" href="../styles/style.css" />
  <link rel="stylesheet" href="../styles/responsive.css" />
</head>

<body>
  <!-- Skip To Content -->
  <div class="skip-to-content">
    <a href="#content" class="skip-button">Menuju Ke Konten</a>
  </div>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
    <div class="container-fluid">
      <a href="/">
        <h3 class="logo">
          explorer<img src="../img/logo1.png" alt="Logo of Explorer" />
        </h3>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a href="/" class="nav-link">Home</a>
          </li>
          <li class="nav-item">
            <a href="/#class-section" class="nav-link">Class</a>
          </li>
          <li class="nav-item">
            <a href="/#about-us" class="nav-link">About Us</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link sign-up-btn">Sign Up</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <main>
    <div class="class-change row text-center">
      <div class="col-sm-4">
        <a href="/src/templates/html5.html" id="buttonClassHTML" class="btn btn-primary btn-lg">Learn HTML</a>
      </div>
      <div class="col-sm-4">
        <a href="/src/templates/css-1.html" id="buttonClassCSS" class="btn btn-primary btn-lg">Learn CSS</a>
      </div>
      <div class="col-sm-4">
        <a href="/src/templates/javascript-1.html" id="buttonClassJavascript" class="btn btn-primary btn-lg">Learn
          Javascript</a>
      </div>
    </div>
    <div class="upper" id="content">
      <div class="container-fluid">
        <div class="row text-center padding">
          <div class="col-md-12 selection-item item-content">
            <h1 class="text-center">Apa itu CSS ?</h1>
            <div class="main-content card text-justify">
              <p>
                CSS atau Cascading Style Sheet merupakan sebuah bahasa untuk
                mengatur tampilan web sehingga terlihat lebih menarik dan
                indah.
              </p>
              <p>
                Dengan CSS, kita dapat mengatur layout (tata letak), warna,
                font, garis, dan lain-lain. CSS pertama kali diperkenalkan
                oleh
                <a href="https://en.wikipedia.org/wiki/H%C3%A5kon_Wium_Lie">H??kon Wium Lie</a>
                pada tahun 1994.
              </p>
              <h2>Struktur Kode atau Sintaks Dasar CSS
              </h2>
              <p>
                Struktur kode CSS terdiri dari tiga bagian:
              <ol>
                <li>Selektor;</li>
                <li>Blok Deklarasi;</li>
                <li>Properti dan nilanya.</li>
              </ol>
              Contoh:
              </p>
              <figure>
                <img 
                  src="https://www.petanikode.com/img/css/dasar/sintaks-css.png" 
                  alt="Ilustrasi Struktur CSS" 
                />
              </figure>
              <p>
                Pada materi berikutnya kita akan mempelajari tentang ketiga hal
                dasar dari CSS tersebut yakni selektor, blok deklarasi, dan
                properti dan nilainya. Yuk lanjutkan belajar mu ~!
              </p>
              <p class="credits">
                <i
                  >Sumber materi diambil dari :
                  <a href="https://www.petanikode.com/css-untuk-pemula/" target="_blank"
                    >Tutorial CSS: Pengenalan Dasar CSS untuk Pemula (dan Tips
                    Belajar CSS)
                  </a></i
                >
              </p>
            </div>
          </div>
          <div class="col-md-12 selection-item item-number">
            <ul class="no-bullets">
              <li>
                <a href="/src/templates/css-1.html" class="btn btn-light">1</a>
              </li>
              <li>
                <a href="/src/templates/css-2.html" class="btn btn-light">2</a>
              </li>
              <li>
                <a href="/src/templates/css-3.html" class="btn btn-light">3</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </main>

  <!--- Footer -->
  <footer>
    <div class="container-fluid">
      <div class="row footer-info">
        <div class="col-md-6">
          <hr class="footer-hr" />
          <h3 class="text-center">
            explorer<img src="../img/logo1.png" alt="" />
          </h3>
          <hr class="footer-hr" />
          <div class="footer-detail text-justify">
            <p>Call : 555-555</p>
            <p>
              Mail :
              <a href="mailto:ardhiyan.hakim@mhs.unsoed.ac.id">explorer@gmail.com</a>
            </p>
            <p>
              Address : Pasar Jaya Lenteng Agung Lantai Dasar Nomor 212 Raya
              Kecamatan Jagakarsa, Jl. Raya Jagakarsa No.211, RT.3/RW.1,
              Jagakarsa, Kec. Jagakarsa, DKI Jakarta, Daerah Khusus Ibukota
              Jakarta 12630
            </p>
          </div>
        </div>
        <div class="col-md-6">
          <hr class="footer-hr" />
          <h3 class="text-center">Active Time</h3>
          <hr class="footer-hr" />
          <div class="footer-detail">
            <p>Monday To Friday : 9am - 5am</p>
            <p>Saturday : 9am - 3am</p>
            <p>Sunday : closed</p>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid text-center footer-closing">
      &copy; explorer. All Rights Reserved.
    </div>
  </footer>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
</body>

</html>