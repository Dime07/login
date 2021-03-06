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
              <h1 class="text-center">
                Selektor, Blok Deklarasi & Properti dan Nilainya
              </h1>
              <div class="main-content card text-justify">
                <p>
                  Kita telah mengetahui bahwa sebuah CSS disusun atas selektor
                  sebagai penentu pada bagian mana sebuah style diterapkan, blok
                  deklarasi serta properti dan nilainya. Tapi apa sebenarnya itu
                  semua ? Dan bagaimana kita mengaplikasikan semua hal tersebut
                  dengan baik dan benar ? Mari kita simak materi berikutnya.
                </p>
                <h2>Selektor</h2>
                <p>
                  Selektor disini seperti apa yang telah dijelaskan diatas.
                  Yakni,
                  <b>bagian yang akan kita pilih untuk ditetapkan stylenya</b>.
                  Contoh selektor itu seperti apa ? bisa dilihat disini.
                </p>
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
                  >
<code class="language-css" data-lang="css"><span style="color:#ff79c6">h1</span> {
  <span style="color:#ff79c6">color</span>: <span style="color:#ff79c6">red</span>;
}
              </code></pre>
                </div>
                <p>
                  Nah pada baris penulisan kode CSS diatas dapat kita lihat teks
                  "h1" yang merujuk pada tag h1 di HTML. Jadi jika kita
                  menerapkan kode diatas pada program kita, kita akan menerapkan
                  "color: red;" pada seluruh tag HTML. Bagaimana ? Mudah
                  dimengerti kan ? Dibawah ini telah dirincikan apa saja standar
                  yang bisa digunakan sebagai selektor.
                </p>
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
                  ><code class="language-css" data-lang="css"><span style="color:#6272a4">/* Selektor dengan nama tag */</span>
<span style="color:#ff79c6">h2</span> {
    <span style="color:#ff79c6">color</span>: <span style="color:#ff79c6">blue</span>
}

<span style="color:#6272a4">/* Selektor degnan class */</span>
.<span style="color:#50fa7b">bg-yellow</span> {
    backgound-color: <span style="color:#ff79c6">yellow</span>;
}

<span style="color:#6272a4">/* selektor dengan ID elemen */</span>
#header {
    <span style="color:#ff79c6">background</span>: <span style="color:#ff79c6">grey</span>;
}

