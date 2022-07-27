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