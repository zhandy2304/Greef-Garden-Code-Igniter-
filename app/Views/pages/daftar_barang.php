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

	<section id="daftar-barang">
    <div class="container">
      <div class="row">
        <div class="col-5">
          <form action="<?php echo base_url('greengarden/cari_barang'); ?>" method="post">
            <div class="cari input-group mt-3 mb-4">
              <input type="text" class="form-control" placeholder="Masukkan nama buah.." name="keyword">
              <div class="input-group-append">
                <button class="btn" type="submit" name="submit">Cari</button>  
              </div>
            </div>  
          </form>
        </div>
          <div class="col-5" style="padding-top:23px; ">
            <td class="border-0 align-middle">
              <div class="mb-1">
                <a href="<?php echo base_url('greengarden/insert_barang'); ?>">
                  <button type="submit" class="btn btn-info">
                    Tambah Barang
                  </button>                              
                </a>
              </div>
            </td>
          </div>      
        </div>

      <div class="row">
        <?php
         foreach ($barang as $row) {
          echo '
          </form>
          <div class="card mx-3 mt-3" style="width: 16.1rem;">
          <img src="'.base_url('public/img/'.$row['foto']).'" style="height: 15rem;" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title">'.$row['nama_barang'].'</h5>
            <p class="card-text" style="font-size: 19px;"><b>Rp.'.$row['harga'].'</b></p>
            <a href="'.base_url('greengarden/detail_barang/'.$row['id_barang']).'" class="tombolo">Detail Barang</a>
          </div>
        </div> ';}
        ?>
      </div>

    </div>
        
    </section><!-- End Detail Barang -->

    <footer>
    <div class="container py-4">
      <div class="copyright">
        &copy; Copyright <strong><span>Green Garden</span></strong>. All Rights Reserved
      </div>

    </div>
  </footer><!-- End Footer -->

</body>
<?php $this->endSection(); ?>