<span style="color:#6272a4">/* Selektor dengan Atribut */</span>
<span style="color:#ff79c6">input</span><span style="color:#ff79c6">[</span><span style="color:#ff79c6">type</span><span style="color:#ff79c6">=</span><span style="color:#ff79c6">text</span><span style="color:#ff79c6">]</span>{
    <span style="color:#ff79c6">background</span>: <span style="color:#ff79c6">yellow</span>;
}
                  </code></pre>
                </div>
                <p>
                  Kita bisa melakukan seleksi mulai dari tag HTML (<b
                    >h1, p, header, main, footer, div</b
                  >), class atau id yang didefinisikan secara manual atau juga
                  menggunakan atribut yang ada pada sebuah tag. Jika kamu
                  tertarik mendalami selektor ini kamu bisa lihat seluruh materi
                  keseluruhannya
                  <a
                    href="https://www.w3schools.com/cssref/css_selectors.asp"
                    target="_blank"
                    >disini</a
                  >
                </p>
                <h2>Blok Deklarasi</h2>
                <p>
                  Blok deklarasi adalah tempat dimana kita akan menuliskan
                  properti dan nilai dari sebuah selektor. Sebagai contoh,
                  dibawah ini kita akan menyeleksi tag "<b>p</b>" dengan
                  didalamnya kita berikan properti "<b>font-size</b>" dengan
                  nilai "<b>18px</b>".
                </p>
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
                  ><code class="language-css" data-lang="css"><span style="color:#ff79c6">p</span> {
  <span style="color:#ff79c6">font-size</span>: <span style="color:#bd93f9">18</span><span style="color:#8be9fd">px</span>;
}
              </code></pre>
                </div>
                <p>
                  Sebagai catatan, blok deklarasi selalu dimulai dengan tanda
                  kurung kurawal "<b>{</b>" dan diakhiri dengan "<b>}</b>".
                  Tidak jarang orang-orang yang masih belajar menemui bug dimana
                  kode CSS tidak berjalan. Adanya kurung kurawal dan kesesuaian
                  posisinya menjadi hal yang penting agar developer dapat
                  memperbaiki bug dengan cepat dan mudah.
                </p>
                <h2>Properti dan Nilainya</h2>
                <p>
                  Jika selektor adalah apa yang akan diseleksi untuk diterapkan
                  stylenya, dan blok deklarasi adalah tempat kita menulis dan
                  menerapkan kode css, maka properti dan nilai ini adalah elemen
                  terpenting yang dibutuhkan dalam memprogram syle dari sebuah
                  website agar dapat tampil menarik dan berkesan baik untuk
                  pengguna.
                </p>
                <p>
                  <br />
                  <i>
                    Sebuah properti dan nilai selalu dituliskan seperti ini pada
                    kode CSS :</i
                  >
                </p>
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
                  ><code class="language-css" data-lang="css"><span style="color:#ff79c6">properti</span><span style="color:#ff79c6">:</span> <span style="color:#f1fa8c">"nilai"</span><span style="color:#ff79c6">;</span>
                </code></pre>
                </div>
                <p>
                  Seluruh properti dan nilai harus dituliskan di dalam blok
                  deklarasi dan jika tidak dituliskan didalam blok deklarasi
                  maka kode CSS tersebut tidak akan bekerja. Contoh penulisan
                  yang salah dapat dilihat seperti ini.
                </p>
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
                  ><code class="language-css" data-lang="css"><span style="color:#ff79c6">background</span><span style="color:#ff79c6">:</span> <span style="color:#ff79c6">pink</span><span style="color:#ff79c6">;</span>

<span style="color:#ff79c6">p</span> {
                  
}
                  </code></pre>
                </div>
                <p>
                  Dan berikut adalah contoh penulisan yang benar dari sebuah
                  kode CSS.
                </p>
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
                  ><code class="language-css" data-lang="css"><span style="color:#ff79c6">p</span>
  <span style="color:#ff79c6">background</span><span style="color:#ff79c6">:</span> <span style="color:#ff79c6">pink</span><span style="color:#ff79c6">;</span>
}
                  </code></pre>
                </div>
                <h2>Menuliskan kode CSS pada file HTML</h2>
                <p>
                  Menurut informasi yang saya ketahui, ada 3 metode untuk
                  menuliskan sebuah kode CSS ke dalam file HTML. Metode tersebut
                  berupa <i>internal</i>, <i>eksternal</i>, dan yang terakhir
                  adalah <i>inline</i>.
                </p>
                <p>
                  Namun kali ini saya hanya akan melakukan demo terhadap cara
                  penulisan internal, dimana kode CSS akan ditulis dalam satu
                  file bersama dengan HTML pada tag "<b>head</b>". Berbeda
                  dengan eksternal yang mana file HTML dan file CSS akan
                  terpisah satu sama lain akan tetapi tetap terhubung
                  menggunakan tag "<b>link</b>"", dan metode terakhir yakni
                  inline akan dituliskan bersama pada tag terkait dengan atribut
                  "<b>style</b>".
                </p>
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
&lt;<span style="color:#ff79c6">title</span>&gt;Contoh Penulisan kode CSS&lt;/<span style="color:#ff79c6">title</span>&gt;
  &lt;<span style="color:#ff79c6">style</span> <span style="color:#50fa7b">type</span><span style="color:#ff79c6">=</span><span style="color:#f1fa8c">"text/css"</span>&gt;
      <span style="color:#ff79c6">p</span> { <span style="color:#ff79c6">color</span>: <span style="color:#ff79c6">red</span> }
  &lt;/<span style="color:#ff79c6">style</span>&gt;
&lt;/<span style="color:#ff79c6">head</span>&gt;

&lt;<span style="color:#ff79c6">body</span>&gt;
    &lt;<span style="color:#ff79c6">p</span>&gt;Sebuah contoh paragraf yang sudah diberikan oleh kode CSS&lt;/<span style="color:#ff79c6">p</span>&gt;
