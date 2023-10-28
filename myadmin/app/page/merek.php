<input oninput="w3.filterHTML('#tb-content', '.item', this.value)" placeholder="Cari merek.." class="input-data input-cari-sm"><br /><br />
<h1>Daftar merek</h1>
<a href="index2.php?page=tambahmerek" style="float:left; margin-left: 20px;">Tambah merek</a><br /><br />
<div style="overflow-x: auto;">
<table border="1" width="90%" class="tb-pa w3-table w3-striped" id="tb-content">
	<thead>
	<tr>
		<th align="center"> <font size="4">No</font></th>
		<th align="center"> <font size="4">Nama merek</font></th>
		<th align="center"> <font size="4">Link merek</font></th>
		<th align="center"> <font size="4"></font>Aksi</th>
	</tr>
	</thead>
	<tbody>
	<?php
		$q = "SELECT * FROM merek";
		$sku = mysqli_query($l , $q) or die(mysqli_error($l));
		$no = 1;
		while($d = mysqli_fetch_array($sku)){
			?>
	<tr class="item">
		<td align="center" style="height: 20px;" ><?php echo $no; ?></td>
		<td><?php echo $d['nama_merek'] ?></td>
		<td><?php echo $d['link_merek'] ?></td>

		<td>
			<a class="a-link" href="index2.php?page=editmerek&idx=<?php echo $d['id_merek']?>" >Update</a> /
			<a class="a-link" href="index2.php?page=hapusmerek&idx=<?php echo $d['id_merek']?>" >Hapus</a>
		</td>
	</tr>
	<?php
	$no++;
	}
	
	?>
	</tbody>
</table>
</div>