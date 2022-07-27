<?php $this->extend('layout/template'); ?>

<?php $this->section('content'); ?>
<body>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container d-flex align-items-center">

      <!-- ======= Logo ======= -->
      <?= $this->include('logo/logo'); ?>

    <nav class="nav-menu d-none d-lg-block">
      <ul>
        <li class="active"><a href="index">Home</a></li>
        <li><a href="#about">Tentang</a></li>
        <li><a href="#contact">Kontak</a></li>
      </ul>
    </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container">
      <h1>Welcome to <span>Green Garden</spa>
      </h1>
      <h2>Merupakan sebuah website yang dapat memudahkan petani dan konsumen melakukan transaksi jual beli</h2>
      <div class="d-flex">
        <a href="<?php echo base_url('login/index'); ?>" class="btn-get-started scrollto">Get Started</a>
      </div>
    </div>
  </section><!-- End Hero -->

  <!-- ======= About Section ======= -->
    <section id="about" class="about section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About</h2>
          <h3>Find Out More <span>About Us</span></h3>
          <p>Sebuah website sederhana penjualan buah dan sayur</p>
        </div>

        <div class="row">
          <div class="col-lg-5" data-aos="zoom-out" data-aos-delay="100">
            <img src="<?php echo base_url('public/img/sayur3.jpg'); ?>" class="img-fluid">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
            <h3>Green Garden</h3>
            <p class="font-italic">
              Merupakan sebuah website yang dibuat untuk memudahkan petani dan konsumen dalam
              melakukan transaksi jual beli
            </p>
            <ul>
              <li>
                <div>
                  <h5>Hemat Biaya</h5>
                  <p>Karena dari tangan pertama, maka dipastikan harga yang diperolah konsumen lebih rendah dari harga pasaran</p>
                </div>
              </li>
              <li>
                <div>
                  <h5>Mudah dan Praktis</h5>
                  <p>Hanya dengan menggunakan gawai dan akses internet, pengguna dapat melakukan jual beli secara mudah</p>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section><!-- End About Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <h3><span>Hubungi Kami</span></h3>
          <p>Untuk informasi lebih lanjut, saran dan kritik silahkan hubungi kami</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-4">
            <div class="info-box mb-4">
              <h3>Alamat</h3>
              <p>Makassar, Tamalanrea, Politeknik Negeri Ujung Pandang</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <h3>Email Us</h3>
              <p>tkj2a@gmail.com</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="info-box  mb-4">
              <h3>Telepon</h3>
              <p>+62822 9019 3036</p>
            </div>
          </div>
        </div>

        <div>
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="form-row">
                <div class="col form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
        </div>

      </div>
    </section><!-- End Contact Section -->

  
    <footer>
      <div class="container py-4">
        <div class="copyright">
          &copy; Copyright <strong><span>Green Garder</span></strong>. All Rights Reserved
        </div>
      </div>
    </footer><!-- End Footer -->
   
</body>
<?php $this->endSection(); ?>