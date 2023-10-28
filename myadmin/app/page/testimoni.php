<input oninput="w3.filterHTML('#tb-content', '.item', this.value)" placeholder="Cari Testimoni.." class="input-data input-cari-sm"><br /><br />
<h1>Daftar Testimoni</h1>
<div style="overflow-x: auto;">
<table border="1" width="90%" class="tb-pa w3-table w3-striped" id="tb-content">
	<thead>
	<tr>
		<th align="center"> <font size="4">No</font></th>
		<th align="center"> <font size="4">Pengirim</font></th>
		<th align="center"> <font size="4">Email Pengirim</font></th>
		<th align="center"> <font size="4">Tanggal</font></th>
		<th align="center"> <font size="4">Testimoni</font></th>
		<th align="center"> <font size="4"></font>Aksi</th>
	</tr>
	</thead>
	<tbody>
	<?php
		$q = "SELECT * FROM testimoni";
		$sku = mysqli_query($l , $q) or die(mysqli_error($l));
		$no = 1;
		while($d = mysqli_fetch_array($sku)){
			?>
	<tr class="item">
		<td align="center" style="height: 20px;" ><?php echo $no; ?></td>
		<td><?php echo $d['nama_pengirim']." - ".$d['kota_pengirim'] ?></td>
		<td><?php echo $d['email_pengirim'] ?></td>
		<td><?php echo tanggal_indo($d['tanggal_testimoni'], true) ?></td>
		<td><?php echo $d['isi_testimoni'] ?></td>

		<td>
			<a class="a-link" href="index2.php?page=hapustestimoni&idx=<?php echo $d['id_testimoni']?>" >Hapus</a>
		</td>
	</tr>
	<?php
	$no++;
	}
	
	?>
	</tbody>
</table>
</div>