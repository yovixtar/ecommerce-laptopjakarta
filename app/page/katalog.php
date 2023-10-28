<div class="grid-12">
<div class="breadcrumbs">
	<div xmlns:v="http://rdf.data-vocabulary.org/#">
		<span typeof="v:Breadcrumb">
		<a rel="v:url" property="v:title" href="index.php">Home</a></span>
		<i class="icon-angle-right"></i>
		katalog
	</div>
</div>
<h1><a href="#" title="katalog">katalog</a>
	<button class="btn pull-right" name=print value="Print Katalog" onClick="printDiv('printArea')">
		Print Katalog <i class="icon-print"></i>
	</button>
</h1>

<div style="clear: both"></div>
<div class="nest">
<div id="printArea">

<?php
$q3 = "SELECT * FROM produk ORDER BY id_produk DESC ";
$s3 = mysqli_query($l,$q3) or die(mysqli_error($l));
while ($data_katalog = mysqli_fetch_array($s3)) {
?>
<div class="grid-3 grid-m-4">

<div class="katalog">
<div class="katalog-gambar-center">
<div class="katalog-gambar"> <img src="app/foto/<?php echo $data_katalog['foto'] ?>" alt="<?php echo $data_katalog['nama_produk'] ?>" width="189" height="160" />
</div>
</div>
<div class="katalog-title"><?php echo $data_katalog['nama_produk'] ?></div>
<div class="katalog-harga">Rp <?php echo number_format($data_katalog['harga']) ?><span class="coret"></span></div>
Kode : <?php echo $data_katalog['kode'] ?> <br />
</div>
</div>
<?php }; ?>
</div>
</div>
</div>