&lt;/<span style="color:#ff79c6">body</span>&gt;
&lt;/<span style="color:#ff79c6">html</span>&gt;
  </code></pre>
                </div>
                <p>
                  Bisa kita lihat pada kode diatas, dimana kita menggunakan
                  metode internal, kita perlu menuliskan tag "<b>style</b>". Di
                  dalam tag style terdapat atribut "<b>type</b>" untuk menetukan
                  jenis code yang digunakan untuk mendefinisika tipe dari data
                  yang diinput, dalam hal ini kita isi "<b>text/css</b>" dengan
                  isi blok deklarasi berupa selektor "<b>p</b>" dengan properti
                  "<b>color</b>" dan nilainya adalah "<b>red</b>". Sehingga jika
                  kita jalankan, hasilnya dapat dilihat sebagai berikut.
                </p>
                <figure>
                  <img
                    src="https://www.petanikode.com/img/css/dasar/css-di-html.png"
                    alt="Hasil teks berwarna merah"
                  />
                </figure>
                <p>
                  Jika kamu tertarik untuk membaca lebih lengkap tentang
                  bagaimana cara menuliskan CSS pada sebuah file HTML kamu bisa
                  lihat
                  <a
                    href="https://www.petanikode.com/css-dalam-html/"
                    target="_blank"
                    >disini</a
                  >.
                </p>
                <p>
                  Dan sekian penjelasan tentang bagaimana kita membuat dan
                  menuliskan sebuah kode CSS sederhana. Tentu seiring
                  berjalannya waktu kode yang akan digunakan akan semakin banyak
                  dan fitur - fitur yang lebih kompleks daripada yang saya
                  jelaskan saat ini. Akan tetapi saya harap materi yang
                  dijelaskan dapat memberikan gambaran bagaimana sebuah kode CSS
                  dituliskan.
                </p>
                <div class="tips">
                  <h2>Tips & Trik</h2>
                  <p>
                    Pertama, properti dan nilai dari sebuah kode CSS itu ada
                    banyak dan sangat banyak, sehingga sangat tidak memungkinkan
                    bagi kamu untuk menghafal semuanya ketika kamu masih dalam
                    proses belajar. Karenanya cobalah lebih banyak praktikan
                    ketimbang hanya membaca, juga berkesperimen dengan beberapa
                    properti dan nilai tertentu sehingga menghasilkan tampilan
                    yang baik dan menarik bagi pengguna. Kamu juga bisa
                    menggunakan cheat sheet CSS sehingga kamu tidak perlu
                    repot-repot lagi menghafalnya.
                  </p>
                  <p>
                    Kedua, kamu juga bisa melihat sebuah website-website lain
                    diluar sana dan melihat styling yang digunakan pada sebuah
                    elemen tertentu dengan melakukan klik kanan dan pilih "<b
                      >inspect element</b
                    >". Nantinya akan tampil sebuah kolom yang menjelaskan
                    struktur sebuah website yang kamu lakukan inspect. Kamu bisa
                    baca lebih lanjut tentang hal tersebut
                    <a
                      href="https://zapier.com/blog/inspect-element-tutorial/"
                      target="_blank"
                      >disini</a
                    >
                    Contohnya bisa dilihat pada seperti dibawah ini.
                  </p>
                  <figure class="figure-tips">
                    <img
                      src="https://images.ctfassets.net/lzny33ho1g45/3FTRYeOMsBTXnwZ3iaZFvE/2220cca7e1ff6514e3df897d791def55/Chrome_Inspect_Element?w=1400"
                      alt="inspect element example"
                    />
                  </figure>
                </div>
              </div>
            </div>
            <div class="col-md-12 selection-item item-number">
              <ul class="no-bullets">
                <li>
                  <a href="/src/templates/css-1.html" class="btn btn-light"
                    >1</a
                  >
                </li>
                <li>
                  <a href="/src/templates/css-2.html" class="btn btn-light"
                    >2</a
                  >
                </li>
                <li>
                  <a href="/src/templates/css-3.html" class="btn btn-light"
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
