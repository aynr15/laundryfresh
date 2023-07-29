@extends('layouts.app')

@section('content')
 <!-- Template Main CSS File -->
 @vite('resources/sass/app.scss')
  @vite('resources/css/style.css')

<!-- ======= Hero Section ======= -->
<section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div>
        <div class="carousel-item active" style="background-image: url({{ Vite::asset('resources/images/hero.jpg') }})">
        <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">SELAMAT DATANG FRESHIER!</h2>
              <p class="animate__animated animate__fadeInUp">Laundry bersih cepat dan nyaman</p>
              <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
            </div>
          </div>
        </div>
      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section><!-- End Hero -->

  <main id="main">
  
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row content">
          <div class="col-lg-6">
            <h2>FRESH LAUNDRY</h2>
            <h3>Cepat Bersih #ANTIRIBET</h3>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
              Fresh Laundry merupakan penyedia jasa laundry dengan sistem antar jemput pertama di Surabaya. Tujuan kami
              adalah untuk meringankan bebanmu semudah pesan-tunggu-pakai. Mengapa harus menggunakan jasa kami?
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> CEPAT - cucian sampai ke tanganmu dalam hitungan jam </li>
              <li><i class="ri-check-double-line"></i> MUDAH - gak ada waktu buat pergi ke tempat laundry? kami siap antar jemput</li>
              <li><i class="ri-check-double-line"></i> TERPERCAYA - 42 organisasi & instansi telah berlangganan di Fresh Laundry</li>
            </ul>
            <p class="fst-italic">
              Tunggu apa lagi, Pesan sekarang.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients section-bg">
      <div class="container">

        <div class="row">

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img class="img-fluid" src="{{Vite::asset('resources/images/client-1.png') }}" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
          <img class="img-fluid" src="{{Vite::asset('resources/images/client-2.png') }}" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img class="img-fluid" src="{{Vite::asset('resources/images/client-3.png') }}" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img class="img-fluid" src="{{Vite::asset('resources/images/client-4.png') }}" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img class="img-fluid" src="{{Vite::asset('resources/images/client-5.png') }}" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img class="img-fluid" src="{{Vite::asset('resources/images/client-6.png') }}" alt="">
          </div>

        </div>

      </div>
    </section><!-- End Clients Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="row">
          <div class="col-md-6">
            <div class="icon-box">
              <i class="bi bi-briefcase"></i>
              <h4><a href="#">CUCI KERING</a></h4>
              <p>cuci keringkan siap antar dimanapun tempatmu</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="bi bi-card-checklist"></i>
              <h4><a href="#">CUCI BASAH</a></h4>
              <p>cuci basah langsug ambil</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="bi bi-bar-chart"></i>
              <h4><a href="#">CUCI SETRIKA</a></h4>
              <p>pakaian siap digunakan</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="bi bi-binoculars"></i>
              <h4><a href="#">SETRIKA</a></h4>
              <p>males nyetrika? biar kami saja</p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Services Section -->

    <section id="team" class="team ">
      <div class="container">
      <div class="section-title">
          <h2>OUR TEAMS</h2>
          <p>Check our team</p>
        </div>
        <div class="row">

          <div class="col-lg-6">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="{{Vite::asset('resources/images/team 1.jpg') }}" alt=""></div>
              <div class="member-info">
                <h4>Yuda Sukamto</h4>
                <span>Owner</span>
                <p>"ga ada lowongan. 3 orang cukup"</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4 mt-lg-0">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="{{Vite::asset('resources/images/team 2.jpg') }}" alt=""></div>
              <div class="member-info">
                <h4>Lino Saputra</h4>
                <span>Operasional</span>
                <p>"capek, tapi yaudah"</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="{{Vite::asset('resources/images/team 3.jpg') }}" alt=""></div>
              <div class="member-info">
                <h4>Lia Safira</h4>
                <span>Operasional</span>
                <p>"biar aku aja yang nyuci"</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="{{Vite::asset('resources/images/team 4.jpg') }}" alt=""></div>
              <div class="member-info">
                <h4>Lucas</h4>
                <span>Pengiriman</span>
                <p>"siap jemput siap antar"</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Team Section -->
      
  </main><!-- End #main -->
@endsection
