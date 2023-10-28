<input oninput="w3.filterHTML('#tb-content', '.item', this.value)" placeholder="Cari Resi / Nama.." class="input-data input-cari-sm"><br /><br />
<h1>Daftar Resi</h1>
<a href="index2.php?page=tambahresi" style="float:left; margin-left: 20px;">Tambah Resi</a><br /><br />
<div style="overflow-x: auto;">
<table border="1" width="90%" class="tb-pa w3-table w3-striped" id="tb-content">
	<thead>
	<tr>
		<th align="center"> <font size="4">No</font></th>
		<th align="center"> <font size="4">Nama Pemesan</font></th>
		<th align="center"> <font size="4">Produk</font></th>
		<th align="center"> <font size="4">Alamat Pemesan</font></th>
		<th align="center"> <font size="4">Nomor Resi</font></th>
		<th align="center"> <font size="4"></font>Aksi</th>
	</tr>
	</thead>
	<tbody>
	<?php
		$q = "SELECT * FROM resi join pesanan on resi.id_order_resi=pesanan.id_order join produk on pesanan.id_produk_order=produk.id_produk";
		$sku = mysqli_query($l , $q) or die(mysqli_error($l));
		$no = 1;
		while($d = mysqli_fetch_array($sku)){
			?>
	<tr class="item">
		<td align="center" style="height: 20px;" ><?php echo $no; ?></td>
		<td><?php echo $d['user_resi'] ?></td>
		<td><?php echo $d['nama_produk'] ?></td>
		<td><?php echo $d['alamat_resi'] ?></td>
		<td><?php echo $d['no_resi'] ?></td>

		<td>
			<a class="a-link" href="index2.php?page=editresi&idx=<?php echo $d['id_resi']?>" >Update</a> /
			<a class="a-link" href="index2.php?page=hapusresi&idx=<?php echo $d['id_resi']?>" >Hapus</a>
		</td>
	</tr>
	<?php
	$no++;
	}
	
	?>
	</tbody>
</table>
</div>