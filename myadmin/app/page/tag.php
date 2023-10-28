<input oninput="w3.filterHTML('#tb-content', '.item', this.value)" placeholder="Cari Tag / Kategori.." class="input-data input-cari-sm"><br /><br />
<h1>Daftar Tag Produk</h1>
<a href="index2.php?page=tambahtag" style="float:left; margin-left: 20px;">Tambah Tag Produk</a><br /><br />
<div style="overflow-x: auto;">
<table border="1" width="90%" class="tb-pa w3-table w3-striped" id="tb-content">
	<thead>
	<tr>
		<th align="center"> <font size="4">No</font></th>
		<th align="center"> <font size="4">Nama Tag</font></th>
		<th align="center"> <font size="4">Link Tag</font></th>
		<th align="center"> <font size="4">Kategori Produk</font></th>
		<th align="center"> <font size="4"></font>Aksi</th>
	</tr>
	</thead>
	<tbody>
	<?php
		$q = "SELECT * FROM tag join kategori on tag.kategori_tag=kategori.id_kategori";
		$sku = mysqli_query($l , $q) or die(mysqli_error($l));
		$no = 1;
		while($d = mysqli_fetch_array($sku)){
			?>
	<tr class="item">
		<td align="center" style="height: 20px;" ><?php echo $no; ?></td>
		<td><?php echo $d['nama_tag'] ?></td>
		<td><?php echo $d['link_tag'] ?></td>
		<td><?php echo $d['nama_kategori'] ?></td>

		<td>
			<a class="a-link" href="index2.php?page=edittag&idx=<?php echo $d['id_tag']?>" >Update</a> /
			<a class="a-link" href="index2.php?page=hapustag&idx=<?php echo $d['id_tag']?>" >Hapus</a>
		</td>
	</tr>
	<?php
	$no++;
	}
	
	?>
	</tbody>
</table>
</div>