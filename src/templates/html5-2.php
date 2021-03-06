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
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    />
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
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarResponsive"
        >
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
          <a
            href="/src/templates/html5.html"
            id="buttonClassHTML"
            class="btn btn-primary btn-lg"
            >Learn HTML</a
          >
        </div>
        <div class="col-sm-4">
          <a
            href="/src/templates/css-1.html"
            id="buttonClassCSS"
            class="btn btn-primary btn-lg"
            >Learn CSS</a
          >
        </div>
        <div class="col-sm-4">
          <a
            href="/src/templates/javascript-1.html"
            id="buttonClassJavascript"
            class="btn btn-primary btn-lg"
            >Learn Javascript</a
          >
        </div>
      </div>
      <div class="upper" id="content">
        <div class="container-fluid">
          <div class="row text-center padding">
            <div class="col-md-12 selection-item item-content">
              <h1 class="text-center">Kurikulum HTML</h1>
              <div class="main-content card text-justify">
                <p>
                  Setelah mengetahui tentang apa itu HTML, lantas bagaimana kita
                  bisa mempelajari bahasa pemrograman tersebut ?
                </p>
                <p>
                  Nah sekarang saya akan memandu kalian tentang apa saja yang
                  perlu kita pelajari tentang HTML, akan tetapi karena banyaknya
                  materi yang perlu dijelaskan dalam ini, kami akan menggunakan
                  pembelajaran dari salah satu sumber pengetahuan kami, yakni
                  Mosh Hamedani.
                </p>
                <h2>Profil Mosh Hamedani</h2>
                <figure>
                  <img
                    id="mosh-hamedani"
                    src="/src/img/Mosh Hamedani.jpg"
                    alt="Mosh Hamedani Picture"
                  />
                </figure>
                <p>
                  Mosh Hamedani adalah seorang figur senior software engineer
                  yang memiliki spesialisasi di bidang pengembangan aplikasi web
                  dengan ASP.NET MVC, Web API, Entity Framework, Angular,
                  Backbone HTML5 dan CSS.
                </p>
                <p>
                  Beliau juga memiliki keahlian dalam pemrograman lain seperti
                  Python, MySQL, React dan masih banyak lagi tentunya. Saat ini
                  beliau sudah berhenti dari pekerjaannya sebagai senior
                  software engineer dan fokus kepada mengajar course atau kelas
                  kelas online. Berikut adalah videonya.
                </p>
                <figure>
                  <iframe
                    class="content"
                    height="100%"
                    src="https://www.youtube.com/embed/8TnBZ8rom9c"
                    title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen
                  ></iframe>
                </figure>
                <p>
                  Meski tidak mengenalnya secara langsung, beliau adalah salah
                  satu karakter yang sangat mempengaruhi hidup saya saat ini
                  loh, karena sempat belajar python di course onlinenya.
                  Karenanya saya ingin berbagi tentang pengetahuan HTML dengan
                  materi yang dijelaskan oleh Mosh Hamedani. Materi yang
                  dijelaskan padat namun tidak terlalu banyak karena memang
                  hanya menjelaskan sedikit gambaran pembuatan HTML.
                </p>
                <figure>
                  <iframe
                    class="content"
                    height="100%"
                    src="https://www.youtube.com/embed/qz0aGYrrlhU"
                    title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen
                  ></iframe>
                </figure>
                <div class="tips">
                  <h2>Tips & Trik</h2>
                  <p>
                    Agar lebih cepat mudah memahami pastikan kamu langsung
                    melakukan percobaan setiap ada perubahan atau penggunaan tag
                    atau elemen HTML yang baru kamu pelajari. Dan agar materi
                    lebih dapat diserap, kamu juga bisa melakukan pencarian
                    otodidak terkait tag atau elemen yang masih kurang
                    dimengerti.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-12 selection-item item-number">
              <ul class="no-bullets">
                <li>
                  <a href="/src/templates/html5.html" class="btn btn-light"
                    >1</a
                  >
                </li>
                <li>
                  <a href="/src/templates/html5-2.html" class="btn btn-light"
                    >2</a
                  >
                </li>
                <li>
                  <a href="/src/templates/html5-3.html" class="btn btn-light"
                    >3</a
                  >
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
                <a href="mailto:ardhiyan.hakim@mhs.unsoed.ac.id"
                  >explorer@gmail.com</a
                >
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
