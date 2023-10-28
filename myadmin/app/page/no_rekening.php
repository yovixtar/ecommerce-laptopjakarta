<input oninput="w3.filterHTML('#tb-content', '.item', this.value)" placeholder="Cari Rekening.." class="input-data input-cari-sm"><br /><br />
<h1>Daftar Rekening</h1>
<a href="index2.php?page=tambahrekening" style="float:left; margin-left: 20px;">Tambah Rekening</a><br /><br />
<div style="overflow-x: auto;">
<table border="1" width="90%" class="tb-pa w3-table w3-striped" id="tb-content">
	<thead>
	<tr>
		<th align="center"> <font size="4">No</font></th>
		<th align="center"> <font size="4">Nama Bank</font></th>
		<th align="center"> <font size="4">Nomor Rekening</font></th>
		<th align="center"> <font size="4"></font>Aksi</th>
	</tr>
	</thead>
	<tbody>
	<?php
		$q = "SELECT * FROM rekening";
		$sku = mysqli_query($l , $q) or die(mysqli_error($l));
		$no = 1;
		while($d = mysqli_fetch_array($sku)){
			?>
	<tr class="item">
		<td align="center" style="height: 20px;" ><?php echo $no; ?></td>
		<td><?php echo $d['nama_bank'] ?></td>
		<td><?php echo $d['no_rek'] ?></td>

		<td>
			<a class="a-link" href="index2.php?page=editrekening&idx=<?php echo $d['id_no_rek']?>" >Update</a> /
			<a class="a-link" href="index2.php?page=hapusrekening&idx=<?php echo $d['id_no_rek']?>" >Hapus</a>
		</td>
	</tr>
	<?php
	$no++;
	}
	
	?>
	</tbody>
</table>
</div>