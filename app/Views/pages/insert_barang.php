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
      
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">
  </header>
  <!-- End Header -->
    
<div class="container" style="max-width: 960px;">
  <div class="text-center" style="margin-top:20px;">
    <img class="d-block mx-auto mb-4" src="<?php echo base_url('public/img/logo-greengarden-01.png'); ?>" alt="" width="72" height="72">
    <h2 style="color: #2baf2b; font-family: 'Poppins', sans-serif;">Tambah Barang</h2>
    </div>
      <div style="padding-left:10rem; padding-right:10rem">
      <form action="<?php echo base_url('greengarden/insert_barang_aksi'); ?>" method="post" name="insert_barang" enctype="multipart/form-data" class="needs-validation" style="padding:20px;">
        <div class="mb-3">
          <label for="nama_barang">Nama Barang</label>
          <div class="input-group">
            <input name="nama_barang" type="text" class="form-control" id="nama_barang" placeholder="Nama Barang" required>
          </div>
        </div>

        <div class="mb-3">
          <label for="stok">Stok Barang (kg)</label>
          <div class="input-group">
            <input name="stok" type="text" class="form-control" id="stok" placeholder="Stok Barang" required>
          </div>
        </div>

        <div class="mb-3">
          <label for="kuantitas">Kuantitas (kg)</label>
          <div class="input-group">
            <input name="kuantitas" type="text" class="form-control" id="kuantitas" placeholder="Kuantitas" required>
          </div>
        </div>

        <div class="mb-3">
          <label for="Harga">Harga</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">Rp. </span>
            </div>
            <input name="harga" type="text" class="form-control" id="harga" placeholder="Harga dalam Rupiah" required>
          </div>
        </div>

        <div class="mb-3">
          <label for="foto">Gambar</label>
          <div class="input-group">
            <small><input type="file" name="foto" required placeholder="Gambar"> </small>
          </div>
        </div>

        <div><?php echo $pesan_validasi->getError('foto'); ?></div>
        
        <button class="tombol" type="submit">Selesai</button>
      </form>
    </div>
  </div>

  <footer>
  <div class="container py-4">
    <div class="copyright">
      &copy; Copyright <strong><span>Green Garden</span></strong>. All Rights Reserved
    </div>

  </div>
</footer><!-- End Footer -->

</body>
<?php $this->endSection(); ?>
