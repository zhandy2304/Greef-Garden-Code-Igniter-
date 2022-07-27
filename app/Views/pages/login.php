<?php $this->extend('layout/template'); ?>

<?php $this->section('content'); ?>
<body>
    <!-- ======= Header ======= -->
      <header id="header">
        <div class="container d-flex align-items-center">

			<!-- ======= Logo ======= -->
			<?= $this->include('logo/logo'); ?>
			
			<!-- ======= Navbar ======= -->
			<?= $this->include('layout/nav1'); ?>

        </div>
      </header>
      <!-- End Header -->

	<section id="hero">
        <div class="container">
                <div class="myCard">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="myLeftCtn" style="padding-top : 130px"> 
                                <form class="myForm text-center" action="<?php echo base_url('login/masuk_aksi'); ?>" method="POST" enctype="multipart/form-data">
                                    <header>Masuk</header>
                                    <div class="form-group">
                                        <input class="myInput" type="text" placeholder="Nama" name="nama" required> 
                                    </div>
                                    <div class="form-group">
                                        <input class="myInput" type="password" name="password" placeholder="Password" required> 
                                    </div>
                                    <input   type="submit" class="butt" value="LOGIN">
                                </form>
                            </div>
                        </div> 
                        <div class="col-md-5">
                            <div class="myRightCtn">
                                    <div class="box"><header>Green Garden</header></br>
                                    
                                    <p>Merupakan sebuah website yang dapat memudahkan petani 
                                    dan konsumen melakukan transaksi jual beli</p><br/>

                                    <p>Belum Punya Akun?<p>
                                    <a href="<?php echo base_url('login/index'); ?>">
                                        <input type="submit" class="butt" value="DAFTAR"></a>
                                    </div>
                                  </div>
                            </div>
                        </div>
                    </div>
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
