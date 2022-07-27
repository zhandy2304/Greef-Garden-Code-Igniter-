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

 <section class="ftco-section">
      <div class="container">
          <div class="row">
              <div class="col-lg-6 mb-5 ftco-animate">
                  <a href="<?php echo base_url('assets/uploads/products/'. $product->picture_name); ?>" class="image-popup"><img src="<?php echo base_url('assets/uploads/products/'. $product->picture_name); ?>" class="img-fluid" alt="<?php echo $product->name; ?>"></a>
              </div>
              <div class="col-lg-6 product-details pl-md-5 ftco-animate">
                  <h3><?php echo $product->name; ?></h3>
                  <div class="rating d-flex">
                          <p class="text-left mr-4">
                              <a href="#" class="mr-2">5.0</a>
                              <a href="#"><span class="ion-ios-star-outline"></span></a>
                              <a href="#"><span class="ion-ios-star-outline"></span></a>
                              <a href="#"><span class="ion-ios-star-outline"></span></a>
                              <a href="#"><span class="ion-ios-star-outline"></span></a>
                              <a href="#"><span class="ion-ios-star-outline"></span></a>
                          </p>
                          <p class="text-left mr-4">
                              <a href="#" class="mr-2" style="color: #000;">100 <span style="color: #bbb;">Rating</span></a>
                          </p>
                          <p class="text-left">
                              <a href="#" class="mr-2" style="color: #000;">500 <span style="color: #bbb;">Sold</span></a>
                          </p>
                      </div>
                  <p class="price">
                      <?php if ($product->current_discount > 0) : ?>
                        <span class="mr-2 price-dc"><strike><small>Rp <?php echo format_rupiah($product->price); ?></small></strike></span>
                        <span class="price-sale text-success">Rp <?php echo format_rupiah($product->price - $product->current_discount); ?></span>
                      <?php else : ?>
                      <span>Rp <?php echo format_rupiah($product->price); ?></span>
                      <?php endif; ?>
                    </p>
                    
                  <p><?php echo $product->description; ?></p>
                  <div class="row mt-4">
                    <div class="w-100"></div>
                  <div class="input-group col-md-6 d-flex mb-3">
                   <span class="input-group-btn mr-2">
                      <button type="button" class="quantity-left-minus btn"  data-type="minus" data-field="">
                      <i class="ion-ios-remove"></i>
                      </button>
                      </span>
                   <input type="text" id="quantity" name="quantity" class="form-control input-number" value="1" min="1" max="100">
                   <span class="input-group-btn ml-2">
                      <button type="button" class="quantity-right-plus btn" data-type="plus" data-field="">
                       <i class="ion-ios-add"></i>
                   </button>
                   </span>
                </div>

                <div class="w-100"></div>
                <div class="col-md-12">
                    <p style="color: #000;">Tersedia <?php echo $product->stock; ?> <?php echo $product->product_unit; ?></p>
                </div>
            </div>
            <p><a href="#" class="btn btn-black btn-sm py-3 px-5 add-cart cart-btn" data-sku="<?php echo $product->sku; ?>" data-name="<?php echo $product->name; ?>" data-price="<?php echo ($product->current_discount > 0) ? ($product->price - $product->current_discount) : $product->price; ?>" data-id="<?php echo $product->id; ?>">Add to Cart</a></p>
              </div>
          </div>
      </div>
  </section>

      <footer>
    <div class="container py-4">
      <div class="copyright">
        &copy; Copyright <strong><span>Green Garden</span></strong>. All Rights Reserved
      </div>

    </div>
  </footer><!-- End Footer -->

</body>
<?php $this->endSection(); ?>