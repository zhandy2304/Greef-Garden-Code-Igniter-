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

<body>
  <main class="page payment-page">
    <section class="payment-form dark">
      <div class="container">
        <div class="block-heading">
          <h2 style="color: #2baf2b;"><b>Checkout</b></h2>
        </div>
        <form>
          <div class="products">
            <h3 class="title">Detail Belanja</h3>
              <div class="item">
                  <?php 
                    foreach ($barang as $row) {
                    echo '
                    <span class="price">Rp. '.$row['harga'].'</span>
                    <p class="item-name">'.$row['nama'].'</p>
                    <p class="item-description"> Jumlah : '.$row['kuantitas'].' kg</p>
                ' ;} ?>
                  <div class="total">Total<span class="price">Rp. <?php echo $jumlah[0]['SUM(harga)']; ?></span></div>
              </div>
          </div>
      
                  <div class="card-details">
                    <h3 class="title">Detail Pengiriman</h3>
                    <div class="mb-3">
                  <label for="nama_barang">Provinsi</label>
                  <div class="input-group">
                    <input name="provinsi" type="text" class="form-control" placeholder="Provinsi" required>
                  </div>
                </div>

                <div class="mb-3">
                  <label for="stok">Kabupaten / Kota</label>
                  <div class="input-group">
                    <input name="kabupaten" type="text" class="form-control" placeholder="Kabupaten / Kota" required>
                  </div>
                </div>

                <div class="mb-3">
                  <label for="kuantitas">Kecamatan</label>
                  <div class="input-group">
                    <input name="kecamatan" type="text" class="form-control" placeholder="Kecamatan" required>
                  </div>
                </div>

                <div class="mb-3">
                  <label for="Harga">Alamat tambahan</label>
                  <div class="input-group">
                    <input name="alamat" type="text" class="form-control" placeholder="Jalan, Nomor Rumah, etc" required>
                  </div>
                </div>

                <div class="mb-3">
                  <label for="Harga">Kode Pos</label>
                  <div class="input-group">
                    <input name="kodepos" type="text" class="form-control" placeholder="Kode Pos" required>
                  </div>
                </div>

                <div class="mb-3">
                  <label for="Harga">No. Handphone</label>
                  <div class="input-group">
                    <input name="nohp" type="text" class="form-control" placeholder="Nomor Handphone" required>
                  </div>
                </div>

              <div class="form-group col-sm-12">
                <button onclick="window.print()" class="btn btn-primary btn-block">
                    Cetak
                    <i class="fa fa-print"></i>
                </button>
              </div>

            </div>
          </div>
        </form>
      </div>
    </section>
  </main>
</body>

    <footer>
    <div class="container py-4">
      <div class="copyright">
        &copy; Copyright <strong><span>Green Garden</span></strong>. All Rights Reserved
      </div>

    </div>
  </footer><!-- End Footer -->

</body>
<?php $this->endSection(); ?>