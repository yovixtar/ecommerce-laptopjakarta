
<!--Footer Bar-->
<div id="footbar">
<div class="container">
<div class="nest">

<!--Alamat-->
<div class="grid-3">
<div class="footbarblock">
<div class="box"><h4>Alamat</h4> <div class="textwidget">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.106656511505!2d109.47338079096963!3d-6.996719067462745!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fde754b1f9d11%3A0xe39eb65cb57f4beb!2sWarnet+%22SM%22+Cangak!5e0!3m2!1sid!2sid!4v1491280984038" style="display:inline-block;width:250px;height:250px" frameborder="0" allowfullscreen></iframe>

</div>
</div> </div>
</div>
<!--End Alamat-->

<div class="grid-3">
<div class="footbarblock">
<div class="box">
<h4>Print & Download</h4>
<a href="index2.php?p=katalog" class="button-widget" title="download" target="_blank" rel="nofollow">
<span class="button-widget-icon"><i class="icon-download"></i></span>
<span class="button-widget-text">Download</span>
<span class="button-widget-link">Katalog</span>
</a>
<a href="index2.php?p=pricelist" class="button-widget" title="download" target="_blank" rel="nofollow">
<span class="button-widget-icon"><i class="icon-download"></i></span>
<span class="button-widget-text">Download</span>
<span class="button-widget-link">Pricelist</span>
</a>
</div>
</div>
</div>


<!--Produk Best Seller-->
<div class="grid-3">
<div class="footbarblock">
<div class="box">
<h4>Produk Bestseller</h4>
<div class="produk-slider">
<ul id="bestseller-slider" class="content-produk">

<?php
$query1 = "SELECT * FROM produk where best_seller = 1";
$statment1 = mysqli_query($l,$query1);
while ($data_bp = mysqli_fetch_array($statment1)) {
?>
<li>
		<div class="ribbon best"><span>Best Seller</span></div>

		<div class="slider-gambar-center">
		<div class="slider-gambar">
			<a href="index.php?page=detailproduk&idx=<?php echo $data_bp['id_produk'] ?>" title="<?php echo $data_bp['nama_produk'] ?>"> 
				<img class="lazy" src="app/foto/<?php echo $data_bp['foto'] ?>" data-original="" alt="<?php echo $data_bp['nama_produk'] ?>" width="175" height="200" />
		</a></div>
		</div>
		<a href="index.php?page=detailproduk&idx=<?php echo $data_bp['id_produk'] ?>" title="Dompet Neo Strap"><?php echo $data_bp['nama_produk'] ?></a>
		<div class="slider-harga">Rp <?php echo number_format($data_bp['harga']) ?> <span class="coret"></span></div>
		</li>
<?php }; ?>

</ul>
</div>
</div>
</div>
</div>
<!-- END Produk Best Seller-->

<!--Follow US-->
<div class="grid-3">
<div class="footbarblock">
<div class="box">
<h4>Follow Us</h4>
<a href="https://www.facebook.com/khazimfikri.star" class="button-widget" title="download" target="_blank" rel="nofollow">
<span class="button-widget-icon"><i class="icon-facebook-squared"></i></span>
<span class="button-widget-text">follow us on</span>
<span class="button-widget-link">Facebook</span>
</a>
<a href="https://twitter.com/#" class="button-widget" title="follow" target="_blank" rel="nofollow">
<span class="button-widget-icon"><i class="icon-twitter-squared"></i></span>
<span class="button-widget-text">follow us on</span>
<span class="button-widget-link">Twitter</span>
</a>
<a href="https://www.instagram.com/#/" class="button-widget" title="follow" target="_blank" rel="nofollow">
<span class="button-widget-icon"><i class="icon-instagramm"></i></span>
<span class="button-widget-text">follow us on</span>
<span class="button-widget-link">Instagram</span>
</a>
</div>
</div>
</div>
<!--End Follow US-->


</div>
</div>
</div>
<!--End Footbar-->
