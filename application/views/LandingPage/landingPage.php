<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="<?php echo base_url()?>/assets/css/bootstrap.min.css"
      rel="stylesheet"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="<?php echo base_url()?>/assets/font/bootstrap-icons.css"
    />
    <link rel="stylesheet" href="<?php echo base_url()?>/assets/style.css" />
    <title>Landing Page</title>
  </head>
  <body>
    <!-- Navigasi Bar -->
    <nav class="navbar navbar-expand-lg bg-orange fixed-top">
      <div class="container">
        <a class="navbar-brand text-white logo" href="#">Kuajarin</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <ul class="navbar-nav ml-auto d-flex justify-content-end">
          <li class="nav-item">
            <a
              class="nav-link nav-hover active text-white"
              aria-current="page"
              href="#"
              >Home</a
            >
          </li>
          <li class="nav-item nav-hover">
            <a class="nav-link text-white" href="#">Course</a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-hover text-white" href="#">Contact Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-hover text-white" href="<?=base_url()?>/Login/index">Login</a>
          </li>
        </ul>
      </div>
    </nav>
    <!-- Bagian Jumbotron/hero/title -->
    <div class="title-section">
      <section class="jumbotron px-2 py-3 container">
        <div class="row">
          <div class="col-sm title-content">
            <p class="text-white">Learn Technology</p>
            <h1 class="text-white">
              Tingkatkan skills anda<br />
              demi masa depan anda<br />
              yang cerah
            </h1>
          </div>
          <div class="col-sm"></div>
        </div>
      </section>
    </div>
    <!-- End Bagian Jumbotron/hero/title -->
    <!-- Bagian Course -->
    <div class="course">
      <div class="container">
        <div class="row">
          <h1 class="text-white d-flex justify-content-center">Course</h1>
        </div>
        <div class="row my-5">
          <div class="col-sm d-flex justify-content-around">
            <div class="card list-course" style="width: 18rem">
              <img
                src="<?php echo base_url()?>/assets/image/network2.jpg"
                class="card-img-top"
                alt="Network Engineering"
              />
              <div class="card-body">
                <h5 class="card-title">Network Engineering</h5>
                <p class="card-text">
                  Mempelajari tentang hal-hal yg berhubungan dengan jaringan
                </p>
                <a href="#" class="btn btn-primary">See more</a>
              </div>
            </div>
          </div>
          <div class="col-sm d-flex justify-content-around">
            <div class="card list-course" style="width: 18rem">
              <img
                src="<?php echo base_url()?>/assets/image/web.jpg"
                class="card-img-top"
                alt="Web Developer"
              />
              <div class="card-body">
                <h5 class="card-title">Web Developer</h5>
                <p class="card-text">Mempelajari mengenai pemrograman web</p>
                <a href="#" class="btn btn-primary">See more</a>
              </div>
            </div>
          </div>
          <div class="col-sm d-flex justify-content-around">
            <div class="card list-course" style="width: 18rem">
              <img
                src="<?php echo base_url()?>/assets/image/AI.jpg"
                class="card-img-top"
                alt="Artificial Intelegence"
              />
              <div class="card-body">
                <h5 class="card-title">Artificial Intelegence</h5>
                <p class="card-text">
                  Mempelajari mengenai teknologi AI dan cara membuatnya
                </p>
                <a href="#" class="btn btn-primary">See more</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End bagian course -->
    <!-- Bagian Contact Us -->
    <div class="contact mt-5">
      <div class="container">
        <div class="row">
          <div class="col-sm">
            <h2>Contact Us</h2>
            <div class="contact-us">
              <h5><i class="bi-telephone"></i> +629898776767</h5>
              <h5><i class="bi-whatsapp"></i> +629898776767</h5>
              <h5><i class="bi-envelope"></i> kuajarin@gmail.com</h5>
            </div>
          </div>
          <div class="col-sm">
            <h2 class="logo">Kuajarin</h2>
            <div class="contact-us">
              <h4 class="mb-4"><i class="bi-house"></i> Kantor Utama</h4>
              <h5>
                <i class="bi-geo-alt"></i> Jl.Soekarno hatta Samarinda
                Kalimantan Timur 87686
              </h5>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Bagian Contact Us -->
    <!-- Bagian Footer -->
    <footer>
      <div class="panel panel-default">
        <div class="panel-body text-white d-flex justify-content-center">
          <p>copyrights by Kuajarin 2022</p>
        </div>
      </div>
    </footer>
    <!-- End Bagian Footer -->
    <script
      src="<?php echo base_url()?>/assets/js/bootstrap.bundle.min.js"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
