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
              <h1 class="text-center">Kenapa Belajar Javascript ?</h1>
              <div class="main-content card text-justify">
                <p>
                  Javascript merupakan bahasa yang wajib untuk dipelajari jika
                  kamu ingin serius bermain di ranah web development. Hal ini
                  dikarenakan bukan hanya karena Javascript merupakan bahasa
                  yang sangat baik untuk digunakan dalam website dan mobile
                  development.
                </p>
                <p>
                  Tentu bukan berarti bahasa pemrograman lain merupakan bahasa
                  yang tidak baik akan tetapi bahasa Javascript sendiri
                  merupakan bahasa dengan pengguna paling banyak di dunia
                  dibandingkan yang lainnya.
                </p>
                <p>
                  Hal ini memberikan kita informasi bahwa dengan banyaknya
                  developer diluar sana dengan bahasa yang sama, saat kita
                  mungkin bertemu dengan sebuah bug kita memiliki banyak orang
                  yang dapat membantu kita dalam menyelesaikan permasalahan
                  tersebut. Yasudah, mari kita mulai saja, Oke ?
                </p>
                <h2>Apa itu Javascript ?</h2>
                <p>
                  Javascript ialah bahasa pemrograman yang awalnya dirancang
                  untuk berjalan di atas browser. Namun, seiring berjalannya
                  waktu, javascript juga mampu untuk digunakan pada sisi Server,
                  Game, IoT, Desktop, dsb.
                </p>
                <p>
                  Javascript pada awalnya memiliki nama Mocha, kemudian menjadi
                  LiveScript saat browser Netscape Navigator 2.0 rilis versi
                  beta (September 1995). Namun, setelah itu dinamai ulang
                  menjadi Javascript.
                </p>
                <p>
                  Terinspirasi dari kesuksesan Javascript, Microsoft mengadopsi
                  teknologi serupa. Microsoft membuat ???Javascript??? versi mereka
                  sendiri bernama JScript. Lalu di tanam pada Internet Explorer
                  3.0. Hal ini mengakibatkan ??? perang browser???, karena JScript
                  milik Microsoft berbeda dengan Javascript racikan Netscape.
                </p>
                <p>
                  Akhirnya pada tahun 1996, Netscape mengirimkan standarisasi
                  ECMA-262 ke Ecma International. Sehingga lahirlah standarisasi
                  kode Javascript bernama ECMAScript atau ES. Saat ini
                  ECMAScript sudah mencapai versi 8 (ES8).
                </p>
                <h2>Tools belajar Javascript</h2>
                <p>
                  Untuk belajar Javascript secara sederhana kita tidak perlu
                  banyak tools. Hal - hal yang kita butuhkan meliputi :
                  <ol>
                    <li>
                      Text Editor. Kamu bisa menggunakan banyak teks editor diluaran
                      sana yang sesuai dengan kamu inginkan. Tapi saya akan
                      merekomendasikan kamu untuk menggunakan text editor visual
                      studio code karena text editor ini merupakan text editor yang
                      banyak digunakan serta memiliki banyak extension yang dapat
                      memudahkan kamu dalam mengembangkan dan merawat kodemu.  
                    </li>
                    <li>
                      Web Browser. Ada banyak web browser yang bisa dijadikan
                      sebagai pilihan anda seperti Chrome, Mozila Firefox, Opera,
                      Safari, dll.
                    </li>
                  </ol>
                </p>
                <h2>Menulis Javascript Pertama</h2>
                <p>
                  Sebelum menulis kode, pastikan kamu telah membuat file bernama index.html seperti pada tutorial berikut.
                </p>
                <figure>
                  <iframe
                    class="content"
                    height="100%"
                    src="https://www.youtube.com/embed/zKRHZ092ICM"
                    title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen
                  ></iframe>
                </figure>
                <p>Kemudian kamu bisa mulai menuliskan kode seperti berikut :</p>
                <div class="highlight">
                  <pre
                    tabindex="0"
                    style="
                      color: #f8f8f2;
                      background-color: #282a36;
                      -moz-tab-size: 4;
                      -o-tab-size: 4;
                      tab-size: 4;
                    "
                  ><code class="language-html" data-lang="html"><span style="color:#ff79c6">&lt;!DOCTYPE html&gt;</span>
&lt;<span style="color:#ff79c6">html</span>&gt;
&lt;<span style="color:#ff79c6">head</span>&gt;
    &lt;<span style="color:#ff79c6">title</span>&gt;Hello World Javascript&lt;/<span style="color:#ff79c6">title</span>&gt;
&lt;/<span style="color:#ff79c6">head</span>&gt;
&lt;<span style="color:#ff79c6">body</span>&gt;
    &lt;<span style="color:#ff79c6">script</span>&gt;
        console.log(<span style="color:#f1fa8c">"Saya belajar Javascript"</span>);
        <span style="color:#8be9fd;font-style:italic">document</span>.write(<span style="color:#f1fa8c">"Hello World!"</span>);
    &lt;/<span style="color:#ff79c6">script</span>&gt;
&lt;/<span style="color:#ff79c6">body</span>&gt;
&lt;/<span style="color:#ff79c6">html</span>&gt;
                  </code></pre>
                </div>
                <p>
                  Simpan file diatas kemudian buka pada web browser dengan melakukan
                  <b>klik kanan pada file</b> -> pilih <b>Open With</b> -> Kemudian
                  pilih <b>web broser</b> yang kamu gunakan sehingga akan tampak
                  tampilan seperti berikut.
                </p>
                <figure>
                  <img
                    src="https://www.petanikode.com/img/js/hello-world.png"
                    alt="Hasil pada kode diatas"
                  />
                </figure>
                <p>
                  Apakah kamu sadar ada yang aneh ? Mungkin kamu tidak menyadarinya
                  tapi kode "<b>console.log("Saya belajar Javascript")</b>" ini
                  tidak ditampilkan pada tampilan HTML. Mengapa ? Alasannya karena
                  kode tersebut hanya ditampilkan pada terminal program di visual
                  studio code atau Dev Tools pada web browser. Untuk melihat pada
                  visual studio code kamu bisa menekan "<b>Ctrl + j</b>" dan pada
                  web browser kamu bisa menekan "<b>Ctrl + Shift + i</b>"
                </p>
                <p>
                  Nah dengan ini berakhirlah materi kita di sesi ini. Saat ini kamu
                  sudah mengerti sejarah tentang bahasa pemrograman javascript dan
                  sudah mulai menuliskan program paling sederhana dari javascript.
                  Di sesi berikutnya kita akan belajar tentang bagaimana metode
                  penulisan sebuah program javascript sehingga bisa diaplikasikan
                  pada HTML. Semangat ya belajarnya ~!
                </p>    
                <p class="credits">
                  <i
                    >Sumber materi :
                    <a href="https://www.petanikode.com/javascript-dasar/"
                      >Pemrograman Javascript: Langkah Awal Belajar Javascript</a
                    >
                  </i>
                </p>
              </div>
            </div>
            <div class="col-md-12 selection-item item-number">
              <ul class="no-bullets">
                <li>
                  <a href="/src/templates/javascript-1.html" class="btn btn-light"
                    >1</a
                  >
                </li>
                <li>
                  <a href="/src/templates/javascript-2.html" class="btn btn-light"
                    >2</a
                  >
                </li>
                <li>
                  <a href="/src/templates/javascript-3.html" class="btn btn-light"
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
