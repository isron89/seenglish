@extends('layouts.markup')

@section('halaman')

<!-- ======= Header ======= -->
<header id="header" class="fixed-top ">
  <div class="container d-flex align-items-center">

    {{-- Tulisan --}}
    <h1 class="logo mr-auto"><a href="/"><strong>{{ $title }}</strong></a></h1>
    <!-- Logo SEEnglish -->
    <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

    <nav class="nav-menu d-none d-lg-block">
      <ul>
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#about">Informasi</a></li>
        <li><a href="#services">Tata Cara</a></li>
        <li><a href="#faq">FAQ</a></li>
        <li><a href="#contact">Kontak Kami</a></li>
        <li class="drop-down"><a href="#">Login</a>
          <ul>
            <li><a href="/login">Login</a></li>
            <li><a href="/register">Register</a></li>
          </ul>
        </li>
      </ul>
    </nav><!-- .nav-menu -->

  </div>
</header><!-- Akhir header -->

<!-- ======= Section halaman awal ======= -->
<section id="hero">
  <div class="hero-container">
    <h3>Selamat Datang di <strong>SEEnglish</strong></h3>
    <h1>Platform Tes TOEFL di Malang Raya</h1>
    <a href="#about" class="btn-get-started scrollto">Informasi Tes</a>
  </div>
</section><!-- Akhir section halaman awal -->

<main id="main">

  <!-- ======= Section informasi tes ======= -->
  <section id="about" class="about">
    <div class="container">

      <div class="section-title">
        <h2>Informasi Tes</h2>
        <h3>Jadwal tes TOEFL <span>SEEnglish</span></h3>
        <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae
          autem.</p>
      </div>

      <div class="row content">
        <div class="col-lg-6">
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
            dolore
            magna aliqua.
          </p>
          <ul>
            <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
            <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit</li>
            <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
          </ul>
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0">
          <p>
            Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
            velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
            culpa qui officia deserunt mollit anim id est laborum.
          </p>
          <a href="#" class="btn-learn-more">Learn More</a>
        </div>
      </div>

    </div>
  </section><!-- Akhir section informasi tes -->

  <!-- ======= Section tata cara ======= -->
  <section id="services" class="services">
    <div class="container">

      <div class="section-title">
        <h2>Tata Cara</h2>
        <h3>Alur Pendaftaran Tes TOEFL <span>SEEnglish</span></h3>
        <!-- <p>Berikut merupakan alur pendaftaran tes toefl pada platform SEEnglish.</p> -->
      </div>

      <div class="row">
        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
          <div class="icon-box">
            <div class="title">
              <h2 style="font-weight: bold;"><a>1</a></h2>
            </div>
            <h4 class="title"><a>Informasi Pembukaan Tes</a></h4>
            <p class="description">Anda dapat melihat jadwal sesi yang tersedia pada halaman informasi tes</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
          <div class="icon-box">
            <div class="title">
              <h2 style="font-weight: bold;"><a>2</a></h2>
            </div>
            <h4 class="title"><a>Daftar Akun</a></h4>
            <p class="description">Anda dapat membuat akun pada halaman register, jika anda sudah memiliki akun silahkan login</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
          <div class="icon-box">
            <div class="title">
              <h2 style="font-weight: bold;"><a>3</a></h2>
            </div>
            <h4 class="title"><a>Login Akun</a></h4>
            <p class="description">Setelah berhasil membuat akun, anda melanjutkan login</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
          <div class="icon-box">
            <div class="title">
              <h2 style="font-weight: bold;"><a>4</a></h2>
            </div>
            <h4 class="title"><a>Lakukan Pembayaran</a></h4>
            <p class="description">Pembayaran pendaftaran tes melalui rekening yang disertakan pada halaman daftar tes</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
          <div class="icon-box">
            <div class="title">
              <h2 style="font-weight: bold;"><a>5</a></h2>
            </div>
            <h4 class="title"><a>Daftar Tes</a></h4>
            <p class="description">Selanjutnya anda dapat mendaftar tes dengan menyertakan bukti pembayaran</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
          <div class="icon-box">
            <div class="title">
              <h2 style="font-weight: bold;"><a>6</a></h2>
            </div>
            <h4 class="title"><a>Validasi Pendaftaran</a></h4>
            <p class="description">Anda dapat menunggu pendaftaran divalidasi dan mendapatkan email berisi token yang digunakan untuk tes</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
          <div class="icon-box">
            <div class="title">
              <h2 style="font-weight: bold;"><a>7</a></h2>
            </div>
            <h4 class="title"><a>Mulai Tes</a></h4>
            <p class="description">Anda dapat mengikuti tes dengan mengklik tombol mulai tes pada halaman ujian</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
          <div class="icon-box">
            <div class="title">
              <h2 style="font-weight: bold;"><a>8</a></h2>
            </div>
            <h4 class="title"><a>Hasil Tes</a></h4>
            <p class="description">Selamat anda telah mengikuti tes TOEFL di SEEnglish, silahkan melihat hasil tes pada halaman riwayat</p>
          </div>
        </div>

      </div>
  </section><!-- Akhir section tata cara -->

  <!-- ======= Section F.A.Q ======= -->
  <section id="faq" class="faq">
    <div class="container">

      <div class="section-title">
        <h2>F.A.Q</h2>
        <h3>Frequently Asked <span>Questions</span></h3>
      </div>

      <ul class="faq-list">

        <li>
          <a data-toggle="collapse" class="" href="#faq1">Non consectetur a erat nam at lectus urna duis? <i class="icofont-simple-up"></i></a>
          <div id="faq1" class="collapse show" data-parent=".faq-list">
            <p>
              Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida.
              Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
            </p>
          </div>
        </li>

        <li>
          <a data-toggle="collapse" href="#faq2" class="collapsed">Feugiat scelerisque varius morbi enim nunc faucibus a
            pellentesque? <i class="icofont-simple-up"></i></a>
          <div id="faq2" class="collapse" data-parent=".faq-list">
            <p>
              Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec
              ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit
              ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
            </p>
          </div>
        </li>

        <li>
          <a data-toggle="collapse" href="#faq3" class="collapsed">Dolor sit amet consectetur adipiscing elit
            pellentesque habitant morbi? <i class="icofont-simple-up"></i></a>
          <div id="faq3" class="collapse" data-parent=".faq-list">
            <p>
              Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum
              integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt.
              Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
            </p>
          </div>
        </li>

        <li>
          <a data-toggle="collapse" href="#faq4" class="collapsed">Ac odio tempor orci dapibus. Aliquam eleifend mi in
            nulla? <i class="icofont-simple-up"></i></a>
          <div id="faq4" class="collapse" data-parent=".faq-list">
            <p>
              Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec
              ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit
              ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
            </p>
          </div>
        </li>

        <li>
          <a data-toggle="collapse" href="#faq5" class="collapsed">Tempus quam pellentesque nec nam aliquam sem et
            tortor consequat? <i class="icofont-simple-up"></i></a>
          <div id="faq5" class="collapse" data-parent=".faq-list">
            <p>
              Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel
              risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida
              quis blandit turpis cursus in
            </p>
          </div>
        </li>

        <li>
          <a data-toggle="collapse" href="#faq6" class="collapsed">Tortor vitae purus faucibus ornare. Varius vel
            pharetra vel turpis nunc eget lorem dolor? <i class="icofont-simple-up"></i></a>
          <div id="faq6" class="collapse" data-parent=".faq-list">
            <p>
              Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc
              vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in
              metus vulputate eu scelerisque. Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus
              faucibus. Nibh tellus molestie nunc non blandit massa enim nec.
            </p>
          </div>
        </li>

      </ul>

    </div>
  </section><!-- End F.A.Q Section -->

  <!-- ======= Section kontak ======= -->
  <section id="contact" class="contact">
    <div class="container">

      <div class="section-title">
        <h2>Kontak</h2>
        <h3>Kontak <span>Kami</span></h3>
        <p>Informasi lokasi, email serta nomor yang dapat dihubungi</p>
      </div>

      <div>
        <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
      </div>

      <div class="row mt-12">

        <div class="col-lg-4" style="padding-top: 40px;">
          <div class="info">
            <div class="address">
              <i class="icofont-google-map"></i>
              <h4>Location:</h4>
              <p>Gedung SEEnglish</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="info">
            <div class="email">
              <i class="icofont-envelope"></i>
              <h4>Email:</h4>
              <p>info@seenglish.com</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="info">
            <div class="phone">
              <i class="icofont-phone"></i>
              <h4>Call:</h4>
              <p>+62 8589 6554 885</p>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section><!-- Akhir section kontak -->

