<?php $this->extend('layout/template'); ?>

<?php $this->section('content'); ?>
<body>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container d-flex align-items-center">

      <!-- ======= Logo ======= -->
      <?= $this->include('logo/logo'); ?>

      <!-- ======= Navbar ======= -->
      <?= $this->include('layout/nav2'); ?>

    </div>
  </header><!-- End Header -->

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
  
    <footer>
      <div class="container py-4">
        <div class="copyright">
          &copy; Copyright <strong><span>Green Garder</span></strong>. All Rights Reserved
        </div>
      </div>
    </footer><!-- End Footer -->
   
</body>
<?php $this->endSection(); ?>