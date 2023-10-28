<input oninput="w3.filterHTML('#tb-content', '.item', this.value)" placeholder="Cari User.." class="input-data input-cari-sm"><br /><br />
<h1>Daftar User</h1>
<div style="overflow-x: auto;">
<table border="1" width="90%" class=" w3-table w3-striped" id="tb-content">
	<thead>
	<tr>
		<th align="center"> <font size="4">No</font></th>
		<th align="center"> <font size="4">Nama User</font></th>
		<th align="center"> <font size="4">Nomor HP</font></th>
		<th align="center"> <font size="4">Username</font></th>
		<th align="center"> <font size="4">Lihat Pesanan</font></th>
	</tr>
	</thead>
	<tbody>
	<?php
		$q = "SELECT * FROM user";
		$sku = mysqli_query($l , $q) or die(mysqli_error($l));
		$no = 1;
		while($d = mysqli_fetch_array($sku)){
			?>
	<tr class="item">
		<td><?php echo $no?></td>
		<td><?php echo $d['nama_user'] ?></td>
		<td><?php echo $d['no_hp_user'] ?></td>
		<td><?php echo $d['username'] ?></td>
		<td>
			<a class="a-link" href="index2.php?page=order-user&user=<?php echo $d['username']?>" >Lihat</a>
		</td>
	</tr>
	<?php
	$no++;
	}
	
	?>
	</tbody>
</table>
</div>