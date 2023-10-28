<input oninput="w3.filterHTML('#tb-content', '.item', this.value)" placeholder="Cari Admin.." class="input-data input-cari-sm"><br /><br />
<h1>Daftar Admin</h1>
<a href="index2.php?page=tambahadmin" style="float:left; margin-left: 20px;">Tambah Admin</a><br /><br />
<div style="overflow-x: auto;">
<table border="1" width="90%" class="tb-pa w3-table w3-striped" id="tb-content">
	<thead>
	<tr>
		<th align="center"> <font size="4">No</font></th>
		<th align="center"> <font size="4">AdminName</font></th>
		<th align="center"> <font size="4"></font>Aksi</th>
	</tr>
	</thead>
	<tbody>
	<?php
		$q = "SELECT * FROM admin_password";
		$sku = mysqli_query($l , $q) or die(mysqli_error($l));
		$no = 1;
		while($d = mysqli_fetch_array($sku)){
			?>
	<tr class="item">
		<td align="center" style="height: 20px;" ><?php echo $no; ?></td>
		<td><?php echo $d['admin'] ?></td>

		<td>
			<a class="a-link" href="index2.php?page=hapusadmin&idx=<?php echo $d['id_admin']?>" >Hapus</a>
		</td>
	</tr>
	<?php
	$no++;
	}
	
	?>
	</tbody>
</table>
</div>