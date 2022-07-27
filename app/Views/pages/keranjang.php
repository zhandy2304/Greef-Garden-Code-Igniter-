<?php $this->extend('layout/template'); ?>

<?php $this->section('content'); ?>
<body style="background: #eecda3;
  background: linear-gradient(45deg, #2baf2b, #a2f78d);
  min-width: 100vh;">

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

        <div class="px-4 px-lg-0">
          <!-- Judul -->
          <div class="container text-white py-5 text-center">
            <h1 class="display-4">Keranjang Belanja</h1>
          </div>
          <!-- End -->

          <div class="pb-5">
            <div class="container">
              <div class="row">
                <div class="col-lg-11 p-5 bg-white rounded shadow-sm mb-5">

                  <!-- Bagian Shopping cart -->
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col" class="border-0 bg-light">
                            <div class="p-2 px-3 text-uppercase">Barang</div>
                          </th>
                          <th scope="col" class="border-0 bg-light">
                            <div class="py-2 text-uppercase">Harga</div>
                          </th>
                          <th scope="col" class="border-0 bg-light">
                            <div class="py-2 text-uppercase">Kuantitas</div>
                          </th>
                          <th scope="col" class="border-0 bg-light">
                            <div class="py-2 text-uppercase">Hapus</div>
                          </th>
                        </tr>
                      </thead>

                      <?php 
                      foreach ($barang as $row) {
                        echo '
                      <tbody>
                        <tr>
                          <th scope="row" class="border-0">
                            <div class="p-2">
                              <img src="https://res.cloudinary.com/mhmd/image/upload/v1556670479/product-1_zrifhn.jpg" alt="" width="70" class="img-fluid rounded shadow-sm">
                              <div class="ml-3 d-inline-block align-middle">
                                <h5 class="mb-0"> <a href="#" class="text-dark d-inline-block align-middle">'.$row['nama'].'</a>
                              </div>
                            </div>
                          </th>
                          <td class="border-0 align-middle"><strong>Rp '.$row['harga'].'</strong></td>
                          <td class="border-0 align-middle"><strong>'.$row['kuantitas'].' kg</strong>
                          </td>
                          
                          
                          <td class="border-0 align-middle">
                            <a href="'.base_url('greengarden/hapuskeranjang/'.$row['id_orderan']).'">
                              <button type="submit" class="btn btn-danger">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                </svg>
                                  Delete
                              </button>
                            </a>
                          </td>
                        </tr>
                      </tbody> ';}
                      ?>

                      <div>
                      <a href="<?php echo base_url('greengarden/checkout'); ?>">
                        <button type="submit" class="btn btn-success" style="float: right; margin-right: 5em;">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cash-coin" viewBox="0 0 16 16">
                          <path fill-rule="evenodd" d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0z"/>
                          <path d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1h-.003zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195l.054.012z"/>
                          <path d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083c.058-.344.145-.678.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1H1z"/>
                          <path d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 5.982 5.982 0 0 1 3.13-1.567z"/>
                          </svg>
                          Check out
                        </button>
                        </a>
                      </div>
                  </table>
                </div>
                  <!-- End -->
                </div>
              </div>
            </div>
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