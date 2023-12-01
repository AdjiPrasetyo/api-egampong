@extends('layout.main')

@section('container')
<!-- ======= Hero Section ======= -->
<section id="hero" class="hero d-flex align-items-center">

  <div class="container">
    <div class="row">
      <div class="col-lg-6 d-flex flex-column justify-content-center">
        <h1 data-aos="fade-up">Sistem Informasi Gampong</h1>
        <h2 data-aos="fade-up" data-aos-delay="400">
          Gampong Babussalam, Kecamatan Baktiya, Kabupaten Aceh Utara, Provinsi Aceh.
        </h2>
        <div data-aos="fade-up" data-aos-delay="600">
          <div class="text-center text-lg-start">
            <a href="#profile"
              class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
              <span>Profile Gampong</span>
              <i class="bi bi-arrow-right"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
        <img src="assets/img/hero-img.png" class="img-fluid" alt="">
      </div>
    </div>
  </div>

</section><!-- End Hero -->

<main id="main">
  <!-- ======= Profile Section ======= -->
  <section id="profile" class="profile">

    <div class="container" data-aos="fade-up">
      <div class="row gx-0">

        <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
          <div class="content">
            <h3>Who We Are</h3>
            <h2>Expedita voluptas omnis cupiditate totam eveniet nobis sint iste. Dolores est repellat corrupti
              reprehenderit.</h2>
            <p>
              Quisquam vel ut sint cum eos hic dolores aperiam. Sed deserunt et. Inventore et et dolor consequatur
              itaque ut voluptate sed et. Magnam nam ipsum tenetur suscipit voluptatum nam et est corrupti.
            </p>
            <div class="text-center text-lg-start">
              <a href="#"
                class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                <span>Read More</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>

        <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
          <img src="assets/img/about.jpg" class="img-fluid" alt="">
        </div>

      </div>
    </div>

  </section><!-- End Profile Section -->

  <!-- ======= Pemerintah Section ======= -->
  <section id="pemerintah" class="values">

    <div class="container" data-aos="fade-up">

      <header class="section-header">
        <h2>Pemerintah</h2>
        <p>Struktur Pemerintahan Gampong</p>
      </header>

      <div class="row">

        <div class="col-lg-12 mb-5" data-aos="fade-up" data-aos-delay="200">
          <div class="box">
            <img src="assets/img/values-1.png" class="img-fluid" alt="">
            <h3>Ad cupiditate sed est odio</h3>
            <p>Eum ad dolor et. Autem aut fugiat debitis voluptatem consequuntur sit. Et veritatis id.</p>
          </div>
        </div>
        <header class="section-header">
          <p>Visi & Misi</p>
        </header>
        <div class="col-lg-6 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="400">
          <div class="box">
            <img src="assets/img/values-2.png" class="img-fluid" alt="">
            <h3>VISI</h3>
            <p>Repudiandae amet nihil natus in distinctio suscipit id. Doloremque ducimus ea sit non.</p>
          </div>
        </div>

        <div class="col-lg-6 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="600">
          <div class="box">
            <img src="assets/img/values-3.png" class="img-fluid" alt="">
            <h3>MISI</h3>
            <p>Quam rem vitae est autem molestias explicabo debitis sint. Vero aliquid quidem commodi.</p>
          </div>
        </div>

      </div>

    </div>

  </section><!-- End Pemerintah Section -->

  <!-- ======= Counts Section ======= -->
  <section id="infografis" class="counts">
    <div class="container" data-aos="fade-up">

      <header class="section-header">
        <h2>Infografis</h2>
        <p>Demografi Penduduk</p>
      </header>

      <div class="row gy-4">

        <div class="col-lg-3 col-md-6">
          <div class="count-box">
            <i class="bi bi-emoji-smile"></i>
            <div>
              <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1"
                class="purecounter"></span>
              <p>Happy Clients</p>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="count-box">
            <i class="bi bi-journal-richtext" style="color: #ee6c20;"></i>
            <div>
              <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1"
                class="purecounter"></span>
              <p>Projects</p>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="count-box">
            <i class="bi bi-headset" style="color: #15be56;"></i>
            <div>
              <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1"
                class="purecounter"></span>
              <p>Hours Of Support</p>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="count-box">
            <i class="bi bi-people" style="color: #bb0852;"></i>
            <div>
              <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1"
                class="purecounter"></span>
              <p>Hard Workers</p>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Counts Section -->

  <!-- ======= geografis Section ======= -->
  <section id="geografis" class="features values">

    <div class="container" data-aos="fade-up">

      <header class="section-header">
        <h2>Geografis</h2>
        <p>Peta Wilayah Gampong</p>
      </header>

      <!-- Feature Tabs -->
      <div class="row col-lg-12" data-aos="fade-up">
        <div class="box">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63594.60004397178!2d97.40491667339069!3d4.995607715010374!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30380ac9cafa9881%3A0x411ba7b3543a1768!2sBabussalam%2C%20Baktiya%2C%20North%20Aceh%20Regency%2C%20Aceh!5e0!3m2!1sen!2sid!4v1701462818179!5m2!1sen!2sid"
            width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

      </div><!-- End Feature Tabs -->

    </div>

  </section><!-- End geografis Section -->

</main>
@endsection