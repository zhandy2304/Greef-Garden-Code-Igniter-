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
      </header>
      <!-- End Header -->
    
  <section id="detail-barang">
    <div class="container">
      <div class="row mb-5" style="padding-left:40px;">
          <div>
            <img src="<?php echo base_url('public/img/back.png'); ?>" style="width: 30px; height : 30px; border: 0; padding-left: 40px; padding-top: 20px;"></div>

          <div class="card mt-5 ml-5 mr-3" style="width: 25rem; border: 0;">
            <img src="<?php echo base_url('public/img/'.$barang[0]['foto']); ?>" style="height: 25rem;" class="card-img-top">
          </div>

          <div class="card mx-3" style="width: 18rem; border: 0;">
            <h3 class="card-title" style="padding-top: 5rem; font-size: 30px;"><b><?php echo $barang[0]['nama_barang']; ?></b></h3>

            <div class="row">
              <div class="card ml-3" style="width: 6rem; border: 0;">
                <p class="card-text" style="font-size: 21px;">Harga</p>
              </div> 
              <div class="card ml-4" style="width: 10rem; border: 0;">
                <p class="card-text" style="font-size: 21px;">: Rp.<?php echo $barang[0]['harga']; ?></p>
              </div> 
            </div>

            <div class="row">
              <div class="card ml-3" style="width: 6rem; border: 0;">
                <p class="card-text" style="font-size: 21px;">Stok</p>
              </div> 
              <div class="card ml-4" style="width: 10rem; border: 0;">
                <p class="card-text" style="font-size: 21px;">: <?php echo $barang[0]['stok']; ?> kg</p>
              </div> 
            </div>

            <div class="row">
              <div class="card  ml-3" style="width: 6rem; border: 0;">
                <p class="card-text" style="font-size: 21px;">Kuantitas</p>
              </div> 
              <div class="card ml-4" style="width: 10rem; border: 0;">
                <p class="card-text" style="font-size: 21px;">: <?php echo $barang[0]['kuantitas']; ?>  kg</p>
              </div> 
            </div></br></br></br>

            <div class="row-mt-3" style="padding-left:35px;">
              <a href="<?php echo base_url('greengarden/edit/'.$barang[0]['id_barang']); ?>" class="btn btn-info mx-3">Ubah</a>
              <a href="<?php echo base_url('greengarden/hapus/'.$barang[0]['id_barang']).'/'.$barang[0]['foto'] ; ?>" class="btn btn-danger mx-3" onclick="return confirm('Apakah anda yakin untuk menghapus barang ini?')">Hapus</a>
            </div>

          
              <form action="<?php echo base_url('greengarden/add_keranjang/'.$barang[0]['id_barang']); ?>" method="post" name="insert_barang" enctype="multipart/form-data" class="needs-validation">
                  <input name="id_barang" type="hidden" value="<?php echo $barang[0]['id_barang']; ?>">
                  <input name="nama" type="hidden" value="<?php echo $barang[0]['nama_barang']; ?>">
                  <input name="kuantitas" type="hidden" value="<?php echo $barang[0]['kuantitas']; ?>">
                  <input name="harga" type="hidden" value="<?php echo $barang[0]['harga']; ?>">
                  <input name="foto" type="hidden" value="<?php echo $barang[0]['foto']; ?>">
                  <div class="myLeftCtn mt-1"> 
                    <button type="submit" class="butt" >Beli Sekarang</button> 
                  </div>
              </form>

          </div>
        </div>
      </div>  
    </section><!-- End Detail Section -->

    <footer>
    <div class="container py-4">
      <div class="copyright">
        &copy; Copyright <strong><span>Green Garden</span></strong>. All Rights Reserved
      </div>

    </div>
  </footer><!-- End Footer -->

</body>
<?php $this->endSection(); ?>