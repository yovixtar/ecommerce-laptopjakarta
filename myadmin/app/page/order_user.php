<input oninput="w3.filterHTML('#tb-content', '.item', this.value)" placeholder="Cari Orderan.." class="input-data input-cari-sm"><br /><br />
<h1>Daftar Orderan <?php echo $_GET['user'] ?></h1>
<div style="overflow-x: auto;">
<table border="1" width="90%" class=" w3-table w3-striped" id="tb-content">
	<thead>
	<tr>
		<th align="center"> <font size="4">No Orderan</font></th>
		<th align="center"> <font size="4">Nama Produk</font></th>
		<th align="center"> <font size="4">Kode Produk</font></th>
		<th align="center"> <font size="4">Jumlah Pesanan</font></th>
		<th align="center"> <font size="4">Nama Pemesan</font></th>
		<th align="center"> <font size="4">No HP</font></th>
		<th align="center"> <font size="4">Alamat</font></th>
		<th align="center"> <font size="4">Pengiriman</font></th>
		<th align="center"> <font size="4">Pembayaran</font></th>
		<th align="center"> <font size="4">Catatan</font></th>
		<th align="center"> <font size="4">Total Transfer</font></th>
		<th align="center"> <font size="4">Status</font></th>
		<th align="center"> <font size="4">Batas Transfer</font></th>
		<th align="center"> <font size="4">Next Status</font></th>
		<th align="center"> <font size="4">Selesai</font></th>
	</tr>
	</thead>
	<tbody>
	<?php
		$q = "SELECT * FROM pesanan join produk on produk.id_produk=pesanan.id_produk_order join status_order on pesanan.status_order=status_order.id_status_order join pengiriman on pesanan.pengiriman_order=pengiriman.id_pengiriman join metode_pembayaran on pesanan.metode_pembayaran_order=metode_pembayaran.id_metode_pembayaran where username_order='".$_GET['user']."' ";
		$sku = mysqli_query($l , $q) or die(mysqli_error($l));
		$no = 1;
		while($d = mysqli_fetch_array($sku)){
		  $date1=date('Y-m-d'); //jukut tanggal saiki
		  $date2=$d['tanggal_batas_order'];
		  $datetime1 = new DateTime($date1);
		  $datetime2 = new DateTime($date2);
		  $difference = $datetime1->diff($datetime2);
		  
		  if ($difference->days == 0 && $d['status_order'] == 1) {
		  	mysqli_query($l , "DELETE FROM pesanan where id_order =".$db['id_order']." ");
		  }else{};
			?>
	<tr class="item">
		<td align="center" style="height: 20px;" ><?php echo $d['id_order'] ?></td>
		<td><?php echo $d['nama_produk'] ?></td>
		<td><?php echo $d['kode'] ?></td>
		<td><?php echo $d['jumlah_order'] ?></td>
		<td><?php echo $d['user_order'] ?></td>
		<td><?php echo $d['no_hp_order'] ?></td>
		<td><?php echo $d['alamat_order'] ?></td>
		<td><?php echo $d['nama_pengiriman'] ?></td>
		<td><?php echo $d['nama_metode_pembayaran'] ?></td>
		<td><?php echo $d['catatan_order'] ?></td>
		<td><?php echo number_format($d['total_order'])  ?></td>
		<td><?php echo $d['ket_status_order'] ?></td>
		<td><?php echo date('d-m-Y' , strtotime($d['tanggal_batas_order'])) ?></td>
		<td >
		<?php
		if ($d['status_order'] == 4) {
			?><p>Selesai</p>
		<?php
		}else if($d['status_order'] < 4){
		?>
			<a class="a-link" href="index2.php?page=nextstatus&idx=<?php echo $d['id_order'];?>" >Next Status</a>
		<?php } ?>
		</td>
		<td >
			<a class="a-link" href="index2.php?page=selesaiorder&idx=<?php echo $d['id_order'];?>" >Selesai</a>
		</td>
	</tr>
	<?php
	$no++;
	}
	
	?>
	</tbody>
</table>
</div>