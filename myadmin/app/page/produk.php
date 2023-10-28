<input oninput="w3.filterHTML('#tb-content', '.item', this.value)" placeholder="Cari Produk.." class="input-data input-cari-sm"><br /><br />
<h1>Daftar Produk</h1>
<a href="index2.php?page=tambahproduk" style="float:left; margin-left: 20px;">Tambah Produk</a><br /><br />
<div class="w3-responsive">
<table border="1" width="90%" class="tb-pa w3-table w3-striped" id="tb-content">
	<thead>
	<tr>
		<th align="center"> <font size="4">No</font></th>
		<th align="center"> <font size="4">Nama Produk</font></th>
		<th align="center"> <font size="4">Kode Produk</font></th>
		<th align="center"> <font size="4">Kategori - Merek</font></th>
		<th align="center"> <font size="4">Detail Produk</font></th>
		<th align="center"> <font size="4">Harga</font></th>
		<th align="center"> <font size="4">Stok</font></th>
		<th align="center"> <font size="4">Best Seller</font></th>
		<th align="center"> <font size="4">Dilihat</font></th>
		<th align="center"> <font size="4">Foto</font></th>
		<th align="center"> <font size="4"></font>Aksi</th>
	</tr>
	</thead>
	<tbody>
	<?php
		$q = "SELECT * FROM produk join kategori on produk.kategori=kategori.id_kategori join merek on produk.merek=merek.id_merek ORDER BY id_produk DESC";
		$sku = mysqli_query($l , $q) or die(mysqli_error($l));
		$no = 1;
		while($d = mysqli_fetch_array($sku)){
			?>
	<tr class="item">
		<td align="center" style="height: 20px;" ><?php echo $no; ?></td>
		<td><?php echo $d['nama_produk'] ?></td>
		<td><?php echo $d['kode'] ?></td>
		<td><?php echo $d['nama_kategori']."-". $d['nama_merek']  ?></td>
		<td><?php echo $d['detail'] ?></td>
		<td><?php echo number_format($d['harga']) ?></td>
		<td><?php echo $d['stok'] ?></td>
		<td><?php if ($d['best_seller'] == 1){echo "Ya";} else if($d['best_seller'] == 0){echo "Tidak";}; ?></td>
		<td><?php echo $d['dilihat'] ?></td>
		<td><?php echo $d['foto'] ?></td>
		<td width="15%">
			<a class="a-link" href="index2.php?page=editproduk&idx=<?php echo $d['id_produk'];?>" >Update</a> /
			<a class="a-link" href="index2.php?page=hapusproduk&idx=<?php echo $d['id_produk'];?>" >Hapus</a>
		</td>
	</tr>
	<?php
	$no++;
	}
	
	?>
	</tbody>
</table>
</div>