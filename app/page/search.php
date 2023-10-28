<div class="grid-9 pull-right">
<div class="breadcrumbs">
<div xmlns:v="http://rdf.data-vocabulary.org/#">
<span typeof="v:Breadcrumb">
<a rel="v:url" property="v:title" href="index.php">Home</a>
</span><i class="icon-angle-right"></i>Search</div></div>
<div class="post">
<h1><a href="#" title="Testimoni">Hasil dari Pencarian : <?php echo $_POST['key'] ?></a></h1>
<div class="vtr-testimoni-page">
<ul class="commentlist">

<?php
$q4 = "SELECT * FROM produk where nama_produk like '%".$_POST['key']."%' ";
$s4 = mysqli_query($l , $q4) or die(mysqli_error($l));
while ($data_search=mysqli_fetch_array($s4)) {
?>

<div class="grid-3 grid-m-6">
	<div class="wpbeli-thumb">
		<?php
		if ($data_search['best_seller'] == 1) {
		?>
			<div class="ribbon best"><span>Best Seller</span></div>
		<?php
		}else{};
		?>
	<div class="wpbeli-gambar">
		<a href="index.php?page=detailproduk&idx=<?php echo $data_search['id_produk'] ?>" title="<?php echo $data_search['nama_produk'] ?>"> 
			<img class="lazy" src="app/foto/<?php echo $data_search['foto'] ?>" alt="<?php echo $data_search['nama_produk'] ?>" width="200" height="169" />
		</a>
	</div>
	<div class="wpbeli-title"><h2><a href="index.php?page=detailproduk&idx=<?php echo $data_search['id_produk'] ?>" title="<?php echo $data_search['nama_produk'] ?>"><?php echo $data_search['nama_produk'] ?></a></h2></div>
	<div class="wpbeli-harga">Rp <?php echo number_format($data_search['harga']) ?><span class="coret"></span></div>
	<div class="tombol">
	<a class="popup-modal btn" href="#vtr-beli-6956"><i class="icon-basket"></i>Beli</a>
	</div>

	<div class="vtr-popup mfp-hide" id="vtr-beli-6956">
	<a class="vtr-popup-close" href="#"><i class="icon-cancel"></i></a>
	<div class="telp"><span class="telp-number">Order Sekarang &raquo; SMS : #nomor_hp</span><br />
	ketik : Kode - Nama barang - Nama dan alamat pengiriman </div>
	<table class="vtr-table">
	<tr><td>Kode</td><td><?php echo $data_search['kode'] ?></td></tr>
	<tr><td>Nama Barang</td><td><?php echo $data_search['nama_produk'] ?></td></tr>
	<tr><td>Harga </td><td>Rp <?php echo number_format($data_search['harga']) ?><span class="coret"></span></td></tr>
	</table>
	<a class="btn pull-right" href="index.php?page=detailproduk&idx=<?php echo $data_search['id_produk'] ?>&kode=<?php echo $data_search['kode'] ?>" title="<?php echo $data_search['nama_produk'] ?>">Lihat Detail <i class="icon-right-open pull-right"></i></a>
	<div style="clear: both"></div>
	</div>

	</div>
	</div>

<?php }; ?>
</ul>
<div class="navigation">
<div class="alignleft"></div>
<div class="alignright"> </div>
<div style="clear: both"></div>
</div>

</div>
</div>
</div>