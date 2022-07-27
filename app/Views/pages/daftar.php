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

  <!-- ======= Hero Section ======= -->
	<section id="hero">
        <div class="container">
                <div class="myCard">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="myLeftCtn"> 
                                <form class="myForm text-center" action="<?php echo base_url('login/daftar_aksi'); ?>" method="POST" enctype="multipart/form-data">
                                    <header>Buat Akun Baru</header>
                                    <div class="form-group">
                                        <input class="myInput" type="text" placeholder="Nama" name="nama" required> 
                                    </div>

                                    <div class="form-group">
                                        <input class="myInput" placeholder="Email" type="email" name="email" required> 
                                    </div>

                                    <div class="form-group">
                                        <input class="myInput" type="password" name="password" placeholder="Password" required> 
                                    </div>

                                    <div class="form-group">
                                    <label>Pilih foto anda</label>
                                        <small><input type="file" name="foto" required> </small>
                                    </div>

                                    <div class="form-group">
                                        <label>
                                            <input id="check_1" name="check_1"  type="checkbox" required>
                                            <small> Saya sudah membaca Syarat dan Ketentuan</small></input> 
                                            <div class="invalid-feedback">Kamu harus mencentang box</div>
                                        </label>
                                    </div>
                                    <input type="submit" class="butt" value="CREATE ACCOUNT">
                                </form>
                            </div>
                        </div> 
                        <div class="col-md-5">
                            <div class="myRightCtn">
                                    <div class="box"><header>Green Garden</header></br>
                                    
                                    <p>Merupakan sebuah website yang dapat memudahkan petani 
                                    dan konsumen melakukan transaksi jual beli</p><br/>

                                    <p>Sudah punya akun?<p>
                                    <a href="<?php echo base_url('login/masuk'); ?>">
                                        <input type="submit" class="butt" value="LOGIN"></a>
                                    </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- End Hero Section -->

   <footer>
      <div class="container py-4">
        <div class="copyright">
          &copy; Copyright <strong><span>Green Garder</span></strong>. All Rights Reserved
        </div>
      </div>
    </footer><!-- End Footer -->

 </body>
<?php $this->endSection(); ?>