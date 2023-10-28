<input oninput="w3.filterHTML('#tb-content', '.item', this.value)" placeholder="Cari Kategori.." class="input-data input-cari-sm"><br /><br />
<h1>Daftar Kategori</h1>
<a href="index2.php?page=tambahkategori" style="float:left; margin-left: 20px;">Tambah Kategori</a><br /><br />
<div style="overflow-x: auto;">
<table border="1" width="90%" class="tb-pa w3-table w3-striped" id="tb-content">
	<thead>
	<tr>
		<th align="center"> <font size="4">No</font></th>
		<th align="center"> <font size="4">Nama Kategori</font></th>
		<th align="center"> <font size="4">Link Kategori</font></th>
		<th align="center"> <font size="4"></font>Aksi</th>
	</tr>
	</thead>
	<tbody>
	<?php
		$q = "SELECT * FROM kategori";
		$sku = mysqli_query($l , $q) or die(mysqli_error($l));
		$no = 1;
		while($d = mysqli_fetch_array($sku)){
			?>
	<tr class="item">
		<td align="center" style="height: 20px;" ><?php echo $no; ?></td>
		<td><?php echo $d['nama_kategori'] ?></td>
		<td><?php echo $d['link_kategori'] ?></td>

		<td>
			<a class="a-link" href="index2.php?page=editkategori&idx=<?php echo $d['id_kategori']?>" >Update</a> /
			<a class="a-link" href="index2.php?page=hapuskategori&idx=<?php echo $d['id_kategori']?>" >Hapus</a>
		</td>
	</tr>
	<?php
	$no++;
	}
	
	?>
	</tbody>
</table>
</div>