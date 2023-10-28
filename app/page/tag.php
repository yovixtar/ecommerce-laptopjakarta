<div class="grid-9 pull-right">
<div class="nest"> <div class="grid-12">
<?php
$q2 = "SELECT * FROM tag where link_tag='".$_GET['key']."' ";
$s2 = mysqli_query($l,$q2) or die(mysqli_error($l));
$data_title_kategori = mysqli_fetch_array($s2);
?>
<div class="vtr-title-home"><h1><span>Tag Produk : <?php echo $data_title_kategori['nama_tag'] ?> </span></h1></div>
<div class="nest">

<!--Produk-->
<?php
$q1 = "SELECT * FROM tag_produk JOIN tag ON tag_produk.id_tag_tag_produk=tag.id_tag join produk on tag_produk.id_produk_tag_produk=produk.id_produk where link_tag='".$_GET['key']."' ";
$s1 = mysqli_query($l,$q1) or die(mysqli_error($l));
while ($data_p = mysqli_fetch_array($s1)) {
?>
	<div class="grid-3 grid-m-6">
	<div class="wpbeli-thumb">
		<?php
		if ($data_p['best_seller'] == 1) {
		?>
			<div class="ribbon best"><span>Best Seller</span></div>
		<?php
		}else{};
		?>
	<div class="wpbeli-gambar">
		<a href="index.php?page=detailproduk&idx=<?php echo $data_p['id_produk'] ?>" title="<?php echo $data_p['nama_produk'] ?>"> 
			<img class="lazy" src="app/foto/<?php echo $data_p['foto'] ?>" alt="<?php echo $data_p['nama_produk'] ?>" width="200" height="169" />
		</a>
	</div>
	<div class="wpbeli-title"><h2><a href="index.php?page=detailproduk&idx=<?php echo $data_p['id_produk'] ?>" title="<?php echo $data_p['nama_produk'] ?>"><?php echo $data_p['nama_produk'] ?></a></h2></div>
	<div class="wpbeli-harga">Rp <?php echo number_format($data_p['harga']) ?><span class="coret"></span></div>
	<div class="tombol">
	<a class="popup-modal btn" href="#vtr-beli-6956"><i class="icon-basket"></i>Beli</a>
	</div>

	<div class="vtr-popup mfp-hide" id="vtr-beli-6956">
	<a class="vtr-popup-close" href="#"><i class="icon-cancel"></i></a>
	<div class="telp"><span class="telp-number">Order Sekarang &raquo; SMS : #nomor_hp</span><br />
	ketik : Kode - Nama barang - Nama dan alamat pengiriman </div>
	<table class="vtr-table">
	<tr><td>Kode</td><td><?php echo $data_p['kode'] ?></td></tr>
	<tr><td>Nama Barang</td><td><?php echo $data_p['nama_produk'] ?></td></tr>
	<tr><td>Harga </td><td>Rp <?php echo number_format($data_p['harga']) ?><span class="coret"></span></td></tr>
	</table>
	<a class="btn pull-right" href="index.php?page=detailproduk&idx=<?php echo $data_p['id_produk'] ?>" title="<?php echo $data_p['nama_produk'] ?>">Lihat Detail <i class="icon-right-open pull-right"></i></a>
	<div style="clear: both"></div>
	</div>

	</div>
	</div> 
<!--End Produk-->
<?php }; ?>

</div> 
</div>
</div>
</div>