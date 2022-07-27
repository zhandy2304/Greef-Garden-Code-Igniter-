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
    <h2 style="color: #2baf2b; font-family: 'Poppins', sans-serif;">Edit Data</h2>
    </div>
      <div style="padding-left:10rem; padding-right:10rem">
      <form action="<?php echo base_url('greengarden/edit_aksi/'.$barang[0]['id_barang']); ?>" method="post" name="insert_barang" enctype="multipart/form-data" class="needs-validation" style="padding:20px;">

      <input name="id_barang" type="hidden" value="<?php echo $barang[0]['id_barang']; ?>">
      <input name="fotolama" type="hidden" value="<?php echo $barang[0]['foto']; ?>">

        <div class="mb-3">
          <label for="nama_barang">Nama Barang</label>
          <div class="input-group">
            <input name="nama_barang" type="text" class="form-control" id="nama_barang" placeholder="Nama Barang" value="<?php echo $barang[0]['nama_barang']; ?>" required>
          </div>
        </div>

        <div class="mb-3">
          <label for="stok">Stok Barang</label>
          <div class="input-group">
            <input name="stok" type="text" class="form-control" id="stok" placeholder="Stok Barang" value="<?php echo $barang[0]['stok']; ?>" required>
          </div>
        </div>

        <div class="mb-3">
          <label for="kuantitas">Kuantitas</label>
          <div class="input-group">
            <input name="kuantitas" type="text" class="form-control" id="kuantitas" placeholder="Kuantitas" value="<?php echo $barang[0]['kuantitas']; ?>" required>
          </div>
        </div>

        <div class="mb-3">
          <label for="Harga">Harga</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">Rp. </span>
            </div>
            <input name="harga" type="text" class="form-control" id="harga" placeholder="Harga dalam Rupiah" value="<?php echo $barang[0]['harga']; ?>" required>
          </div>
        </div>

        <div class="mb-3">
          <label for="foto">Gambar</label>
          <div class="input-group" style="padding-left:50px;">
            <small><input type="file" name="foto" placeholder="Gambar" id="fileToUpload">
            <img src="<?php echo base_url('public/img/'.$barang[0]['foto']); ?>" style="height: 15rem; width: 15rem;" class="card-img-top";> </small>
          </div>
        </div>

        <button class="tombol" type="submit">Edit</button>
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
