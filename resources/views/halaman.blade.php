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
    <div class="container" style="padding-bottom: 100px;">

      <div class="section-title">
        <h2>Informasi Tes</h2>
        <h3>Jadwal tes TOEFL <span>SEEnglish</span></h3>
        <p>Berikut merupakan jadwal pembukaan sesi tes TOEFL SEEnglish</p>
      </div>

      <div class="row content">
        <div class="col-lg-12 ">

          <table class="table table-bordered yajra-datatable">

            <thead>
              <tr>
                <th>No</th>
                <th>Sesi</th>
                <th>Tanggal</th>
                <th>Jam Mulai</th>
                <th>Jam Selesai</th>
              </tr>
            </thead>
            @foreach ($sesi as $ses)
            <tbody>
              <tr>
                <td>{{ $iter++ }}</td>
                <td>{{ $ses->nama }}</td>
                <td>{{ $ses->tanggal }}</td>
                <td>{{ $ses->jam_mulai }}</td>
                <td>{{ $ses->jam_selesai }}</td>
              </tr>
            </tbody>
            @endforeach
          </table>

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
          <a data-toggle="collapse" class="" href="#faq1">Apakah bisa mendaftar tes tanpa mendaftar akun? <i class="icofont-simple-up"></i></a>
          <div id="faq1" class="collapse show" data-parent=".faq-list">
            <p>
              Tidak bisa.
              Anda harus mendaftar akun terlebih dahulu untuk proses administrasi tes
            </p>
          </div>
        </li>

        <li>
          <a data-toggle="collapse" href="#faq2" class="collapsed">Apakah boleh melakukan pembayaran selain metode yang ditentukan? <i class="icofont-simple-up"></i></a>
          <div id="faq2" class="collapse" data-parent=".faq-list">
            <p>
              Pembayaran dilakukan melalui metode tranfer bank ke rekening yang tertera pada halaman daftar tes
            </p>
          </div>
        </li>

        <li>
          <a data-toggle="collapse" href="#faq3" class="collapsed">Apakah dapat mendaftar tes 2 kali pada akun yang sama? <i class="icofont-simple-up"></i></a>
          <div id="faq3" class="collapse" data-parent=".faq-list">
            <p>
              Tidak bisa apabila belum menyelesaikan tes, dan jika sudah menyelesaikan tes maka dapat mendaftar tes lagi.
            </p>
          </div>
        </li>

        <li>
          <a data-toggle="collapse" href="#faq4" class="collapsed">Kapan saya dapat mengerjakan tes? <i class="icofont-simple-up"></i></a>
          <div id="faq4" class="collapse" data-parent=".faq-list">
            <p>
              Anda dapat mengerjakan tes pada hari dan jam yang telah ditentukan
            </p>
          </div>
        </li>

        <li>
          <a data-toggle="collapse" href="#faq5" class="collapsed">Bagaimana langkah saya setelah melakukan pembayaran? <i class="icofont-simple-up"></i></a>
          <div id="faq5" class="collapse" data-parent=".faq-list">
            <p>
              Silahkan menunggu admin memvalidasi pembayaran anda, setelah itu anda akan mendapatkan token tes melalui email
            </p>
          </div>
        </li>

        <li>
          <a data-toggle="collapse" href="#faq6" class="collapsed">Bagaimana terdapat kesalahan sistem atau human error pada saat tes? <i class="icofont-simple-up"></i></a>
          <div id="faq6" class="collapse" data-parent=".faq-list">
            <p>
              Anda dapat menghubungi proctor atau admin untuk menemukan solusi lebih lanjut
            </p>
          </div>
        </li>

      </ul>

    </div>
  </section>
  <!--Akhir F.A.Q Section -->

  <!-- ======= Section kontak ======= -->
  <section id="contact" class="contact">
    <div class="container">

      <div class="section-title">
        <h2>Kontak</h2>
        <h3>Kontak <span>Kami</span></h3>
        <p>Informasi lokasi, email serta nomor yang dapat dihubungi</p>
      </div>

      <div>
        <!-- <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe> -->

        <!-- <iframe width="600" height="450" style="border:0" loading="lazy" allowfullscreen src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJdQliLX-CeC4R1V7uu1l0m_E&key=..."></iframe> -->
      </div>

      <div class="row mt-12">
        <div class="col-lg-4" style="padding-top: 40px;">
          <div class="info">
            <div class="address">
              <i class="icofont-google-map"></i>
              <h4>Location:</h4>
              <p>Gedung SEEnglish, Ketawanggede,
                Kec. Lowokwaru, Malang
              </p>
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
          <h4>Tautan Alternatif</h4>
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
        &copy; Copyright 2022. <strong><span>SEEnglish</span></strong>
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