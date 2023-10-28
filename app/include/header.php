
<!--Header-->
<div class="header">
<div class="container">
	
<div class="grid-3">
	<span class="vtr-menu-icon">
		<i class="icon-th-list"></i>
	</span>
<div class="header-logo">
	<a href="index.php" title="Laptop Jakarta">
		<h1><font color="white"><b>Laptop jakarta</b></font></h1><!-- <img src="wp-content/uploads/logo/logo-lj.png" alt="Laptop Jakarta"> -->
	</a>
</div>
<span class="vtr-search-icon">
	<i class="icon-search pull-right"></i>
</span>
<a href="index2.php?p=keranjang" title="keranjang belanja">
	<span class="vtr-cart-icon"> 
		<i class="icon-basket pull-right"></i>
	</span>
</a>
</div>

<div class="grid-6 grid-m-hide">
<div class="menu-menu-container">
	<ul id="menu-menu" class="vtr-menu">
		<li id="menu-item-31" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-31">
			<a href="index.php?page=caraorder">Cara Order</a>
		</li>
		<li id="menu-item-27" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-27">
			<a href="index.php?page=newsletter">Newsletter</a>
		</li>
		<li id="menu-item-29" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-29">
			<a href="index.php?page=kontak">Hubungi Kami</a></li>
		<li id="menu-item-5269" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5269"><a href="index.php?page=testimonial">Testimoni</a>
		</li>
	</ul>
</div> 
</div>
<div class="grid-3 grid-m-hide">
<span class="vtr-search-icon1 pull-left">
	
</span>
<?php
				if (!isset($_SESSION['username']) || empty($_SESSION['username'])) {
					?>
					<ul id="menu-menu" class="vtr-menu">

					<li class="menu-item menu-item-type-post_type menu-item-object-page">
						<a href="index.php?page=signup">Daftar</a></li>
					<li class="menu-item menu-item-type-post_type menu-item-object-page">
						<a href="index.php?page=signin">Masuk</a></li>
					

					</ul>
				<?php
				}else {
					?>
					<ul id="menu-menu" class="vtr-menu">

						<li class="menu-item menu-item-type-post_type menu-item-object-page">
							<a href="index.php?page=profile" class="">
							<?php echo $_SESSION['username'] ?></a>
						</li>

					</ul>
				<?php
				}
	?>
<span class="vtr-search-icon1 pull-left"><i class="icon-search"></i></span>
</div>
</div>

<!--Search-->
<div class='search-box'>
<form action='index.php?page=search' class='search-form' method='post'>
<input required class='search-text' name='key' placeholder='cari produk' type='text' />
<button class='search-button' type='submit'><i class="icon-search"></i></button>
</form>
</div>
<!--End Search-->

<!--Menu Mobile-->
<div class="menu-menu-container">
	<ul id="menu-menu-1" class="mobile-menu">
		<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-31">
			<a href="index.php?page=caraorder">Cara Order</a>
		</li>
		<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-27">
			<a href="index.php?page=newsletter">Newsletter</a>
		</li>
		<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-29">
			<a href="index.php?page=kontak">Hubungi Kami</a>
		</li>
		<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5269">
			<a href="index.php?page=testimonial">Testimoni</a>
		</li>
		<?php
				if (!isset($_SESSION['username']) || empty($_SESSION['username'])) {
					?>
						<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-31">
							<a href="index.php?page=signup">Daftar</a>
						</li>
						<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-31">
							<a href="index.php?page=signin">Masuk</a>
						</li>					
				<?php
				}else {
					?>
					
						<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-31">
							<a href="index.php?page=profile"><?php echo $_SESSION['username'] ?></a>
						</li>
				<?php
				}
	?>
	</ul>
</div>
<!-- END Menu Mobile-->
</div>
<!--End Header-->