</main><!-- Akhir #main -->

<!-- ======= Footer section ======= -->
<footer id="footer">

  <div class="footer-top">
    <div class="container">
      <div class="row">

        <div class="col-lg-3 col-md-6 footer-contact">
          <h3>SEEnglish</h3>
          <p>
            Ketawanggede, Kec. Lowokwaru<br>
            Malang, 65145<br>
            Indonesia <br><br>
            <strong>Phone:</strong> +62 8589 6554 885<br>
            <strong>Email:</strong> info@seenglish.com<br>
          </p>
        </div>

        <div class="col-lg-2 col-md-6 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#about">Informasi Tes</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#services">Tata Cara</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#faq">FAQ</a></li>
          </ul>
        </div>

        {{-- <div class="col-lg-4 col-md-6 footer-newsletter">
          <h4>Subsribe Informasi Terbaru</h4>
          <p>Masukkan email anda untuk mendapatkan informasi pembukaan tes SEEnglish</p>
          <form action="" method="post">
            <input type="email" name="email"><input type="submit" value="Subscribe">
          </form>
        </div> --}}

      </div>
    </div>
  </div>

  <div class="container d-md-flex py-4">

    <div class="mr-md-auto text-center text-md-left">
      <div class="copyright">
        &copy; Copyright 2022 <strong><span>SEEnglish</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
      </div>
    </div>
    <div class="social-links text-center text-md-right pt-3 pt-md-0">
      <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
      <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
      <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
      <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
    </div>
  </div>
</footer><!-- Akhir Footer -->

@endsection