	<a href="<?php echo base_url('greengarden/daftar_barang'); ?>" class="active menu ml-5 mx-3">Beranda</a>
	<a href="<?php echo base_url('greengarden/tentang'); ?>" class="menu mx-3">Tentang</a>
	<a href="<?php echo base_url('greengarden/kontak'); ?>" class="menu mx-3">Kontak</a>

<nav class="nav-menu d-none d-lg-block" style="margin-left: 34rem;">
	<ul>
	  <li><p style="padding-top:7px;">Halo, <?php echo $login_status['nama']?> </p></li>
	  <li><a href="<?php echo base_url('greengarden/keranjang')?>" class="logo mr-auto"><img src="<?php echo base_url('public/img/shopping-cart.png'); ?>" style="width: 30px;"></a></li>
	  <li><a href="<?php echo base_url('login/logout')?>" class="logo mr-auto"><img src="<?php echo base_url('public/img/logout.png'); ?>" style="width: 30px;"></a></li>
	</ul>
</nav><!-- .nav-menu -->