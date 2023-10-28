<div class="grid-12">
	<div class="breadcrumbs">
		<div xmlns:v="http://rdf.data-vocabulary.org/#">
			<span typeof="v:Breadcrumb">
				<a rel="v:url" property="v:title" href="index.php">Home</a>
			</span>
			<i class="icon-angle-right"></i>
		pricelist
		</div>
	</div>

<h1><a href="#" title="pricelist">pricelist</a>
	<button class="btn pull-right" name=print value="Print Pricelist" onClick="printDiv('printArea')">
		Print Pricelist 
		<i class="icon-print"></i>
	</button>
</h1>

<!--Tabel Pricelist-->
<div id="printArea">
<table class="vtr-table">
	<th>Kode</th>
	<th>Nama Barang</th>
	<th>gambar</th>
	<th>stok</th>
	<th>Harga</th>

<?php
$q3 = "SELECT * FROM produk ORDER BY id_produk DESC ";
$s3 = mysqli_query($l,$q3) or die(mysqli_error($l));
while ($data_pricelist = mysqli_fetch_array($s3)) {
?>
<tr>
	<td><?php echo $data_pricelist['kode'] ?> </td>
	<td><?php echo $data_pricelist['nama_produk'] ?></td>
	<td> 
		<img src="app/foto/<?php echo $data_pricelist['foto'] ?>" alt="<?php echo $data_pricelist['nama_produk'] ?>" width="70" height="59" />
	</td>
	<td>
		<?php echo $data_pricelist['stok'] ?>
	</td>
	<td>Rp <?php echo number_format($data_pricelist['harga']) ?></td>
</tr>
<?php } ?>
</table>
</div>
<br /><br />
</div>