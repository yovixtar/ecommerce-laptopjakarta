
<?php
//Session
$s2 = mysqli_query($l, "Select *, SUM(total_order) as total_akhir FROM pesanan where username_order = '".$_SESSION['username']."'");
$data_tot =mysqli_fetch_array($s2);
if (!isset($_SESSION['username']) || empty($_SESSION['username'])) {
					?>
					<script type="text/javascript">
						alert('Anda Harus Login dahulu, sebelum Membeli :)');
						document.location ='index.php?page=signin2';
					</script>
				<?php
				}else {
					?>
					
				<?php
				}
?>
<div class="grid-12">
<div class="vtr-title-home"><h1><span>CheckOUT : <?php echo $_SESSION['username'] ?> </span></h1></div>
<?php
$tot = 0;
$qb = "SELECT * FROM pesanan join produk on produk.id_produk=pesanan.id_produk_order join status_order on pesanan.status_order=status_order.id_status_order join pengiriman on pesanan.pengiriman_order=pengiriman.id_pengiriman join metode_pembayaran on pesanan.metode_pembayaran_order=metode_pembayaran.id_metode_pembayaran where username_order = '".$_SESSION['username']."' ";
$sb = mysqli_query($l, $qb);
while ($db=mysqli_fetch_array($sb)) {
  $date1=date('Y-m-d'); //jukut tanggal saiki
  $date2=$db['tanggal_batas_order'];
  $datetime1 = new DateTime($date1);
  $datetime2 = new DateTime($date2);
  $difference = $datetime1->diff($datetime2);
  
  if ($difference->days == 0 && $db['status_order'] == 1) {
  	mysqli_query($l , "DELETE FROM pesanan where id_order =".$db['id_order']." ");
  }else{};
	?>
	<div class="maint-div-3" id="produk-beli" style="">
	<h2>Pesanan <?php echo $db['nama_produk'] ?></h2>
	<img src="app/foto/<?php echo $db['foto'] ?>" class="img-pesanan">
	<table align="left">
		<tr>
		<td><font class="ket-pesanan">Pemesan </font></td>
		<td><font class="ket-pesanan"> : <?php echo $db['user_order'] ?></font></td>
		</tr>
		<tr>
		<td><font class="ket-pesanan">NO. Hp </font></td>
		<td><font class="ket-pesanan"> : <?php echo $db['no_hp_order'] ?></font></td>
		</tr>
		<tr>
		<td><font class="ket-pesanan">Jumlah Produk</font></td>
		<td><font class="ket-pesanan"> : <?php echo $db['jumlah_order'] ?></font></td>
		</tr>
		<tr>
		<td><font class="ket-pesanan">Alamat</font></td>
		<td><font class="ket-pesanan"> : <?php echo $db['alamat_order'] ?></font></td>
		</tr>
		<tr>
		<td><font class="ket-pesanan">Jasa Pengiriman</font></td>
		<td><font class="ket-pesanan"> : <?php echo $db['nama_pengiriman'] ?></font></td>
		</tr>
		<tr>
		<td><font class="ket-pesanan">Metode Pembayaran</font></td>
		<td><font class="ket-pesanan"> : <?php echo $db['nama_metode_pembayaran'] ?></font></td>
		</tr>
		<tr>
		<td><font class="ket-pesanan">Catatan</font></td>
		<td><font class="ket-pesanan"> : <?php echo $db['catatan_order'] ?></font></td>
		</tr><tr>
		<td><font class="ket-pesanan">Harga</font></td>
		<td><font class="ket-pesanan"> : Rp <?php echo number_format($db['harga'],0,",","."); ?></font></td>
		</tr>
		<tr>
		<td><font class="ket-pesanan">Status</font></td>
		<td><font class="ket-pesanan"> : <?php echo $db['ket_status_order'] ?></font></td>
		</tr>
		
		<?php
		if ($db['status_order'] == 1) {
			?>
		<tr>
		<td><font class="ket-pesanan">Batas Pembayaran</font></td>
		<td><font class="ket-pesanan"> : <?php echo $difference->days." Hari" ?></font></td>
		</tr>
		<?php
		}else{}
		?>
		
	</table>
	</div><br /><br />
	
<?php
}
?>
<div class="maint-div-3" id="tot" style="">
	
	<?php
	echo '<p style="color:#000">Total Pembayaran = <b> Rp '. number_format($data_tot['total_akhir'],0,",",".").' </b> <i> (Sudah termasuk OngKir)</i> </p>';
	?>
</div>
<br /><br />

</div>